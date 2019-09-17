<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bulma-0.7.5/css/bulma.min.css">     
    <link rel="stylesheet" href="./css/style.css">
    <title>Sign Up Page</title>
</head>
<body>
    <div class="backgroundAll"></div>     
    <nav class="navbar" role="navigation" aria-label="main navigation">         
        <div class="navbar-brand">             
            <a class="navbar-item" href="./"> 
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">             
            </a>         
        </div>     
    </nav>     
    <div class="columns" style="margin-top: 80px;">         
        <div class="column is-one-quarter" style="margin:auto;">             
            <div class="card">                
                <header class="card-header">                     
                    <p class="card-header-title">                     
                    Sign Up Page
                    </p>                 
                </header>                 
                <form action="./proses/prosesRegister.php" method="POST">
                <div class="card-content">                     
                    <div class="field">                     
                    <p class="control">                     
                    <label class="label">Name</label>                         
                        <input class="input" type="text" name="name" id="name" placeholder="Name" value="<?php echo $name; ?> ">                     
                    </p>                     
                    </div>                     
                    <div class="field">                     
                    <p class="control">                     
                    <label class="label">Email</label>                         
                    <input class="input" type="email" name="email" id="email"placeholder="Email" value="<?php echo $email; ?> ">
                    </p>                     
                    </div>
                    <div class="field">                     
                    <p class="control">                         
                        Jenis Kelamin                     
                        <label><input class="radio" type="radio" name="jeniskelamin" id="jenis_kelamin" value="<?php echo $jeniskelamin; ?> ">Pria</label> 
                        <label><input class="radio" type="radio" name="jeniskelamin" id="jenis_kelamin" value="<?php echo $jeniskelamin; ?> ">Wanita</label>                 
                    </p>                     
                    </div>
                    <div class="field">                     
                    <p class="control">                         
                        <label class="label">Nomor Telepon</label>                         
                        <input class="input" type="text" name="nomortelp" placeholder="Nomor Telepon" id="nomortelp" value="<?php echo $nomortelp; ?> ">                     
                    </p>                     
                    </div>
                    <div class="field">                     
                    <p class="control">                         
                        <label class="label">Tanggal Lahir</label>                         
                        <input class="input" type="date" name="tanggallahir" id="tanggallahir" value="<?php echo $tanggallahir; ?> ">                     
                    </p>                     
                    </div>                     
                        <div class="field">                     
                        <p class="control">                         
                            <label class="label">Kata Sandi</label>                         
                            <input class="input" type="password" name="password" placeholder="Password"  value="<?php echo $password; ?> ">                     
                        </p>                     
                        </div>                       
                    </div>                 
                    <footer class="card-footer"> 
                    <input name="store" type="submit"  value="Sign Up" style="padding: 0px !important" class="card-footer-item button is-warning">                 
                    </footer>             
                </form>
                </div>             
                <small>Already have account ? <a href="./login_page.php">Login</a></small>         
            </div>     
        </div> 
</body>
</html>
=======
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="posisi.css">
        <title>Register</title>
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
                    <form class="posisi_form" action="./proses/prosesRegister.php" method="POST">
                            <div class="form-group">
                                    <h3 style="text-align: center">Daftar</h3>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Masukan Nama Anda</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Masukan Nama" name="nama_jualsapi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan email"  name="email_jualsapi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kata Sandi</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Sandi"  name="password_jualsapi">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Sandi"  name="password_jualsapi">    
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputPassword2">Jenis Kelamin</label>
                                <br>
                                <input class="textRadio" type="radio" id="laki"  name="jk_jualsapi" required> Pria
                                <input class="textRadio" type="radio" id="perempuan" name="jk_jualsapi" required> Wanita
                                <br>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                        <label for="exampleInputName1">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nomor Telepon" name="notelp_jualsapi">
                                </div>
                            </div>

                            <label for="inputDate">Tanggal Lahir</label>

                            <div class="form-group form-inline">
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                            <option selected>Tanggal</option>
                                            <option value="11" name="tgllahir_jualsapi">1</option>
                                            <option value="12" name="tgllahir_jualsapi">2</option>
                                            <option value="13" name="tgllahir_jualsapi">3</option>
                                          </select>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                        <option selected>Bulan</option>
                                        <option value="21" name="tgllahir_jualsapi">Januari</option>
                                        <option value="22" name="tgllahir_jualsapi">Februari</option>
                                        <option value="23" name="tgllahir_jualsapi">Maret</option>
                                    </select>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                            <option selected>Tahun</option>
                                            <option value="31" name="tgllahir_jualsapi">1998</option>
                                            <option value="32" name="tgllahir_jualsapi">1999</option>
                                            <option value="33" name="tgllahir_jualsapi">2000</option>
                                    </select>
                            </div>
                            <button type="submit" class="btn button_form" name="simpan_jualsapi">Masuk</button>
                            <p>
                                <a>Sudah punya Akun?</a>
                                <a href="login_page.php">Masuk sekarang</a>
                            </p>
                        </form>
            </div> 
            <a >
                <img src="https://cdn.pixabay.com/photo/2016/06/28/17/26/cow-1485012_960_720.png" class = "image_login">
            </a>                            
    </body>
</html>
>>>>>>> e3acc528bbaa3343df4d0d2824ee73bc11ff22eb
