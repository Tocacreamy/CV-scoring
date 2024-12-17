<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Rekomendasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadCvController extends Controller
{
    public function showForm()
    {
        return view('upload-cv');
    }

    public function uploadCv(Request $request)
    {
        $request->validate([
            'cv' => 'required|file|mimes:pdf',
        ]);

        $file = $request->file('cv');

        // Validasi ukuran file maksimal 2MB
        if ($file->getSize() > 2048 * 1024) {
            return redirect()->back()->with('error', 'Ukuran file terlalu besar! Maksimal 2MB.');
        }

        $user = auth()->user();

        // Simpan file ke storage
        $path = $file->store('cvs', 'public');

        // Parse PDF untuk ekstrak teks dan jumlah halaman
        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile($file->getPathname());
        $text = strtolower($pdf->getText()); // Konversi teks ke lowercase

        // **Menambahkan deteksi jumlah halaman**
        $pages = $pdf->getPages();
        $jumlahHalaman = count($pages); // Hitung jumlah halaman

        // Daftar strong words
        $strongWords = [
            'collaborated', 'contributed', 'cooperated', 'joined', 'participated', 'partnered',
                'teamed', 'united', 'volunteered', 'advocated', 'championed', 'coached',
                'coordinated', 'empowered', 'enabled', 'encouraged', 'guided', 'influenced',
                'mentored', 'motivated', 'nurtured', 'persuaded', 'rallied', 'spearheaded',
                'analysed', 'authenticated', 'computerised', 'deciphered', 'decoded', 'digitised',
                'engineered', 'initialised', 'integrated', 'installed', 'launched', 'mapped',
                'optimised', 'rebooted', 'recovered', 'secured', 'virtualised', 'attained',
                'accomplished', 'awarded', 'completed', 'founded', 'generated', 'improved',
                'introduced', 'mastered', 'maximised', 'outperformed', 'produced', 'reduced',
                'streamlined', 'surpassed', 'transformed', 'addressed', 'answered', 'briefed',
                'communicated', 'consulted', 'explained', 'expressed', 'informed', 'interpreted',
                'interviewed', 'liaised', 'listened', 'mediated', 'presented', 'questioned',
                'relayed', 'transcribed', 'translated', 'verbalised', 'advised', 'attracted',
                'convinced', 'corresponded', 'delivered', 'earned', 'fulfilled', 'helped',
                'negotiated', 'persuaded', 'provided', 'recommended', 'resolved', 'developed',
                'enhanced', 'exceeded', 'gained', 'improved', 'increased', 'overcame', 'revised',
                'sharpened', 'upgraded', 'advertised', 'composed', 'conceptualised', 'crafted',
                'created', 'designed', 'drafted', 'exhibited', 'illustrated', 'imagined',
                'improvised', 'innovated', 'invented', 'marketed', 'merchandised', 'personalised',
                'piloted', 'redesigned', 'revolutionised', 'showcased', 'visualised', 'assisted',
                'assist', 'accompanied', 'backed', 'bolstered', 'endorsed', 'helped', 'promoted',
                'protected', 'supported', 'berkolaborasi', 'berkontribusi', 'bekerjasama',
                'bergabung', 'berpartisipasi', 'bermitra', 'bekerja tim', 'bersatu', 'memberdayakan',
                'memungkinkan', 'mendorong', 'membimbing', 'mempengaruhi', 'membimbing', 'memotivasi',
                'membina', 'meyakinkan', 'menggalang', 'memelopori', 'menganalisis', 'mengotentikasi',
                'mengkomputerisasi', 'menguraikan', 'mendekode', 'mendesainitalisasi',
                'mengintegrasikan', 'memasang', 'meluncurkan', 'memetakan', 'mengoptimalkan',
                'memulai ulang', 'memulihkan', 'mengamankan', 'memvirtualisasikan', 'mencapai',
                'meraih', 'diberikan', 'menyelesaikan', 'mendirikan', 'menghasilkan', 'meningkatkan',
                'memperkenalkan', 'menguasai', 'memaksimalkan', 'mengungguli', 'memproduksi',
                'mengurangi', 'menyederhanakan', 'melampaui', 'mengubah', 'mengatasi', 'menjawab',
                'menjelaskan', 'berkomunikasi', 'berkonsultasi', 'menjelaskan', 'mengekspresikan',
                'menginformasikan', 'menerjemahkan', 'mewawancarai', 'menghubungi', 'mendengarkan',
                'mediasi', 'mempresentasikan', 'menanyai', 'meneruskan', 'mentranskripsi',
                'menerjemahkan', 'mengungkapkan', 'menasihati', 'menarik', 'meyakinkan',
                'berkorespondensi', 'menyampaikan', 'mendapatkan', 'mempenuhi', 'membantu',
                'bernegosiasi', 'membujuk', 'menyediakan', 'merekomendasikan', 'menyelesaikan',
                'mengembangkan', 'meningkatkan', 'melebihi', 'mendapatkan', 'memperbaiki',
                'meningkatkan', 'mengatasi', 'merevisi', 'mempertajam', 'memperbarui', 'mengiklankan',
                'menyusun', 'mengkonseptualisasikan', 'menciptakan', 'mendesain', 'menyusun',
                'menampilkan', 'mengilustrasikan', 'membayangkan', 'berimprovisasi', 'berinovasi',
                'menemukan', 'memasarkan', 'menjual', 'memersonalisasi', 'memasarkan percontohan',
                'mendesain ulang', 'merevolusi', 'menampilkan', 'memvisualisasikan', 'membantu',
                'menemani', 'mendukung', 'memperkuat', 'mendukung', 'membantu', 'mempromosikan',
                'melindungi', 'mendukung'
        ];

        // Deteksi strong words dalam teks PDF
        $detectedWords = [];
        foreach ($strongWords as $word) {
            if (strpos($text, $word) !== false) {
                $detectedWords[] = $word;
            }
        }

        // Hindari duplikat kata yang sama
        $uniqueDetectedWords = array_unique($detectedWords);

        // Konversi ke JSON untuk disimpan
        $detectedWordsString = json_encode($uniqueDetectedWords);

        // Simpan data ke database
        $penilaian = \App\Models\Penilaian::create([
            'cv' => $path,
            'nilai' => count($uniqueDetectedWords),
            'strong_words' => $detectedWordsString,
            'jumlah_halaman' => $jumlahHalaman,
            'user_id' => $user->id,
        ]);

        return redirect()->route('nilai', ['id' => $penilaian->id]);
    }


    

    public function nilai($id)
    {
        $active = "detail-nilai";
        $nilai = Penilaian::find($id);
        
        if ($nilai) {
            // Dekode JSON strong_words menjadi array
            $strongWords = json_decode($nilai->strong_words, true); // Mengubah JSON menjadi array asosiatif
    
            // Pastikan $strongWords valid dan merupakan array
            if (is_array($strongWords)) {
                // Query rekomendasi berdasarkan kata yang cocok di deskripsi
                $rekomendasi = Rekomendasi::where(function ($query) use ($strongWords) {
                    foreach ($strongWords as $word) {
                        $query->orWhere('deskripsi', 'LIKE', "%{$word}%");
                    }
                })->paginate(6);
    
                return view('nilai-detail', compact('nilai', 'rekomendasi', 'active'));
            } else {
                return redirect('/histori')->with('error', 'Format data strong_words tidak valid.');
            }
        } else {
            return redirect('/histori')->with('error', 'Data tidak ditemukan');
        }
    }
    

    
    public function histori()
    {
        $active = "histori";
        $penilaian = Penilaian::where('user_id', auth()->user()->id)->get();

        return view('histori', compact('active', 'penilaian'));
    }

    public function deleteNilai($id)
    {
        $penilaian = Penilaian::find($id);
    
        if (!$penilaian) {
            return redirect('/histori')->with('error', 'Data tidak ditemukan.');
        }
    
        $filePath = $penilaian->cv;
    
        if (Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
        }
    
        $penilaian->delete();
    
        return redirect('/histori')->with('success', 'Data berhasil dihapus.');
    }
    
}
