<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Google\Cloud\Firestore\FieldValue;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Generator;

class QrController extends Controller
{
    public function qrView()
    {
        $qrcode = new Generator;
        $gambar = $qrcode->format('png')->size(260)->generate(Session::get('qr'));
        $imageName = 'transaksi' . Session::get('firstName') . '.png';
        Storage::disk('public')->put('qr/' . $imageName, $gambar);
        return view('Qrcode', [
            'title' => 'pembayaran',
            'gambar' => $gambar,
        ]);
    }
    public function qr(Request $request)
    {
        $qrcode = new Generator;
        $data = [
            'nomorPengguna' => $request['number'],
            'type' => $request['item'],
            'nominal' => $request['nominal'],
            'status' => 'pending',
            'time' => Carbon::now()->toDateTimeString()
        ];
        $firebase = app('firebase.firestore')->database()->collection('Users')->document(Session::get('email'));
        $firebase->update([
            ['path' => 'transaction', 'value' => FieldValue::arrayUnion([$data])]
        ]);
        Session::put('qr', json_encode($data));
        Session::save();
        return redirect('/pembayaran');
    }
    public function download()
    {
        return Storage::download('public/qr/transaksi' . Session::get('firstName') . '.png');
    }
}
