<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{




    public function index()
    {
        $subjects = Subject::all();
        return view('admin.subject.index', compact('subjects'));
    }

    public function create()
    {
        return view('admin.subject.create');
    }

    public function store(Request $request)
    {
        Subject::create($request->all());

        return redirect()->route('admin.subject');
    }

    public function edit($id)
    {
        $data =Subject::find($id);
        return view('admin.subject.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->name = $request->name;
        $subject->save();
        return redirect()->route('admin.subject');
    }

    public function delete($id)
    {

        $subject = Subject::find($id);
        $subject->delete();
        return redirect()->route('admin.subject');

    }

}

