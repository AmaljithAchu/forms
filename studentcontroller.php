<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class studentcontroller extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $a=student::get();        
        return view('student.index', compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $a=New student();
        $a->stud_admno=$request->admno;
        $a->name=$request->stud_name;
        $a->age=$request->age;
        $a->branch=$request->br;
        $a->save();

        
        $a=student::get();        
        return view('student.index', compact('a'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $s=student::find($id);        
        return view('student.show', compact('s'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $s=student::find($id);
        return view('student.edit', compact('s'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $s=student::find($id);
        $s->stud_admno=$request->admno;
        $s->name=$request->stud_name;
        $s->age=$request->age;
        $s->branch=$request->br;
        $s->save();

        
        $a=student::get();        
        return view('student.index', compact('a'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $s=student::find($id);
        $s->delete();

        $a=student::get();        
        return view('student.index', compact('a'));
    }
}
