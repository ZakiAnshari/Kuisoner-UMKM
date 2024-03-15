@extends('Header.frontend')

@section('title','pdf')
@section('content')
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <label class="form-control my-4">
                <input  type="checkbox" id="checklist" name="checklist">
                Dengan ini saya menyatakan bahwa semua data yang diisi adalah benar dan dapat dipertanggungjawabkan kebenaran dan keabsahan datanya.
            </label>
            <label class="form-control my-4">
                <input  type="checkbox" id="checklist" name="checklist">
                Saya telah membaca dan menyetujui Syarat dan Ketentuan dan Kebijakan Privasi untuk mengikuti Program ini.
            </label>
            <label class="form-control my-4">
                <input  type="checkbox" id="checklist" name="checklist">
                Saya bersedia mengikuti program pendampingan adopsi teknologi UMKM
                selama 6 (enam) bulan terhitung dari bulan Mei hingga bulan Oktober 2022.
            </label>
            <a href="link-ke-pdf-anda.pdf" class="btn btn-primary" download>
                <i class="fas fa-file-pdf"></i> Download PDF
            </a>

            <div class="container d-flex" style="height: 20vh;">
                <a href="/ttd">
                    <button class="button my-5 mx-3">SEBELUMNYA <span class="arrow"></span> </button>
                </a>
                <a onclick="displayAlert();">
                    <button  class="button my-5">LANJUT <span class="arrow">→</span> </button>
                </a>
            </div>

            <img src="{{ asset('frond_end/img/7.png') }}" class="position-fixed bottom-0 end-0 img-fluid hide-on-tablet" style="width: 55%;margin-right:-14px" alt="">
        </div>
    </div>
</div>
@endsection