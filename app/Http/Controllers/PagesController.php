<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Support\Facades\Mail;
use App\Models\Page;
use App\Models\Faq;
use Illuminate\Support\Facades\Session;
use App\Mail\ContactUs;
use App\Models\ClientLogo;
use App\Models\TeamMember;

class PagesController extends Controller
{
    public function Pages($id){
        $id = decrypt($id);
        $menuId = Menu::where('id', $id)->first();
        if($menuId->slug == 'Blog'){
            return view('frontend.blogs', 
            ['blogs' => Blog::latest()->get(), 'popular' => Blog::where('views', '>', 0)->get(),
            'breadcrums' => $menuId,
        ]);
           }
        if($menuId->slug == "about-Us")
        {
            return view('frontend.about-us', [
                'brands' => ClientLogo::latest()->get(),
                'breadcrums' => $menuId,
                'teams' => TeamMember::latest()->get()
            ]); 
        }

        if($menuId->slug == "FAQ"){
            return view('frontend.faq', [
                'faqs' => Faq::latest()->get(),
                'breadcrums' => $menuId,
            ]);
        }
        if($menuId->slug == 'contact-us'){
            return view('frontend.contact-us', [
                'breadcrums' => $menuId,
                'key' => rand(999,1111).substr(base64_encode('sdsjkdsdsd'), 0, 10),
            ]);
        }
        if($menuId->slug == 'quote'){
            return view('frontend.quotation', [
                'breadcrums' => $menuId,
                'services' => SubMenu::where('menu_id', 2)->get(),
                'key' => rand(999,1111).substr(base64_encode('sdsjkdsdsd'), 0, 10),
            ]);
        }
       
        if($menuId->has_child){
            $pages = Page::where('menu_id', $menuId->id)->first();
            $pages['pages'] = Page::where('menu_id', $menuId->id)->first();
            $pages['breadcrums'] =  $menuId;
            $pages['sidebar'] = Menu::get();
            $pages['sidebars'] = Menu::get();
            $pages['menus'] = Menu::get();
            return view('frontend.service-details', $pages);
        }
          $pages = Page::where('menu_id', $menuId->id)->first();
         $pages['pages'] = Page::where('menu_id', $menuId->id)->first();
           return view('frontend.pages', $pages);

    }


    public function Subpages($id){
        $ids = decrypt($id);
        $sub = SubMenu::where('id', $ids)->first();
        $pages = Page::where('sub_menu_id', $sub->id)->first();
        $pages['pages'] = $pages;
        $pages['breadcrums'] =  $sub;
        $pages['sidebar'] = SubMenu::where(['is_active' => 1, 'menu_id' =>$sub->menu_id])->get();
        if(!$pages)return back();
         if($sub->id == 12)return view('frontend.pages', $pages);
        return view('frontend.service-details', $pages);
    } 

    public function BlogDetails($id){
        $id = decrypt($id);
        $menuId = Menu::where('id', $id)->first();
        $page['pages'] = 'Blog';
        $page['breadcrums'] =  $menuId;
        return view('frontend.blog_details', $page, [
            'blogs' => Blog::where('id', $id)->first(),
            'popular' => Blog::latest()->take(5)->get(),
            
        ]);
    }


    public function ContactEmails(Request $request){

        if(!$request->key){
            return back();
        }
       $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'captcha' => 'required',
            
        ]);
        $capt = captcha_check($request->captcha);
        if(!$capt){
            Session::flash('message', 'Captcha does not match, try again');
            Session::flash('alert', 'danger');
            return back()->withInput($request->all());
           
        }
        $data = [
            'name' =>  $request->name,
            'phone' => $request->phone,
            'email' =>  $request->email,
            'message' => $request->message
        ];
        Session::flash('message', 'Request sent Successfully');
        Session::flash('alert', 'success');
        Mail::to(['contact@otegeeconcepts.com.ng'])->send(new ContactUs($data));

       // dd($email);
        return back();
    }
}
