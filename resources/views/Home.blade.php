@extends('Layouts.Layout')
@section('content')
@include('Partials.Navbar')
<div class="home">
    <div class="title text-center">
        <h1>Pembelian Saldo E-Wallet</h1>
    </div>
    <div class="item">
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="form-check col">
                    <label class="form-check-label" for="gopay">
                        <input class="form-check-input" type="radio" value="gopay" id="gopay" name="item" required>
                        <img src="{{ url('logo/Gopay.png') }}" alt="" srcset="" class="image-item">
                    </label>
                </div>
                <div class="form-check col">
                    <label class="form-check-label" for="dana">
                        <input class="form-check-input" type="radio" value="dana" id="dana" name="item" required>
                        <img src="{{ url('logo/Dana.png') }}" alt="" srcset="" class="image-item">
                    </label>
                </div>
                <div class="form-check col">
                    <label class="form-check-label" for="ovo">
                        <input class="form-check-input" type="radio" value="ovo" id="ovo" name="item" required>
                        <img src="{{ url('logo/OVO.png') }}" alt="" srcset="" class="image-item">
                    </label>
                </div>
            </div>
            <div class="row " style="margin-top: 4rem">
                <div class="form-check col">
                    <label class="form-check-label" for="isaku">
                        <input class="form-check-input" type="radio" value="isaku" id="isaku" name="item" required>
                        <img src="{{ url('logo/Isaku.png') }}" alt="" srcset="" class="image-item">
                    </label>
                </div>
                <div class="form-check col">
                    <label class="form-check-label" for="linkaja">
                        <input class="form-check-input" type="radio" value="linkaja" id="linkaja" name="item" required>
                        <img src="{{ url('logo/LinkAja.png') }}" alt="" srcset="" class="image-item">
                    </label>
                </div>
                <div class="form-check col">
                    <label class="form-check-label" for="shopeepay">
                        <input class="form-check-input" type="radio" value="shopeepay" id="shopeepay" name="item"
                            required>
                        <img src="{{ url('logo/ShopeePay.png') }}" alt="" srcset="" class="image-item">
                    </label>
                </div>
            </div>
            <div class="row item-number" style="margin-top: 4rem">
                <div class="form-check col">
                    <input class="form-check-input" type="radio" id="one" name="nominal" value="Rp 10.000" required>
                    <label class="form-check-label" for="one">
                        <h1>Rp 10.000</h1>
                    </label>
                </div>
                <div class="form-check col">
                    <input class="form-check-input" type="radio" id="two" name="nominal" value="Rp 25.000" required>
                    <label class="form-check-label" for="two">
                        <h1>Rp 25.000</h1>
                    </label>
                </div>
                <div class="form-check col">
                    <input class="form-check-input" type="radio" id="three" name="nominal" value="Rp 50.000" required>
                    <label class="form-check-label" for="three">
                        <h1>Rp 50.000</h1>
                    </label>
                </div>
                <div class="form-check col">
                    <input class="form-check-input" type="radio" id="four" name="nominal" value="Rp 100.000" required>
                    <label class="form-check-label" for="four">
                        <h1>Rp 100.000</h1>
                    </label>
                </div>
                <div class="form-check col">
                    <input class="form-check-input" type="radio" id="five" name="nominal" value="Rp 1.000.000" required>
                    <label class="form-check-label" for="five">
                        <h1>Rp 1.000.000</h1>
                    </label>
                </div>
            </div>
            <div class="nope" style="">
                <label for="number" class="form-label">No Pengguna</label>
                <input type="text" class="form-control" id="number" name="number" required>
            </div>
            <button type="submit" class="btn btn-info buy" style="margin: 2rem 0">BUY</button>
        </form>
    </div>
</div>

@endsection
