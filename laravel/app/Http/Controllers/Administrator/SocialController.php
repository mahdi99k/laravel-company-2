<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createSocialRequest;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{


    public function index()
    {
        $social = Social::paginate(4);
        return view("admin.social.index", ['social' => $social]);
    }


    public function create()
    {
        return view("admin.social.create");
    }


    public function store(createSocialRequest $request)
    {
        Social::create([
            "telegram" => $request->telegram,
            "instagram" => $request->instagram,
            "linkedin" => $request->linkedin,
            "twitter" => $request->twitter,
        ]);
        session()->flash("create", "thanks , successful create data");
        return redirect()->route("social.create");
//      return redirect("administrator/social/create");
//      return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $social = Social::findOrFail($id);
        return view("admin.social.edit", ['social' => $social]);
    }


    public function update(createSocialRequest $request, $id)
    {
        $social = Social::findOrFail($id);
        $social->update([
            "telegram" => $request->telegram,
            "instagram" => $request->instagram,
            "linkedin" => $request->linkedin,
            "twitter" => $request->twitter,
        ]);
        session()->flash("update", "successful update data");
        return redirect()->route("social.index");
//      return redirect("administrator/social");
    }


    public function destroy($id)
    {
        Social::destroy($id);
        session()->flash("delete", "successful delete data");
        return redirect("administrator/social");
//      return redirect()->route("social.index");
//      return back();
    }


}
