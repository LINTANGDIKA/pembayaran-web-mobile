@extends('Layouts.Layout')
@section('content')
@include('Partials.Navbar')

<div class="container mt-5">
    <table class="table">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Transaksi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam</th>
                <th class="col">Saldo E-Wallet</th>
                <th class="col">nominal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $tran)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $tran['idTransaction'] }}</td>
                <td>{{ $tran['tanggal'] }}</td>
                <td>{{ $tran['jam'] }}</td>
                <td>{{ $tran['ewallet'] }}</td>
                <td>{{ $tran['nominal'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
