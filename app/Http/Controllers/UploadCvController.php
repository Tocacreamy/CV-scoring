<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;
use Illuminate\Support\Facades\Storage;

class UploadCvController extends Controller
{
    // Show the upload form
    public function showForm()
    {
        return view('upload-cv');
    }

    // Handle the uploaded CV and process the text
    public function uploadCv(Request $request)
    {
        // Validate that the uploaded file is a PDF and not too large
        $request->validate([
            'cv' => 'required|mimes:pdf|max:2048', // 2MB max size
        ]);

        // Get the uploaded file
        $file = $request->file('cv');

        // Parse the PDF using the smalot/pdfparser package
        $parser = new Parser();
        $pdf = $parser->parseFile($file->getPathname());

        // Extract text from the PDF
        $text = $pdf->getText();

        // Save the extracted text to a .txt file in the 'public/cvs' folder
        $fileName = time() . '_cv.txt';
        $filePath = 'public/cvs/' . $fileName;

        // Store the extracted text in the 'public' directory
        Storage::put($filePath, $text);

        // Generate a URL to access the file
        $fileUrl = Storage::url($filePath);

        // Return a success message with the file URL
        return back()->with('success', 'CV uploaded and processed successfully! You can view the processed text here: <a href="' . $fileUrl . '" target="_blank">' . $fileUrl . '</a>');
    }
}
