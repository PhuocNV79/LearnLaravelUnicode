<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ProductRequest;
use Illuminate\Foundation\Http\FormRequest;

class HomeController extends Controller
{
    public $data = [];
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

    public function getValidateForm(){
        $this->data['invalid'] = 'Du lieu khong hop le';
        return view('form', $this->data);

    }

    public function validateForm(ProductRequest $request){


        dd($request->all());    

        // ----------------------------------------------------
        // $rules = [
        //     'tensanpham'=>'min:15|required',
        //     'giasanpham'=>'required'
        // ];

        // $message = [
        //     'tensanpham.min'=>':attribute >= :min ky tu',
        //     'tensanpham.required'=>'Ten san pham bat buoc nhap',
        //     'giasanpham.required'=>'Gia san pham bat buoc nhap',
        // ];

        // $message = [
        //     'required'=>"truong :attribute bat buoc nhap",
        //     'min'=> "truong :attribute >= :min ky tu" 
        // ];
        // $isvalidForm = $request->validate(
        //    $rules , $message
        // );
    }
}
