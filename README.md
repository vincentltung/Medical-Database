# CS304-Project
CS 304

Look at Patient.php for examples for login and making sql queries using oracle

I added php files for each class since they have to be php to run the oracle using ugrad accounts

To run, go inside the php file and type your username and password for oracle in line:
				$db_conn = OCILogon("ora_xxxx", "axxxxxxxx", "ug");
				
Then, put the css, fonts, js folders inside the public_html folder in your ugrad account
along with all 5 .php files. Then, chmod 755 the 5 php files. 

To make query, you have to add a form, and then reference the variable in that form in the 

if ($db_conn) {
		if (array_key_exists('nameOfSubmit', $_POST)) {
			Get variables and do sql things
			printResult}
			
The print result is not correct at the moment, but 1 row should pop up if you change the echo to 
echo $row[0]
inside the printresult method.