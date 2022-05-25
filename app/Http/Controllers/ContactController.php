<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller
{
    public function contact(){
        // $users = array(
        // ["name"=> "john", "email" => "john@gmail.com"],
        // ["name"=> "john", "email" => "john@gmail.com"],
        // ["name"=> "john", "email" => "john@gmail.com"],
        // ["name"=> "john", "email" => "john@gmail.com"],
        // ["name"=> "john", "email" => "john@gmail.com"],
        // ["name"=> "john", "email" => "john@gmail.com"], );
        // $user = new User;
        // $user->name = 'manosur';
        // $user->email = 'manosurn@gmail.com';
        // $user->password = 'manosur@gmail.com';
        // $user->save();

        User::UpdateOrCreate([ 'email'=>'hongn@gmail.com'],['name'=> 'hong UPDATED', 'password'=> 'wpepowpe']);

        $users = User::all();
        // select  * from users


        return view('contact.index', compact('users'));
    }
}
