<?php

namespace App\Http\Controllers;

use DB; 
use App\User;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    private $post;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;

        $this->middleware('auth')->except([
                        'index', 'show'
                    ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $query = $request->input('search');

        // $posts = \DB::table('posts')
        //     ->join('users', 'posts.user_id', '=', 'users.id')
        //     ->select('posts.*', 'users.name as username')
        //     ->paginate(5);

         $posts = Post::latest()
                ->search($query)
                ->paginate(4);

          $top_posts =  DB::table('posts')->orderBy('visit_count', 'desc')->take(4)->get();   

        $lawyers_count =  User::where('occupation', '=', 'lawyer')->get();
        $teachers_count =  User::where('occupation', '=', 'teacher')->get();
        $doctors_count =  User::where('occupation', '=', 'doctor')->get();
        $engineers_count =  User::where('occupation', '=', 'engineer')->get();
        $nurse_count =  User::where('occupation', '=', 'nurse')->get();
        $civil_servant_count =  User::where('occupation', '=', 'civil_servant')->get();
        $business_count =  User::where('occupation', '=', 'business')->get();
        
        return view('posts', [
                               'posts' => $posts,  'lawyers_count' => $lawyers_count, 
                               'teachers_count' => $teachers_count, 'doctors_count' => $doctors_count,
                               'engineers_count' => $engineers_count, 'top_posts' => $top_posts,
                               'nurse_count' => $nurse_count, 'civil_servant_count' => $civil_servant_count,
                               'business_count' => $business_count
                             ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Product::create($request->all());
        
        $post = new Post();
        $post->crime = $request->get('crime');
        $post->description = $request->get('description');
        $post->where_it_happened = $request->get('where_it_happened');
        $post->duration = $request->get('duration');
        $post->nature = $request->get('nature');
        $post->status = $request->get('status');
        $post->physical_abuse = $request->get('physical');
        $post->gender_of_attacker = $request->get('gender');
        $post->relation_to_attacker = $request->get('relation');
        $post->context = $request->get('context');
        $post->reported = $request->get('reported');
        $post->user()->associate($request->user());
        $post->save();
        return redirect('posts')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $post = $this->post->find($id);
        $top_posts =  DB::table('posts')->orderBy('visit_count', 'desc')->take(4)->get();
        $related_posts =  DB::table('posts')->where('context', $post->context)->orderBy('visit_count', 'desc')->take(4)->get();
        $post->increment('visit_count');    
        return view('details', ['post'=> $post, 
                                 'top_posts' => $top_posts,
                                 'related_posts'=> $related_posts
                                ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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


     public function filter($type , $query, Request $request)
    {
     
        $post = new Post;
        $post = $post->newQuery();
        $top_posts =  DB::table('posts')->orderBy('visit_count', 'desc')->take(4)->get();   

        $lawyers_count =  User::where('occupation', '=', 'lawyer')->get();
        $teachers_count =  User::where('occupation', '=', 'teacher')->get();
        $doctors_count =  User::where('occupation', '=', 'doctor')->get();
        $engineers_count =  User::where('occupation', '=', 'engineer')->get();
      
        if ($type == 'context') {
            $post->where('context', 'like', '%'.$query. '%');
        }
        
        if ($type == 'physical') {
            $post->where('physical_abuse', $query);
        }
        
        
        if ($type == 'status') {
            $post->where('status', $query);
        }
        
        if ($type == 'all') {
            return back();
        }
        

        $posts = $post->latest()
                ->paginate(4);

        return view('posts', [
                               'posts' => $posts,  'lawyers_count' => $lawyers_count, 
                               'teachers_count' => $teachers_count, 'doctors_count' => $doctors_count,
                               'engineers_count' => $engineers_count, 'top_posts' => $top_posts
                             ]);
        

 
     }

}
