<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function store(CreateUserRequest $request) {
        return $this->save($request);
    }

    public function update(UpdateUserRequest $request)
    {
        return $this->save($request);
    }
    public function save($request){
        $inputs = $request->all();

        if(empty($inputs['id'])){
            $User = new User;
        }
        else{
            $User = User::find($inputs['id']);
        }
        //var_dump($User);exit;
        $User->fill($inputs);
        $User->save();
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $User = User::find($id);
        $User->delete();

        return redirect()->route('user.index');
    }


}
