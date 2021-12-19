<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Information;
use App\Models\Link;
use App\Models\Post;
use App\Models\Product;
use App\Models\Seo;
use App\Models\Slider;
use App\Models\Social;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//      $seo = Seo::orderBy('id', 'desc')->take(1)->skip(0)->get();  // بیا دیتا برعکس کن بیا یکی بگیر فقط take(1) +  اولی نمایش بده skip(0)  + همون آخری
        $seo = Seo::orderBy('id', 'desc')->take(1)->skip(0)->first();  // first () no foreach  | value first or one view
        $slider = Slider::all();
        $about = About::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $product = Product::paginate(6);
        $team = Team::all();
        $post = Post::all();
        $info = Information::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $social = Social::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $link = Link::orderBy('id', 'desc')->take(6)->skip(0)->get();
        return view('front.index', compact('seo', 'slider', 'about', 'product', 'team', 'post', 'info', 'social', 'link'));
    }


    public function product($id)
    {
        $recentProduct = Product::orderBy("id", "desc")->take(4)->skip(0)->get();  /* end product and for product and start end */
        $singleProducr = Product::findOrFail($id);  /* post id informayion  + no foreach */
        $info = Information::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $social = Social::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $link = Link::orderBy('id', 'desc')->take(6)->skip(0)->get();
        return view("front.product", compact('recentProduct', 'singleProducr', 'info', 'social', 'link'));
    }


    public function post($id)
    {
        $recentPost = Post::orderBy('id', 'desc')->take(4)->skip(0)->get();
        $post = Post::findOrFail($id);    /* post id informayion  + no foreach */
        $info = Information::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $social = Social::orderBy("id", "desc")->take(1)->skip(0)->first();
        $link = Link::orderBy('id', 'desc')->take(6)->skip(0)->get();
        return view("front.post", compact('recentPost', 'post', 'info', 'social', 'link'));
    }


    public function contact(Request $request)
    {
        Contact::create([               // 1) databse = fullname    ,    2) input[name] $request->fullnamr
            "fullname" => $request->fullname,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ]);
        return 1;
    }


}





