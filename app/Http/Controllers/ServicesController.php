<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServicesController extends Controller
{

public function Index()
{
    return view('admin.services.index')
    ->with('services', Service::latest()->get())
    ->with('bheading', 'Services pages')
    ->with('breadcrumb', 'Services Index');
}
    
public function create()
{
    return view('admin.services.create')
    ->with('bheading', 'Services pages')
    ->with('breadcrumb', 'Services Index');
}

public function Store(Request $request)
{
    if($request->contents){
        $data['content'] = $request->content;
    }
    if($request->title) {
        $data['title'] = $request->title;
    }
    if($request->title) {
        $data['description'] = $request->description;
    }
    if($request->image){
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $fileName = time().'.'.$ext;
        $image->move('images',$fileName);
        $data['image'] = $fileName;
    }

    Service::create($data);
    Session::flash('message', 'Request sent Successfully');
    Session::flash('alert', 'success');
    return back();
}
    
}
