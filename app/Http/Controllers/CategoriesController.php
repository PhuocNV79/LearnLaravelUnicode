<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CategoriesController extends Controller
{
    public function __construct()
    {
    }
    // hien thi danh sach chuyen muc - GET methd
    public function index(Request $request){
    //   $allData = $request->all();
    //    echo $allData['name'];
    //   dd($allData);

    // * Lấy địa chỉ ip của request:
    //$ip = $request->ip();
    //echo $ip;

    // * Lấy thông tin server
    // $server = $request->server();
    // dd($server) ;
    
    // * Lấy thông tin header:
    //$heaader = $request->header();
   // dd($heaader);

   //* Lấy thông tin từ input
   //$id = $request->input('id');
   //echo $id;

   //$allInput = $request->input('id.0');
  // dd($allInput[1]);
   
        $product = [
            "0"=>["name"=>"Banh My", "gia"=>"10000"],
            "1"=>["name"=>"Xuc xich", "gia"=>"17000"],
            "2"=>["name"=>"Bo", "gia"=>"12000"]
        ];

        
    }
    // Lay ra 1 chuyen muc theo id - GET method
    public function getCategory($id){
    return "chi tiet chuyen muc voi id: ".$id;
    }

    // Sua 1 chuyen muc - POST method
    public function updateCategory($id){
        return view('clients/categories/edit');
    }

    // Them du lieu vao chuyen muc - GET method
    public function addCategory(Request $request){
        // * Cách 1: dùng request lấy value old() của input
        // $cateName = $request->old("category_name", "Giá trị mặc định. có thể có hoặc ko"); //"cateName default";
       // echo $cateName;        
       // return view('clients/categories/add', compact('cateName'));

       // * Cách 2: gọi luôn helper old() ở thẻ input, nhưng vẫn cần request->slash() ở phương thức xử lý request get của cùng url để lưu lại session tạm nhé
       return view('clients/categories/add');
    }

    // handle add category
    public function handleCategory(Request $request){
        //$allData = $request->all();
        //dd($request);

       // $name = $request->category_name;
       // dd($name);
       
       if($request->has('category_name')){
            $name = $request->category_name;
            //dd($name);
            $request->flash();

       } else {
           return "Khong co category_name";
       }
    }

    //show form them du lieu - GET method
    public function showCategory(){

    }
    //xoa du lieu -- DELETE method
    public function deleteCategory($id){

    }

    public function getFile(){
        return view("clients/categories/file");
    }

    // Xử lý lấy thông tin file
    public function handleFile(Request $request){
       // $file = $request->file('file');
       // hoặc

       if($request->hasFile('file')){ // hasFile giúp kiểm tra có file này không
           if($request->file('file')->isValid()){ // kiểm tra file đó có hợp lệ hay không
                $file = $request->file; // ->file giúp lấy file được up ở input có name là file, nếu tên là abc thì $request->abc
                $path = $file->path(); // lấy đường dẫn lưu tạm
                $extension = $file->extension(); // kiểm tra đuôi file là gì. word excel txt pdf ...
                $store = $request->file('file')->store('pdf'); // Phương thức store giúp di chuyển file tạm khi upload file lên local (storage)(nghĩa là lên project á)
                $storeAs = $file->storeAs('pdf', 'fileDiem.pdf');
                dd($storeAs);
           } else {
               return "upload khong thanh cong";
           }
       } else{
           echo "Khong co file";
       }
    }

}
