<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        echo "khoi dong dashboard tu __construct()";
        // Nếu muốn các hàm như index() và các hàm khác đề chạy khi route gọi đến controller này
        // thì trong hàm construct này gọi đến các hàm đó. để __construct gọi lên tất cả
        // Thường sử dụng session để check login
    }

    public function index(){
        return "<h2>funtction index of Dashboard Controller</h2>";
    }
}
