<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Note;
class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::get();
        return view('notes.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $note = new Note();
        $note->category = $request->category;
        $note->money = $request->money;
        $note->date = $request->date;

        $note->description = $request->description;
        $note->save();
        return redirect()->route('notes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note = Note::find($id);
        return view('notes.edit',compact('note'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $note = Note::find($id);
        $note->category = $request->category;
        $note->money = $request->money;
        $note->date = $request->date;

        $note->description = $request->description;
        $note->save();
        return redirect()->route('notes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note = Note::destroy($id);
        return redirect()->route('notes.index');
    }
}
