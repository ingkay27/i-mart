<html>
<head>
    <title>Signin To Your Account</title>
    <link rel="icon" href="../temp/img/superindo.png" type="icon/png">
    <!-- Bootstrap 4 Css -->
    <link rel="stylesheet" href="../temp/bs4/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../temp/bs4/animate.css" type="text/css">
    <script src="../temp/bs4/bootstrap.min.js"></script>

    <!-- Icon Fontawesome -->
    <script src="../temp/icon/fontawesome.js"></script>
    <script src="../temp/icon/solid.js"></script>

    <!-- Jquery -->
    <script src="../temp/bs4/jquery.min.js"></script>
    <script src="../temp/bs4/bootstrap-show-password.min.js"></script>

    <!-- Sweet Alert -->
    <script src="../temp/swal/sweetalert.min.js"></script>
</head>
<body class="bg-dark">

    <div class="card col-sm-3 p-3 shadow mx-auto rounded-0" style="margin-top: 100px;">
        <div class="card-body p-0">
            <img src="../temp/img/superindo.png" style="display: block; margin: auto; width: 110px;" class="mb-2">
            <h4 class="text-center">LOGIN</h4>
            <hr>

            <!-- Alert Error -->
            <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger mx-auto animated bounceIn">
                    <small><strong>Danger!</strong> <?php echo $_GET['error']; ?></small>
                </div>
            <?php } ?>

            <!-- Alert Error -->
            <?php if(isset($_GET['user_banned'])){ ?>
                <script>
                    swal('Error!!','User telah terbanned tidak dapat diakses, mohon hubungi admin!!','error');
                </script>
            <?php } ?>

            <!-- Form -->
            <form action="../proses/signin.php" method="POST">

                <!-- Username -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text rounded-0"><i class="fas fa-user"></i></span>
                    </div>
                        <input type="text" class="form-control form-control-sm rounded-0" name="username" placeholder="Username" required>
                </div>

                <!-- password -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text rounded-0"><i class="fas fa-lock"></i></span>
                    </div>
                        <input type="password" name="password" class="form-control form-control-sm border border-right-0 rounded-0" id="pass" placeholder="Password" required>
                    <div class="input-group-append">
                        <span id="check" class="input-group-text bg-white rounded-0"><i class="fas fa-eye-slash"></i></span>
                    </div>
                </div>

                <!-- Button -->
                <button class="btn btn-primary rounded-0 w-100 mb-2" name="login">Login</button>
            </form>
        </div>
    </div>

</body>
</html>

<!-- Show Hide Password -->
<script>
var x = document.getElementById("check");
var pass = document.getElementById("pass");
x.onclick = function(){
	if(pass.type === "password"){
		pass.type ='text';
		x.innerHTML = '<i class="fas fa-eye"></i>';
	}else{
		pass.type ='password'
		x.innerHTML = '<i class="fa fa-eye-slash"></i>';
	}
}
</script>

<!-- Auto Close Alert -->
<script type="text/javascript">
	var timeleft = 6;
	var downloadtime = setInterval(function(){
        $('.alert').show();
		timeleft -= 1;
		if (timeleft <= 0) {
			clearInterval(downloadtime);
			$('.alert').hide("slow");
		}
	}, 1000);
</script>