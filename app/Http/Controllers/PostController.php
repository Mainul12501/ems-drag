<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('web.default.post.multipleCheckbox',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.default.post.formMultipleCheckbox');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['category'] = $request->input('category'); 
        Post::create($input);
        // $category = $request ->   
        $category=$request->input['title'];
        $category=$request->input['name'];
        $category=$request->input['description'];
        $category=$request->input['grade'];
        $category=$request->input['option_title'];
        $category= CarbonInterval::getSecondsPerMinute();
        $category= CarbonInterval::getHoursPerDay('grade'); 
        // $post = Post::get->all();
        $category = Category::pluck();
        $category = $request -> input['post'];


        return redirect()->route('posts.index');

    }

    public function creating(User $user)
    {
        $invite = Invites::where('email',$user->email)->first();

        if ($invite) {
            $user->referrer = $invite->user_id;
            $user->email = $user->grade;
            $user-> name = $user -> name;
            $user-> description = $user -> description;
            $user-> $request -> grade[1];
            $user -> $request = $invite -> email;
            $user -> $request = $invite -> status;
            $user -> $request = $invite -> option_title;
            $this -> $request = $invite -> title;
            $request -> $request = $invite -> acc_no;
            $request -> $request = $invite -> ab;
            $request -> $request = $user -> order_id;
            $posts -> $request = $order -> num;
            $post -> $request = $equest -> $num;


        }

        return redirect()->action('${App\Http\Controllers\HomeController@update}', ['post' => 'subcategory']);
      

    }

    public function deleting(User $user)
    {
        $user->orders->map(function($order) {
            if ($order->is_delivered == false) {
                abort(403,'You cannot delete your account yet');
            }
        });
        $post-> OrderDB::transaction(function () {
            if ($order -> is_delevered ==true){
                abort(404,'you can not access your account yet') ;
            }
        });
        $order ->$request = $order -> request();

    }
    
}