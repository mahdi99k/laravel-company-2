<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createLinkRequest;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Link;

class LinkController extends Controller
{


    public function index()
    {
        $link = \App\Models\Link::paginate(4);
        return view("admin.link.index", ['link' => $link]);
    }


    public function create()
    {
        return view("admin.link.create");
    }


    public function store(createLinkRequest $request)
    {
        \App\Models\Link::create([
            "name" => $request->name,
            "link" => $request->link,
        ]);
        session()->flash("create", 'Thanks , successful create data');
        return redirect()->route("link.create");
//      return redirect("administrator/link/create");
//      return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $link = \App\Models\Link::findOrFail($id);
        return view("admin.link.edit", compact('link'));

    }


    public function update(createLinkRequest $request, $id)
    {
        $link = \App\Models\Link::findOrFail($id);
        $link->update([
            "name" => $request->name,
            "link" => $request->link,
        ]);
        session()->flash("update", "successful update data");
        return redirect()->route("link.index");
//      return redirect("administrator/link");
    }


    public function destroy($id)
    {
        \App\Models\Link::destroy($id);
        session()->flash('delete', 'successful delete data');
        return redirect()->route('link.index');
//      return redirect("administrator/link");
//      return back();

    }


}
