<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class NewpassworduserController extends Controller
{
    public function showForgotForm(){
        return view('auth.forgot');
    }

    public function SendResetLink(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(60);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        $action_link = route('reset.password.form', ['token' => $token, 'email' => $request->email]);
        $body = "Vous reçevez cette demande de renitialisation de mot de passe pour votre SODIBCI associé à l'email".$request->email.
        ". Vous pouvez le renitialisé en cliquant sur le bouton ou le lien contenu dans ce mail";

        Mail::send('mail.password-forgot', ['action_link'=> $action_link, 'body' => $body], function($message) use ($request){
            $message->from(env('MAIL_FROM_ADDRESS'),'SODIB-CI');
            $message->to($request->email, 'user Name')
                    ->subject('Reinitialisation de mot de passe');
        });

        return back()->with('success', 'Un email vous a été envoyé avec le lien de reinitialisation de votre mot de passe');
    }

    public function showResetForm(Request $request, $token = null){
        return view('auth.reset')->with(['token'=>$token, 'email'=>$request->email]);
    }


     public function resetPassword(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' =>'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $check_token = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' =>$request->token,
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token, veuillez refaire une nouvelle demande de reinitialisation');
        }
        else{
            user::where('email', $request->email)->update([
                'password' => Hash::make($request->password)
            ]);

            DB::table('password_resets')->where([
                'email' => $request->email,])->delete();

            return redirect()->route('dashboard')->with('success', 'Votre mot de passe a été renitialisé avec succès. Vous pouvez maintenant vous connectez avec vos nouveaux accès');
        }
     }
}
