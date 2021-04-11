# Overview
This folder contains all the code for the StarLux Cinemas web application. To run this appplication, download the code and extract the zip file. A local server such as 
WAMP Server is required for deployment. The main-page.html file would need to be launched.

## API
The OMDB API is used in order to display movie posters and their pertaining details. An API key is required to access this information, which is already given in the file.

## Database

Users are required to signup/login to the system and their information will be stored in a database. To access the database, it will need to be created locally through
WAMP Server's MySQL Console. Write the following commands in the console to do so:

`CREATE DATABASE webfinal;`
`USE webfinal;`
`CREATE TABLE users (Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Username VARCHAR(50) NOT NULL, Password VARCHAR(60) NOT NULL, Email VARCHAR(50) NOT NULL);`

An alternative for writing console commands is to simply open phpMyAdmin through WAMP and create a database from there.

## Email Confirmation

Once the user has purchased their tickets in the checkout page, they will be sent a confirmation email to the email that they signed up with. For the email to send, the user 
MUST sign up with a gmail account (@gmail.com) and follow the steps below to configure sendmail, which will send an email from localhost using WAMP Server.

### Configuring sendmail using WAMP

Please refer to the following video to setup email confirmation:

https://www.youtube.com/watch?v=fGyvB9DkDBA

**Note: If you have the wamp64 version, make sure to write 'wamp64' instead of 'wamp' on line 1038 where it says sendmail_path (php.ini file)**


