<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ClientLogo;
use App\Models\Slider;
use App\Models\SubMenu;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function Index(){

        // $ss = SubMenu::where('menu_id', 2)->get();
        // dd($ss);
        return view('frontend.dashboard', [
            'sliders' => Slider::get(),
            'blogs' => Blog::latest()->get(),
            'services' => SubMenu::where('menu_id', 3)->inRandomOrder()->get(),
            'experties' => SubMenu::where('menu_id', 5)->inRandomOrder()->get(),
            'teams' => TeamMember::get()
        ]);
    }
}
