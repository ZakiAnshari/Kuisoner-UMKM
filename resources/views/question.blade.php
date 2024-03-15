@extends('Header.frontend')
@section('title','question')
@section('content')
    <br><br><br><br><br>
    <div class="full">
        <div class="container question">
            <div class="row">
                <div class="col-lg-6">
                    <form>
                        <p>1. Berapa lama usaha Bapak/Ibu telah beroperasi?</p>
                        <div class="row mx-3">
                            <div class="col-md-6">
                                <input type="radio" id="option1" name="jawaban" value="option1" required>
                                <label for="option1" class="mx-1">1 - 3 Tahun</label><br>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="option2" name="jawaban" value="option2">
                                <label for="option2" class="mx-1">4 - 10 Tahun</label><br>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="option3" name="jawaban" value="option3">
                                <label for="option3" class="mx-1">11 - 20 Tahun</label><br>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="option4" name="jawaban" value="option4">
                                <label for="option4" class="mx-1">Lebih dari 20 Tahun</label><br>
                            </div>
                        </div>
                        <br><br>
                        <p>2. Apa jenis usaha yang Bapak/Ibu jalankan?</p>
                        <div class="row mx-3">
                            <div class="col-md-6">
                                <input type="radio" id="option5" name="jawaban2" value="option5">
                                <label for="option5" class="mx-1">Retail</label><br>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="option6" name="jawaban2" value="option6">
                                <label for="option6" class="mx-1">Pelayanan</label><br>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="option7" name="jawaban2" value="option7">
                                <label for="option7" class="mx-1">Manufaktur</label><br>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="option8" name="jawaban2" value="option8">
                                <label for="option8" class="mx-1">Lainnya</label><br>
                            </div>
                        </div>
                        <br><br>
                        <p>3. Berapa total penjualan tahunan usaha Bapak/Ibu:</p>
                        <div class="row mx-3">
                            <div class="col-md-6">
                                <input type="radio" id="option5" name="jawaban2" value="option5">
                                <label for="option5" class="mx-1">Kurang dari Rp.2 Juta</label><br>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="option6" name="jawaban2" value="option6">
                                <label for="option6" class="mx-1">Rp.15 Juta - 50 Juta</label><br>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="option7" name="jawaban2" value="option7">
                                <label for="option7"class="mx-1">Rp.2 Juta - Rp.15 Juta</label><br>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="option8" name="jawaban2" value="option8">
                                <label for="option8" class="mx-1">Lebih dari Rp.50 Juta</label><br>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container d-flex align-content-center" style="height: 20vh;">
                    <a href="/">
                        <button class="button my-5 mx-3">SEBELUMNYA <span class="arrow"></span> </button>
                    </a>
                    <a href="/ttd">
                        <button class="button my-5">LANJUT <span class="arrow">→</span> </button>
                    </a>
                </div>
                <img src="{{ asset('frond_end/img/7.png') }}" class="position-fixed bottom-0 end-0 img-fluid hide-on-tablet" style="width: 55%;margin-right:-14px" alt="">
            </div>
        </div>
    </div>
@endsection