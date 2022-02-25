@extends('Layouts.Layout')
@section('content')
<div class="admin">
    <div class="imageContent">
        <h1 class="bi bi-person-circle text-center titleAdmin"></h1>
    </div>
    <div class="formLogin">
        <form method="POST">
            @csrf
            <div class="mb-3">
                <label for="idlogin" class="form-label">Your Id</label>
                <input type="text" class="form-control" id="idlogin" aria-describedby="emailHelp" name="idlogin"
                    required>
            </div>
            <div class="mb-5">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <button type="submit" class="btnAdmin">Submit</button>
        </form>
    </div>
</div>
@endsection
{{-- id : pwbbSz5Q --}}
{{-- password : 12345 --}}
