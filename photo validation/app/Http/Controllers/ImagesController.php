<?php

namespace App\Http\Controllers;

use App\Rules\ImageFileNameRule;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use InlineStyle\InlineStyle;

class ImagesController extends Controller
{
//    public function inlineStyle(Request $request)
//    {
//        $htmldoc = new InlineStyle(view('inline')->render());
//        dd($htmldoc);
//    }
    public function save(Request $request)
    {
        $request->validate([
            'file' => ['bail', 'required','image','mimes:jpeg,jpg,png', new ImageFileNameRule()]
        ]);
        /** @var UploadedFile $file */
        $file = $request->allFiles()['file'];
        $path = storage_path('app'.DIRECTORY_SEPARATOR.'images'. DIRECTORY_SEPARATOR);
        if (!File::exists($path)) {
            File::makeDirectory($path, 775, true, true);
        }
        $file->move($path, $file->getClientOriginalName());
    }
}
