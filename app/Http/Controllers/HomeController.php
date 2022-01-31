<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $films = Film::all();
        return view('pages.home', compact('films'));
    }

    public function show($id){
        $film = Film::FindOrFail($id);
        return view('pages.show', compact('film'));
    }

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date'
        ]);

        // dd($data);
        $film = Film::create($data);
        return redirect() -> route('show', $film -> id);
    }

    public function edit($id){

        $film = Film::FindOrFail($id);
        return view('pages.edit', compact('film'));
    }

    public function update(Request $request, $id){
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date'
        ]);

        $film = Film::FindOrFail($id);
        $film -> update($data);
        return redirect() -> route('show', $film -> id);
    }

    public function delete($id){
        $film = Film::FindOrFail($id);
        $film -> delete();
        return redirect() -> route('home');
    }
}
