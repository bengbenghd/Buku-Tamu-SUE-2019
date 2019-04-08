<!DOCTYPE html>
<html lang="en">
<head>
    <title>Peserta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/img/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>

    <div class="bg-contact3" style="background-image: url('assets/img/bg-01.jpg');">
        <div class="container-contact3">
            <div class="wrap-contact3">
                <form class="contact3-form validate-form" action="input.php" method="post">
                    <span class="contact3-form-title">
                        Penjaga Stand
                    </span>

                    <div class="wrap-input3 validate-input" data-validate="Name is required">
                        <input class="input3" type="text" name="nama" placeholder="Masukkan Nama" required="">
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="No Telp is required">
                        <input class="input3" type="text" name="telp" placeholder="Masukkan telp" required="">
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Asal Sekolah is required">
                        <input class="input3" type="text" name="asal" placeholder="Masukkan Asal Sekolah" required="">
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input3" type="text" name="email" placeholder="Masukkan Email" required="">
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate = "Alamat is required">
                        <textarea class="input3" name="alamat" placeholder="Masukkan Alamat" required=""></textarea>
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3">
                        <div>
                            <select class="selection-2" name="tanggal">
                                
                                                                <option>Day 3</option>
                            </select>
                        </div>
                        <span class="focus-input3"></span>
                    </div>

                    <div class="container-contact3-form-btn">
                        <button class="contact3-form-btn">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
