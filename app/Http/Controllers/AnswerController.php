<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::paginate(3);
        //$answers =Answer::with(['question'])->get();
        return  view('admin.answers.index', compact('answers'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::all();
        return view('admin.answers.create', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->boolean('is_true');

        Answer::create($request->all());

        return redirect()->route('answers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        $questions = Question::all();
        return view('admin.answers.show', compact('answer', 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {

        $questions = Question::all();
        return view('admin.answers.edit', compact('answer', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        $answer->update([
            'title'=>$request->title,
            'question_id'=>$request->question_id,
            'is_true'=>$request->has('is_true')
        ]);
        return redirect()->route('answers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        $answer->delete();
        return redirect()->route('answers.index');
    }
}
