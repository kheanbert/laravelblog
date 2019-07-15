<?php

namespace App\Http\Controllers;

use App\Models\subject;
use App\Http\Requests\CreatesubjectRequest;
use App\Http\Requests\UpdatesubjectRequest;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('subject.index', compact('subjects'));
    }
    public function create()
    {
    return view('subject.create');
    }

    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('subject.edit', compact('subject'));
    }

    public function store(request $request) {

        return $this->save($request);
    }

    public function update(request $request)
    {
        return $this->save($request);
    }

    public function save($request)
    {
        $inputs = $request->all();
        if (empty($inputs['id'])) {
            $subject = new Subject;
        } else {
            $subject = Subject::find($inputs['id']);
        }
        $subject->fill($inputs);
        $subject->save();

        return redirect()->route('subject.index')->with('success', 'subject information saved !');
    }

    public function delete($id)
    {
        $class = Subject::find($id);
        $class->delete();

        return redirect('/subject')->with('success', 'Subject deleted!');
    }
}
