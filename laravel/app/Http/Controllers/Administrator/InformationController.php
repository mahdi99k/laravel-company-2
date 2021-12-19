<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createInformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{


    public function index()
    {
        $info = Information::paginate(4);
        return view("admin.info.index", ['info' => $info]);
    }


    public function create()
    {
        return view("admin.info.create");
    }


    public function store(createInformationRequest $request)
    {
        Information::create([
            "phone" => $request->phone,
            "email" => $request->email,
            "hours" => $request->hours,
        ]);
        session()->flash("create", "Thanks , successful create data");
        return redirect("administrator/info/create");
//      return redirect()->route("info.create");
//      return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $info = Information::findOrFail($id);
        return view("admin.info.edit", compact('info'));
    }


    public function update(createInformationRequest $request, $id)
    {
        Information::findOrFail($id)->update([
            "phone" => $request->phone,
            "email" => $request->email,
            "hours" => $request->hours,
        ]);
        session()->flash("update", "successful update data");
        return redirect()->route("info.index");
//      return redirect("administrator/info");
    }


    public function destroy($id)
    {
        Information::destroy($id);
        session()->flash("delete", "successful delete data");
        return redirect()->route("info.index");
//      return redirect("administrator/info");
//      return back();
    }


}
