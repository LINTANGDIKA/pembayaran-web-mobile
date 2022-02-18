@extends('Layouts.Layout')
@section('content')
<div class="admin">
    <div class="imageContent">
        <h1 class="bi bi-person-circle text-center titleAdmin"></h1>
    </div>
    <div class="formLogin">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Company Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Please use the specified email</div>
            </div>
            <div class="mb-5">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btnAdmin">Submit</button>
        </form>
    </div>
</div>
@endsection
