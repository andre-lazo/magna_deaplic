<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserFormEdit;
use App\Models\User;

class UserController extends Controller
{
     public function __construct(){
         
        $this->middleware('auth');
     }
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('search'));
            $users=User::where('name','LIKE','%'.$query.'%')->orderby('id','asc')
            ->simplepaginate(5);
            return view('users.index',['users'=>$users,'search'=>$query]);
        }
    }

  
    public function create()
    {
        return \view('users.create');
    }

  
    public function store(UserFormRequest $request)
    {
        $usuario= new User();
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password= bcrypt($request->get('password'));
        $usuario->save();
        return redirect('/user');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        return view('users.edit',['user'=> User::findOrFail($id)]);
    }

    
    public function update(UserFormEdit $request, $id)
    {
        $this->validate(request(),['email'=>['required','email','max:255','unique:users,email,'.$id]]);
        $usuario=User::findOrFail($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->update();
        return redirect('/user');
    }

    
    public function destroy($id)
    {
        $usuario=User::findOrFail($id);
        $usuario->delete();
        return redirect('user');
    }
}
