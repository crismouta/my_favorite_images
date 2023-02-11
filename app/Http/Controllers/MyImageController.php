<?php

namespace App\Http\Controllers;

use App\Models\MyImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MyImageController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $images = MyImage::all(); 
        $images = $images->where('user_id', $user->id);

        return view('myImages.index', $images, compact('images'));
    }

    public function create()
    {
        return view('myImages.create');
    }
    
    public function store(Request $request) 
    {
        $image = request()->except('_token');

        $image = $this->storeImages($request, $image);

        MyImage::create($image);

        return redirect()->route('home');
    }

    public function edit($id) 
    {
        $image = MyImage::find($id);

        return view('myImages.edit', compact('image'));
    }

    public function update(Request $request, $id) 
    {
        $changesImage = request()->except(['_token', '_method']);

        $changesImage = $this->updateImages($request, $changesImage, $id);

        MyImage::where('id', '=', $id)->update($changesImage);

        $image = MyImage::findOrFail($id);

        return redirect()->route('home')->with('success', 'Updated');
    }

    public function delete($id) 
    {
        $image = MyImage::findOrFail($id);

        if (Storage::delete('public/'.$image->image)) {
            MyImage::destroy($id);
        }

        return redirect()->route('home');
    }

    private function storeImages($request, $image)
    {
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title).".".$request->file('image')->guessExtension();
            $image['image'] = $request->file('image')->storeAs('img', $imageName,'public');
            $image['user_id']=auth()->user()->id;
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
