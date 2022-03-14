<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ProductRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

use App\Models\Students;

class HomeController extends Controller
{
    public $data = [];

    // su dung Query Builder

    public function getALlPeople(){
       // $people = DB::table('persontb')->select('name as HoVaTen','phone')->get();

       //where
       // $data = DB::table('persontb')->where('name', 'nguyen van phuoc')->pluck('name');
       
       //$data = DB::table('persontb')->where('name','like' ,'%van%')->pluck('name');
       $data = DB::table('persontb')->where('email','like' ,'%phuoc%')->where('address', 'dien ban')->get();
       $data = DB::table('persontb')->where('email','like' ,'%phuoc%')->orWhere('address', 'dien ban')->get();
       //$data = DB::table('persontb')->where('name','like' ,'%van%')->update(['phone'=>'0905889746', 'name'=>'nguyen van phuoc']);
        dd($data);
    }

    public function testConnectDB(){
        //$people = DB::select('select * from persontb where name like  ? and address like  ?', ['%nguyen%', '% tho %']);
        $people = DB::select('select * from persontb where name = :name and email like :email; ', ['name'=>'nguyen van phuoc', 'email'=>'%phuoc3%']);
        //dd($people);
        return response()->json($people);
    }

    public function insertPersonToDB(){
        //$person = DB::insert("insert into persontb values (7, 'nguyen van phuc', 'phuoc6email', 'dien ban', '0909877654')");
        $person = DB::insert("insert into persontb values (:id, 'nguyen van phuc', 'phuoc6email', 'dien ban', '0909877654')", ['id'=>8]);
        dd($person);
    }

    

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
