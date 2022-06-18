<?php require "session.php"; ?>
<?php require "header.php" ?>

	<div class="content-wrapper">
		<div class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1 class="text-dark">DASHBOARD</h1>
	          </div><!-- /.col -->
	        </div><!-- /.row -->
	      </div><!-- /.container-fluid -->
	    </div>
		<div class="content-header">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-8">
		          <h1 class="m0 text-dark">SELAMAT DATANG Di SUPERINDO</h1>
		          <p>Hallo Nama Anda <?= $_SESSION['username'] ?> Telah Login Sebagai <?= $_SESSION['level'] ?></p>
		        </div>
		      </div>
		    </div>
		  </div>
	</div>

<?php require "footer.php" ?>