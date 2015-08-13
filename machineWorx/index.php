<?php 
define('_ROOT', "./"); 
define('_ACCESS', 0);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>machineWorx</title>
        <link rel="icon" type="image/png" href="./favicon.png"/>
		<link href="./index.css" type="text/css" rel="stylesheet"/>
        <link href="./main.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src="./fade.js"></script>
	</head>
	
	<body>
		<?php include_once("./includes/header.php");?>
			<div id="top">
            	<div class="textUnderlay">
            	<h1>Online Equipment Managment:</h1>
                
                machineWorx is an online tool for managing equipment maintenance. Whether in house or across a distributed installed base. It includes tools to build customized equipment checklists and create reports to evaluate equipment and component life cycles. Thus, allowing you to plan and prioritize repair activities. machineWorx also offer tools for sharing and capturing knowledge within our online community: A searchable web forum with notifications to product champions and A Wiki page allowing users to create and update check/calibration procedures. All components are linked to provide maximum knowledge sharing.
                    
                <img id="bottomSlide" src="./images/checklist.png"/>
            	<img id="topSlide" src="./images/gear.png"/>
                </div>
            </div>
            <a 
			<?php 
				if(isset($_SESSION['role'])){
					if($_SESSION['role']==1){
						echo "href=\"./Admin\"";
					}
					if($_SESSION['role']==2){
						echo "href=\"./Tech\"";
					}
					if($_SESSION['role']==3){
						echo "href=\"./Customer\"";
					}
				}else{
					echo "onclick=\"alert('You must be logged in to manage equipment.');\"";
				} 
			?>>
                <div id="left">
                    <div class="pic-float-left"></div>
                    <div class="textUnderlay">
                        <h1>Equipment</h1>
                        Manage your equipment assets. Print reports, view service history, and track data points.
                    </div>
                </div>
            </a>
            <a href="./Forum">
                <div id="mid">
                	<div class="pic-float-left"></div>                
                    <div class="textUnderlay">
                        <h1>Forum</h1>
                        Post your questions to the Technician Forum.
                    </div>
                </div>
            </a>
            <a href="#">
                <div id="right">
    				<div class="pic-float-left"></div>
                    <div class="textUnderlay">
                        <h1>Wiki</h1>
                        Information about machine checks, calibration procedures, recommended repairs, tools needed, etc.
                    </div>
                </div>
            </a>
        <?php include_once("./includes/footer.php");?>
	</body>
</html>