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

        $randomNilai = rand(1, 100);

        $grade = '';
        if ($randomNilai >= 75 && $randomNilai <= 100) {
            $grade = 'A';
        } elseif ($randomNilai >= 50 && $randomNilai < 75) {
            $grade = 'B';
        } elseif ($randomNilai >= 25 && $randomNilai < 50) {
            $grade = 'C';
        } else {
            $grade = 'D';
        }

        $penilaian = \App\Models\Penilaian::create([
            'cv' => $path,
            'nilai' => $randomNilai,
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
