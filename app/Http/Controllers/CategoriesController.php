<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
    }
    // hien thi danh sach chuyen muc - GET methd
    public function index(){
        return view('clients/categories/list');
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
    public function handleCategory(){
        return  redirect(route('categories.add'));
        //return "handle category";
    }

    //show form them du lieu - GET method
    public function showCategory(){

    }
    //xoa du lieu -- DELETE method
    public function deleteCategory($id){

    }

}
