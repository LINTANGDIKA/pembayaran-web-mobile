<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Firestore\FieldValue;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function googleredirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function datagoogle()
    {
        $auth = app('firebase.auth');
        $user = Socialite::driver('google')->user();
        $signInResult = $auth->signInWithIdpAccessToken('google.com', $user->token, $redirectUrl = null, $oauthTokenSecret = null, $linkingIdToken = null);
        // $signInResult = $auth->signInWithGoogleIdToken($user->getId(), $redirectUrl = null, $linkingIdToken = null);
        $firestore = app('firebase.firestore')->database()->collection('Users');
        $emailfind = $firestore->where('email', '=', $user->getEmail());
        $data = $emailfind->documents();
        foreach ($data as $da) {
            if ($da->exists()) {
            }
        }
        $dataa = [
            'email' => $user->getEmail(),
            'name' => $user->getName(),
            'id' => $user->getId(),
            'avatar' => $user->getAvatar(),
            'transaction' => [],
            'created_at' => FieldValue::serverTimestamp(),
            'updated_at' => FieldValue::serverTimestamp()
        ];
        $firebase = $firestore->document($user->getEmail())->set($dataa);
        Session::put('tokenGoogle', $signInResult->idToken());
        Session::save();
        Session::put('id', $signInResult->firebaseUserId());
        Session::save();
        Session::put('email', $signInResult->data()['email']);
        Session::save();
        Session::put('firstName', $signInResult->data()['firstName']);
        Session::save();
        return redirect('/');
    }
    public function logout(Request $request)
    {
        $auth = app('firebase.auth');
        $auth->revokeRefreshTokens(Session::get('id'));
        Session::remove('tokenGoogle');
        Session::remove('id');
        Session::remove('email');
        return redirect('/login');
    }
}
