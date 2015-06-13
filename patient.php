<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Medical Records Database</title>
    <link href="./css/bootstrap.min.css" type="text/css" rel="stylesheet" />

    <link href="./css/custom.css" type="text/css" rel="stylesheet" />
</head>
<body>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <span class="alert alert-danger" style="background-color: white; padding:5px;">
                        &nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span>
                    </span>
                    &nbsp;&nbsp;
                    MedRecDb
                </a>
            </div>
            <div class="navbar-collapse collapse" id="menu">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a style="color:red;">I am a...</a></li>
                    <li><a href="doctor.html">Doctor</a></li>
                    <li><a href="nurse.html">Nurse</a></li>
                    <li><a href="pharmacist.html">Pharmacist</a></li>
                    <li class="active"><a href="patient.html">Patient</a></li>
                </ul>
                <!--<ul class="nav navbar-nav pull-right">-->
                <!--<li>-->
                <!--&lt;!&ndash;Dynamically check if user is logged in and load link to user profile instead?&ndash;&gt;-->
                <!--<a href="#">Login</a>-->
                <!--</li>-->
                <!--</ul>-->
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="#">Query 1: create...</a></li>
                <li><a href="#">Query 2: create...</a></li>
                <li><a href="#">Query 3: get...</a></li>
                <li><a href="#">Query 4: update...</a></li>
                <li><a href="#">Query 5: get...</a></li>
                <li><a href="#">Query 6: calculate...</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-4" id="content">
            <!---->
            <!--All Page content goes between these Two Lines-->
            <!--Would be great for an ng-view here-->
            <h1> Welcome Patient Tung!</h1>
            <hr/>
            <p>Please select your role in the navigation bar above, then you may seek
                appropriate information using the side navigation bar</p>
				
			
			
		<!-- Insert Form -->	
			
		<p>Insert values into Patient below:</p>
		<p><font size="5"> Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BirthDate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CareCardNo</font></p>
		<form method="POST" action="patient.php">
		<!--refresh page when submit-->
		
		<p><input type="text" name="insName" size="20"><input type="text" name="insAddress" 
		size="20"><input type="text" name="insBirthDate" size="20"><input type="text" name="insSex" size="20"> 
		<input type="text" name="insCareCardNo" size="20">
		<!--define two variables to pass the value-->
      
		<input type="submit" value="insert" name="insertsubmit"></p>
		</form>	
			
			
			
		<!-- Update Form -->		
		
			<p> Update any contact information that might have changed: </p>
			
			<p><font size="2"> Current Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New Name</font></p>
			<form method="POST" action="patient.php">
			<!--refresh page when submit-->
			
			<p><input type="text" name="curName" size="18"><input type="text" name="newName" 
			size="34">
			<!--define two variables to pass the value-->
			<input type="submit" value="update" name="updatename"></p>
			
		<!-- Update Form 2-->		
		
			<p><font size="2"> Current Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New Address</font></p>
			<form method="POST" action="patient.php">
			<!--refresh page when submit-->
			
			<p><input type="text" name="curAdd" size="18"><input type="text" name="newAdd" 
			size="34">
			<!--define two variables to pass the value-->
			<input type="submit" value="update" name="updateadd"></p>				
			
			<?php

			//this tells the system that it's no longer just parsing 
			//html; it's now parsing PHP
	
				$success = True; //keep track of errors so it redirects the page only if there are no errors
				$db_conn = OCILogon("ora_z4r8", "a34540120", "ug");
				
				function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
					//echo "<br>running ".$cmdstr."<br>";
					global $db_conn, $success;
					$statement = OCIParse($db_conn, $cmdstr); //There is a set of comments at the end of the file that describe some of the OCI specific functions and how they work
				
					if (!$statement) {
						echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
						$e = OCI_Error($db_conn); // For OCIParse errors pass the       
						// connection handle
						echo htmlentities($e['message']);
						$success = False;
					}
				
					$r = OCIExecute($statement, OCI_DEFAULT);
					if (!$r) {
						echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
						$e = oci_error($statement); // For OCIExecute errors pass the statementhandle
						echo htmlentities($e['message']);
						$success = False;
					} else {
				
					}
					return $statement;
				
				}
				
			function executeBoundSQL($cmdstr, $list) {
		/* Sometimes a same statement will be excuted for severl times, only
		the value of variables need to be changed.
		In this case you don't need to create the statement several times; 
		using bind variables can make the statement be shared and just 
		parsed once. This is also very useful in protecting against SQL injection. See example code below for       how this functions is used */
	
		global $db_conn, $success;
		$statement = OCIParse($db_conn, $cmdstr);
	
		if (!$statement) {
			echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
			$e = OCI_Error($db_conn);
			echo htmlentities($e['message']);
			$success = False;
		}
	
		foreach ($list as $tuple) {
			foreach ($tuple as $bind => $val) {
				//echo $val;
				//echo "<br>".$bind."<br>";
				OCIBindByName($statement, $bind, $val);
				unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
	
			}
			$r = OCIExecute($statement, OCI_DEFAULT);
			if (!$r) {
				echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
				$e = OCI_Error($statement); // For OCIExecute errors pass the statementhandle
				echo htmlentities($e['message']);
				echo "<br>";
				$success = False;
			}
		}
	
	}
	
	
	//prints results from a select statement
	function printResult($result) { 
		echo "<br>Contact information has been updated:<br>";
		echo "<table>";
		echo "<tr><th>Name</th><th>Address</th></tr>";
	
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Address"] . "</td></tr>";//or just use "echo $row[0]" 
		}
				echo "<br>Done.<br>";
		echo "</table>";
	
	}
	
	
	
	
	// Connect Oracle...
	if ($db_conn) {

		//If Updating Name was pressed
		
		if (array_key_exists('updatename', $_POST)) {
			// Update tuple using data from user
			$tuple = array (
				":bind1" => $_POST['curName'],
				":bind2" => $_POST['newName']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update patient set name=:bind2 where name=:bind1", $alltuples);
			OCICommit($db_conn);
			$result = executePlainSQL("select name, address from patient");
			printResult($result);
	
		} 
		//If Insert was pressed		
		
		else if (array_key_exists('insertsubmit', $_POST)) {
			//Getting the values from user and insert data into the table
			$tuple = array (
				":bind1" => $_POST['insName'],
				":bind2" => $_POST['insAddress'],
				":bind3" => $_POST['insBirthDate'],
				":bind4" => $_POST['insSex'],
				":bind5" => $_POST['insCareCardNo']				
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into patient values (:bind1, :bind2, :bind3, :bind4, :bind5)", $alltuples);
			OCICommit($db_conn);
			$result = executePlainSQL("select name, address from patient");
			printResult($result);
		} 
		
			//Example they gave us...
			else if (array_key_exists('insert', $_POST)) {
					// Insert data into table...
					executePlainSQL("insert into tab1 values (10, 'Frank')");
					// Inserting data into table using bound variables
					$list1 = array (
						":bind1" => 6,
						":bind2" => "All"
					);
					$list2 = array (
						":bind1" => 7,
						":bind2" => "John"
					);
					$allrows = array (
						$list1,
						$list2
					);
					executeBoundSQL("insert into tab1 values (:bind1, :bind2)", $allrows); //the function takes a list of lists
					// Update data...
					//executePlainSQL("update tab1 set nid=10 where nid=2");
					// Delete data...
					//executePlainSQL("delete from tab1 where nid=1");
					OCICommit($db_conn);
				}
					
				

	
		//Commit to save changes...
		OCILogoff($db_conn);
	}
	else {
		echo "cannot connect";
		$e = OCI_Error(); // For OCILogon errors pass no handle
		echo htmlentities($e['message']);
	}
	
	/* OCILogon() allows you to log onto the Oracle database
		The three arguments are the username, password, and database
		You will need to replace "username" and "password" for this to
		to work. 
		all strings that start with "$" are variables; they are created
		implicitly by appearing on the left hand side of an assignment 
		statement */
	
	/* OCIParse() Prepares Oracle statement for execution
		The two arguments are the connection and SQL query. */
	/* OCIExecute() executes a previously parsed statement
		The two arguments are the statement which is a valid OCI
		statement identifier, and the mode. 
		default mode is OCI_COMMIT_ON_SUCCESS. Statement is
		automatically committed after OCIExecute() call when using this
		mode.
		Here we use OCI_DEFAULT. Statement is not committed
		automatically when using this mode */
	
	/* OCI_Fetch_Array() Returns the next row from the result data as an  
		associative or numeric array, or both.
		The two arguments are a valid OCI statement identifier, and an 
		optinal second parameter which can be any combination of the 
		following constants:
	
		OCI_BOTH - return an array with both associative and numeric 
		indices (the same as OCI_ASSOC + OCI_NUM). This is the default 
		behavior.  
		OCI_ASSOC - return an associative array (as OCI_Fetch_Assoc() 
		works).  
		OCI_NUM - return a numeric array, (as OCI_Fetch_Row() works).  
		OCI_RETURN_NULLS - create empty elements for the NULL fields.  
		OCI_RETURN_LOBS - return the value of a LOB of the descriptor.  
		Default mode is OCI_BOTH.  */
		?>
			
			
			
            <!--End page content-->
            <!---->
            <!---->
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="col-xs-12">

        </div>
    </div>
</footer>
<script src="./js/jquery-1.11.1.js"></script>
<script src="./js/bootstrap.js"></script>
</body>
</html>