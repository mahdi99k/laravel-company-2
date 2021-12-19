<?php

namespace App\Http\Controllers\Adminstrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createSeoRequest;
use App\Models\Seo;
use Illuminate\Http\Request;

class PanelController extends Controller
{


    public function index()
    {
        return view('admin.panel.index');
    }


    public function create()
    {
        return view('admin.panel.create');
    }


    public function store(createSeoRequest $request)
    {
        Seo::create([
            'title' => $request->title,
            'keywords' => $request->keywords,
            'description' => $request->description,
            'author' => $request->author,
        ]);
        session()->flash('create', 'Tanks , successful create data');
        return redirect()->route('panel.create');
//        return redirect('administrator/panel/create');
//        return back();

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $seo = Seo::findOrFail($id);
        return view('admin.panel.edit', ['seo' => $seo]);
    }


    public function update(createSeoRequest $request, $id)  /* عکس نداره ما رکویست میدیم */
    {
        Seo::findOrFail($id)->update([
            'title' => $request->title,
            'keywords' => $request->keywords,
            'description' => $request->description,
            'author' => $request->author,
        ]);
        session()->flash('update', 'successful update data');
        return redirect('administrator/panel/show/data');
//      return redirect()->route('panel.showData');
//      return back();
    }


    public function destroy($id)
    {
        Seo::destroy($id);
        session()->flash('delete', 'successful delete data');
        return redirect()->route('panel.showData');
//        return redirect('administrator/panel/show/data');
//        return back();
    }


    public function data()
    {
        $seo = Seo::all();
        return view('admin.panel.data', compact('seo'));
    }


}
