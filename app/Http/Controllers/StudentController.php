<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request $request
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
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function edit($id)
    {
        $student = student::find($id);
        return view('students.edit', compact('student'));
    }

    public function store(CreateStudentRequest $request) {
        return $this->save($request);
    }

    public function update(UpdateStudentRequest $request)
    {
            return $this->save($request);
    }
    public function save($request){
        $inputs = $request->all();
        if(empty($inputs['id'])){
            $student = new student;
        }
        else{
            $student = Student::find($inputs['id']);
        }
        $student->fill($inputs);
        $student->save();
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();

        return redirect('/students')->with('success', 'student deleted!');
    }
}
