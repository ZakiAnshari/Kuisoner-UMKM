<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kuisoner-UMKM |  @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frond_end/css/style.css') }}">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">
            <div class="navbar">
                <div class="navbar-center">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('frond_end/img/logo kominfo.png') }}" alt="Logo" width="50" class="d-inline-block align-text-top">
                    </a>
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('frond_end/img/UMKM DIGITAL.png') }}" alt="Logo" width="130" class="d-inline-block align-text-top">
                    </a>
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('frond_end/img/logo modi kominfo.png') }}" alt="Logo" width="50" class="d-inline-block align-text-top">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script type="text/javascript">
        var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
        $('#clear').click(function (e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>
    {{-- sweetalert --}}
    <script>
        function displayAlert(){
            Swal.fire({
                title: "NAMA",
                text: "Apakah Anda yakin ingin menyelesaikan kuisoner UMKM GO ONLINE ?",
                imageUrl: "frond_end/img/8.png",
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: "Custom image",
                showCancelButton: true,
                confirmButtonText: "IYA",
                cancelButtonText: "TIDAK",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Selamat Anda sukses menyelesaikan kuisoner UMKM GO ONLINE",
                        text: "Apakah Anda ingin melakukan hal lain?",
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: "IYA",
                        denyButtonText: `TIDAK`
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Lakukan sesuatu jika pengguna memilih "IYA"
                            Swal.fire("Terima kasih!", "Silakan lanjutkan aktivitas Anda", "success");
                        } else if (result.isDenied) {
                            // Lakukan sesuatu jika pengguna memilih "TIDAK"
                            Swal.fire("Terima kasih!", "Sampai jumpa!", "info");
                        }
                    });
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>