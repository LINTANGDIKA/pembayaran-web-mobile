<?php

namespace App\Http\Controllers;

use Google\Cloud\Firestore\FieldValue;
use Illuminate\Support\Facades\Session;
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
            if ($document->exists()) {
                if ($request['password'] === $document->data()['password']) {
                    Session::put('id', $document->data()['id']);
                    Session::save();
                    alert()->success('Login Berhasil', 'Selamat Datang Admin');
                    return redirect('/pwb/dashboard');
                } else {
                    alert()->error('Login Gagal', 'Maaf Admin Password Salah');
                    return redirect('/pwb');
                }
            }
        }
        alert()->warning('Login Gagal', 'Maaf Id Tidak Ditemukan Atau Anda Bukan Admin!');
        return redirect('/login');
    }
    public function dashboardAdminView()
    {
        $firebase = app('firebase.firestore')->database()->collection('Users');
        $documents = $firebase->documents();


        return view('Admin.DashboardAdmin', [
            'title' => 'Dashboard Admin',
            'role' => 'admin',
            'email' => 'Selamat Datang Admin',
            'data' => $documents
        ]);
    }
    public function logout()
    {
        Session::remove('id');
        return redirect('/pwb');
    }
}
