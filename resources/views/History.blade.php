@extends('Layouts.Layout')
@section('content')
@include('Partials.Navbar')

<div class="container my-lg-5" style="padding: 0 5rem;">
    <table class="table ">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Type</th>
                <th scope="col">Nominal</th>
                <th scope="col">Time</th>
                <th class="col">Status</th>
                <th class="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $tran)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $tran['type'] }}</td>
                <td>{{ $tran['nominal'] }}</td>
                <td>{{ $tran['time'] }}</td>
                @if ($tran['status'] == 'pending')
                <td class="text-warning">{{ $tran['status'] }}</td>
                @else
                <td class="text-success">{{ $tran['status'] }}</td>
                @endif

                <td> <button type="button" class="btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#exampleModal-{{ $loop->iteration }}">
                        Detail Transaction
                    </button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @foreach ($transactions as $tran)
    <div class="modal fade" id="exampleModal-{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modalTeks">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$tran['type']}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Nominal : {{ $tran['nominal'] }}</h6>
                    <h6>Time : {{ $tran['time'] }} </h6>
                    @if ($tran['status'] == 'pending')
                    <h6>Status : <span class="text-warning">{{ $tran['status'] }} </span></h6>
                    @else
                    <h6>Status : <span class="text-success">{{ $tran['status'] }} </span></h6>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
