<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link ;
use Illuminate\Support\Str;
class LinksController extends Controller
{
    public function index(){
      $links = Link::all();
      return view('links.links')->withLinks($links);
    }

    public function create(){
      return view('links.create');
    }

    public function store(Request $req){
        $req->validate([
          'link' => 'required |url'
        ]);
        $link= new Link();
        $link->fulllink =$req->link;
        $link->shortlink =Str::random(10);

        $link->save();
        return redirect()->route('links.list')->with('status','succes');
    }


//using in post request

    public function search(Request $req){
      $link= Link::where('shortlink',$req->slug)->first();
      return $this->redirectToRoute($link);
    }

    // using in get request

    public function redirect($shortlink){
        $link= Link::where('shortlink',$shortlink)->first();
          return $this->redirectToRoute($link);
    }

    public function redirectToRoute($link){
      if($link==null)
      return redirect()->route('home');
      return redirect($link->fulllink);

    }


    public function getTosearch(){
      return view('links.search');
    }


}
