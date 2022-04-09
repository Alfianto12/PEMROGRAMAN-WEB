<!DOCTYPE html>
<html>
    <head>
    <title>Altogoweb destination and History</title>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, intial-scale=1">
        <link rel="stylesheet" type="text/css" href="buku_tamu.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
        <style>

        </style>
    </head>
    <body>
    <body background="retina_wood.png"></body>
    <div class="header">
            <h1>ALTOGO</h1>
            <p>Daftar Pengunjung Web</p>
        </div>
        <div class="topnav">
        <a href="login.html">Back</a>
            <a href="Home.html">Home</a>
            <a href="Blog_penjelasan.html">Artikel</a>
            <a href="Gambarrujukan.html">Gambar</a>
            <a href="buku_tamu.php">Buku Tamu</a>
            <a href="starrate.html">Rate</a>
        </div>

        <div align="center">
            <h1>BUKU TAMU</h1>
            <p>Silahkan isi datar tamu di bawah ini untuk memberi pesan dan kesan anda</p>


            <div class="buku">
                <table border="0">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <tr><div>
                        <td><label for="">Nama Lengkap</label><b>      :</b></td>  
                            <td><input type="text" name="nama" id="nama" placeholder="Nama anda..."></td>
                        </div></tr>
                        <tr><div>
                            <td><label for="">Email</label><b>      :</b></td>    
                            <td><input type="text" name="email" id="email" placeholder="xxxxx@gmail.com"></td>
                        </div></tr>
                        <tr><div>
                            <td><label for="">Alamat</label><b>      :</b></td>    
                            <td><input type="text" name="alamat" id="alamat" placeholder="Alamat anda..."></td>
                        </div></tr>
                        <tr><div>
                            <td><label for="">Nomor HP</label><b>      :</b></td>    
                            <td><input type="text" name="nohp" id="nohp" placeholder="No Hp anda..."></td>
                        </div></tr>
                        <tr><div>
                            <td><label for="">Coment</label><b>      :</b></td>
                            <td><input type="text" name="coment" id="coment" placeholder="Tinggalkan coment..."></td>
                        </div></tr>
                        <tr><div>
                            <td coLspan="2"><center><input type="Submit" value="Kirim"><td>
                        </div></tr>
                    </form>
                </table>
            </div>

            <script>
                function validasi(){
                    var Nama = document.getElementById("nama").value;
                    var Email = document.getElementById("email").value;
                    var Alamat = document.getElementById("alamat").value;
                    var Nomorhp = document.getElementById("nohp").value;
                    var Coment = document.getElementById("coment").value;
                    
                    if (Nama !="" && Email !="" && Alamat !="" && Nomorhp !="" && Pesan !=""){
                        return true
                    }else{
                        alert ("Anda harus menigisi data dengan lengkap")
                    }
                }
            </script>
            <br><div class="php">
            <div>
                <?php
                    if(isset($_POST['nama'])){
                        $Nama = $_POST ['nama'];
                        $Email = $_POST ['email'];
                        $Alamat = $_POST ['alamat'];
                        $Nomorhp = $_POST ['nohp'];
                        $Coment = $_POST ['coment'];

                    echo"
                    <table >
                        <tr><td>
                        Nama     : $Nama<br/>
                        Email    : $Email<br/>
                        Alamat   : $Alamat<br/>
                        Nomor HP : $Nomorhp<br/>
                        Coment    : $Coment
                        </tr></td>
                    </table>";
                    }
                ?>
            </div>
            <hr align="center" width="100%" height="1px" color="#000000" size="5">
                <div align="left" class="medsos">
                    <div class="container" >
                        <ul>
                            <li>Contack Us : </li>
                            <li><a href="https://www.facebook.com/profile.php?id=100054254072635"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="https://youtube.com/channel/UCYjgXnMPNTo7VAsNA6RhE4Q/featured"><i class="fab fa-youtube-square"></i></a></li>
                            <li><a href="https://www.instagram.com/alfi.ian25/"><i class="fab fa-instagram-square"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send/?phone=6285712393358&text=i+recommend"><i class="fab fa-whatsapp-square"></i></a></li>
                        </ul>
                    </div>
                </div>
                

    </body>
    <hr align="center" width="100%" height="1px" color="#000000" size="5">
    <footer style="color:black">
        <center> Copyright &copy; Muhammad Alfi Dwi Yulianto</center>
    </footer>
</html>