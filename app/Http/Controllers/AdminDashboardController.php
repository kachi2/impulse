<?php

namespace App\Http\Controllers;

use App\Models\AdminActivity;
use App\Models\AppliedJob;
use App\Models\Blog;
use App\Models\ClientJob;
use Illuminate\Http\Request;
 
class AdminDashboardController extends Controller
{

    public function Index(){
        return view('admin.index', [
            'blogs' =>  Blog::get(),
            'logins' => AdminActivity::take(5)->latest()->get()
        ])
        ->with('bheading', 'Index')
        ->with('breadcrumb', 'Index');
    }
}
