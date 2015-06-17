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
                    <li><a href="pharmacist.php">Pharmacist</a></li>
                    <li class="active"><a href="patient.php">Patient</a></li>
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
                <li><a href="#query1">Query 1: View your information</a></li>
                <li><a href="#query2">Query 2: Update your profile</a></li>
                <li><a href="#query3">Query 3: Find a Doctor</a></li>
                <li><a href="#query4">Query 4: See Your Prescriptions</a></li>
                <li><a href="#query5">Query 5: Find info on a Prescription</a></li>
                <li><a href="#query6">Query 6: Find a Pharmacist that carries your drug</a></li>
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
			<br>

			<!------------------------------------->
			<!----- Select Name, Address, Sex ----->	
			<!------------------------------------->

			<h2 id="query1">See Your Own Information:
                <br/><small>Please enter your Care Card Number below to view your current info:</small></h2>
                <form class="form-horizontal" method="POST" action="patient.php">

                    <div class="form-group">
                        <label class="col-xs-2" for="CCNconinf">CareCard Number</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="CCNconinf" id="CCNconinf" placeholder="Type your CareCard number here..." />
                        </div>
                    </div>

                    <!--refresh page when submit-->
                    <div class="col-xs-10 col-xs-offset-2">
                        <button type="submit" class="btn btn-primary" name="selectconinf">See my information</button>
                    </div>
                </form>

            <br/>
            <hr/>
            <br/>
			
			<!---------------------------------------->
			<!----- Update Name, Address, Or Sex ----->
			<!---------------------------------------->
			<h2 id="query2">Update any contact information that might have changed: </h2>


            <form class="form-horizontal" method="POST" action="patient.php">

                <div class="form-group">
                    <label class="col-xs-2" for="CCNupdate">CareCardNo </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="CCNupdate" id="CCNupdate" placeholder="Type your CareCard number here..." />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2" for="newName">New Name </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="newName" id="newName" placeholder="New name here..." />
                    </div>
                </div>

                <!--refresh page when submit-->
                <div class="col-xs-10 col-xs-offset-2">
                    <button type="submit" class="btn btn-primary" name="updatename">Update</button>
                </div>

            <br/>
            <br/>




                <div class="form-group">
                    <label class="col-xs-2" for="newAdd">New Address </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="newAdd" id="newAdd" placeholder="New address here..." />
                    </div>
                </div>

                <!--refresh page when submit-->
                <div class="col-xs-10 col-xs-offset-2">
                    <button type="submit" class="btn btn-primary" name="updateadd">Update</button>
                </div>

            <br/><br/>

                <div class="form-group">
                    <label class="col-xs-2" for="newSex">New Sex </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="newSex" id="newSex" placeholder="'M' or 'F'" />
                    </div>
                </div>

                <!--refresh page when submit-->
                <div class="col-xs-10 col-xs-offset-2">
                    <button type="submit" class="btn btn-primary" name="updatesex">Update</button>
                </div>
            </form>
            <br/><br/>
            <br/>
            <hr/>
            <br/>
			
			<!------------------------------------->
			<!----- See Doctors in Hospital ------->	
			<!------------------------------------->

			<h2 id="query3">Find a doctor at a hospital near you
                <br/><small>Enter the street address, postal code, or hospital name to see which doctors are available:</small></h2>
                <form class="form-horizontal" method="POST" action="patient.php">

                    <div class="form-group">
                        <label class="col-xs-2" for="hosPC">Search</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="hosPC" id="hosPC" placeholder="Type hospital information here..." />
                        </div>
                    </div>

                    <!--refresh page when submit-->
                    <div class="col-xs-10 col-xs-offset-2">
                        <button type="submit" class="btn btn-primary" name="selectdoc">Search</button>
                    </div>
                </form>

            <br/>
            <hr/>
            <br/>


			<!------------------------------------->
			<!----- See Prescription Record ------->	
			<!------------------------------------->
			
			<h2 id="query4">Get Prescription History
                <br/><small>Please Enter your Care Card Number below to view your prescription record:</small></h2>
                <form class="form-horizontal" method="POST" action="patient.php">

                    <div class="form-group">
                        <label class="col-xs-2" for="CCNpres">CareCard No.</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="CCNpres" id="CCNpres" placeholder="Type CareCard number here..." />
                        </div>
                    </div>

                    <!--refresh page when submit-->
                    <div class="col-xs-10 col-xs-offset-2">
                        <button type="submit" class="btn btn-primary" name="selectpres">Get Prescription History</button>
                    </div>
                </form>

            <br/>
            <hr/>
            <br/>
			
			<!--------------------------------------->
			<!----- See Detailed Prescription ------->	
			<!--------------------------------------->
			
			<h2 id="query5">Get Prescription Details
                <br/><small>Please enter your prescription ID below to view the details and select one additional column to return as well:</small></h2>
                <form class="form-horizontal" method="POST" action="patient.php">

                    <div class="form-group">
                        <label class="col-xs-2" for="presID">Prescription Number</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="presID" id="presID" placeholder="Type prescription number here..." />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-2" for="presOptions">Options</label>
                        <div class="col-xs-10">
                            <select class="form-control" name="presOptions" id="presOptions">
                                <option value="refills">No. Refills</option>
                                <option value="dose">Dose</option>
                                <option value="totaldays">Total Days</option>
                                <option value="timesperday">Times Per Day</option>
                            </select>

                        </div>
                    </div>

                    <!--refresh page when submit-->
                    <div class="col-xs-10 col-xs-offset-2">
                        <button type="submit" class="btn btn-primary" name="selectpresdet">Get Prescription History</button>
                    </div>
                </form>

            <br/>
            <hr/>
            <br/>

			<!--------------------------------------->
			<!----- Pharmacy Drug Lookup ------------>	
			<!--------------------------------------->
			
			<h2 id="query6">Find a Pharmacist that has your prescription in stock
                <br/><small>Enter your prescription number to find the pharmacies with the drug in stock:</small></h2>
                <form class="form-horizontal" method="POST" action="patient.php">

                    <div class="form-group">
                        <label class="col-xs-2" for="presStock">Prescription Number</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="presStock" id="presStock" placeholder="Type prescription number here..." />
                        </div>
                    </div>

                    <!--refresh page when submit-->
                    <div class="col-xs-10 col-xs-offset-2">
                        <button type="submit" class="btn btn-primary" name="pharmlist">Find a Pharmacist</button>
                    </div>
                </form>

            <br/>
            <hr/>
            <br/>
			
			<!----------------------------->
			<!--------- BEGIN PHP --------->	
			<!----------------------------->
			
			<?php

			//this tells the system that it's no longer just parsing 
			//html; it's now parsing PHP
	
				$success = True; //keep track of errors so it redirects the page only if there are no errors
				$db_conn = OCILogon("ora_y3w8", "a25976135", "ug");
				
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

	//Print function for NAME and ADDRESS and SEX
	function printResultNameAddSex($result) { //prints results from a select statement
		echo "<br>Here is your current contact information.<br>";
		echo "<table>";
		echo "<tr><th>Name</th><th>Address</th><th>Sex</th></tr>";
	
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["ADDRESS"] . "</td><td>" . $row["SEX"] . "</td></tr>"; //or just use "echo $row[0]" 
		}
		echo "</table>";
	
	}	
	
	//Print function for DOCTOR and SPECIALTY
	function printResultDocSpec($result) { //prints results from a select statement
		echo "<br>These are the doctors at the hospital and their specialty:<br>";
		echo "<table>";
		echo "<tr><th>Name</th><th>Specialty</th><th>Hospital</th><th>Address</th></tr>";
	
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["SPECIALTY"] . "</td><td>" . $row["HNAME"] . "</td><td>" . $row["ADDRESS"] . "</td></tr>"; //or just use "echo $row[0]"
		}
		echo "</table>";
	
	}

	//Print function for DATEPRESCRIBED, REFILLS, TOTALDAYS, TIMESPERDAY, DOSE, NAME, COMPANY
	function printResultPres($result) { //prints results from a select statement
		echo "<br>Successfully fetched prescription record:<br>";
		echo "<table>";
		echo "<tr><th>Prescription Date</th><th>Company</th><th>Drug</th><th>Refills</th><th>Prescription Period</th><th>Dosage Per Day</th><th>Dose</th></tr>";
	
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row["DATEPRESCRIBED"] . "</td><td>" . $row["COMPANY"] . "</td>
			<td>" . $row["NAME"] . "</td><td>" . $row["REFILLS"] . "</td>
			<td>" . $row["TOTALDAYS"] . "</td><td>" . $row["TIMESPERDAY"] . "</td><td>" . $row["DOSE"] . "</td></tr>"; //or just use "echo $row[0]"
		}
		echo "</table>";

	}

	//Print function for DATEPRESCRIBED, REFILLS, TOTALDAYS, TIMESPERDAY, DOSE, NAME, COMPANY
    	function printResultPresOption($result, $presOption) { //prints results from a select statement
    		echo "<br>Successfully fetched prescription record:<br>";
    		echo "<table>";
    		echo "<tr><th>Prescription Date</th><th>Company</th><th>Drug</th><th>" . $presOption . "</th></tr>";

    		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
    			echo "<tr><td>" . $row["DATEPRESCRIBED"] . "</td><td>" . $row["COMPANY"] . "</td>
    			<td>" . $row["NAME"] . "</td><td>" . $row["PRESOPTION"] . "</td></tr>"; //or just use "echo $row[0]"
    		}
    		echo "</table>";

    	}
	
	//Print function for DRUG NAME, DRUG COMPANY, PHARM NAME, ADDRESS, SUPPLY
	function printResultPharm($result) { //prints results from a select statement
		echo "<br>Here is the list of pharmacies:<br>";
		echo "<table>";
		echo "<tr><th>Drug Name</th><th>Company</th><th>Pharmacist</th><th>Address</th><th>Phone</th><th>Supply</th></tr>";
	
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["COMPANY"] . "</td><td>" . $row["PNAME"] . "</td><td>" . $row["ADDRESS"] . "</td><td>" . $row["PHONE"] . "</td><td>" . $row["SUPPLY"] . "</td></tr>"; //or just use "echo $row[0]"
		}
		echo "</table>";
	
	}	

	//Print not-integer type error
	function printIntegerError() {
	    echo "<div class='alert alert-danger'>You typed a non-integer where you were supposed to type an integer!</div>";
	}

	// Connect Oracle...
	if ($db_conn) {

		// Update name
		if (array_key_exists('updatename', $_POST)) {
            if (ctype_digit($_POST['CCNupdate'])) {

                $tuple = array (
                    ":bind1" => $_POST['CCNupdate'],
                    ":bind2" => $_POST['newName']
                );
                $alltuples = array (
                    $tuple
                );
                executeBoundSQL("update patient set name=:bind2 where carecardno=:bind1", $alltuples);
                OCICommit($db_conn);

                $result = executeBoundSQL("select name, address from patient where carecardno=:bind1", $alltuples);
			printResultNameAddSex($result);
            } else {
                printIntegerError();
            }
	
		} else //update address
			if (array_key_exists('updateadd', $_POST)) {
                if (ctype_digit($_POST['CCNupdate'])) {

                    $tuple = array (
                        ":bind1" => $_POST['CCNupdate'],
                        ":bind2" => $_POST['newAdd']
                    );
                    $alltuples = array (
                        $tuple
                    );
                    executeBoundSQL("update patient set address=:bind2 where carecardno=:bind1", $alltuples);
                    OCICommit($db_conn);

                    $result = executeBoundSQL("select name, address from patient where carecardno=:bind1", $alltuples);
                    printResultNameAddSex($result);
                } else {
                    printIntegerError();
                }
	
		} else //update address
            if (array_key_exists('updatesex', $_POST)) {
                if (ctype_digit($_POST['CCNupdate'])) {

                    $tuple = array (
                        ":bind1" => $_POST['CCNupdate'],
                        ":bind2" => $_POST['newSex']
                    );
                    $alltuples = array (
                        $tuple
                    );
                    executeBoundSQL("update patient set sex=:bind2 where carecardno=:bind1", $alltuples);
                    OCICommit($db_conn);

                    $result = executeBoundSQL("select name, address from patient where carecardno=:bind1", $alltuples);
                    printResultNameAddSex($result);
                } else {
                    printIntegerError();
                }

        } else //select contact info
			if (array_key_exists('selectconinf', $_POST)) {
			    if (ctype_digit($_POST['CCNconinf'])) {
                    $tuple = array (
                        ":bind1" => $_POST['CCNconinf']
                    );
                    $alltuples = array (
                        $tuple
                    );

                    $result = executeBoundSQL("select name, address, sex from patient where carecardno=:bind1", $alltuples);
                    printResultNameAddSex($result);
				} else {
                    printIntegerError();
                }
	
		} else //select doctors
			if (array_key_exists('selectdoc', $_POST)) {
				$tuple = array (
					":bind1" => $_POST['hosPC']
				);
				$alltuples = array (
					$tuple
				);
				
				$result = executeBoundSQL("select m.name, d.specialty, h.name as hname, h.address
										from doctor d, worksat w, medicalprofessional m, hospital h
										where d.healthcareid=w.healthcareid and 
										w.healthcareid=m.healthcareid and m.healthcareid=d.healthcareid and
										w.address = h.address and
										(w.address like '%" . $_POST['hosPC'] . "%' or
										h.name like '%" . $_POST['hosPC'] . "%')", $alltuples);
				printResultDocSpec($result);
	
		} else //select prescription record
			if (array_key_exists('selectpres', $_POST)) {
			    if (ctype_digit($_POST['CCNpres'])) {
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
                } else {
                    printIntegerError();
                }
	
		} else //select prescription detail
			if (array_key_exists('selectpresdet', $_POST)) {
			    if (ctype_digit($_POST['presID'])) {
                    $tuple = array (
                        ":bind1" => $_POST['presID']
                    );
                    $alltuples = array (
                        $tuple
                    );

                    $result = executeBoundSQL("select p.dateprescribed, d.company, d.name, " . $_POST['presOptions'] . " as presOption, p.carecardno
                                            from prescription p, drug d
                                            where p.DIN = d.DIN and p.prescriptionid = :bind1
                                            order by p.dateprescribed desc", $alltuples);
                    printResultPresOption($result, $_POST['presOptions']);
				} else {
                    printIntegerError();
                }
	
		} else //select pharmacy list
			if (array_key_exists('pharmlist', $_POST)) {
			    if (ctype_digit($_POST['presStock'])) {
                    $tuple = array (
                        ":bind1" => $_POST['presStock']
                    );
                    $alltuples = array (
                        $tuple
                    );

                    $result = executeBoundSQL("select d.name, d.company, p.name as pname, p.phone, p.address, h.supply
                                            from prescription pr, drug d, pharmacist p, hasinstock h
                                            where d.name in (select d2.name
                                                       from drug d2
                                                       where pr.DIN = d2.DIN and pr.prescriptionId = :bind1)
                                            and h.supply > 0
                                            and h.DIN = d.DIN
                                            and h.licenseno = p.licenseno", $alltuples);
                    printResultPharm($result);
				} else {
				    printIntegerError();
				}
	
		}
					
					
	
		if ($_POST && $success) {
			//POST-REDIRECT-GET -- See http://en.wikipedia.org/wiki/Post/Redirect/Get
			header("location: patient.php");
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