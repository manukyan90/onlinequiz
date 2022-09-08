<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Subject;
use App\Models\Teacher;
use http\Exception\InvalidArgumentException;
use Illuminate\Http\Request;

class TeacherController extends Controller
{


    public function index()
    {
        $teachers = Teacher::paginate(3);
        //$teachers =Teacher::with(['subject'])->get();
        return  view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('admin.teachers.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
        $validated = $request->validated();
//        Teacher::create($request->all());

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->subject_id = $request->subject_id;

        if ($request->hasFile('image_url')){
            $file = $request->file('image_url');
            $fileName = time().'.'.$request->image_url->extension();
            $request->image_url->storeAs('uploads', $fileName);
            $teacher->image_url='uploads/'.$fileName;
        }
            $teacher->save();
        return redirect()->route('teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        $subjects = Subject::all();
        return view('admin.teachers.show', compact('teacher', 'subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $subjects = Subject::all();
        return view('admin.teachers.edit', compact('teacher', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());

        if ($request->hasFile('image_url')){
            $file = $request->file('image_url');
            $fileName = time().'.'.$request->image_url->extension();
            $request->image_url->storeAs('uploads', $fileName);
            $teacher->image_url='uploads/'.$fileName;
        }
        $teacher->save();



        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher

     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
