<?php 
define('_ROOT', "../"); 
define('_ACCESS', 0);
?>

<link rel="icon" type="image/png" href="../favicon.png"/>
<link href="../index.css" type="text/css" rel="stylesheet"/>
<link href="./style.css" type="text/css" rel="stylesheet"/>

<?php
//create_cat.php
include_once("../includes/header.php");
include 'connect.php';
include_once 'header.php';

$sql = "SELECT
			topic_id,
			topic_subject
		FROM
			topics
		WHERE
			topics.topic_id = " . mysqli_real_escape_string($con,$_GET['id']);
			
$result = mysqli_query($con,$sql);

if(!$result)
{
	echo 'The topic could not be displayed, please try again later.';
}
else
{
	if(mysqli_num_rows($result) == 0)
	{
		echo 'This topic doesn&prime;t exist.';
	}
	else
	{
		while($row = mysqli_fetch_assoc($result))
		{
			//display post data
			echo '<table class="topic" border="1">
					<tr>
						<th colspan="2">' . $row['topic_subject'] . '</th>
					</tr>';
		
			//fetch the posts from the database
			$posts_sql = "SELECT
						posts.post_topic,
						posts.post_content,
						posts.post_date,
						posts.post_by,
						tblusers.UserID,
						tblusers.User_Username
					FROM
						posts
					LEFT JOIN
						tblusers
					ON
						posts.post_by = tblusers.UserID
					WHERE
						posts.post_topic = " . mysqli_real_escape_string($con,$_GET['id']);
						
			$posts_result = mysqli_query($con,$posts_sql);
			
			if(!$posts_result)
			{
				echo '<tr><td>The posts could not be displayed, please try again later.</tr></td></table>';
			}
			else
			{
			
				while($posts_row = mysqli_fetch_assoc($posts_result))
				{
					echo '<tr class="topic-post">
							<td class="user-post">' . $posts_row['User_Username'] . '<br/>' . date('d-m-Y H:i', strtotime($posts_row['post_date'])) . '</td>
							<td class="post-content">' . htmlentities(stripslashes($posts_row['post_content'])) . '</td>
						  </tr>';
				}
			}
			
			if(!isset($_SESSION['role']))
			{
				echo '<tr><td colspan=2>You must be <a onclick="logBtnClick();">signed in</a> to reply. You can also <a href="signup.php">sign up</a> for an account.';
			}
			else
			{
				//show reply box
				echo '<tr><td colspan="1"><h2>Reply:</h2>
						<form method="post" action="reply.php?id=' . $row['topic_id'] . '">
							<textarea name="reply-content"></textarea><br /><br />
							<input type="submit" value="Submit reply" /> <br/>
						</form></td>';
				
				echo '<td colspan="1"> <h4>Upload Image:</h4>
							<form action="uploadFile.php" method="post" enctype="multipart/form-data">
								<label for="file">Filename:</label>
								<input type="file" name="file" id="file">
								<input type="submit" name="submit" value="Submit">
							</form>
						</td></tr>';
			}
			//finish the table
			echo '</table>';
		}
	}
}

include 'footer.php';
include '../includes/footer.php';?>
<script>
	document.getElementById("searchbar").style.display='none';
</script>