<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="posisi.css">
        <!-- <link rel="stylesheet" href="./css/bulma-0.7.5/css/bulma.min.css"> -->
        <title>Log In</title>
    </head>
    <body>
            <nav class="navbar">
                    <a class="navbar-brand" href="./">
                      <img src="https://cdn.pixabay.com/photo/2016/06/28/17/26/cow-1485012_960_720.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    </a>
            </nav>
            <div class="deret_link">
                    <a href="#" style="color: white">Tentang Kami</a> <a style="color: white"> | </a>
                    <a href="#" style="color: white">Pusat Bantuan</a>  <a style="color: white">  | </a>
                    <a href="#" style="color: white">Hubungi Kami</a>
            </div>

            <div class="kotak_form">
                    <form class="posisi_form" method="POST" action="./proses/prosesLogin.php">
                            <div class="form-group">
                                    <h3 style="text-align: center">Masuk</h3>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email" name="email_jualsapi" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kata Sandi</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Sandi" name="password_jualsapi" required>
                            </div>
                            <button type="submit" class="btn button_form" name="login_jualsapi">Masuk</button>
                            <p>
                                <a>Belum punya Akun?</a>
                                <a href="register_page.php">Daftar sekarang</a>
                            </p>
                        </form>
            </div> 
            <a >
                <img src="https://cdn.pixabay.com/photo/2016/06/28/17/26/cow-1485012_960_720.png" class = "image_login">
            </a>                            
    </body>
</html>
