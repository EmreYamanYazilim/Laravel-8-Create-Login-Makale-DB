<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;


class AdminController extends Controller
{
     //giriş yapmadan linke girmeyi engelleme 2. yöntemi

    public function __consturuct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('admin.index');
    }

    public function showAddPost()
    {
        return view('admin.addPost');
    }

    public function addPost(Request $request)
    {
//        dd($request->all());
        $name =$request->title;
        $content =$request->content;
        $status =$request->status;

        $data = [
          'name' => $name,
          'content' => $content
        ];

        if (!is_null($status))
        {
            $data['status'] = 1;
        }

        Posts::create($data);
        dd("Kayıt Oluşturuldu");

    }



}
