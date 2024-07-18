<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('uploads'), $fileName);

        return back()->with('success', 'You have successfully uploaded an image.');
    }

    public function fileList()
    {
        $files = array_diff(scandir(public_path('uploads')), array('.', '..'));
        return view('file-list', compact('files'));
    }

    public function deleteFile($fileName)
    {
        $filePath = public_path('uploads') . '/' . $fileName;
        if (file_exists($filePath)) {
            unlink($filePath);
            return back()->with('success', 'File has been deleted!');
        } else {
            return back()->with('error', 'File not found!');
        }
    }
}
