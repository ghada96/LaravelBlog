<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Article;
use App\Comment;
class manage extends Controller
{
    //
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function AddArticle(Request $request){
    	if($request->isMethod('post')){
    		$ar=new Article();
    		$ar->title=$request->input('title');
    		$ar->body=$request->input('body');
    		$ar->user_id=Auth::user()->id;
    		$ar->save();
    		return redirect('view');
    	}
    	return view('manage.AddArticle');
    }
    public function view(){
    	$articles=Article::all();
    	$ar=Array('articles'=>$articles);
    	return view('manage.view',$ar);
    }
    public function read(Request $request,$id){
    	if($request->isMethod('post')){
    	$ar=new Comment();
    	$ar->comment=$request->input('body');
    	$ar->article_id=$id;
    	$ar->save();

    }
    	$article=Article::find($id);
    	$ar=Array('article'=>$article);
    	return view('manage.read',$ar);

    }
    public function affiche()
    {
        return view('manage.contact');
    }
    public function send(){
        $data=array('name'=>"ghadaa",'body'=>"test email");

        Mail::send('emails.mail',$data,function($message){
            $message->to('ghadaamri30@gmail.com','web')->subject('testing mail');
            $message->from('ghadaamri30@gmail.com','receiver');

        });
        echo"email sent .check your inbox";
    }
}
