<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index(){
        $news= News::all();
        return  view('admin.news.index', compact(['news']));
    }
    function create(){
        return view('admin.news.create');
    }

    function store(Request $request){
        // $news = new News();
        // $news->title = $request->title;
        // $news->body = $request->body;
        // $news->author = $request->author;
        // $news->picture = $request->picture;
        // $news->save();

        News::create([
        'title'=> $request->title, 
        'body' => $request->body, 
        'author'=>$request->author, 
        'picture'=> $request->picture]);
        return redirect()->back();
    }
    
    function edit($id){
       $news= News::find($id);

    }
    function update(Request $request){
        // News::where('id', $request->id)->update(['title'=>$request->title, 'body'->$request->body])
    }
    function delete(Request $request){
        News::where('id', $request->id)->delete();
    }
}
