<?php


include "koneksi.php";

// Update data
if(isset($_POST['daftarakun'])){
    $namau = $_POST['namau'];
    $username = $_POST['username'];
    $password = $_POST['passwordmu'];


    $updatedata = mysqli_query($koneksi,"INSERT INTO `admin_user` (`id`, `username`, `nama`, `password`) VALUES ('', '$username', '$namau', MD5('$password'));");
    //cek apakah berhasil
    if ($updatedata){

        echo " <div class='alert alert-success'>
            <strong>Success!</strong> Halaman akan di Refresh setelah 2 Detik.
          </div>
        <meta http-equiv='refresh' content='2; url= index.php'/>  ";
        } else { echo "<div class='alert alert-warning'>
            <strong>Gagal!</strong> Halaman akan di Refresh setelah 2 Detik.
          </div>
         <meta http-equiv='refresh' content='2; url= index.php'/> ";
        }
};

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/5d3285099a.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login Page</title>

    <style>
        .loginForm {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #f3f3f3;
            box-shadow: 1px 1px 4px #dcdcdc;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="loginForm col-lg-5 col-md-8 col-sm-8 p-4">
            <div class="loginHeader pt-3 pb-4">
                <h4>LOGIN</h4>

            </div>
            <div class="loginBody">
                <form action="ceklogin.php" method="post">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg" name="username"
                                placeholder="Username...">
                            <div class="input-group-append">
                                <span class="input-group-text p-3"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg" name="password"
                                placeholder="Password...">
                            <div class="input-group-append">
                                <span class="input-group-text p-3"><i class="fa fa-lock"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <small><a href="#" data-toggle="modal" data-target="#daftarAkun">Belum Punya Akun? Daftar
                                Sekarang</a></small>
                        <br>
                        <button class="btn btn-block btn-lg btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="daftarAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="Nama User">Nama User</label>
                            <input class="form-control" type="text" name="namau" required placeholder="Masukkan nanamu">
                        </div>
                        <div class="form-group"><label for="username">Usernam</label>
                            <input class="form-control" type="text" name="username" required
                                placeholder="Masukkan Username">
                        </div>
                        <div class="form-group"><label for="password">Password</label>
                            <input class="form-control" name="passwordmu" type="password" required placeholder="masukkan passwordmmu">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="daftarakun" class="form-control btn btn-primary">Save
                            changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>