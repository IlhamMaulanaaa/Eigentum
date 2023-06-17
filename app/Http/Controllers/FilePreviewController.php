<?php

namespace App\Http\Controllers;

class FilePreviewController extends Controller
{
        public function show($file)
        {
            $filePath = public_path('storage/' . $file);
            return response()->file($filePath, ['Content-Disposition' => 'inline']);
        }
}
