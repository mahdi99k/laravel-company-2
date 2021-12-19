<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createAboutRequest;
use App\Http\Requests\updateAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use function PHPUnit\Framework\fileExists;

class AboutController extends Controller
{


    public function index()
    {
        $about = About::all();
        return view("admin.about.index", ['about' => $about]);
    }


    public function create()
    {
        return view("admin.about.create");
    }


    public function store(createAboutRequest $request)
    {
//      dd($request->all());
        $file = $request->file('image');
        $image = "";
        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move("images/about/", $image);
        }
        About::create([
            "title" => $request->title,
            "image" => $image,
            "alt" => $request->alt,
            "description" => $request->description,
        ]);
        session()->flash('create', "Thanks , successful create data");
        return redirect()->route('about.create');
//      return redirect('administrator/about/create');
//      return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $about = About::findOrfail($id);
        return view("admin.about.edit", compact('about'));
    }


    public function update(updateAboutRequest $request, $id)
    {
        $file = $request->file('image');
        $about = About::findOrFail($id);
        $image = "";

        if (!empty($file)) {
            if (fileExists("images/about/" . $about->image)) {
                unlink("images/about/" . $about->image);  // delete image now
            }
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move("images/about/", $image);
        } else {
            $image = $about->image;
        }

        $about->update([
            "title" => $request->title,
            "image" => $image,
            "alt" => $request->alt,
            "description" => $request->description,
        ]);
        session()->flash("update" , "successful update data");
        return redirect()->route('about.index');
//      return redirect('administrator/about');
    }


    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $imageAbout = $about->image;
        if (file_exists("images/about/" . $imageAbout)) {
            unlink("images/about/" . $imageAbout);
        }
        About::destroy($id);
        session()->flash('delete', 'successful delete data');
        return redirect()->route('about.index');
//      return redirect("administrator/about/{id}");
//      return back();
    }


}
