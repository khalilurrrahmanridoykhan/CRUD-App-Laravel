<?php

namespace App\Http\Controllers;

use App\Models\RegiserUser;
use Illuminate\Http\Request;

class MainContoroller extends Controller
{

    public function index(){
        return view('Home');
    }

    public function Fromregister(){
        return view('Register');
    }


    public function Resultregister(Request $request){
        $request->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'password' => 'required',
                'password_confirmation' => 'required|same:password'
            ]
        );

        echo "<pre>";
        print_r(($request->all()));

        $regiseruser = new RegiserUser();
        $regiseruser->fname	 = $request['fname'];
        $regiseruser->lname	 = $request['lname'];
        $regiseruser->email = $request['email'];
        $regiseruser->date = $request['date'];
        $regiseruser->gender = $request['gender'];
        $regiseruser->phone = $request['phone'];
        $regiseruser->password = md5($request['password']);
        $regiseruser->save();

        return redirect('/register/view');
    }


    public function viewList(){
        $regiseruser = RegiserUser::all();
        $data = compact('regiseruser');
        return view('Usersview')->with($data);
    }

    public function delete($id){
        $regiseruser = RegiserUser::find($id);
        if(!is_null($regiseruser)){
            $regiseruser->delete();
        }
        return redirect('/register/view');
    }


    public function FromrUpdate(){
        return view('Update');
    }
    public function edit($id){
        $regiseruser = RegiserUser::find($id);
        if(is_null($regiseruser)){
            //not found
            return redirect('/register/view');
        }else{
            $data = compact('regiseruser');
            return view('Update')->with($data);
        }
    }

    public function update($id, Request $request){
        $regiseruser = RegiserUser::find($id);

        $regiseruser->fname	 = $request['fname'];
        $regiseruser->lname	 = $request['lname'];
        $regiseruser->email = $request['email'];
        $regiseruser->date = $request['date'];
        $regiseruser->gender = $request['gender'];
        $regiseruser->phone = $request['phone'];
        $regiseruser->save();

        return redirect('/register/view');
    }

    public function StatusChange($id){

    }
}
