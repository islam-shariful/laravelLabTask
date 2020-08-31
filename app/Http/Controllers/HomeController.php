<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class HomeController extends Controller
{
    // Index(Show in home)
    public function index(Request $request) {
        // $data = ['id'=>'171','name'=>'sharif'];
        // return view('home.index', $data);

        // return view('home.index')
        //         ->with('id','171')
        //         ->with('name','hossain');

        // return view('home.index')
        //         ->withid('171')
        //         ->withname('shariful');  // alongside with, id/ID or name/Name these are same
        
        // $v = view('home.index');
        // $v->withId('171');
        // $v->withName('sharif');
        // return $v;

        // $users = [
        //     ['1','sharif','070'],
        //     ['2','hossain','272'],
        //     ['3','islam','373']
        // ];
        
        //$users = $this->getStudentList();
        $user = new User();
        $data = $user->all();
        return view('home.index')->with('data',$data);
    }
    //Create 'GET'
    function creation(){
        return view('home.createUser');
    }
    //Create 'POST'
    function create(Request $request){
        $user = new User();

        $user->username = $request->username;
        $user->password = $request->password;
        $user->type = $request->type;
        $user->name = $request->name;
        $user->department = $request->department;
        $user->cgpa = $request->cgpa;
        
        $user->save();

        return redirect('home');
    }
    //edit 'GET'
    function edit($userid){
        $user = new User();
        $data = $user->where('userid', $userid)
                        ->get();

        for($i=0; $i<count($data); $i++){
            if($userid == $data[$i]['userid']){
                $user = [
                    'userid'=>$data[$i]['userid'],
                    'username'=>$data[$i]['username'],
                    'password'=>$data[$i]['password'],
                    'type'=>$data[$i]['type'],
                    'name'=>$data[$i]['name'],
                    'department'=>$data[$i]['department'],
                    'cgpa'=>$data[$i]['cgpa']
                ];
                return view('home.edit', $user);
            }
        }
    }
    //update 'POST'
    function update($userid, Request $request){
        $user = User::find($userid);

        $user->username = $request->username;
        $user->password = $request->password;
        $user->type = $request->type;
        $user->name = $request->name;
        $user->department = $request->department;
        $user->cgpa = $request->cgpa;

        $user->save();

        return redirect('home');
    }
    //delete 'GET'
    function delete($userid){
        $user = new User();
        $data = $user->where('userid', $userid)
                        ->get();

        for($i=0; $i<count($data); $i++){
            if($userid == $data[$i]['userid']){
                $user = [
                    'userid'=>$data[$i]['userid'],
                    'username'=>$data[$i]['username'],
                    'password'=>$data[$i]['password'],
                    'type'=>$data[$i]['type'],
                    'name'=>$data[$i]['name'],
                    'department'=>$data[$i]['department'],
                    'cgpa'=>$data[$i]['cgpa']
                ];
                return view('home.delete', $user);
            }
        }
    }
    //Destroy
    function destroy($userid, Request $request){
        $user = User::find($userid);
        $user->delete();

        return redirect('home');
    }
    function details($id){
        echo $id;
    }
    function getStudentList(){
        $users = [
                    ['id'=>'1','name'=>'sharif','email'=>'sharif@gmail.com','password'=>'070'],
                    ['id'=>'2','name'=>'hossain','email'=>'hossain@gmail.com','password'=>'272'],
                    ['id'=>'3','name'=>'isalm','email'=>'isalm@gmail.com','password'=>'373'],
                ];

        for($i=0; $i<count($users); $i++){
            $users[$i]['password'] = Hash::make($users[$i]['password']);
        }
        return $users;
    }
}
