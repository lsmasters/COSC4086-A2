README for COSC4806 Assignment 1
1.	Assignment 2 Requirements:
   
a.	Create an account at filess.io

b.	Create a new MariaDB database. Do not select any other database engine!
c.	Connect your website to a database (filess.io)
d.	(see my video for details, both week 3 and assignment 2 video)
e.	The table will be called users
f.	A user should have the ability to create an account
g.	Check to see if the account name exists already
h.	Passwords should be stored securely
i.	Passwords need to meet a minimum security standard
j.	Modify your login code so it is no longer hard-coded and the user should be able to login with their account details
k.	Make sure password is hashed. When they login, SELECT * FROM users WHERE username = '$_REQUEST['username'], then you will hash the password they put in the login form and compare it to the hash in the users table. If they are the same, then they entered the right password
3.	Table of Contents (files)
•	index.php: successful login will result in this page
•	login.php:  requests username and password with added option for new users.
•	logout.php: response to logout request which redirects to login page
•	validate.php:  checks the database for correct username and password.  If there are issues with the password or username, the user will be directed back to the login page with appropriate warnings
•	create_user.php:  entry form for new users to add their username and password with double check.  The submit button moves control to the newusercheck.php script
•	newusercheck.php: is a validation script that checks for
o	passwords entered are the same
o	user name is not already in the database
o	passwords follow the rules given in para 3 below.
o	Sucessful entry moves control to the login.php script while incorrect entries direct the user back to the create.user.php script with appropriate error messages displayed.
•	Now the database related files
•	config.php:  includes the database connection parameters
•	database.php:  connects to the database using the parameters in config.php
•	user.php:  contains the class User with the functions get_all_users, create_user and delete_user(a function I created for housekeeping after development)

4.	New User Rules 
a.	Usernames:  must be unique from current user list in the database.
b.	Passwords:
i.	Minimum length of 8 characters,
ii.	Must contain a capital letter,
iii.	Must contain a lower case letter,
iv.	Must contain a number, and
v.	Must contain a special character.
5. Installation Instructions
•	start with index.php with valid username/passwords already in the database users:
Username	Password
Adam	Adam123$
Barbara	Barbara123$
Charles	Charles123$
Donald	Donald123$
Emily	Emily123$

6. Flowchart
 ![image](https://github.com/user-attachments/assets/fb675921-dcde-46a1-9844-14d19388c237)

7. Known Issues / Limitations:  there is a security issue with the disclosure that this user name is not unique.  Perhaps I should have used an error message of “Issue with the username and/or password.”
8. Authors 
•	Dr. Mike Biocchi with some additions by Larry Masters(student COSC4806)
9. Contact Information
Email to:  lmasters@algomau.ca

