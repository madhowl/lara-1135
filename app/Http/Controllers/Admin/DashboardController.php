<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
       // $categories = new CategoryController()->index();
        return view('backend.dashboard',['title'=>'Admin Panel', 'message'=>'']);
    }
}
