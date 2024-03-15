@extends('Header.frontend')

@section('title','Home')

@section('content')
    <section class="section" >
        <h4 class="text-center popins">PERHATIKAN</h4>
        <div class="container">
            <div class="row">
                <div class="image-container my-5">
                    <img src="{{ asset('frond_end/img/3.png') }}" class="my-4"   alt="Gambar 1">
                    <p class="m-3">PASTIKAN KUISONER <br>YANG DI ISI SESUAI</p>
                </div>
                <div class="image-container my-5">
                    <img src="{{ asset('frond_end/img/2.png') }}" class="my-4"  alt="Gambar 2">
                    <p>PASTIKAN BUKTI DUKUNG <br>YANG DIGUNANKAN ASLI</p>
                </div>
                <div class="image-container my-5">
                    <img src="{{ asset('frond_end/img/1.png') }}" class="my-4"  alt="Gambar 3">
                    <p class="m-2">PASTIKAN LINK YANG <br>DIISI ASLI DAN BISA DIAKSES</p>
                </div>
            </div>
            <div class="container d-flex justify-content-center align-items-center" style="height: 20vh;">
                <a href="/question">
                    <button class="button my-5">MASUK <span class="arrow">→</span> </button>
                </a>
            </div>
        </div>
    </section>
@endsection