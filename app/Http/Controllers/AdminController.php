<?php

namespace App\Http\Controllers;

use Google\Cloud\Firestore\FieldValue;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function login()
    {
        return view('Admin.LoginAdmin', [
            'title' => 'Login Admin'
        ]);
    }
    public function loginSistem(Request $request)
    {
        $id = $request['id'];
        $password = $request['password'];
        $firebase = app('firebase.firestore')->database()->collection('AdminId');
        $query = $firebase->where('id', '=', $request['idlogin']);
        $documents = $query->documents();
        foreach ($documents as $document) {
            if ($request['password'] === $document->data()['password']) {
                alert()->success('Login Berhasil', 'Selamat Datang Admin');
                return redirect('/pwb');
            } else {
                alert()->error('Login Gagal', 'Maaf Admin Password Salah');
                return redirect('/pwb');
            }
        }
    }
}
