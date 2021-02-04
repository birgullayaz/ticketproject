<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\Ticket;

class PanelController extends Controller
{

public function login(Request $request)
{
 $email = $request->email;
 $password = $request->password;

$user = User::where('email', '=', $email)->first();

if( $user && ($password ==  $user->password) ) {
Session::put('user', $email);
$ticket = Ticket::where('user_email','=',$email);
$html = view('panel', compact('ticket'))->render();
return $html;
}else
{
	dd('Hatalı giriş');
}
}



}
