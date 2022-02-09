@extends('Layouts.Layout')
@section('content')
<div class="logo ">
    <img src="{{ url('logo/logo1.png') }}" class=" my-lg-2 mx-auto d-block" alt="" style="height: 10rem">
</div>
<div class="form mx-auto">
    <div class="button rounded-pill">
        <div class="butn rounded-pill left"></div>
        <button class="log">SIGN IN</button>
        <button class="reg">SIGN UP</button>
    </div>
    <div class="login p">
        <a href="/auth/google" class="link">
            <button class="rounded-pill loginandregister d-flex">
                <img src="{{ url('logo/google-logo-9824.png') }}" class="google my-auto" alt="">
                <div class=" my-auto">Sign In With Google</div>
            </button>
        </a>
    </div>
    <div class="register">
        <a href="/auth/google" class="link">
            <button class="rounded-pill loginandregister d-flex">
                <img src="{{ url('logo/google-logo-9824.png') }}" class="google my-auto" alt="">
                <div class=" my-auto">Sign Up With Google</div>
            </button>
        </a>
    </div>
</div>
@push('scriptLoginAndRegister')
<script src="{{ url('script.js') }}"></script>
@endpush
@endsection
