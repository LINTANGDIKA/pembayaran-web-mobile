<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        $name = $request['name'];
        $email = Session::get('email');
        $firestore = app('firebase.firestore')->database()->collection('Users')->document($email);
        $firestore->update([
            ['path' => 'name', 'value' => $name],
        ]);
        alert()->success('Success', 'Profile Updated Successfully');
        return redirect('/profile');
    }
}
