<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createPostRequest;
use App\Http\Requests\updatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
        $post = Post::paginate(4);
        return view("admin.post.index", ['post' => $post]);
    }


    public function create()
    {
        return view("admin.post.create");
    }


    public function store(createPostRequest $request)
    {
        $file = $request->file("image");
        $image = '';
        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move("images/post/", $image);
        }
        Post::create([
            "subject" => $request->subject,
            "image" => $image,
            "alt" => $request->alt,
            "body" => $request->body,
            "title" => $request->title,
            "author" => $request->author,
            "keywords" => $request->keywords,
            "description" => $request->description,
        ]);
        session()->flash('create', 'Thanks , successful create data');
        return redirect()->route("post.create");
//      return redirect("administrator/post/create");
//      return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view("admin.post.edit", compact('post'));
    }


    public function update(updatePostRequest $request, $id)
    {

        $post = Post::findOrFail($id);
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            if (file_exists("images/post/" . $post->image)) {
                unlink("images/post/" . $post->image);
            }
            $image = time() . "." .$file->getClientOriginalExtension();
            $file->move("images/post/" , $image);
        }else{
            $image = $post->image;
        }
        $post->update([
            "subject" => $request->subject ,
            "image" => $image ,
            "alt" => $request->alt ,
            "body" => $request->body ,
            "title" => $request->title ,
            "author" => $request->author ,
            "keywords" => $request->keywords,
            "description" => $request->description,
        ]);
        session()->flash("update" , "successful update data");
        return redirect()->route("post.index");
//        return redirect("administrator/post");
    }


    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $imageDelete = $post->image;

        if (file_exists("images/post/" . $imageDelete)) {
            unlink("images/post/" . $imageDelete);
        }
        Post::destroy($id);
        session()->flash('delete', 'successful delete data');
        return redirect()->route("post.index");
//        return redirect("administrator/post");
//        return back();
    }


}
