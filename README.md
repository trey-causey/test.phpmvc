# test.phpmvc

Run CompleteTestPHPMVCsql.sql file to create database, tables, and insert info

As long as everything was cloned into a webroot folder, like htdocs, it should run with no issues...
This does require the local mariadb instance to run on default port 3306. The db creds are root/Passw0rd!; that was left 
in place for simplicity. 

Use the index.php at the root of the project to bootstrap the app...it will default to the main page panel

The URLs have some error checking to handle missing routes

Each of the placeholder panels are linked to query a row in the vehicle table to show car info using the query string through a get method.
You'll notice each of the feature panels return a different record

You can login to the site using the login button on the navbar. That queries the userpw table using the post method

There are two users/pw combos already loaded in the table. The info for one is displayed on the login screen. 
To test a second user, use user2/password2 as a credential combo.

Error checking is in place to check for either username or password entry, and the db is only queried if both are set

Using more time I would've:
Hashed the pw
Loaded actual images instead of placeholders
Used migrations in database management
Placed on a live web-server. I'd like to still work on this part on my own time.

Let me know if you have any questions/concerns. My # is 225-931-4555
Thanks, Trey. 






