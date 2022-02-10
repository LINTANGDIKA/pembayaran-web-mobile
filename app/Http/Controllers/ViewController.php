<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ViewController extends Controller
{
    public function viewHome()
    {
        $email = Session::get('email');
        return view('Home', [
            'title' => 'Home Page',
            'email' => $email
        ]);
    }
    public function viewLoginAndRegister()
    {
        return view('LoginRegister', [
            'title' => 'Register & Login Page'
        ]);
    }
    public function viewProfile()
    {
        $email = Session::get('email');
        $firestore = app('firebase.firestore')->database()->collection('Users');
        $query = $firestore->where('email', '=', $email);
        $documents = $query->documents();
        foreach ($documents as $document) {
            if ($document->exists()) {
                // dd($document->data());
                return view('Profile', [
                    'title' => 'Profile Page',
                    'email' => $email,
                    'name' => $document->data()['name'],
                    'avatar' => $document->data()['avatar']
                ]);
            } else {
                dd('Document %s does not exist!' . PHP_EOL, $document->id());
            }
        }
    }
    public function viewHistory()
    {
        $email = Session::get('email');
        $firestore = app('firebase.firestore')->database()->collection('Users');
        $query = $firestore->where('email', '=', $email);
        $documents = $query->documents();
        foreach ($documents as $document) {
            if ($document->exists()) {
                $transactions = $document->data()['transaction'];
                return view('History', [
                    'title' => 'History Page',
                    'email' => $email,
                    'transactions' => $transactions
                ]);
            } else {
                dd('Document %s does not exist!' . PHP_EOL, $document->id());
            }
        }
    }
}
