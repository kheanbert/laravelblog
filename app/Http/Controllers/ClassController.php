<?php

namespace App\Http\Controllers;

use App\Models\Classt;
use App\Http\Requests\CreateClassRequest;
use App\Http\Requests\UpdateClassRequest;
use App\Models\Relation;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class ClassController extends Controller
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
        $classes = Classt::all();
        return view('classes.index', compact('classes'));
    }

    public function show($id) {
        $class = Classt::find($id);
        $teacher = User::where('id',$class->teacher_id)->get()->first();
        $subjects = Subject::all();
        $subjectIds = Relation::where('class_id',$id)->get()->pluck('subject_id')->toArray();
        return view('classes.show', compact('class','teacher','subjects','subjectIds'));
    }
    public function create(){
        $teachers = User::all();
        $subjects = Subject::all();
        return view('classes.create', compact('teachers', 'subjects'));
    }

    public function edit($id)
    {
        $teachers = User::all();
        $subjects = Subject::all();
        $class = Classt::find($id);
        $subjectIds = Relation::where('class_id', $id)->get()->pluck('subject_id')->toArray();
        return view('classes.edit', compact('class','subjects','teachers', 'subjectIds'));
    }

    public function store(CreateClassRequest $request) {

        return $this->save($request);
    }

    public function update(UpdateClassRequest $request)
    {
        return $this->save($request);
    }

    public function save($request)
    {
        $inputs = $request->all();

        if (empty($inputs['id'])) {
            $class = new Classt;
        } else {
            $class = Classt::find($inputs['id']);
        }
        $class->fill($inputs);
        $class->save();

        Relation::where('class_id',$class->id)->delete();
        if(array_key_exists("subject_id",$inputs)){
            foreach($inputs['subject_id'] as $value){
                $relation = new Relation;
                $relation->class_id = $class->id;
                $relation->subject_id = $value;
                $relation->save();
            }
        }
        return redirect()->route('class.index')->with('success', 'class information saved !');
    }

    public function delete($id)
    {
        Relation::where('class_id',$id)->delete();
        $class = classt::find($id);

        $class->delete();

        return redirect('/class')->with('success', 'class deleted!');
    }

}
