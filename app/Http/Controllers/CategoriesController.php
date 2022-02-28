<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

   $allInput = $request->input('id.0');
   dd($allInput[1]);

    



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
    public function addCategory(){
        return view('clients/categories/add');
    }

    // handle add category
    public function handleCategory(Request $request){
        $allData = $request->all();
        dd($request);
    }

    //show form them du lieu - GET method
    public function showCategory(){

    }
    //xoa du lieu -- DELETE method
    public function deleteCategory($id){

    }

}
