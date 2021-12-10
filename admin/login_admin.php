<?php
	require 'include/header.php';
?>


<body id="page-top">

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-5 bg-body">
                <div class="card-header">LOGIN ADMIN</div>

                <div class="card-body">
                    <form method="POST" action="file:///C:/Users/Ferdinand/Desktop/Semester 9/PABW/Tugas Sesi 5/admin/dashboard.html">
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
                                <input id="password" type="password" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0" style="text-align: right;margin-right: 110px">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   LOGIN
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> 