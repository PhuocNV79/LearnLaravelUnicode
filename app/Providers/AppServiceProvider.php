<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        //Blade 6:
        // Định nghĩa 1 directive dạng rẽ nhánh
        Blade::if('env', function ($value) { // Câu lệnh gọi đoạn ni ra là @env($local) : kiểm tra biến $local có thoả mãn điều kiện ko

            // Trả về giá trị boolean
            if(config('app.env') === $value){
                return true;
            } else {
                return false;
            }
        });
    }
}
