<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createProductRequest;
use App\Http\Requests\updateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        $product = Product::paginate(4);
        return view("admin.product.index", compact('product'));
    }


    public function create()
    {
        return view('admin.product.create');
    }


    public function store(createProductRequest $request)
    {
        $file = $request->file('image');
        $image = '';
        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension();  /* rand(1, 1000000) */
            $file->move("images/product/", $image);
        }

        Product::create([
            "title" => $request->title,
            "image" => $image,
            "alt" => $request->alt,
            "body" => $request->body,
            "title_web" => $request->webTitle, /*  title-web = database    |    webTitle = name  */
            "keywords" => $request->keywords,
            "description" => $request->description,
        ]);
        session()->flash('create', "Thanks , successful create data");
        return redirect()->route('product.create');
//      return redirect("administrator/product/create");
//      return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view("admin.product.edit", ['product' => $product]);
    }


    public function update(updateProductRequest $request, $id)
    {
        $file = $request->file('image');
        $product = Product::findOrFail($id);
        $image = '';

        if (!empty($file)) {
            if (file_exists("images/product/" . $product->image)) {
                unlink("images/product/" . $product->image);  // delete image now
            }
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move("images/product/", $image);
        } else {
            $image = $product->image;  /* image no change */
        }

        $product->update([
            "title" => $request->title,
            "image" => $image,
            "alt" => $request->alt,
            "body" => $request->body,
            "title_web" => $request->webTitle ,   /*  title-web = database    |    webTitle = name  */
            "keywords" => $request->keywords ,
            "description" => $request->description,
        ]);
        session()->flash("update", "successful update data");
        return redirect()->route("product.index");
//      return redirect("administrator/product")
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $imageProduct = $product->image;  /* image now */
        if (file_exists("images/product/" . $imageProduct)) {
            unlink("images/product/" . $imageProduct);
        }
        Product::destroy($id);
        session()->flash('delete', 'successful delete data');
        return redirect()->route("product.index");
//      return redirect("administrator/product");
//      return back();
    }


}
