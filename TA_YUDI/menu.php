<!-- Nav -->
<?php session_start();
if(isset($_SESSION["MM_Username"])){
 ?>
					<div id="menu">

						<ul>
                         <li><img src='http://localhost/TA_YUDI/images/index.jpg' width="100" height="40" /></li>
                                <?php

if ($_SESSION['MM_UserGroup'] == "Super Administrator")
{
    // tampilkan menu untuk superadmin
	echo "                       
<li><a href='http://localhost/TA_YUDI/index.php'>Home</a></li>
	<li><a href='http://localhost/TA_YUDI/input/alat/index.php'>Alat</a></li>
	<li><a href='http://localhost/TA_YUDI/input/user/index.php'>User</a></li>
	<li><a href='http://localhost/TA_YUDI/input/uar/index.php'>UAR</a></li>
	<li><a href='http://localhost/TA_YUDI/input/operator/index.php'>Tambah User</a></li>
	<li><a href='http://localhost/TA_YUDI/update/update-password.php'>Ganti Password</a></li>
	<li><a href='http://localhost/TA_YUDI/logout.php'>Logout</a></li>"; 
}
else if ($_SESSION['MM_UserGroup'] == "Operator")
{
    // tampilkan menu untuk admin 
    echo "<li><a href='http://localhost/TA_YUDI/index.php'>Home</a></li>
	<li><a href='http://localhost/TA_YUDI/input/produk/index.php'>Produk</a></li>
	<li><a href='http://localhost/TA_YUDI/input/Analisa/index.php'>Analisa</a></li>
	<li><a href='http://localhost/TA_YUDI/update/update-password.php'>Ganti Password</a></li>
	<li><a href='http://localhost/TA_YUDI/logout.php'>Logout</a></li>";
}
else
{
    // tampilkan menu untuk user biasa
    echo "http://localhost/TA_YUDI/login.php";
} ?></li>
							
                    

                  <?php
}else{
?>
					<div id="menu">
						<ul>
					                         <li><img src='http://localhost/TA_YUDI/images/index.jpg' width="100" height="40" /></li>

                            <li><a href="login.php">Login</a></li>
						</ul>
					</nav>
                    <?php }
?>
</ul>
</div>