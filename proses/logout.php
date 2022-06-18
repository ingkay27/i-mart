<?php
session_start();
session_destroy();
header('location:../signin/signin.php?logout_sukses');
?>