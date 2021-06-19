<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $path = $request->file('image')->store('images', 's3');
        Image::create([
            'filename' => basename($path),
            'url' => Storage::disk('s3')->url($path)
        ]);
    }

    public function show($image): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $image = Image::find($image);
        return Storage::disk('s3')->response('images/' . $image->filename);
    }
}
