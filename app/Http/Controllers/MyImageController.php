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

    public function update(Request $request, $id) 
    {
        $changesImage = request()->except(['_token', '_method']);

        $changesImage = $this->updateImages($request, $changesImage, $id);

        MyImage::where('id', '=', $id)->update($changesImage);

        $image = MyImage::findOrFail($id);

        return redirect()->route('home')->with('success', 'Updated');
    }

    private function storeImages($request, $image)
    {
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title).".".$request->file('image')->guessExtension();
            $image['image'] = $request->file('image')->storeAs('img', $imageName,'public');
        }

        return ($image);
    }

    private function updateImages($request, $image, $id)
    {
        if ($request->hasFile('image')) {
            $oldImage=MyImage::findOrFail($id);
            Storage::delete('public/'.$oldImage->image);
            $imageName = Str::slug($request->title).".".$request->file('image')->guessExtension();
            $image['image'] = $request->file('image')->storeAs('img', $imageName,'public');
        }

        return ($image);
    }

}
