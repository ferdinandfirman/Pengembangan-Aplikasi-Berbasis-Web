<?php
    session_start();

    if(isset($_SESSION["login_admin"])) {
        header("Location: dashboard.php");
        exit;
    }
	require 'include/header.php';
    require 'function.php';

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

                        <br>
                        <div class="form-group row mb-0" style="text-align: right;margin-right: 110px">
                            <div class="col-md-8 offset-md-4">
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