<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;


class ActorController extends Controller
{


    public function create()
    {
        return view('actor.create');
    }

    public function store()
    {


        //  die ("asdasd") ;
        $this->validate(request(), [

            'fname' => 'required',

            'lname' => 'required'
        ]);

        // Create new post using the req data
        $actor = new Actor;

        $actor->fname = request('fname');

        $actor->lname = request('lname');

        //save it to database

        $actor->save();


        return redirect('/actor/show');

    }

    public function show($id)
    {
        $actor = Actor::find($id);

        return view('actor.show',array('actor' => $actor));
    }

    public function index()
    {
        $actors = Actor::all();

        return view('actor.index', ['actors' => $actors]);
    }

    public function delete($id)
    {
        Actor::destroy($id);

        return redirect('/actor/show');
    }
    public function edit($id)
    {
        //get the actor
        $actor = Actor::find($id);

        //show the edit form and pass the Actor
        return view('actor.edit', ['actor' => $actor]);
        //return View::make('actor.edit')->with('actors',$actor);
    }
    public function update(Request $request, $id)
    {
            $this->validate(request(), [

            'fname' => 'required|min:2',

            'lname' => 'required|min:2'
            ]);
            $actor = Actor::find($id);

            $actor->fname= $request->input('fname');
            //dd($actor); die;
            $actor->lname= $request->input('lname');
            $actor->save();

            // redirect
            return redirect('/actor/show');
        //}
    }

 }
