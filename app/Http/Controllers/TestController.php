<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showForm()
    {
        return view('upload-form');
    }

    public function handleUpload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048', // Max file size 2MB
        ]);

        if ($request->file('file')->isValid()) {
            $path = $request->file('file')->store('uploads');
            return back()->with('success', 'File uploaded successfully!');
        }

        return back()->with('error', 'File upload failed.');
    }
}
