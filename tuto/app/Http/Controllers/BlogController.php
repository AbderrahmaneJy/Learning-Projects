<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1 ,'title'=> 'PHP' , 'posted_by' => 'Ahmed', 'created_at' => '2022-10-30 12:05:00'],
            ['id' => 2 ,'title'=> 'Roblox' , 'posted_by' => 'Taha', 'created_at' => '2023-05-10 09:30:00'],
            ['id' => 3 ,'title'=> 'EFF' , 'posted_by' => 'Cidji', 'created_at' => '2023-11-23 21:08:00'],
            ['id' => 4 ,'title'=> 'Naja7' , 'posted_by' => 'Abdo', 'created_at' => '2024-02-18 10:10:10'],
        ];
        return view('posts.index' , ['posts' => $allPosts]);    
    }

    public function show($postId){
        $singlePost = ['id' => 1 ,'title'=> 'PHP' , 'content' => 'This is content blablablah', 'posted_by' => 'Ahmed', 'created_at' => '2022-10-30 12:05:00'];
        return view('posts.show' , ['post'=> $singlePost]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->all();

        $title = request()->title;
        $content = request()->content;
        $post_creator = request()->post_creator;

        //dd($data, $title, $content, $post_creator);

        return to_route('posts.index');
    }

    public function edit($id){
        return view('posts.edit');
    }

    public function update(){
        $title = request()->title;
        $content = request()->content;
        $post_creator = request()->post_creator;

        //dd( $title, $content, $post_creator);

        return to_route('posts.show' , 1);
    }

    public function destroy(){
        return('destroy action');
    }
}
