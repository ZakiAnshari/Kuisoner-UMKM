@extends('Header.frontend')
@section('title','Ttd')

@section('content')
<br><br><br><br><br>
<div class="full">
    <div class="container question">
            <div class="row">
                <div class="col-lg-12">
                    <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse dolor ad hic?</h5>
                </div>
            </div>
            <div class="row">
                <label>Tanda Tangan Pernyataan</label>
                <div class="col-lg-4">
                    <br/>
                    <div id="sig"></div>
                    <br/><br/>
                    <textarea id="signature" name="signed" style="display: none"></textarea>
                </div>
            </div>
            <div class="container d-flex" style="height: 20vh;">
                <a href="/question">
                    <button class="button my-5 mx-3">SEBELUMNYA <span class="arrow"></span> </button>
                </a>
                <a href="/pdf">
                    <button class="button my-5">LANJUT <span class="arrow">→</span> </button>
                </a>
            </div>
            <img src="{{ asset('frond_end/img/7.png') }}" class="position-fixed bottom-0 end-0 img-fluid hide-on-tablet" style="width: 55%;margin-right:-14px" alt="">
    </div>
</div>
@endsection