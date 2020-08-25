<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    // Index(Show in home)
    public function index() {
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
        $users = $this->getStudentList();
 
        return view('home.index')->with('users',$users);
    }
    //update
    function update($id, Request $request){
        $newUser = [
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ];


        $users = $this->getStudentList();
        for($i=0; $i<count($users); $i++){
            if($id == $users[$i]['id']){
                //array_replace($users[$i],$newUser);
                $users[$i]['id'] = $newUser['id'];
                $users[$i]['name'] = $newUser['name'];
                $users[$i]['email'] = $newUser['email'];
                $users[$i]['password'] = $newUser['password'];

                //echo $users[$i]['name'];
                //$users = array_splice($users, $, 2);
                // unset($users[$i]['id']);
            }
        }
        return view('home.index')->with('users',$users);
    }
    //edit
    function edit($id){
        $users = $this->getStudentList();
        for($i=0; $i<count($users); $i++){
            if($id == $users[$i]['id']){
                $user = [
                    'id'=>$users[$i]['id'],
                    'name'=>$users[$i]['name'],
                    'email'=>$users[$i]['email'],
                    'password'=>$users[$i]['password']
                ];
                return view('home.edit', $user);

                // return view('home.edit')
                //    ->withId($users[$i]['id'])
                //    ->withName($users[$i]['name'])
                //    ->withEmail($users[$i]['email'])
                //    ->withPassword($users[$i]['password']);
                
            }
        }
    }
    //delete
    function delete($id){
        $users = $this->getStudentList();
        for($i=0; $i<count($users); $i++){
            if($id == $users[$i]['id']){
                $user = [
                    'id'=>$users[$i]['id'],
                    'name'=>$users[$i]['name'],
                    'email'=>$users[$i]['email'],
                    'password'=>$users[$i]['password']
                ];
                return view('home.delete', $user);  
            }
        }
    }
    //Destroy
    function destroy($id, Request $request){
        $newUser = [
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ];


        $users = $this->getStudentList();
        for($i=0; $i<count($users); $i++){
            if($id == $users[$i]['id']){
                // //array_replace($users[$i],$newUser);
                
                $users[$i]['id'] = null;
                $users[$i]['name'] = null;
                $users[$i]['email'] = null;
                $users[$i]['password'] = null;

                //echo $users[$i]['name'];
                //$users = array_splice($users, $, 2);
                // unset($users[$i]['id']);
            }else{}
        }
        return view('home.index')->with('users',$users);
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
