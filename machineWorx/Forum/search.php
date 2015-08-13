<!--Add the search bar to the page
	<form class="search" id="searchbar" name="search" method="post" action="<?=$_SERVER['PHP_SELF']?>">
        <li><input type="submit" class="searchElement" id="searchBtn" name="search" value="Search"></li>
        <li><input type="text" class="searchElement" name="find" placeholder="Search..."></li>
        <li><select name="field">
            <option value="topic_subject">Topic</option>
            <option value="topic_cat">Category</option>
            <option value="post_content">Content</option>
        </select>
        </li>        
        <input type="hidden" name="searching" value="yes">        
    </form>
-->

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

echo'<div class="searchResults">';

	 //This is only displayed if they have submitted the form 
	 echo"<h2>Search.php called</h2>";
	 $searching=(isset($_POST['searching']) ? $_POST['searching'] : null);
	 $find=(isset($_POST['find']) ? $_POST['find'] : null);
	 $field=(isset($_POST['field']) ? $_POST['field'] : null);
	 
	 if ($searching =="yes") 
	 {
	 	 
	 	echo "<h2>Results:</h2>"; 
	 
		 //If they did not enter a search term we give them an error 
		 if ($find == "") 
		 { 
			 echo "<p>You forgot to enter a search term</p>"; 
			 exit; 
		 } 
		 
		 // Otherwise we connect to our Database 
		 include 'connect.php'; 
		 
		 // We preform a bit of filtering 
		 $find = strtoupper($find); 
		 $find = strip_tags($find); 
		 $find = trim ($find); 
		 
		 //Structure the SQL query
		 $sql="
		 SELECT * 
		 FROM topics 
		 WHERE upper($field) LIKE'%$find%'
		 ";
		 
		 //Now we search for our search term, in the field the user specified 
		 $data = mysqli_query($con,$sql); 
		 
		 //And we display the results 
		 while($result = mysqli_fetch_array($data)) 
		 {
			 echo '<a href="topic.php?id=' . $result['topic_id'] . '">' . $result['topic_subject'] . '</a> - Posted on - ' . $result['topic_date'];
			 //Include first 50 characters of the description. 	
			 echo'</br>';
		 } 
		 
		 //This counts the number or results - and if there wasn't any it gives them a little message explaining that 
		 $anymatches=mysqli_num_rows($data); 
		 if ($anymatches == 0) 
		 { 
		 	echo "Sorry, but we can not find an entry to match your query<br><br>"; 
		 } 
		 
		 //And we remind them what they searched for 
		 echo "</br><b>Searched For:</b> " .$find," in field ", $field; 
	 } 
	 ?>
	 <br class="clearfloat"/>
 </div><!--End searchResults--> 
 