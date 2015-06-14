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
                <a class="navbar-brand" href="index.php">
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
                    <li><a href="doctor.php">Medical Professional</a></li>
                    <li class="active"><a href="pharmacist.php">Pharmacist</a></li>
                    <li><a href="patient.php">Patient</a></li>
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
            <h1> Welcome Pharmacist Fang!</h1>
            <hr/>
			<p>Please select your role in the navigation bar above, then you may seek
                appropriate information using the side navigation bar</p>
			<br>
			
			<!------------------------------------->
			<!----- List Patient Prescription ----->	
			<!------------------------------------->
			<p>Enter the patient's Care Card Number to list prescriptions:</p>
			<p><font size="2">CareCard Number</font></p>
			<form method="POST" action="pharmacist.php">	<!--refresh page when submit-->
			
			<p><input type="text" name="CCNpres" size="18">			
			<input type="submit" value="select" name="selectpres"></p>
			
			<br><br>		
			
			<!------------------------------------->
			<!----- List In Stock Drugs ----------->	
			<!------------------------------------->
			<p>Enter pharmacist license number to see list of drugs in stock:</p>
			<p><font size="2">Pharmacist License</font></p>
			<form method="POST" action="pharmacist.php">	<!--refresh page when submit-->
			
			<p><input type="text" name="pharmno" size="18">			
			<input type="submit" value="select" name="selectinstock"></p>
			
			<br><br>				
			
			<!------------------------------------->
			<!----- Find amount of Drug in Stock  ->	
			<!------------------------------------->
			<p>Find the amount of drug you have in supply:</p>
			<p><font size="2"> PharmacistID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DrugID</font></p>
			<form method="POST" action="pharmacist.php">	<!--refresh page when submit-->
			
			<p><input type="text" name="pharmacistID2" size="18">
			<input type="text" name="drugID2" size="34">
			<input type="submit" value="Find" name="selectDrugInStock"></p>
			
			<br><br>
			
			<!------------------------------------->
			<!----- Add a new Drug ---------------->	
			<!------------------------------------->
			<p>Add a new drug to your storage:</p>
			<p><font size="2"> PharmacistID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DrugID
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NumberOfStock</font></p>
			<form method="POST" action="pharmacist.php">	<!--refresh page when submit-->
			
			<p><input type="text" name="pharmacistID" size="18">
			<input type="text" name="drugID" size="20">
			<input type="text" name="numberInStock" size="10">
			<input type="submit" value="Add" name="newDrugAdd"></p>
			
			<br><br>
			
			<!------------------------------------------>
			<!----- Changing Number of Drugs ----------->	
			<!------------------------------------------>
			<p>Enter your pharmacist license number, drug ID, and the new stock amount:</p>
			<p><font size="2"> PharmacistID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DrugID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Number of Stock</font></p>
			<form method="POST" action="pharmacist.php">	<!--refresh page when submit-->
			
			<p><input type="text" name="chpharmno" size="18">
			<input type="text" name="chdrugno" size="16">
			<input type="text" name="chnum" size="10">
			<input type="submit" value="update" name="updatenum"></p>
			
			<br><br>
			
			<!------------------------------------->
			<!----- Set the number of refills------>	
			<!------------------------------------->
			<p>Set the number of refills:</p>
			<p><font size="2"> Prescription ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NumberOfRefills</font></p>
			<form method="POST" action="pharmacist.php">	<!--refresh page when submit-->
			
			<p><input type="text" name="prescriptionID" size="18">
			<input type="text" name="numberOfRefills" size="34">
			<input type="submit" value="Update" name="setNumberOfRefills"></p>
	
			<br><br>

			
			<!----------------------------->
			<!--------- BEGIN PHP --------->	
			<!----------------------------->
			
			<?php

			//this tells the system that it's no longer just parsing 
			//html; it's now parsing PHP
	
				$success = True; //keep track of errors so it redirects the page only if there are no errors
				$db_conn = OCILogon("ora_XXXX", "aXXXXXXXX", "ug");
				
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
		return $statement;
	}
	
	// -----------------------------------------------
	// --- Print functions for printing the tables ---
	// -----------------------------------------------
	
	//Print function for Adding Drug
	function printResultDrugAdd($result) { //prints results from a select statement
		echo "<br>The following drug has been added:<br>";
		echo "<table>";
		echo "<tr><th>PharmacistID</th><th>DrugID</th><th>Number In Stock</th></tr>";
	
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row["LICENSENO"] . "</td><td>" . $row["DIN"] . "</td><td>" . $row["SUPPLY"] . "</td></tr>"; //or just use "echo $row[0]" 
		}
		echo "</table>";
	
	}
	
	//Print function for finding stock of drug
	function printResultDrugStockSelect($result) { //prints results from a select statement
		echo "<br>The following drug has this amount in stock:<br>";
		echo "<table>";
		echo "<tr><th>Drug ID</th><th>Drug Name</th><th>DrugCompany</th><th>NumberInStock</th></tr>";
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row["DIN"] . "</td><td>" . $row["NAME"] . "</td><td>" . $row["COMPANY"] . "</td><td>" . $row["SUPPLY"] . "</td></tr>"; //or just use "echo $row[0]" 
		}
		echo "</table>";
	}		

	//Print function for Updating Prescription Refills
	function printResultPrescriptionUpdate($result) { //prints results from a select statement
		echo "<br>The following prescription has been updated:<br>";
		echo "<table>";
		echo "<tr><th>Prescription ID</th><th>Number of Refills</th></tr>";
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row["PRESCRIPTIONID"] . "</td><td>" . $row["REFILLS"] . "</td></tr>"; //or just use "echo $row[0]" 
		}
		echo "</table>";
	}				
			
	
	//Print function for DATEPRESCRIBED, REFILLS, TOTALDAYS, TIMESPERDAY, DOSE, NAME, COMPANY
	function printResultPres($result) { //prints results from a select statement
		echo "<br>Successfully fetched prescription list:<br>";
		echo "<table>";
		echo "<tr><th>Prescription Date</th><th>Company</th><th>Drug</th><th>Refills</th><th>Prescription Period</th><th>Dosage Per Day</th><th>Dose</th></tr>";
	
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row["DATEPRESCRIBED"] . "</td><td>" . $row["COMPANY"] . "</td>
			<td>" . $row["NAME"] . "</td><td>" . $row["REFILLS"] . "</td>
			<td>" . $row["TOTALDAYS"] . "</td><td>" . $row["TIMESPERDAY"] . "</td><td>" . $row["DOSE"] . "</td></tr>"; //or just use "echo $row[0]" 
		}
		echo "</table>";
	
	}
			
	//Print function for COMPANY, NAME, SUPPLY
	function printResultInStock($result) { //prints results from a select statement
		echo "<br>These are the drugs that are in stock:<br>";
		echo "<table>";
		echo "<tr><th>Company</th><th>Drug Name</th><th>Stock</th></tr>";
	
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row["COMPANY"] . "</td><td>" . $row["NAME"] . "</td>
			<td>" . $row["SUPPLY"] . "</td></tr>"; //or just use "echo $row[0]" 
		}
		echo "</table>";
	
	}
	
	//Print function for Adding Drug
	function printResultDrugUpdate($result) { //prints results from a select statement
		echo "<br>The following drug has been updated:<br>";
		echo "<table>";
		echo "<tr><th>PharmacistID</th><th>DrugID</th><th>Number In Stock</th></tr>";
	
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row["LICENSENO"] . "</td><td>" . $row["DIN"] . "</td><td>" . $row["SUPPLY"] . "</td></tr>"; //or just use "echo $row[0]" 
		}
		echo "</table>";
		
		
	}
		
		// Connect Oracle...
	if ($db_conn) {

		// Inserting a new Drug
		if (array_key_exists('newDrugAdd', $_POST)) {
			$tuple = array (
				":bind1" => $_POST['pharmacistID'],
				":bind2" => $_POST['drugID'],
				":bind3" => $_POST['numberInStock']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into hasinstock values (:bind1, :bind2, :bind3)", $alltuples);
			OCICommit($db_conn);
			
			$result = executeBoundSQL("select licenseno, din, supply
			from hasinstock
			where licenseno=:bind1
			and din=:bind2
			and supply=:bind3", $alltuples);

			printResultDrugAdd($result);
			
		} else // Finding amount of drug in stock
		if (array_key_exists('selectDrugInStock', $_POST)) {
			$tuple = array (
				":bind1" => $_POST['pharmacistID2'],
				":bind2" => $_POST['drugID2']
			);
			$alltuples = array (
				$tuple
			);
			
			$result = executeBoundSQL("select d.DIN, Name, Company, Supply
			from hasinstock h, drug d
			where d.DIN = h.DIN
			and licenseno =:bind1
			and h.DIN=:bind2", $alltuples);

			printResultDrugStockSelect($result);
			
		} else // Updating number of refills
			if (array_key_exists('setNumberOfRefills', $_POST)) {
			$tuple = array (
				":bind1" => $_POST['prescriptionID'],
				":bind2" => $_POST['numberOfRefills']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update prescription 
							set refills=:bind2 
							where prescriptionID =:bind1", $alltuples);
			OCICommit($db_conn);
			
			$result = executeBoundSQL("select PrescriptionID, Refills
			from prescription
			where PrescriptionID =:bind1", $alltuples);

			printResultPrescriptionUpdate($result);
			
		} else //select prescription list
			if (array_key_exists('selectpres', $_POST)) {
				$tuple = array (
					":bind1" => $_POST['CCNpres']
				);
				$alltuples = array (
					$tuple
				);
				
				$result = executeBoundSQL("select p.dateprescribed, d.company, d.name, p.refills, p.totaldays, p.timesperday, p.dose
										from prescription p, drug d 
										where p.DIN = d.DIN and p.carecardno = :bind1
										order by p.dateprescribed desc", $alltuples);
				printResultPres($result);
	
		} else //select drugs instock
			if (array_key_exists('selectinstock', $_POST)) {
				$tuple = array (
					":bind1" => $_POST['pharmno']
				);
				$alltuples = array (
					$tuple
				);
				
				$result = executeBoundSQL("select d.company, d.name, h.supply
										from pharmacist p, drug d, hasinstock h
										where h.DIN = d.DIN and h.licenseno = p.licenseno and h.licenseno = :bind1", $alltuples);
				printResultInStock($result);
	
		} else //update number of stock
			if (array_key_exists('updatenum', $_POST)) {
				$tuple = array (
				":bind1" => $_POST['chpharmno'],
				":bind2" => $_POST['chdrugno'],
				":bind3" => $_POST['chnum']
				);
				$alltuples = array (
					$tuple
				);
				executeBoundSQL("update hasinstock set supply=:bind3
										where licenseno=:bind1 
										and din=:bind2", $alltuples);
				OCICommit($db_conn);
				
				$result = executeBoundSQL("select licenseno, din, supply
										from hasinstock
										where licenseno=:bind1 
										and din=:bind2", $alltuples);
				printResultDrugUpdate($result);
	
		}
			
			
			
			if ($_POST && $success) {
			//POST-REDIRECT-GET -- See http://en.wikipedia.org/wiki/Post/Redirect/Get
			header("location: pharmacist.php");
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