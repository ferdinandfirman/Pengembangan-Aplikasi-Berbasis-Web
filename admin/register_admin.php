<?php
	require 'include/header.php';
    require 'function.php';

    if (isset($_POST ["register"] ) ) {

        if(registrasi($_POST) > 0) {
            echo "<script>
                alert('admin baru berhasil ditambahkan!');

            </script>";
        } else {
            echo mysqli_error($conn);
        }

    }
?>


<body id="page-top">

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-5 bg-body">
                <div class="card-header">REGISTER ADMIN</div>

                <div class="card-body">
                    <form method="POST" action="">
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
                            <label for="password2" class="col-md-4 col-form-label text-md-right">KONFIRMASI PASSWORD</label>

                            <div class="col-md-6">
                                <input id="password2" type="password" class="form-control" name="password2">
                            </div>
                        </div>

                        <br>
                        <div class="form-group row mb-0" style="text-align: right;margin-right: 110px">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success" name="register">
                                   REGISTER
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <a href="http://localhost/Pengembangan-Aplikasi-Berbasis-Web/admin/login_admin.php" class="btn btn-primary">
                    LOGIN
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html> 