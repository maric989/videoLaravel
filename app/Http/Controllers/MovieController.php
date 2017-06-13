<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Actor;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies =Movie::with(['category','actors'])->get();

        return view('movie.index', compact('movies'));


    }
    public function welcome()
    {
        //
        $movies =Movie::with(['category','actors'])->get();

        return view('welcome', compact('movies'));


    }
    public function show($id)

    {
        $movies = Movie::find($id);
        $info = Movie::with(['category','actors'])->get();

        return view('movie.show', compact('movies','info'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        $actors = Actor::all();
        //dd($actors);
        //die;
        return view('movie.create',compact('categories','actors'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        phpinfo();die;
        $movie = new Movie;
        $movie->name = request('name');
        $path = $request->video->store('videos');
        $movie->file_path = $path;
        $movie->save();

        if (isset($_POST['genre'])) {
            foreach ($_POST['genre'] as $categoryId) {
                $currentCategory = Category::find($categoryId);
                $movie->category()->save($currentCategory);
            }
        }
        if (isset($_POST['actor'])) {
            foreach ($_POST['actor'] as $actorId) {
                $currentActor = Actor::find($actorId);
                $movie->actors()->save($currentActor);
            }
        }

        return redirect('/movie/create');
    }


    public function edit($id)
    {
        $movies = Movie::find($id);

        return view('movie.edit', ['movies'=> $movies]);
    }


    public function update(Request $request, $id)
    {
        $movies = Movie::find($id);

        $movies->name = $request->input('name');
        $movies->save();

        return redirect('movie/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Movie::destroy($id);

        return redirect('/movie/index');
    }
}
