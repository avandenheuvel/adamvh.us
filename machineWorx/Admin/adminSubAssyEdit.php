<script>
	/*
	 * Search check names to find appropriate description
	 * In=<object> element holding the name
	 * load value into checkDescDetail textarea using JQuery .val() function
	 */
	function populateDesc(In){
		alert(In.value);
		$.ajax({
			//I think I need to build this secondary query into this file and call back to itself..?
		})
		var description = ""
		for (var i = 0; i<checkNamesArray.length; i++){
			if(checkNamesArray[i].Check_Name == In.value){
				description = checkNamesArray[i].Check_Desc
				$('#checkDescDetail').val(description);
				switch (checkNamesArray[i].Check_Type){
					case "Data Check":
					document.getElementById("data").checked=true;
					break;					
					case "Item Check":
					document.getElementById("item").checked=true;
					break;
					case "":
					document.getElementById("item").checked=false;
					document.getElementById("data").checked=false;
				}
				return;
			}else{
				$('#checkDescDetail').val("No descriptin found for "+In);
			}
		}		
	}
</script>

<?php
	/**
	 * Connect to the databese and retrieve available items/checks
	 * Creates an array $arr[] used to store retrieved db values 
	 * encoded in <script> used to generate web page
	 */

	include '../includes/dbconnect.php';
	
	$options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	
	try{
		$db = new PDO($dsn,$username,$password,$options);
			
		
		$SQL = $db->prepare("Select * from tblcomponents");
		$SQL->execute();//execute the SQL query
		$Comp = $SQL->fetch();//Gets the first row of the table
		
		//loop through all tuples in relation	
		while($Comp != null){
			
			//Gets the current row value from the appropriate column
			//$CheckID = $Check['CheckID'];
			$CompName = $Comp['Component_Name'];
			$CompDesc = $Comp['Component_Desc'];
			
			$arr[] = array('Component_Name' => $CompName, 'Component_Desc' => $CompDesc);
			
			$Comp = $SQL->fetch();//fetch the next row*/
		}
		
		//echo json_encode($arr); //Used for troubleshooting of JSON data
		
		$SQL->closeCursor(); //disconnect from the server
		$db = null; // Clear memory
	
	}catch(PDOException $e){
		$error_message = $e->getMessage();		
		echo("<p>Database error: $error_message</p>");
	}
?>

	<form name="adminSubAssyEdit" Method="post" action="">
		<div id="editContainer">
		<h2>Edit Sub-Assembly</h2>
		<p>Edit your sub assembly by picking items from the available items section on the left and moving them
			to the selected items area. If the check you require is not available it can be made on the
			<a href class="link"onclick='setUpAdmin("Create Item"); return false;'>Create Items</a> page.</p><!--Calls function in adminOptions.php-->

		<h4>Select SubAssembly</h4><select class="dropdown" id="available" name="available" onchange="populateDesc(this);">
			<script>//Define options for building list of available checks to edit
				
				var Options=<?=json_encode($arr)?>;
				
				for(var i = 0; i<Options.length; i++ ){
					var link = document.createElement('option');
					link.className = "";
					link.textContent = Options[i].Component_Name;
					link.href = '#';
					//link.style.width="100%";
					//link.style.margin="1px";
					//link.onclick = function(){setUpAdmin(this)};
					document.getElementById('available').appendChild(link);
				}
			</script>
		</select>
		</br>
			<div id="column1">
			<h3>Available items</h3>	
				<select multiple size=12 id="select1" class="selectLarge">
					<script>//Define options for building list of available checks to edit
					
					for(var i = 0; i<Options.length; i++ ){
						var link = document.createElement('option');
						link.className = "";
						link.textContent = Options[i];
						link.href = '#';
						//link.style.width="100%";
						//link.style.margin="1px";
						//link.onclick = function(){setUpAdmin(this)};
						document.getElementById('select1').appendChild(link);
					}
					</script>
				</select>
			</div>
				
			<div id="column2mid">	
				<input type=button class="button" id="add"onclick="copyData()" name="Add" value="Add -->" />
				<input type=button class="button" id="remove" onclick="copyData()" name="Remove" value="<--Remove" />
			</div>
			
			<div id="column2right">
				<h3>Selected Items:</h3>
				<select size=12 id="select2" class="selectLarge"></select>
				<input type=button class="button" id="move up" name="moveUp" value="Move Up" />
				<input type=button class="button" id="move down"  name="moveDown" value="Move Down" />
			</div>
		</div><!--End Edit Container-->
			
		<div class="formButton">
			<input type="submit"  id="btnSubmit" name="Submit" value="Submit" />
			<input type="reset"  id="btnReset"  onclick="setUpAdmin('Create SubAssembly')" name="Cancel" value="Cancel" />
		</div>
		
	</form>
		
		
	
	