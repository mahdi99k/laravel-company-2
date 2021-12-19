<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSliderRequest;
use App\Http\Requests\updateSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{


    public function index()
    {
//      $slider = Slider::all();
        $slider = Slider::paginate(4);
        return view('admin.slider.index', ['slider' => $slider]);
    }


    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(CreateSliderRequest $request)
    {
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension(); // getClientOriginalName  (no concat .)
            $file->move('images/slider', $image);
        }

        Slider::create([
            'image' => $image,  /* name image  */
            'alt' => $request->alt,
            'title' => $request->title,
            'caption' => $request->caption,
        ]);
        session()->flash('create', 'Thanks , successful create data');
        return back();
//      return redirect()->route('slider.create');
//      return redirect('administrator/slider/create');
    }


    public function show($id)
    {
        // The Best business Information
    }


    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }


    public function update(updateSliderRequest $request, $id)
    {
        $file = $request->file('image');
        $slider = Slider::findOrFail($id);
        $image = '';

        if (!empty($file)) {                                                 // image new update
            if (file_exists("images/slider/" . $slider->image)) {   // image old delete if exist
                unlink("images/slider/" . $slider->image);
            }
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move("images/slider/", $image);
        } else {
            $image = $slider->image;  // image old
        }

        $slider->update([
            "image" => $image,
            "alt" => $request->alt,
            "title" => $request->title,
            "caption" => $request->caption,
        ]);
        session()->flash("update", "successful update data");
        return redirect()->route('slider.index');
//      return redirect("administrator/slider");

    }


    public function destroy($id)            // delete image and post
    {
        $slider = Slider::findOrFail($id);
        $imageSlider = $slider->image;
        if (file_exists("images/slider/" . $imageSlider)) {     // images is has exist?
            unlink("images/slider/" . $imageSlider);           // delete
        }
        Slider::destroy($id);
        session()->flash('delete', 'successful delete data');
        return redirect()->route('slider.index');
//      return redirect('administrator/slider');
//      return back();

    }


}
