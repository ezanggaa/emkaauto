<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Emka Auto</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
</head>


<body>
    <div class="pg-login">
        <div class="box-login box-uk">
            <div class="box-head">
                <h1>LOGIN</h1>
                <p>Masukkan Username dan Password Anda</p>
            </div>
            <div class="box-body">
                <form action="" method="POST">
                    <div class="form-login">
                        <label>Username</label>
                        <input type="text" name="user" placeholder="Masukkan Username..." class="input-ct">
                    </div>
                    <div class="form-login">
                        <label>Password</label>
                        <input type="password" name="pass" placeholder="Masukkan Password..." class="input-ct">
                    </div>
                    <input type="submit" name="submit" value="LOGIN" class="btn-login">
                </form>

                <?php
                    include('config.php');
                    session_start();

                    if(isset($_POST['submit'])){

                        $user = mysqli_real_escape_string($koneksi, $_POST['user']);
                        $pass = mysqli_real_escape_string($koneksi, $_POST['pass']);

                        $cek = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '".$user."' ");
                        if(mysqli_num_rows($cek) > 0){

                            $d = mysqli_fetch_object($cek);
                            if(md5($pass) == $d->password){
                                
                                $_SESSION['status_login'] = true;
                                $_SESSION['uid'] = $d->id_pgn;
                                $_SESSION['uname'] = $d->nama;
                                $_SESSION['ulevel'] = $d->level;

                                echo "<script>window.location = 'index.php'</script>";

                            }else{
                                echo '<div class="alert-lg">Password salah.</div>';
                            }

                        }else{
                            echo '<div class="alert-lg">Username tidak ditemukan.</div>';
                        }
                    }

                ?>

            </div>
        </div>
    </div>
</body>

</html>