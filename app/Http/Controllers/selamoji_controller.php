<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Auth;

use App\User;

use App\Role;
use Illuminate\Support\Facades\Session;
use PDF;

class selamoji_controller extends Controller
{

    public function showIndexPage (){

        return view ('salamoji_website_project_files.welcome_salamoji');

    }

    public function showAboutUsPage (){

        return view ('salamoji_website_project_files.about_us');

    }

    public function showContactPage (){

        return view ('salamoji_website_project_files.contact');

    }


    public function showLoginPage (){

        return view ('salamoji_website_project_files.selamoji_login_page');

    }


    public function showSineUpPage (){

        return view ('salamoji_website_project_files.selamoji_sine_up_page');

    }


    public function showPrivacyPolicyPage (){

        return view('salamoji_website_project_files.privacy_policy');

    }

    public function showDashboard (){

        return view ('salamoji_website_project_files.dashboard');

    }


    public function showGiveRoles (){

        return view ('salamoji_website_project_files.give_roles');

    }

    public function showRemoveUser (){

        return view ('salamoji_website_project_files.remove_user');

    }


    public function showSettings (){

        return view ('salamoji_website_project_files.settings');

    }

    public function showDeleteUser (){

        return view ('salamoji_website_project_files.delete_user');

    }


    public function showMakeRoles (){

        return view ('salamoji_website_project_files.selamoji_make_roles');

    }

    public function showfeatures (){

        return view ('salamoji_website_project_files.features');

    }

    public function showUserProfile (){

        return view ('salamoji_website_project_files.user_profile');

    }


    public function showChangePassword (){

        return view ('salamoji_website_project_files.change_password');

    }

	
    public function showUpdateUserInformation (){

        return view ('salamoji_website_project_files.update_user_information');

    }

	public function showUserList (){

        $user_list = User::where('id' , '!=' , Auth::user()->id)->get();

        return view ('salamoji_website_project_files.user_list' , ['user_list' => $user_list]);

    }

 	public function showRoleList (){

        $role_list = DB::select('select * from roles');

        return view ('salamoji_website_project_files.role_list' , ['role_list' => $role_list]);
    }



    public function changePassword (Request $request ,$id){

        $request->validate([

            'new_password' => 'required' ,
            'confirm_new_password' => 'same:new_password'

        ]);

        $hash_password = Hash::make($request->input('new_password'));

        DB::table('users')->where('id' , $id)->update([

            'password' => $hash_password

        ]);

        session()->flash('success_message' , 'your password updated successfully');

        return redirect()->back();

    }



    public function showWelcomeMessage (){

        return view ('emails.welcome');

    }

    public function  loginConfirm (Request $request){


        $this->validate($request , [

            "email" => "required|email",
            "password" => "required"

        ]);

        $email = $request->input('email');

        $hash_password = $request->input('password');

        $result =  Auth::attempt(['email' => $email , 'password' => $hash_password]);

	$user_list = DB::select('select * from users');

        if($result){

            if(Auth::user()->hasAnyRole('admin')){

		   return view('salamoji_website_project_files.dashboard');

            }

            else{

                session()->flash('success_message_login' , 'you are logined'.' '.'"'.Auth::user()->name.'"');

                return redirect(route('home'));
            }

        }

        else{

            session()->flash("failed_message_login" , "login failed");

            return redirect()->back();

        }

    }

    public function search_user_delete(Request $request){

        $name = $request->input('search');

        $user_info = DB::select('select * from users where name = ?', [$name]);

        if(count($user_info)){

            foreach($user_info as $info){

                return view ('salamoji_website_project_files.delete_user' , ['user_info' => $user_info , 'user_role' => User::find($info->id)->roles]);
            }

        }

        else{
            session()->flash("failed_message" , "User Name Not Matched");

            return redirect()->back();
        }


    }

    public function make_role(Request $request){

        $role_name = $request->input('role_name');

        DB::insert('insert into roles (name) values (?)', [$role_name]);

        session()->flash('success_message' , 'role_created_successfully');

        return redirect()->back();


    }

    public function give_roles(Request $request){


        $request->validate([

            'user_name' => 'exists:users,name',
            'role_name' => 'exists:roles,name'

        ]);

        $role_name = $request->input('role_name');

        $user_name = $request->input('user_name');

        $user_result = User::where('name' , '=' , $user_name)->firstOrFail();

        $role_result = Role::where('name' , '=' , $role_name)->firstOrFail();

        DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [$user_result->id, $role_result->id]);

        session()->flash('success_message' , 'role_given_successfully');

        return redirect()->back();



    }


    public function store_contact_data(Request $request)
    {

        $request->validate([

            'first_name' => 'required|max:10' ,
            'last_name'  => 'required|max:10' ,
            'email'    => 'required|email|max:30' ,
            'subject'    => 'required|min:20|max:150',

        ]);

        $data = [

            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject')

        ];

        Mail::send('emails.welcome' , $data , function ($message){

            $message->to('tolbaaalove333@gmail.com')
                    ->subject('message to admin website');
            $message->from('haben1982@yahoo.com', 'haben');


        });

        session()->flash("success_message" , "Thank you for your contact"." ,,, "."'".$request->input('first_name')."'");

        return redirect()->back();

    }

    public function logOut(){

        Auth::logout();

        Session::flush();

        return redirect(route('selamoji_login_page'));

    }
}
