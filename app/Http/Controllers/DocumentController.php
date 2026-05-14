<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'document' => 'required|file'
        ]);

        // File
        $file = $request->file('document');

        // Store file
        $path = $file->store('documents', 'public');

        // Full path
        $fullPath = storage_path('app/public/' . $path);

        // Generate SHA256 hash
        $hash = hash_file('sha256', $fullPath);

        // Generate Unique ID
        $uniqueId = 'PRM-' . strtoupper(Str::random(6));

        // Save in DB
        Document::create([
            'unique_id' => $uniqueId,
            'file_name' => $file->getClientOriginalName(),
            'hash' => $hash,
        ]);

        return view('success', [
            'uniqueId' => $uniqueId,
            'hash' => $hash
        ]);
    }
}
