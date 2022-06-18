<?php require "session.php"; 
	$id = $_GET['id'];
?>
<?php require "header.php" ?>

	<div class="content-wrapper">
		<div class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1 class="text-dark">TRANSAKSI BERHASIL</h1>
	          </div><!-- /.col -->
	        </div><!-- /.row -->
	      </div><!-- /.container-fluid -->
	    </div>
		<div class="content-header">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-8">
		          <a href="transaksi.php">
		          	<button class="btn btn-secondary"><i class="fas fa-undo"> BACK</i></button>
		          </a>
		          <a href="transaksi_struk.php?id=<?= $id ?>" target="_blank">
		          	<button class="btn btn-primary"><i class="fas fa-print"> PRINT</i></button>
		          </a>
		        </div>
		      </div>
		    </div>
		  </div>
	</div>

<?php require "footer.php" ?>