<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController6 extends Controller
{
    public $data = [];
    
    public function printNumber(){

        // Có thể truyền dữ liệu từ controller sang view. rồi ở view con lấy để sử dụng
        $this->data['message'] = "Day la message trong controller";
        return view('demoBlade', $this->data);
    }

    public function handleMasterLayout(){
        $this->data['title'] = "Title trong controller";
        return view('clients.homeblade', $this->data);
    }

    public function defineCustomDirective(){
        $this->data['title'] = "CustomDirective";
        return view('clients.homeblade6', $this->data);
    }
}
