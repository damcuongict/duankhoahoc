<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    // Phương thức để hiển thị trang chính
    public function index()
    {
        return view('web.home.index');
    }

    // Phương thức cho trang giới thiệu
    public function about()
    {
        return view('web.about.index');
    }

    // Phương thức cho trang liên hệ
    public function contact()
    {
        return view('web.contact.index');
    }
}
