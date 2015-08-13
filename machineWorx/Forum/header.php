<div id="forumWrapper">
	<h1>Technical forum</h1>
		
	<form  name="search" method="post" action="search.php">
        <div id="forum-menu">
        	<ul id="forum-navbar">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="create_topic.php">Create a topic</a></li>
                <li><a href="create_cat.php">Create a category</a></li>
	            
	            <div id="searchbar">	
			        <li><input type="text" class="searchElement" name="find" placeholder="Search..."></li>
			        <li><select class="searchElement" name="field">
			            <option value="topic_subject">Topic</option>
			            <option value="topic_cat">Category</option>
			            <option value="post_content">Content</option>
			        </select></li>
			        <li><input type="submit" class="searchElement" id="searchBtn" name="search" value="Search"></li>
		        </div> 
            </ul>
        </div>
    	<input type="hidden" name="searching" value="yes">
	</form>

	<div id="content">