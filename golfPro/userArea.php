<?php
	session_start();
?>



<?php
//require_once('PasswordVerify.php');
require_once('login.php');
if($_SESSION['firstLogin'] ==1){
	//echo'first login';
	//Header("Location: http://adamvh.us/megtec/update.php");
	echo" <script>location.href='./update.php'</script>";
}
?>
<body>
	<div class="container">
		<?php
			include "header.php";
		?>
		<div class="container-fluid">
			<div class="row row-centered">
				<div class="col-lg-4  col-centered">
					<img src="./Pics/splicer.jpg" class="img-responsive img-circle" />
					<!-- Keep sm & xs from floating left -->
	  			<div class="clearfix visible-md"></div>
						<?php
							php_file_tree("Splicer", "[link]");
						?>
				</div>
				
				<div class="col-lg-4  col-centered">
					<img src="./Pics/dryer.jpg" class="img-responsive img-circle" />
					<!-- Keep sm & xs from floating left -->
	  			<div class="clearfix visible-md"></div>
						<?php
							php_file_tree("Dryer", "[link]");
						?>
				</div>
				
				<div class="col-lg-4   col-centered">
					<img src="./Pics/rto.jpg" class="img-responsive img-circle" />
					<!-- Keep sm & xs from floating left -->
	  			<div class="clearfix visible-md"></div>
						<?php
							php_file_tree("Oxidizer", "[link]");
						?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3></h3>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3></h3>
                        
                    <div class="footer-col col-md-4">
                        <h5></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <a href="http://adamvh.us">adamVh</a> 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>
