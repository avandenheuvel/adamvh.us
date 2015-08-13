<?php 
define('_ROOT', "../"); 
define('_ACCESS', 0);
?>

<link rel="icon" type="image/png" href="../favicon.png"/>
<link href="../index.css" type="text/css" rel="stylesheet"/>
<link href="./style.css" type="text/css" rel="stylesheet"/>



<?php
//create_topic.php
include_once("../includes/header.php");
include 'connect.php';
include 'header.php';

echo '<h2>Create a topic</h2>';

if(!isset($_SESSION['role'])){
	echo 'Sorry, you do not have sufficient privelage to create a topic.';
	}else{
		if($_SESSION['role'] != 1)
		{
			//the user is not signed in
			echo 'Sorry, you have to be <a onclick="logBtnClick();">signed in</a> to create a topic.';
		}
		else
		{
		//the user is signed in
		if($_SERVER['REQUEST_METHOD'] != 'POST')
		{	
			//the form hasn't been posted yet, display it
			//retrieve the categories from the database for use in the dropdown
			$sql = "SELECT
						cat_id,
						cat_name,
						cat_description
					FROM
						categories";
			
			$result = mysqli_query($con,$sql);
			
			if(!$result)
			{
				//the query failed, uh-oh :-(
				echo 'Error while selecting from database. Please try again later.';
			}
			else
			{
				if(mysqli_num_rows($result) == 0)
				{
					//there are no categories, so a topic can't be posted
					if($_SESSION['role'] == 1)
					{
						echo 'You have not created categories yet.';
					}
					else
					{
						echo 'Before you can post a topic, you must wait for an admin to create some categories.';
					}
				}
				else
				{
			
					echo '<form method="post" action="">
						Subject: <input type="text" name="topic_subject" /><br />
						Category:'; 
					
					echo '<select name="topic_cat">';
						while($row = mysqli_fetch_assoc($result))
						{
							echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
						}
					echo '</select><br />';	
						
					echo 'Message: <br /><textarea name="post_content" /></textarea><br /><br />
						<input type="submit" value="Create topic" />
					 </form>';
				}
			}
		}
		else
		{
			//start the transaction
			$query  = "BEGIN WORK;";
			$result = mysqli_query($con,$query);
			
			if(!$result)
			{
				//Damn! the query failed, quit
				echo 'An error1 occured while creating your topic. Please try again later.';
			}
			else
			{
		
				//the form has been posted, so save it
				//insert the topic into the topics table first, then we'll save the post into the posts table
				$sql = "INSERT INTO 
							topics(topic_subject,
								   topic_date,
								   topic_cat,
								   topic_by)
					   VALUES('" . mysqli_real_escape_string($con,$_POST['topic_subject']) . "',
								   NOW(),
								   " . mysqli_real_escape_string($con,$_POST['topic_cat']) . ",
								   " . $_SESSION['userID'] . "
								   )";
						 
				$result = mysqli_query($con,$sql);
				if(!$result)
				{
					//something went wrong, display the error
					echo 'An error2 occured while inserting your data. Please try again later.<br /><br />' . mysqli_error();
					$sql = "ROLLBACK;";
					$result = mysqli_query($con,$sql);
				}
				else
				{
					//the first query worked, now start the second, posts query
					//retrieve the id of the freshly created topic for usage in the posts query
					$topicid = mysqli_insert_id();
					
					$sql = "INSERT INTO
								posts(post_content,
									  post_date,
									  post_topic,
									  post_by)
							VALUES
								('" . mysqli_real_escape_string($con,$_POST['post_content']) . "',
									  NOW(),
									  " . $topicid . ",
									  " . $_SESSION['userID'] . "
								)";
					$result = mysqli_query($con,$sql);
					
					if(!$result)
					{
						//something went wrong, display the error
						echo 'An error3 occured while inserting your post. Please try again later.<br /><br />' . mysqli_error();
						$sql = "ROLLBACK;";
						$result = mysqli_query($con,$sql);
					}
					else
					{
						$sql = "COMMIT;";
						$result = mysqli_query($con,$sql);
						
						//after a lot of work, the query succeeded!
						echo 'You have succesfully created <a href="topic.php?id='. $topicid . '">your new topic</a>.';
					}
				}
			}
		}
	}
}



include 'footer.php';
include '../includes/footer.php';?>

<script>
	document.getElementById("searchbar").style.display='none';
</script>