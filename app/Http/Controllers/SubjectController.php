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

    public function show(Subject $subject)
    {
        return view('admin.subject.show', compact('subject'));
    }


}

