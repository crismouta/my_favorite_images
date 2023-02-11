<?php

namespace App\Http\Controllers;

use App\Models\MyImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MyImageController extends Controller
{
    
    public function store(Request $request) 
    {
        $image = request()->except('_token');

        $image = $this->storeImages($request, $image);

        MyImage::create($image);

        return redirect()->route('home');
    }

    private function storeImages($request, $image)
    {
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title).".".$request->file('image')->guessExtension();
            $image['image'] = $request->file('image')->storeAs('img', $imageName,'public');
        }

        return ($image);
    }

}
