<?php

namespace App\Http\Controllers;

use App\Invite;
use App\Mail\InviteCreated;
use App\User;
use Illuminate\Http\Request;
use Mail;
class InviteController extends Controller
{
    public function invite()
    {
        return view('invite');
    }

    public function process(Request $request)
    {
        do {
            $token = str_random();
        } while (Invite::where('token', $token)->first());

        $invite = Invite::create([
            'email' => $request['email'],
            'token'=>$token
        ]);
        Mail::to($request->get('email'))->send(new InviteCreated($invite));
        return back();
    }

    public function accept($token)
    {
        if (!$invite = Invite::where('token', $token)->first()){
            abort(404);
        }
        User::create(['email' => $invite->email]);
        try{
            $invite->delete();
        } catch (\Exception $e) {

        }
        return 'Good Job! Invite accepted';
    }
}
