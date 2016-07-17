<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(){
        return view('contact');
    }
    public function index()
    {
//        return \Auth::user()->name;
        // Добавили фильтр отображения Scope для фильтрации данных
        $posts=Post::latest('published_at')->published()->get();
//        return view('post.all')->with('posts',$posts);
        return view('post.all',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
//    public function store(Request $request)
    {
//        Auth::user();//задает переменную пользователя который сечас в системе
//        $this->validate($request,['title'=>'required|min:5','body'=>'required']);
        $post=new Post($request->all());
        Auth::user()->posts()->save($post);
        Post::create($request->all());
        //$input['published_at']=Carbon::now();

        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::findOrFail($id);
//ИЗУЧАЕМ
//        dd($post->created_at->diffForHumans());

        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::findOrFail($id);
        return view('post.edit',compact('post'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post= Post::findOrFail($id);
        $post->update($request->all());
        return redirect('post');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function blade($id,$post='',$post2=''){
//        echo 'sex'.$id;
        return view('blade',compact('id','post','post2'));
    }
}
