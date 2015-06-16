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

            <h2 id="query1"> Input Results of a Medical Exam 
                <small>To be inputted by the doctor who administered the exam</small></h2>
            <form class="form-inline" method="POST" action="doctor.php">
            <!--refresh page when submit-->

                <div class= "form-group">
                    <label class="sr-only" for="carecard1">Patients Care Card</label>
                    <input type="text" class="form-control" name="carecard1" id="carecard1" placeholder="Patients Care Card">
                </div>

                <div class= "form-group">
                    <label class="sr-only" for="doctorid1">HealthCareID</label>
                    <input type="text" class="form-control" name="doctorid1" id="doctorid1" placeholder="Doctor ID">
                </div>

                <div class= "form-group">
                    <label class="sr-only" for="resultstatement">Result</label>
                    <input type="text" class="form-control" name="resultstatement" id="resultstatement" placeholder="Result">
                </div>

                 <button type="submit" class="btn btn-primary" name="updateresult">Update</button>
            </form>
            
            <br/>
            <hr/>
            <br/>

    
    <!-- Update Form 2 (Move Patient to new room)-->  

            <h2 id="query2"> Move Patient into a new room: </h2>

            <form class="form-horizontal" method="POST" action="doctor.php">

                <div class= "form-group">
                    <label class="col-xs-2" for="carecard2">Patient Carecard</label>
                    <div class="col-xs-10">
                    <input type="text" class="form-control" name="carecard2" id="carecard2" placeholder="Patients Care Card">
                </div>
                </div>

                <div class= "form-group">
                    <label class="col-xs-2" for="address2">Address</label>
                    <div class="col-xs-10">
                    <input type="text" class="form-control" name="address2" id="address2" placeholder="Address">
                </div>
                </div>
                
                <div class= "form-group">
                    <label class="col-xs-2" for="date2">Date</label>
                    <div class="col-xs-10">
                    <input type="date" class="form-control" name="date2" id="date2">
                </div>
                </div>

                <div class= "form-group">
                    <label class="col-xs-2" for="time2">Time</label>
                    <div class="col-xs-10">
                    <input type="time" class="form-control" name="time2" id="time2">
                </div>
                </div>

                <div class= "form-group">
                    <label class="col-xs-2" for="roomno2">Room Number</label>
                    <div class="col-xs-10">
                    <input type="text" class="form-control" name="roomno2" id="roomno2" placeholder="Room Number">
                </div>
            </div>

                <div class= "form-group">
                    <label class="col-xs-2" for="reason2">Reason</label>
                    <div class="col-xs-10">
                    <input type="text" class="form-control" name="reason2" id="reason2" placeholder="Reason">
                </div>
            </div>
            
            <div class="col-xs-10 col-xs-offset-2">
                    <button type="submit" class="btn btn-primary" name="insertroom">Change</button>
            </div>
            </form>
            
            <br/>
            <hr/>
            <br/>
    
    <!-- Update Form 3 (update doctors specialty)-->  

            <h2 id="query3"> Change a doctors specialty: </h2>

            <form class="form-inline" method="POST" action="doctor.php">

                <div class= "form-group">
                    <label class="sr-only" for="doctorid3">Doctor ID</label>
                    <input type="text" class="form-control" name="doctorid3" id="doctorid3" placeholder="Doctor ID">
                </div>

                <div class= "form-group">
                    <label class="sr-only" for="specialty3">New Specialty</label>
                    <input type="text" class="form-control" name="specialty3" id="specialty3" placeholder="New Specialty">
                </div>

                    <button type="submit" class="btn btn-primary" name="updatedoctor">Change</button>
            </form>
            
            <br/>
            <hr/>
            <br/>
    <!-- Update Form 4 (update nurses ward)-->  

            <h2 id="query4"> Change a nurses ward: </h2>

            <form class="form-inline" method="POST" action="doctor.php">
                
                <div class= "form-group">
                    <label class="sr-only" for="nurseid4">Nurse ID</label>
                    <input type="text" class="form-control" name="nurseid4" id="nurseid4" placeholder="Nurse ID">
                </div>

                <div class= "form-group">
                    <label class="sr-only" for="ward4">New Ward</label>
                    <input type="text" class="form-control" name="ward4" id="ward4" placeholder="New Ward">
                </div>

                    <button type="submit" class="btn btn-primary" name="updatenurse">Change</button>
            </form>
            
            <br/>
            <hr/>
            <br/>

   <!-- insert Form 5 (insert new prescription)-->  

            <h2 id="query5"> New prescription: </h2>
            
            <form class= "form-horizontal" method="POST" action="doctor.php">  
                
                <div class="form-group">
                    <label class="col-xs-2" for="prescriptionid5">Prescription ID </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="prescriptionid5" id="prescriptionid5" />
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-xs-2" for="date5">Date </label>
                    <div class="col-xs-10">
                        <input type="date" class="form-control" name="date5" id="date5" />
                    </div>
                </div>        

                <div class="form-group">
                    <label class="col-xs-2" for="refills5">Number of Refills </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="refills5" id="refills5" />
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-xs-2" for="totaldays5">Total Days </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="totaldays5" id="totaldays5" />
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-xs-2" for="timesperday5">Times per Day </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="timesperday5" id="timesperday5" />
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-xs-2" for="dose5">Dose </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="dose5" id="dose5" />
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-xs-2" for="din5">Drug ID </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="din5" id="din5" />
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-xs-2" for="carecard5">Patient Care Card </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="carecard5" id="carecard5" />
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-xs-2" for="doctorid5">Doctor ID </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="doctorid5" id="doctorid5" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2" for="licenseno5">License Number </label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="licenseno5" id="licenseno5" />
                    </div>
                </div> 

                 <div class="col-xs-10 col-xs-offset-2">
                        <button type="submit" class="btn btn-primary" name="createprescription">Create New Prescription</button>
                    </div>
                </form>
            
            <br/>
            <hr/>
            <br/>

    <!-- Insert Form 6 (insert new exam)-->  

            <h2 id="query6"> Schedule a Medical Exam: </h2>

            <form class="form-horizontal" method="POST" action="doctor.php">

                    <div class="form-group">
                        <label class="col-xs-2" for="examtype6">Type of Exam </label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="examtype6" id="examtype6" placeholder="Exam Type" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2" for="carecard6">Patients Care Card </label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="carecard6" id="carecard6" placeholder="Patients Care Card" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2" for="date6">Date </label>
                        <div class="col-xs-10">
                            <input type="date" class="form-control" name="date6" id="date6" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2" for="time6">Time </label>
                        <div class="col-xs-10">
                            <input type="time" class="form-control" name="time6" id="time6" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2" for="doctorid6">Doctor ID </label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="doctorid6" id="doctorid6" placeholder="Doctor ID" />
                        </div>
                    </div>

                    <!--refresh page when submit-->
                    <div class="col-xs-10 col-xs-offset-2">
                        <button type="submit" class="btn btn-primary" name="createmedexam">Create New Medical Exam </button>
                    </div>
                </form>
            
            <br/>
            <hr/>
            <br/>


    <!-- Insert Form 7 (insert new patient)-->  

            <h2 id="query7">Create a User Medical Record
                <small>If you do not have an electronic medical record yet, please create one for yourself in the following form</small></h2>
                <form class="form-horizontal" method="POST" action="doctor.php">
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

            <h2 id="query8"> Assign a Regular Doctor </h2>
            
            <form class="form-inline" method="POST" action="doctor.php">
            
            <div class= "form-group">
                <label class="sr-only" for="date8">Date</label>
                <input type="date" class="form-control" name="date8" id="date8">
            </div>

            <div class= "form-group">
                <label class="sr-only" for="carecard8">Patients Care Card</label>
                <input type="text" class="form-control" name="carecard8" id="carecard8" placeholder="Patients Care Card">
            </div>

            <div class= "form-group">
                <label class="sr-only" for="doctorid8">Doctor ID</label>
                <input type="text" class="form-control" name="doctorid8" id="doctorid8" placeholder="Doctor ID">
            </div>

            <button type="submit" class="btn btn-primary" name="createseesreg">Record </button>

            </form>
            
            <br/>
            <hr/>
            <br/>   

    <!-- select Form 12 (select a room, find patients)-->  

            <h2 id="query12"> Find patients in a room: </h2>

            <form class="form-inline" method="POST" action="doctor.php">
            
            <div class= "form-group">
                <label class="sr-only" for="date12">Date</label>
                <input type="date" class="form-control" name="date12" id="date12">
            </div>

            <div class= "form-group">
                <label class="sr-only" for="hname12">Hospital Name</label>
                <input type="text" class="form-control" name="hname12" id="hname12" placeholder="Hospital Name">
            </div>

            <div class= "form-group">
                <label class="sr-only" for="roomno12">Room Number</label>
                <input type="text" class="form-control" name="roomno12" id="roomno12" placeholder="Room Number">
            </div>
            
            <button type="submit" class="btn btn-primary" name="findpplinroom">Find</button>

            </form>
            
            <br/>
            <hr/>
            <br/> 
    <!-- select Form 13 (select past prescriptions DOCTORS ONLY)-->  

            <h2 id="query13"> Find past prescriptions: </h2>
            
            <form class="form-inline" method="POST" action="doctor.php">
            
            <div class= "form-group">
                <label class="sr-only" for="doctorid13">Doctor ID</label>
                <input type="text" class="form-control" name="doctorid13" id="doctorid13" placeholder="Doctor ID">
            </div>
            
            <button type="submit" class="btn btn-primary" name="finddoctorsprescription">Search</button>

            </form>
            
            <br/>
            <hr/>
            <br/>
   
    <!-- select Form 14 (select medical professionals in a hospital)-->  

            <h2 id="query14"> Find Information about the Hospital: </h2>

            <form class="form-horizontal" method="POST" action="doctor.php">
            
            <div class= "form-group">
                <label class="sr-only" for="hname14">Hospital Name</label>
                <input type="text" class="form-control" name="hname14" id="hname14" placeholder="Hospital Name">
            </div>

            <div class="form-inline">
                <div class="form-group">
                    <div class="col-xs-10">
                    <button type="submit" class="btn btn-primary" name="findmedicalpeople">Find All Medical Professionals</button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-10">
                    <button type="submit" class="btn btn-primary" name="findstays">Find Everyone Who Stayed Here</button>
                    </div>
                </div>
            </div>

            </form>
            
            <br/>
            <hr/>
            <br/>

    <!-- select Form 9 (select people who stayed at a hospital) 

            <h2 id="query9"> Find People who have Stayed in a Hospital: </h2>
            
            <form class="form-inline" method="POST" action="doctor.php">
            
            <div class= "form-group">
                <label class="sr-only" for="hname9">Hospital Name</label>
                <input type="text" class="form-control" name="hname9" id="hname9" placeholder="Hospital Name">
            </div>
            
            <button type="submit" class="btn btn-primary" name="findstays">Find people</button>

            </form>
            
            <br/>
            <hr/>
            <br/>--> 

    <!-- select Form 15 (select patient info: personal info, prescriptions, medical exams, hospital stays)

            <h2 id="query15"> Find Patients Information: </h2>

            <form class="form-inline" method="POST" action="doctor.php">
            
            <div class= "form-group">
                <label class="sr-only" for="carecard15">Patients Care Card</label>
                <input type="text" class="form-control" name="carecard15" id="carecard15" placeholder="Patients Care Card">
            </div>
            
            <button type="submit" class="btn btn-primary" name="findpatientsinfo">Search</button>

            </form>
            
            <br/>
            <hr/>
            <br/>-->

    <!-- select Form 16 (select patient info: personal info, prescriptions, medical exams, hospital stays)-->  

            <h2 id="query16"> Patient Information: </h2>

            <form class="form-horizontal" method="POST" action="doctor.php">
            
            <div class= "form-group">
                <label class="sr-only" for="carecard16">Patients Care Card</label>
                <div class="col-xs-10">
                <input type="text" class="form-control" name="carecard16" id="carecard16" placeholder="Patients Care Card">
                </div>
            </div>


            <div class="form-inline">
                <div class="form-group">
                    <div class="col-xs-10">
                    <button type="submit" class="btn btn-primary" name="findpatientsinfo">Get Patients General Information</button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-10">
                    <button type="submit" class="btn btn-primary" name="findprescriptions">Get Patients Past Prescriptions</button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-10">
                    <button type="submit" class="btn btn-primary" name="findmedexams">Get Patients Past Medical Exams</button>
                    </div>
                </div>
            </div>

            <br/>

            <div class="form-group">
                    <div class="col-xs-10">
                    <button type="submit" class="btn btn-primary" name="deletepatientinfo">Delete Patients Record</button>
                    </div>
                </div>

            <br/>

            <div class= "form-inline">
            <div class= "form-group">
                <label class="sr-only" for="pname16">Patients New Name</label>
                <div class="col-xs-10">
                <input type="text" class="form-control" name="pname16" id="pname16" placeholder="Patients New Name">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary" name="updatepname">Update Patients Name</button>
            </div>

            <div class= "form-inline">
            <div class= "form-group">
                <label class="sr-only" for="paddress16">Patients New Address</label>
                <div class="col-xs-10">
                <input type="text" class="form-control" name="paddress16" id="paddress16" placeholder="Patients New Address">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary" name="updatepaddress">Update Patients Address</button>
            </div>

            <div class= "form-inline">
            <div class= "form-group">
                <label class="sr-only" for="pbirthdate16">Patients New Birthday</label>
                <div class="col-xs-10">
                <input type="date" class="form-control" name="pbirthdate16" id="pbirthdate16">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary" name="updatepbirthdate">Update Patients Birthdate</button>
            </div>

            <div class= "form-inline">
            <div class= "form-group">
                <label class="sr-only" for="psex16">Patients New Sex</label>
                <div class="col-xs-10">
                <input type="text" class="form-control" name="psex16" id="psex16" placeholder="Patients New Sex">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary" name="updatepsex">Update Patients Sex</button>
            </div>


            </form>
            
            <br/>
            <hr/>
            <br/>


    <!-- select Form 10 (select patients prescription)  

            <h2 id="query10"> Find patients prescription: </h2>

             <form class="form-inline" method="POST" action="doctor.php">
            
            <div class= "form-group">
                <label class="sr-only" for="carecard10">Patients Care Card</label>
                <input type="text" class="form-control" name="carecard10" id="carecard10" placeholder="Patients Care Card">
            </div>
            
            <button type="submit" class="btn btn-primary" name="findprescriptions">Search</button>

            </form>
            
            <br/>
            <hr/>
            <br/>-->

    <!-- select Form 11 (select past medical exams) 

            <h2 id="query11"> Find patients medical exams: </h2>
           
            <form class="form-inline" method="POST" action="doctor.php">
            
            <div class= "form-group">
                <label class="sr-only" for="carecard11">Patients Care Card</label>
                <input type="text" class="form-control" name="carecard11" id="carecard11" placeholder="Patients Care Card">
            </div>
            
            <button type="submit" class="btn btn-primary" name="findmedexams">Search</button>

            </form>
            
            <br/>
            <hr/>
            <br/> -->

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
        echo "<tr><th>Date</th><th>Result</th><th>ExamType</th><th>AdministeredBy</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["FROMDATE"] . "</td><td>" . $row["RESULT"] . "</td><td>" . $row["EXAMTYPE"] . "</td><td>" . $row["ADMINISTEREDBY"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    
    }
    
    function printResult2($result) { 
        echo "<br>Room has been updated:<br>";
        echo "<table>";
        echo "<tr><th>CareCardNo</th><th>RoomNo</th><th>Date</th><th>Reason</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["CARECARDNO"] . "</td><td>" . $row["ROOMNO"] . "</td><td>" . $row["FROMDATE"] . "</td><td>" . $row["REASON"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    
    }

    function printResult3($result) { 
        echo "<br>Doctors specialty has been changed:<br>";
        echo "<table>";
        echo "<tr><th>doctors name</th><th>specialty</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["SPECIALTY"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    }
   
    function printResult4($result) { 
        echo "<br>Nurses ward has been changed:<br>";
        echo "<table>";
        echo "<tr><th>nurse name</th><th>ward</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["WARD"] . "</td></tr>";//or just use "echo $row[0]" 
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
        echo "<tr><th>result</th><th>carecardno</th><th>examtype</th><th>doctorid</th><th>date</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["RESULT"] . "</td><td>" . $row["CARECARDNO"] . "</td><td>" . $row["EXAMTYPE"] . "</td>
                <td>" . $row["ADMINISTEREDBY"] . "</td><td>" . $row["FROMDATE"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    }

    function printResult7($result) { 
        echo "<br>Contact information has been updated:<br>";
        echo "<table>";
        echo "<tr><th>Name</th><th>Address</th><th>birthdate</th><th>sex</th><th>carecard</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["ADDRESS"] . "</td>
                <td>" . $row["DATEOFBIRTH"] . "</td><td>" . $row["SEX"] . "</td><td>" . $row["CARECARDNO"] . "</td></tr>";//or just use "echo $row[0]" 
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
        echo "<tr><th>date prescibed</th><th>prescriptionid</th><th>carecard</th><th>refills</th><th>din</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["DATEPRESCRIBED"] . "</td><td>" . $row["PRESCRIPTIONID"] . "</td><td>" . $row["CARECARDNO"] . "</td><td>" . $row["REFILLS"] . "</td><td>" . $row["DIN"] . "</td></tr>";//or just use "echo $row[0]" 
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
        echo "<tr><th>doctor name</th><th>specialty</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["SPECIALTY"] . "</td></tr>";//or just use "echo $row[0]" 
        }
                echo "<br>Done.<br>";
        echo "</table>";
    }

    function printResult17($result) { 
        echo "<br>Find medical professionals:<br>";
        echo "<table>";
        echo "<tr><th>nurse name</th><th>ward</th></tr>";
    
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["WARD"] . "</td></tr>";//or just use "echo $row[0]" 
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
                ":bind1" => $_POST['carecard1'],
                ":bind2" => $_POST['doctorid1'],
                ":bind3" => $_POST['resultstatement']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("update takesmedexam set result=:bind3, administeredby=:bind2 
                                where result='Exam to be completed' and carecardno=:bind1 
                                        and administeredby is NULL 
                                        and exists 
                                                (select * from doctor where HealthCareID = :bind2)", $alltuples);
            OCICommit($db_conn);
            $result = executePlainSQL("select FromDate, Result, ExamType, AdministeredBy from TakesMedExam Order by FromDate");
            printResult1($result);
    
        } 


        else if (array_key_exists('insertroom', $_POST)) {
            // Insert tuple using date from user
            $tuple = array (
                ":bind1" => $_POST['carecard2'],
                ":bind2" => $_POST['address2'],
                ":bind3" => str_replace("-", "/","TO_DATE('" . $_POST['date2'] . " " . $_POST['time2'] . "','yyyy/mm/dd hh24:mi')"),
                ":bind4" => $_POST['roomno2'],
                ":bind5" => $_POST['reason2'],
            );
            
            $alltuples = array (
                $tuple
            );

            executePlainSQL("insert into staysat values (" . $tuple[":bind1"] . ", " . $tuple[":bind4"]
                         . ", '" . $tuple[":bind2"] . "', " . $tuple[":bind3"] . ", '" . $tuple[":bind5"]
                          . "', " . "0)");
            OCICommit($db_conn);

            $result = executePlainSQL("select CareCardNo, RoomNo,FromDate, Reason 
                                        from staysat 
                                        where carecardno = " . $tuple[":bind1"] .
                                        " and address = '" . $tuple[":bind2"] .
                                        "' and fromdate = " .  $tuple[":bind3"] .
                                        " and roomno = " . $tuple[":bind4"] .
                                        " and reason = '" . $tuple[":bind5"] . "'"
                                        );
            printResult2($result);
    
        } 
        

        else if (array_key_exists('updatedoctor', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['doctorid3'],
                ":bind2" => $_POST['specialty3']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("update doctor set specialty=:bind2 
                                where HealthCareID=:bind1", $alltuples);
            OCICommit($db_conn);
            $result = executePlainSQL("select distinct m.name, d.specialty from Doctor d, medicalprofessional m
                                            where m.healthcareid = d.healthcareid
                                            order by m.name");
            printResult3($result);
    
        } 

        else if (array_key_exists('updatenurse', $_POST)) {
            // Update tuple using data from user
                        $tuple = array (
                ":bind1" => $_POST['nurseid4'],
                ":bind2" => $_POST['ward4']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("update nurse set ward=:bind2 
                                where HealthCareID=:bind1", $alltuples);
            OCICommit($db_conn);
            $result = executePlainSQL("select distinct m.name, n.ward from nurse n, medicalprofessional m
                                            where m.healthcareid = n.healthcareid
                                            order by m.name");
            printResult4($result);
    
        }


        //INSERT   
        
        else if (array_key_exists('createprescription', $_POST)) {
            //Getting the values from user and insert data into the table
            $tuple = array (
                ":bind1" => $_POST['prescriptionid5'],
                ":bind2" => $_POST['date5'],
                ":bind3" => $_POST['refills5'],
                ":bind4" => $_POST['totaldays5'],
                ":bind5" => $_POST['timesperday5'],
                ":bind6" => $_POST['dose5'],  
                ":bind7" => $_POST['din5'],
                ":bind8" => $_POST['carecard5'],
                ":bind9" => $_POST['doctorid5'],
                ":bind10" => $_POST['licenseno5']      
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
                ":bind1" => $_POST['examtype6'],
                ":bind2" => $_POST['carecard6'],
                ":bind3" => str_replace("-", "/","TO_DATE('" . $_POST['date6'] . " " . $_POST['time6'] . "','yyyy/mm/dd hh24:mi')"),
                ":bind4" => $_POST['doctorid6']
            );
            $alltuples = array (
                $tuple
            );
            executePlainSQL("insert into takesmedexam values ('Exam to be completed', '" . $tuple[":bind1"] . "', "
                        . $tuple[":bind2"] . ", " . $tuple[":bind3"] . ", " . $tuple[":bind4"] . ")");
            OCICommit($db_conn);
            
            $result = executePlainSQL("select Result, CareCardNo, ExamType, FromDate, AdministeredBy
                                        from takesmedexam 
                                        where carecardno = " . $tuple[":bind2"] .
                                        " and ExamType = '" . $tuple[":bind1"] .
                                        "' and FromDate = " .  $tuple[":bind3"] .
                                        " and AdministeredBy = " . $tuple[":bind4"]
                                        );
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
            $result = executeBoundSQL("select * from patient where carecardno=:bind1", $alltuples);
            printResult7($result);
        } 

        else if (array_key_exists('createseesreg', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['date8'],
                ":bind2" => $_POST['doctorid8'],
                ":bind3" => $_POST['carecard8']
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
                ":bind1" => $_POST['hname14']
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
                ":bind1" => $_POST['carecard16']
            );
            $alltuples = array (
                $tuple
            );
            $result = executeBoundSQL("select dateprescribed, prescriptionid, carecardno, refills, DIN
                                                 from prescription 
                                                 where carecardno=:bind1
                                                 order by dateprescribed DESC", $alltuples);
            printResult10($result);
    
        } 

        else if (array_key_exists('findmedexams', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['carecard16']
            );
            $alltuples = array (
                $tuple
            );
            $result = executeBoundSQL("select result, examtype, carecardno, FromDate, administeredby
                                                 from takesmedexam 
                                                 where carecardno = :bind1
                                                 order by FromDate DESC", $alltuples);
            printResult11($result);
    
        } 

        else if (array_key_exists('findpplinroom', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => substr($_POST['date12'], 0, -6),
                ":bind2" => ltrim(substr($_POST['date12'], 5, -3),'0'),
                ":bind3" => ltrim(substr($_POST['date12'], 8),'0'),               
                ":bind4" => $_POST['hname12'],
                ":bind5" => $_POST['roomno12']
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
            $result = executeBoundSQL("select m.name, d.specialty
                                                 from hospital h, worksat w, medicalprofessional m, doctor d
                                                 where h.name = :bind1
                                                        and h.address = w.address
                                                        and w.healthcareid = m.healthcareid
                                                        and m.healthcareid=d.healthcareid", $alltuples);
            
            $result = executeBoundSQL("select m.name, n.ward
                                                 from hospital h, worksat w, medicalprofessional m, nurse n
                                                 where h.name = :bind1
                                                        and h.address = w.address
                                                        and w.healthcareid = m.healthcareid
                                                        and m.healthcareid=n.healthcareid", $alltuples);
            printResult14($result);
            printResult17($result);
    
        } 

        else if (array_key_exists('findpatientsinfo', $_POST)) {
            // Update tuple using data from user
            $tuple = array (
                ":bind1" => $_POST['carecard16']
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

        else if (array_key_exists('updatepname', $_POST)) {
            // Update tuple using data from user
                        $tuple = array (
                ":bind1" => $_POST['carecard16'],
                ":bind2" => $_POST['pname16']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("update patient set name=:bind2 
                                where CareCardNo=:bind1", $alltuples);
            OCICommit($db_conn);
            $result = executeBoundSQL("select * from patient where carecardno=:bind1", $alltuples);
            printResult7($result);
    
        }

        else if (array_key_exists('updatepaddress', $_POST)) {
            // Update tuple using data from user
                        $tuple = array (
                ":bind1" => $_POST['carecard16'],
                ":bind2" => $_POST['paddress16']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("update patient set address=:bind2 
                                where CareCardNo=:bind1", $alltuples);
            OCICommit($db_conn);
            $result = executeBoundSQL("select * from patient where carecardno=:bind1", $alltuples);
            printResult7($result);
    
        }

        else if (array_key_exists('updatepbirthdate', $_POST)) {
            // Update tuple using data from user
                        $tuple = array (
                ":bind1" => $_POST['carecard16'],
                ":bind2" => $_POST['pbirthdate16']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("update patient set dateofbirth=:bind2 
                                where CareCardNo=:bind1", $alltuples);
            OCICommit($db_conn);
            $result = executeBoundSQL("select * from patient where carecardno=:bind1", $alltuples);
            printResult7($result);
    
        }

        else if (array_key_exists('updatepsex', $_POST)) {
            // Update tuple using data from user
                        $tuple = array (
                ":bind1" => $_POST['carecard16'],
                ":bind2" => $_POST['psex16']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("update patient set sex=:bind2 
                                where CareCardNo=:bind1", $alltuples);
            OCICommit($db_conn);
            $result = executeBoundSQL("select * from patient where carecardno=:bind1", $alltuples);
            printResult7($result);
    
        }

        else if (array_key_exists('deletepatientinfo', $_POST)) {
             // Delete Patient Query
                        $tuple = array (
                ":bind1" => $_POST['carecard16'],
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("delete from patient where carecardno = :bind1", $alltuples);
            OCICommit($db_conn);
            
            echo "<br>Patient got deleted</br>";
   
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