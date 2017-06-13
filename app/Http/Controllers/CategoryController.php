<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    //
    public function create()
    {

        return view('category.create');

    }

    public function store()

    {


        $this->validate(request(), [

            'genre' => 'required|min:2'

        ]);

        // Create new post using the req data
        $category = new Category;



        $category->genre = request('genre');


        //save it to database

        $category->save();


        return redirect('/category/show');

    }

    public function show($id)

    {
        $categories = Category::find($id);

        return view('category.show',array('category' => $categories));
    }

    public function index()

    {
        $category = Category::all();

        return view('category.index', ['category' => $category]);
    }

    public function delete($id)

    {
        Category::destroy($id);

        return redirect('/category/show');
    }

    public function edit($id)

    {

        $category = Category::find($id);

        //show the edit form and pass the Actor
        return view('category.edit', ['category' => $category]);
        //return View::make('actor.edit')->with('actors',$actor);
    }

    public function update(Request $request, $id)

    {
        $this->validate(request(), [

            'genre' => 'required|min:2'
        ]);
        $category = Category::find($id);

        $category->genre= $request->input('genre');
        $category->save();

        // redirect
        return redirect('/category/show');
        //}
    }
}
