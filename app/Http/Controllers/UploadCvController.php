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
    
        if ($file->getSize() > 2048 * 1024) { 
            return redirect()->back()->with('error', 'Ukuran file terlalu besar! Maksimal 2MB.');
        }
    
        $user = auth()->user();
    
        $path = $file->store('cvs', 'public');
    
        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile($file->getPathname());
        $text = $pdf->getText();
    
        $charCount = strlen($text);
    
        $grade = '';
        if ($charCount > 250) {
            $grade = 'A';
        } elseif ($charCount > 200) {
            $grade = 'B';
        } elseif ($charCount > 150) {
            $grade = 'C';
        } else {
            $grade = 'D';
        }
    
        // Simpan data ke database
        $penilaian = \App\Models\Penilaian::create([
            'cv' => $path,
            'nilai' => $charCount,
            'grade' => $grade,
            'user_id' => $user->id,
        ]);
    
        return redirect()->route('nilai', ['id' => $penilaian->id]);
    }
    

    public function nilai($id)
    {
        $active = "detail-nilai";
        $nilai = Penilaian::find($id);

        if ($nilai) {
            $rekomendasi = Rekomendasi::where('grade', $nilai->grade)->get();
            // return dd($rekomendasi);
            return view('nilai-detail', compact('nilai', 'rekomendasi', 'active'));
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
