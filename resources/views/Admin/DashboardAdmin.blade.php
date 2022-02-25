@extends('Layouts.Layout')
@section('content')

@include('Partials.Navbar')
<div class="history mt-5">
    <table class="table">
        <thead class="table-info">
            <tr>
                <th scope="col">ID Transaksi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam</th>
                <th class="col">Saldo E-Wallet</th>
                <th class="col">Nominal</th>
                <th class="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                @foreach ($item->data()['transaction'] as $tran)
                    <tr>
                        <td>{{ $tran['idTransaction'] }}</td>
                        <td>{{ $tran['tanggal'] }}</td>
                        <td>{{ $tran['jam'] }}</td>
                        <td>{{ $tran['ewallet'] }}</td>
                        <td>@currency($tran['nominal'])</td>
                        <td><button class="btn btn-primary">Verifikasi Transaksi</button></td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</div>

@endsection
