<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcome_sign_up;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Image;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

             'username' => 'required|max:13' ,
             'email' => 'required|email|unique:users' ,
             'password' => 'required',
             'confirm_password' => 'same:password'


        ]);

        $name = $request->input('username');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));

        DB::insert('insert into users (name, email , password) values (?, ?, ?)', [$name, $email , $password]);

        $results = DB::select('select * from users where name = ?', [$name]);

        if(count($results)){

            foreach($results as $result){

                DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [$result->id , 2 ]);

            }

        }

        session()->flash('success_message', 'your data stored , successfully');

        return redirect(route('selamoji_login_page'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = User::where('id' , $id)->first();

        return view('salamoji_website_project_files.update_user_information' , ['result' => $result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'username' => 'required' ,
            'email' => 'required|email' ,
            'confirm_password' => 'same:password'


       ]);


       $username = $request->input('username');

       $email = $request->input('email');

       if($request->hasFile('image')){

           	$image_result = $request->file('image');

           	$file_name = time().'.'.$image_result->getClientOriginalExtension();

		$image_path = getcwd().'/salamoji_project_images';

		$path = $image_result->move($image_path , $file_name);		

           	DB::table('users')->where('id' , $id)->update([

                	'name' => $username ,
                	'email' => $email ,
                	'image' => $file_name,

           	]);
           	session()->flash('success_message', 'success updating');

           	return redirect()->back();

        }

        else{

            DB::table('users')->where('id' , $id)->update([

            'name' => $username ,
            'email' => $email ,

        ]);

        session()->flash('success_message', 'success updating');

        return redirect()->back();

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = user::findOrFail($id);

        $result->delete();

        session()->flash("success_deleted" , "Deleted Successfully !!");

        return redirect(route('selamoji_remove_user'));
    }
}
