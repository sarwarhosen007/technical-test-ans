PHP 
1. A string = “(‘apple’,’orange’,’banana’), ” 
a. Remove the trailing “, ” 
b. Then add “;” 
<?php
 $string = "(‘apple’,’orange’,’banana’),";
 $modifiedString = substr_replace($string, ';', strlen($string)-1, 1);
 echo $modifiedString;
  ?>
2. How can we modify the value of a constant? 
	Ans: The value can not be changed during the execution of script;
3. Explain how you can pass the variable by the navigation between the pages in PHP? 
	Ans: Using session. Declare a variable into the session on the first page and get the value from the session using the declared key: ($_SESSION[‘key’]=’ value’
4. How to get a data from a PHP variable into a javascript variable? 
	Ans:  1. Using Ajax
	          2. Echo the data directly to the javascript.
5. How to receive or extract values from an HTTP request? 
	Ans: Using PHP SuperGlobal variables: Like: $_GET,$_POST
6. How to submit a form and what happens after that submitting a form? 
	Ans: When clicking the form submit button, then form data will be sent to the specific file which is already added in the form action attribute like: action=“/mail.php”. The request carries some ‘key=value’ pairs. Key is what is specified in the ‘name=’ attribute of the input field. And value is what is typed into the input field.

In the backend mentioned PHP file needs to receive those submitted ‘key=value‘ pairs using either the $_POST or $_GET super global variables depending what method used in the form ‘method=’  attribute of the form tag.




7. Definition 
a. Session
	Ans: Session is a PHP super global variable which is used to share data across the web pages and also used to store users/sensitive information on the server.
b. AJAX? 
	Ans: Asynchronous JavaScript & XML is used to be updated asynchronously by sent and received data with the web server in background tasks.
c. SQL injection?
	Ans: Writing secure code that doesn’t allow for the injection of malicious code into an application.
d. Dynamic websites?
	Ans: A website that can use a single URL to generate a web page with content that changes based on a number of factors.
8. How to read contents from a file and write contents in a file. 
	Ans: file_get_contents(‘file.txt’) is a way to read the contents from a file. The file_put_contents(‘file.txt’,’string’) writes contents in a file.
9. Have an array of [first_name, last_name, age] 
a. $array = [ 
['Joe', 'joe@hmail.com', 24], 
['Doe', 'doe@hmail.com', 25], 
['Dane', 'dane@hmail.com', 20] 
]; 
b. Print this array in html table 
	Ans: 
<table><tr><th>Name</th><th>Email</th><th>Age</th><tr>
	foreach($array as $item){ 
echo'<tr><td>'.$item[0].'</td><td>'.$item[1].'</td><td>'.$item[2].'</td><td></tr>';
}
</table>


MySQL 
1. What is Relational Database Management System (RDBMS)? 
	Ans: It is basically a program that allows us to create,delete and update a relational database. Relational Database is a database system that stores and retrieves data in a tabular format organized in the form of rows and columns.

2. A table (person) of columns (name, dob, city) 
a. Find total number of person per city 
	Ans: ”SELECT count(name) as totPerson from person GROUP BY city”;
b. Where city name starts with a letter ‘D’
	Ans: “SELECT city from person WHERE city LIKE ‘D%’ ”
3. Tables; person (person_id, person_name, person_dob, salary_per_annum) and person_address  (address_id, person_id, address_line, city) 
a. List the names of persons who lives in the city ‘Manhattan’ and salary is more than  40,000 per year
Ans:  “SELECT p.person_name from person p 
	  Inner join person_address pa ON p.person_id=pa.person_id
         WHERE pa.city=’Manhattan’ AND p.salary_per_annum > 40000”;








## Authenticate User 
### Task 1.  
⇨ Create a database table for user information, where user name, user login id and user password will  be stored. Note that password will be stored using the simple encryption (e.g. MD5) method. ⇨ Next create a login page, where user will insert their ‘Login ID’ and ‘Password’. System will check  the authentication against the user’s ‘Login ID’ and ‘Password’. 
⇨ On success, provide the home page to the user, and On failure, display a failure message. 

Ans: Please check Authenticate User Modules in the github repository.
Repository : Click Here

### Task 2 
⇨ Add another column ‘UserCategory’ to the user table, value for that column will be either ‘Admin’ or ‘Customer’. 
⇨ Create a simple php page, where a new user can be made.  
⇨ Create a button on the home page, which will take the user to this User creation page. And this  button and the page will be accessible only to the user who are admin.

Ans: Please check Authenticate User Modules in the github repository.
Repository : Click Here
