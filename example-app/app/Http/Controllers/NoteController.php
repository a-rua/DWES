<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function insertForm(){
        return view('note.insertForm');
    }

    public function insert(){
        Note::create( $request->all() );
    }

    //una forma de guardar
        // $note = new Note;
        // $note->title = $request->title;
        // $note->description = $request->description;
        // $note->save();

        // otra forma
        // Note::create([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);

    public function edit(Note $note) {
        return view('note.edit', compact('note'));
    }
}
