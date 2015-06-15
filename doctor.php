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
                    <li class="active"><a href="doctor.php">Medical Professional</a></li>
                    <li><a href="pharmacist.php">Pharmacist</a></li>
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
                <li><a href="#">Query 1: Input Exam Results</a></li>
                <li><a href="#">Query 2: Move Patient</a></li>
                <li><a href="#">Query 3: Change Doctors Specialty</a></li>
                <li><a href="#">Query 4: Change Nurses Ward</a></li>
                <li><a href="#">Query 5: New prescription</a></li>
                <li><a href="#">Query 6: Schedule Medical Exam</a></li>
                <li><a href="#">Query 7: Create New Medical Record</a></li>
                <li><a href="#">Query 8: Create New Relationship</a></li>
                <li><a href="#">Query 9: Find Hospitals list of patients</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-4" id="content">
            <!---->
            <!--All Page content goes between these Two Lines-->
            <!--Would be great for an ng-view here-->
            <h1> Welcome Doctor Luk!</h1>
            <hr/>



                <!-- Insert Form -->

    <!-- Update Form 1 (update medical exam results)-->  

            <h2 id="query1"> Update a result of a medical exam: </h2>
            
            <p><font size="2"> Patient Carecard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HealthCareID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Result</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type="text" name="carecard" size="18">
                <input type="text" name="doctorid" size="18">
                <input type= "text" name="resultstatement" size="34">
            <!--define two variables to pass the value-->
            <input type="submit" value="update" name="updateresult"></p>

    
    <!-- Update Form 2 (Move Patient to new room)-->  

            <h2 id="query2"> Move Patient into a new room: </h2>
            
            <p><font size="2"> Patient Carecard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Room Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Duration</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type="text" name="carecard" size="18">
                <input type="text" name="address" size="34">
            <!--    <input type= "text" name="date" size="18">
                <input type= "text" name= "time" size = "10">-->
                <input type= "text" name= "roomno" size = "10">
                <input type= "text" name= "duration" size = "5"></p>
            <!--define two variables to pass the value-->

            <p><font size="2"> Reason &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Previously admitted
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New Date-->   
            </font></p>
            
            <p><input type= "text" name= "reason" size = "34">
            <!--    <input type= "text" name="date1" size="18">
                <input type= "text" name= "time1" size = "10">
                <input type= "text" name="date2" size="18">
                <input type= "text" name= "time2" size = "10">-->
            <input type="submit" value="update" name="updateroom"></p>

    
    <!-- Update Form 3 (update doctors specialty)-->  

            <h2 id="query3"> Change a doctors specialty: </h2>
            
            <p><font size="2"> Doctors ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New Specialty</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type="text" name="doctorid" size="18">
                <input type= "text" name="specialty" size="34">
            <!--define two variables to pass the value-->
            <input type="submit" value="update" name="updatedoctor"></p>


    <!-- Update Form 4 (update nurses ward)-->  

            <h2 id="query4"> Change a nurses ward: </h2>
            
            <p><font size="2"> Nurse ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New Ward</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type="text" name="nurseid" size="18">
                <input type= "text" name="ward" size="34">
            <!--define two variables to pass the value-->
            <input type="submit" value="update" name="updatenurse"></p>

    <!-- insert Form 5 (insert new prescription)-->  

            <h2 id="query5"> New prescription: </h2>
            
            <p><font size="2"> Prescription ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Refills&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total days &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; times per day &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dose&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Patient carecard &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DoctorID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; License number</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type="text" name="prescriptionid" size="18">
                <input type= "date" name="date" size="18">
                <input type= "text" name="refills" size="18">
                <input type= "text" name="totaldays" size="18">
                <input type= "text" name="timesperday" size="18">
                <input type= "text" name="dose" size="18">
                <input type= "text" name="din" size="18">
                <input type= "text" name="carecard" size="18">
                <input type= "text" name="doctorid" size="18">
                <input type= "text" name="Licenseno" size="18">
            <!--define two variables to pass the value-->
            <input type="submit" value="create" name="createprescription"></p>

    <!-- Insert Form 6 (insert new exam)-->  

            <h2 id="query6"> Schedule a Medical Exam: </h2>
            
            <p><font size="2"> 
                Type of exam
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                care card
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                date
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                doctor id</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type="text" name="examtype" size="18">
                <input type= "text" name="carecard" size="18">
                <input type= "date" name="date" size="18">
                <input type= "text" name="doctorid" size="18">
            <!--define two variables to pass the value-->
            <input type="submit" value="create" name="createmedexam"></p>



    <!-- Insert Form 7 (insert new patient)-->  

            <h2 id="query7">Create a User Medical Record
                <small>If you do not have an electronic medical record yet, please create one for yourself in the following form</small></h2>
                <form class="form-horizontal" method="POST" action="patient.php">
                    <div class="form-group">
                        <label class="col-xs-2" for="insName">Name </label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="insName" id="insName" placeholder="Name..." />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2" for="insAddress">Address </label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="insAddress" id="insAddress" placeholder="Address..." />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2" for="insBirthDate">BirthDate </label>
                        <div class="col-xs-10">
                            <input type="date" class="form-control" name="insBirthDate" id="insBirthDate" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2" for="insSex">Sex </label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="insSex" id="insSex" placeholder="please type a single 'm' or 'f'" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2" for="insCareCardNo">CareCardNo </label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="insCareCardNo" id="insCareCardNo" placeholder="e.g. 555123678" />
                        </div>
                    </div>

                    <!--refresh page when submit-->
                    <div class="col-xs-10 col-xs-offset-2">
                        <button type="submit" class="btn btn-primary" name="createpatient">Create New Medical Record </button>
                    </div>
                </form>
            
            <br/>
            <hr/>
            <br/>

    <!-- Insert Form 8 (insert new seesreg)-->  

            <h2 id="query8"> Assign a Regualar Doctor: </h2>
            
            <p><font size="2"> 
                date
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                care card
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                doctor id</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type= "date" name="date" size="18">
                <input type= "text" name="carecard" size="18">
                <input type= "text" name="doctorid" size="18">
            <!--define two variables to pass the value-->
            <input type="submit" value="create" name="createseesreg"></p>
   

    <!-- select Form 9 (select people who stayed at a hospital)-->  

            <h2 id="query9"> Find hospitals patient stay: </h2>
            
            <p><font size="2"> 
                Hospital name</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type= "text" name="hname" size="34">
            <!--define two variables to pass the value-->
            <input type="submit" value="Find" name="findstays"></p>


    <!-- select Form 10 (select patients prescription)-->  

            <h2 id="query10"> Find patients prescription: </h2>
            
            <p><font size="2"> 
                carecard</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type= "text" name="carecard" size="18">
            <!--define two variables to pass the value-->
            <input type="submit" value="Find" name="findprescriptions"></p>

    <!-- select Form 11 (select past medical exams)-->  

            <h2 id="query11"> Find patients medical exams: </h2>
            
            <p><font size="2"> 
                carecard</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type= "text" name="carecard" size="18">
            <!--define two variables to pass the value-->
            <input type="submit" value="Find" name="findmedexams"></p>

    <!-- select Form 12 (select a room, find patients)-->  

            <h2 id="query12"> Find patients in a room: </h2>
            
            <p><font size="2"> 
                date
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                hospital name
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                room number</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type= "date" name="date" size="18">
                <input type= "text" name="hname1" size="18">
                <input type= "text" name="roomno" size="18">
            <!--define two variables to pass the value-->
            <input type="submit" value="Find" name="findpplinroom"></p>

    <!-- select Form 13 (select past prescriptions DOCTORS ONLY)-->  

            <h2 id="query13"> Find past prescriptions: </h2>
            
            <p><font size="2"> 
                doctorid</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type= "text" name="doctorid13" size="18">
            <!--define two variables to pass the value-->
            <input type="submit" value="Find" name="finddoctorsprescriptions"></p>
   
    <!-- select Form 14 (select medical professionals in a hospital)-->  

            <h2 id="query14"> Find medical professionals: </h2>
            
            <p><font size="2"> 
                hospital</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type= "text" name="hname14" size="18">
            <!--define two variables to pass the value-->
            <input type="submit" value="Find" name="findmedicalpeople"></p>

    <!-- select Form 15 (select patient info: personal info, prescriptions, medical exams, hospital stays)-->  

            <h2 id="query15"> Find patients information: </h2>
            
            <p><font size="2"> 
                carecard</font></p>
            <form method="POST" action="doctor.php">
            <!--refresh page when submit-->
            
            <p><input type= "text" name="carecard15" size="18">
            <!--define two variables to pass the value-->
            <input type="submit" value="Find" name="findpatientsinfo"></p>

    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
    <!-- php part--> 
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
    
    

    //PRINTS

    function printResult1($result) { 
        echo "<br>Exam result has been updated:<br>";
        echo "<table>";
        echo "<tr><th>Result</th><th>ExamType</th><th>AdministeredBy</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["RESULT"] . "</td><td>" . $row["EXAMTYPE"] . "</td><td>" . $row["ADMINISTEREDBY"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    
    }
    
    function printResult2($result) { 
        echo "<br>Room has been updated:<br>";
        echo "<table>";
        echo "<tr><th>CareCardNo</th><th>RoomNo</th><th>Duration</th><th>Reason</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["CARECARDNO"] . "</td><td>" . $row["ROOMNO"] . "</td><td>" . $row["DURATION"] . "</td><td>" . $row["REASON"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    
    }

    function printResult3($result) { 
        echo "<br>Doctors specialty has been changed:<br>";
        echo "<table>";
        echo "<tr><th>doctor id</th><th>specialty</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["HEALTHCAREID"] . "</td><td>" . $row["SPECIALTY"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    }
   
    function printResult4($result) { 
        echo "<br>Nurses ward has been changed:<br>";
        echo "<table>";
        echo "<tr><th>nurse id</th><th>ward</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["HEALTHCAREID"] . "</td><td>" . $row["WARD"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    }
    
    function printResult5($result) { 
        echo "<br>New prescription has been filled:<br>";
        echo "<table>";
        echo "<tr><th>prescriptionid</th><th>carecardno</th><th>refills</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["PRESCRIPTIONID"] . "</td><td>" . $row["CARECARDNO"] . "</td><td>" . $row["REFILLS"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    }

    function printResult6($result) { 
        echo "<br>Exam has been Scheduled:<br>";
        echo "<table>";
        echo "<tr><th>result</th><th>examtype</th><th>carecardno</th><th>doctorid</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["RESULT"] . "</td><td>" . $row["EXAMTYPE"] . "</td><td>" . $row["CARECARDNO"] . "</td><td>" . $row["ADMINISTEREDBY"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    }

    function printResult7($result) { 
        echo "<br>Contact information has been updated:<br>";
        echo "<table>";
        echo "<tr><th>Name</th><th>Address</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["ADDRESS"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    
    }

    function printResult8($result) { 
        echo "<br>New relationship has been recorded:<br>";
        echo "<table>";
        echo "<tr><th>date</th><th>doctorid</th><th>carecard</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["SINCE"] . "</td><td>" . $row["HEALTHCAREID"] . "</td><td>" . $row["CARECARDNO"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    
    }

    function printResult9($result) { 
        echo "<br>Find people who have stayed in this hospital:<br>";
        echo "<table>";
        echo "<tr><th>hospital name</th><th>carecard</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["CARECARDNO"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    
    }

    function printResult10($result) { 
        echo "<br>Find Prescription:<br>";
        echo "<table>";
        echo "<tr><th>prescriptionid</th><th>carecard</th><th>refills</th><th>din</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["PRESCRIPTIONID"] . "</td><td>" . $row["CARECARDNO"] . "</td><td>" . $row["REFILLS"] . "</td><td>" . $row["DIN"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    
    }

    function printResult11($result) { 
        echo "<br>Find Medical Exam:<br>";
        echo "<table>";
        echo "<tr><th>Result</th><th>examtype</th><th>carecardno</th><th>FromDate         </th><th>administeredby</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["RESULT"] . "</td><td>" . $row["EXAMTYPE"] . "</td>
            <td>" . $row["CARECARDNO"] . "</td><td>" . $row["FROMDATE"] . "</td><td>" . $row["ADMINISTEREDBY"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    
    }

    function printResult12($result) { 
        echo "<br>Find people in a room:<br>";
        echo "<table>";
        echo "<tr><th>patient name</th><th>room</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["ROOMNO"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    }

    function printResult13($result) { 
        echo "<br>Find past prescriptions:<br>";
        echo "<table>";
        echo "<tr><th>date prescribed</th><th>refills left</th><th>drug id</th><th>carecardno</th><th>patient name</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["DATEPRESCRIBED"] . "</td><td>" . $row["REFILLS"] . "</td>
            <td>" . $row["DIN"] . "</td><td>" . $row["CARECARDNO"] . "</td><td>" . $row["NAME"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    }

    function printResult14($result) { 
        echo "<br>Find medical professionals:<br>";
        echo "<table>";
        echo "<tr><th>medical professional name</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["NAME"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    }


    //p.name, p.address, p.dateofbirth, p.sex, m.name
    function printResult15($result) { 
        echo "<br>Find patients information:<br>";
        echo "<table>";
        echo "<tr><th>patient name</th><th>patient address</th><th>date of birth</th><th>sex</th><th>doctor name</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["NAME"] . "</td>
                    <td>" . $row["ADDRESS"] . "</td>
                    <td>" . $row["DATEOFBIRTH"] . "</td>
                    <td>" . $row["SEX"] . "</td>
                    <td>" . $row["NAME"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    }

    // Connect Oracle...
    if ($db_conn) {

        //UPDATES

        if (array_key_exists('updateresult', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['carecard'],
                ":bind2" => $_POST['doctorid'],
                ":bind3" => $_POST['resultstatement']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("update takesmedexam set result=:bind3, administeredby=:bind2 
                                where result='Exam to be completed' and carecardno=:bind1 
                                        and administeredby is NULL", $alltuples);
            OCICommit($db_conn);
            $result = executePlainSQL("select Result, ExamType, AdministeredBy from TakesMedExam");
            printResult1($result);
    
        } 


        else if (array_key_exists('updateroom', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['carecard'],
                ":bind2" => $_POST['address'],
               // ":bind3" => $_POST['date1'],
               // ":bind4" => $_POST['time2'],
                ":bind5" => $_POST['roomno'],
                ":bind6" => $_POST['reason'],
                ":bind7" => $_POST['duration']
                //":bind8" => $_POST['date2'],
                //":bind9" => $_POST['time2']
            );
            $alltuples = array (
                $tuple
            );
            //FromDate=:bind3 . " " . :bind4, 
            //where date=:bind8 ." ". :bind9
            executeBoundSQL("update StaysAt set RoomNo=:bind5, 
                                                Duration=:bind7,
                                                Reason=:bind6
                                        where CareCardNo=:bind1 and address=:bind2", $alltuples);
            OCICommit($db_conn);
            $result = executePlainSQL("select CareCardNo, RoomNo, Duration, Reason from StaysAt");
            printResult2($result);
    
        } 
        

        else if (array_key_exists('updatedoctor', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['doctorid'],
                ":bind2" => $_POST['specialty']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("update doctor set specialty=:bind2 
                                where HealthCareID=:bind1", $alltuples);
            OCICommit($db_conn);
            $result = executePlainSQL("select * from Doctor");
            printResult3($result);
    
        } 

        else if (array_key_exists('updatenurse', $_POST)) {
            // Update tuple using data from user
                        $tuple = array (
                ":bind1" => $_POST['nurseid'],
                ":bind2" => $_POST['ward']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("update nurse set ward=:bind2 
                                where HealthCareID=:bind1", $alltuples);
            OCICommit($db_conn);
            $result = executePlainSQL("select * from nurse");
            printResult4($result);
    
        } 


        //INSERT   
        
        else if (array_key_exists('createprescription', $_POST)) {
            //Getting the values from user and insert data into the table
            $tuple = array (
                ":bind1" => $_POST['prescriptionid'],
                ":bind2" => $_POST['date'],
                ":bind3" => $_POST['refills'],
                ":bind4" => $_POST['totaldays'],
                ":bind5" => $_POST['timesperday'],
                ":bind6" => $_POST['dose'],  
                ":bind7" => $_POST['din'],
                ":bind8" => $_POST['carecard'],
                ":bind9" => $_POST['doctorid'],
                ":bind10" => $_POST['Licenseno']      
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("insert into prescription values (:bind2, :bind3, :bind4, :bind5, :bind6, :bind1, :bind7, :bind8, :bind9, :bind10)", $alltuples);
            OCICommit($db_conn);
            $result = executePlainSQL("select prescriptionid, carecardno, refills from prescription");
            printResult5($result);
        } 

        else if (array_key_exists('createmedexam', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['examtype'],
                ":bind2" => $_POST['carecard'],
                ":bind3" => $_POST['date'],
                ":bind4" => $_POST['doctorid']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("insert into takesmedexam values ('Exam to be completed', :bind1, :bind2, :bind3, :bind4)", $alltuples);
            OCICommit($db_conn);
            $result = executePlainSQL("select * from takesmedexam");
            printResult6($result);
    
        } 

        else if (array_key_exists('createpatient', $_POST)) {
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
            printResult7($result);
        } 

        else if (array_key_exists('createseesreg', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['date'],
                ":bind2" => $_POST['doctorid'],
                ":bind3" => $_POST['carecard']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("insert into seesregularly values (:bind1, :bind2, :bind3)", $alltuples);
            OCICommit($db_conn);
            $result = executePlainSQL("select * from seesregularly");
            printResult8($result);
    
        } 


        //FIND


        else if (array_key_exists('findstays', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['hname']
            );
            $alltuples = array (
                $tuple
            );
            $result = executeBoundSQL("select p.Name, p.CareCardNo 
                                            from StaysAt sa, patient p, hospital h 
                                            where h.address = sa.address and sa.carecardno= p.carecardno and h.name = :bind1", $alltuples);
            printResult9($result);
    
        } 

        else if (array_key_exists('findprescriptions', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['carecard']
            );
            $alltuples = array (
                $tuple
            );
            $result = executeBoundSQL("select prescriptionid, carecardno, refills, DIN
                                                 from prescription", $alltuples);
            printResult10($result);
    
        } 

        else if (array_key_exists('findmedexams', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['carecard']
            );
            $alltuples = array (
                $tuple
            );
            $result = executeBoundSQL("select result, examtype, carecardno, FromDate, administeredby
                                                 from takesmedexam 
                                                 where carecardno = :bind1", $alltuples);
            printResult11($result);
    
        } 

        else if (array_key_exists('findpplinroom', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => substr($_POST['date'], 0, -6),
                ":bind2" => ltrim(substr($_POST['date'], 5, -3),'0'),
                ":bind3" => ltrim(substr($_POST['date'], 8),'0'),               
                ":bind4" => $_POST['hname1'],
                ":bind5" => $_POST['roomno']
            );
            $alltuples = array (
                $tuple
            );
            $result = executeBoundSQL("select p.name, sa.RoomNo
                                                 from staysat sa, hospital h, patient p
                                                 where Extract(year from sa.FromDate) = :bind1
                                                        and Extract(month from sa.fromdate) = :bind2
                                                        and Extract (day from sa.fromdate) = :bind3
                                                        and h.name = :bind4
                                                        and h.address = sa.address
                                                        and sa.carecardno = p.carecardno
                                                        and sa.roomno = :bind5", $alltuples);
            printResult12($result);
    
        }


        else if (array_key_exists('finddoctorsprescriptions', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['doctorid13']
            );
            $alltuples = array (
                $tuple
            );
            $result = executeBoundSQL("select p.dateprescribed, p.refills, p.din, p.carecardno, pa.name
                                                 from prescription p, patient pa
                                                 where p.healthcareid = :bind1
                                                        and p.carecardno = pa.carecardno", $alltuples);
            printResult13($result);
    
        } 

        else if (array_key_exists('findmedicalpeople', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['hname14']
            );
            $alltuples = array (
                $tuple
            );
            $result = executeBoundSQL("select m.name
                                                 from hospital h, worksat w, medicalprofessional m
                                                 where h.name = :bind1
                                                        and h.address = w.address
                                                        and w.healthcareid = m.healthcareid", $alltuples);
            printResult14($result);
    
        } 

        else if (array_key_exists('findpatientsinfo', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['carecard15']
            );
            $alltuples = array (
                $tuple
            );
            $result = executeBoundSQL("select p.name, p.address, p.dateofbirth, p.sex, m.name
                                            from patient p, seesregularly s, medicalprofessional m
                                                 where p.carecardno=:bind1
                                                    and p.carecardno = s.carecardno
                                                    and s.healthcareid = m.HealthCareID", $alltuples);
            printResult15($result);
    
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



















            <p>Please select your role in the navigation bar above, then you may seek
                appropriate information using the side navigation bar</p>
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