<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(Request $request){
       

        $title = "Title học lập trình";
        $content = "Nội dung bài học";
        $path = $request->path();

        // Truyền giá trị từ controller qua view
        // Cách 1:
        //return view('home', compact('title', 'content' ));

        // Cách 2:
       // return view('home')->with(['title'=>$title, 'content'=>$content]);

        // Cách 3:
        // use use Illuminate\Support\Facades\View;
        return View::make('home', compact('title', 'content', 'path'));
    }

    public function getProductById($id){
        //return view('clients/product/detail', compact('id'));
        return view('clients.product.detail', compact('id'));
    }

    public function getArr() : array{
        $arr = ['key1'=>"value1", 'key2'=>"value1",'key3'=>"value1",'key4'=>"value1"];
        return $arr;
    }
}
