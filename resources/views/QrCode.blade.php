@extends('Layouts.Layout')
<div class="card text-center position-absolute top-50 start-50 translate-middle">
    <img src="data:image/png;base64, {{ base64_encode($gambar) }} " class="mx-auto">
    <div class="card-body">
        <h5 class="card-title" style="font-size: 1.8rem"><i class="bi bi-qr-code-scan"></i>&nbsp;&nbsp;Scan Di Sini</h5>
        <p class="card-text" style="font-size: 1rem">Transaksi anda sedang di proses</p>
        <a href="#" class="btn btn-primary">Verifikasi Transaksi</a>
        <br><br>
        <a href="/download" class="btn btn-primary"><i class="bi bi-download"></i>&nbsp;&nbsp;Download Image</a>
        <br><br>

        <a href="/" class="btn btn-warning"><i class="bi bi-box-arrow-left"></i>&nbsp;&nbsp;Back To Home</a>
    </div>
</div>
