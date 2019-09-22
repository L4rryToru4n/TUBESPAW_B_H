<!DOCTYPE html>
<html>
    <head>
        
    <link rel="shortcut icon" href="./mockup/favicon.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="posisi.css">
        <title>Jual Sapi | Register</title>
    </head>
    <body>
            <nav class="navbar">
                    <a class="navbar-brand" href="./">
                        <!--<img src="https://cdn.pixabay.com/photo/2016/06/28/17/26/cow-1485012_960_720.png" width="30" height="30" class="d-inline-block align-top" alt="">-->
                        <img src="./mockup/LOGO.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    </a>
            </nav>
            <div class="deret_link">
                    <a href="./about.html" style="color: white">Tentang Kami</a> <a style="color: white"> | </a>
                    <a href="./help.html" style="color: white">Pusat Bantuan</a>  <a style="color: white">  | </a>
                    <a href="./contact.html" style="color: white">Hubungi Kami</a>
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
                            <!-- <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Sandi"  name="password_konfirm">    
                            </div> -->
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
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="tgllahir_jualsapi_hari">
                                            <option value="Pilih Tanggal" selected>Tanggal</option>
                                            <?php
                                            for($i=date('Y'); $i>1985; $i--) {
                                                $birthdayYear = '';
                                                $selected = '';
                                                if ($birthdayYear == $i) $selected = ' selected="selected"';
                                                print('<option value="'.$i.'"'.$selected.'>'.$i.'</option>'."\n");
                                            }
                                        ?>
                                          </select>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="tgllahir_jualsapi_bulan">
                                        <option selected>Bulan</option>
                                        <option value="1">Januari</option>
                                        <option value="2" name="tgllahir_jualsapi">Februari</option>
                                        <option value="3" name="tgllahir_jualsapi">Maret</option>
                                        <option value="4" name="tgllahir_jualsapi">April</option>
                                        <option value="5" name="tgllahir_jualsapi">Mei</option>
                                        <option value="6" name="tgllahir_jualsapi">Juni</option>
                                        <option value="7" name="tgllahir_jualsapi">Juli</option>
                                        <option value="8" name="tgllahir_jualsapi">Agustus</option>
                                        <option value="9" name="tgllahir_jualsapi">September</option>
                                        <option value="10" name="tgllahir_jualsapi">Oktober</option>
                                        <option value="11" name="tgllahir_jualsapi">November</option>
                                        <option value="12" name="tgllahir_jualsapi">Desember</option>
                                    </select>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="tgllahir_jualsapi_tahun">
                                            <option selected>Tahun</option>
                                            <option value="1985">1985</option>
                                            <option value="1986" name="tgllahir_jualsapi">1986</option>
                                            <option value="1987" name="tgllahir_jualsapi">1987</option>
                                            <option value="1988" name="tgllahir_jualsapi">1988</option>
                                            <option value="1989" name="tgllahir_jualsapi">1989</option>
                                            <option value="1990" name="tgllahir_jualsapi">1990</option>
                                            <option value="1991" name="tgllahir_jualsapi">1991</option>
                                            <option value="1992" name="tgllahir_jualsapi">1992</option>
                                            <option value="1993" name="tgllahir_jualsapi">1993</option>
                                            <option value="1994" name="tgllahir_jualsapi">1994</option>
                                            <option value="1995" name="tgllahir_jualsapi">1995</option>
                                            <option value="1996" name="tgllahir_jualsapi">1996</option>
                                            <option value="1997" name="tgllahir_jualsapi">1997</option>
                                            <option value="1998" name="tgllahir_jualsapi">1998</option>
                                            <option value="1999" name="tgllahir_jualsapi">1999</option>
                                            <option value="2000" name="tgllahir_jualsapi">2000</option>
                                            <option value="2001" name="tgllahir_jualsapi">2001</option>
                                            <option value="2002" name="tgllahir_jualsapi">2002</option>
                                            <option value="2003" name="tgllahir_jualsapi">2003</option>
                                            <option value="2004" name="tgllahir_jualsapi">2004</option>
                                            <option value="2005" name="tgllahir_jualsapi">2005</option>
                                            <option value="2006" name="tgllahir_jualsapi">2006</option>
                                            <option value="2007" name="tgllahir_jualsapi">2007</option>
                                            <option value="2008" name="tgllahir_jualsapi">2008</option>
                                            <option value="2009" name="tgllahir_jualsapi">2009</option>
                                            <option value="2010" name="tgllahir_jualsapi">2010</option>
                                            <option value="2011" name="tgllahir_jualsapi">2011</option>
                                            <option value="2012" name="tgllahir_jualsapi">2012</option>
                                            <option value="2013" name="tgllahir_jualsapi">2013</option>
                                            <option value="2014" name="tgllahir_jualsapi">2014</option>
                                            <option value="2015" name="tgllahir_jualsapi">2015</option>
                                            <option value="2016" name="tgllahir_jualsapi">2016</option>
                                            <option value="2017" name="tgllahir_jualsapi">2017</option>
                                            <option value="2018" name="tgllahir_jualsapi">2018</option>
                                            <option value="2019" name="tgllahir_jualsapi">2019</option>
                                    </select>
                            </div>
                            <button type="submit" class="btn button_form" name="simpan_jualsapi">Daftar</button>
                            <p>
                                <a>Sudah punya Akun?</a>
                                <a href="login_page.php">Masuk sekarang</a>
                            </p>
                        </form>
            </div> 
            <a ><!--<img src="https://cdn.pixabay.com/photo/2016/06/28/17/26/cow-1485012_960_720.png" class = "image_login">-->
                <img src="./mockup/LOGO.png" class = "image_login">
            </a>                            
    </body>
</html>
