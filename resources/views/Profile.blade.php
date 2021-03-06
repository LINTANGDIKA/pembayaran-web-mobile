@extends('Layouts.Layout')
@section('content')
@include('Partials.Navbar')

<div class="container mt-5">
    <div class="profile">
        <div class="image  my-auto">
            <img src="{{ url($avatar) }}" class="" alt="..." style="border-radius: 100%">
        </div>
        <div class="detailProfile">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name : </label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address : </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="{{ $email }}" readonly>
                </div>
        </div>
    </div>
</div>
@endsection
