<?php
    session_start();
    require 'include/header.php';
    require 'function.php';

    if(isset($_COOKIE['id']) && isset($_COOKIE['key']) ){
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        $result = mysqli_query($conn, "SELECT username FROM admin WHERE id_admin = $id");
        $row = mysqli_fetch_assoc($result);
         
        if ($key === hash('sha256', $row['username'])){
            $_SESSION['login_admin'] = true;
        }
    }

    if(isset($_SESSION["login_admin"])) {
        header("Location: dashboard.php");
        exit;
    }

    if (isset ($_POST ["login"] ) ) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

        //cek username
        if(mysqli_num_rows($result) === 1) {

            //cek password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                $_SESSION["login_admin"] = true;

                if(isset($_POST['remember_me']) ){

                    setcookie('id', $row['id_admin'], time() + 60);
                    setcookie('key', hash('sha256', $row['username']), time() + 60);
                }

                header("Location: dashboard.php");
                exit;
            }
        }

        $error = true;
    }
?>


<body id="page-top">

<?php if (isset ($error) ) : ?>
    <div class="card-header text-center">USERNAME / PASSWORD SALAH</div>
    <!-- <p style="color: red; font-style:italic;"> username / password salah</p> -->
<?php endif; ?>

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-5 bg-body">
                <div class="card-header">LOGIN ADMIN</div>

                <div class="card-body">
                    <form method="POST" action="">
                    <!-- http://localhost/Pengembangan-Aplikasi-Berbasis-Web/admin/dashboard.php"> -->
                        
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">USERNAME</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" 
                                name="username" required autocomplete="username" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">PASSWORD</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <input id="remember_me" type="checkbox" class="form-control text-md-right offset-md-7" name="remember_me" 
                            style="width:18px">
                            <div class="col-md-4">
                                <label for="remember_me" class="col-form-label">remember me</label>
                            </div>  
                        </div>

                        <br>
                        <div class="form-group row mb-0" style="text-align: right; align:center">
                            <div class="col-md-10">
                                <a class="btn btn-secondary" style="width:55pt; margin-right: 20px" href="http://localhost/Pengembangan-Aplikasi-Berbasis-Web/dashboard.php">
                                    BACK
                                </a>
                                <button type="submit" class="btn btn-primary" name="login">
                                    LOGIN
                                </button>
                            </div>
                        </div>
                    </form>
                
                </div>
                <a href="http://localhost/Pengembangan-Aplikasi-Berbasis-Web/admin/register_admin.php" class="btn btn-success">
                    REGISTER
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html> 