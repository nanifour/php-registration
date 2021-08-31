# PHP login and Registration Forms


![](https://img.shields.io/github/languages/top/nanifour/php-registration?style=for-the-badge)        [![Demo](https://img.shields.io/badge/Demo-informational?style=for-the-badge&logo=github)](https://royal-pup-php.herokuapp.com/)

A login and signup form built with PHP, HTML, CSS, Bootstrap 5 and SQLite. This project contains two data entry forms, one for registrations and one for events. Only users who are logged in are able to add events. The data that is entered into both forms are saved to a database (SQLite). 

Passowrds are hashed using php. After a successful login, registration, or logout, the user is sent a session meesage to their screen using PHP and Bootstrap 5. 
These pages also look in the session for messages, and, if found, displays them at the top of the page, above the form, and delete them from the session when done. 

    The website was deployed on a server cloud (Heroku & CS Department linux servers).

## 2 Features
- Sign up for an account (informations saved to database)
- Log in 
- Event calender
- Add an event (users ONLY)
- Stores passwords in DB as hashes
- Easy logout via logout.php
- Check session for messages regarding logged in/out status

## 3 Technologies used
- PHP
- HTML
- CSS
- Boostrap 5
- SQLite for database 

## 4 Files
For every page: The session is checked for messages and if found, displays the message/alert at the top of the page, above the form. After, the message is deleted them from the session.

- index.php
> This is the homepage. The user can login through this page. After a successful login, the user is sent an alert.

- login_action.php
> This script validates the user credentials from the login page (index.php) by reading the user record from the database and checking the input password against the password hash. If and only if the credentials are correct, it updates the session with the userid/username.

- logout_action.php
> The user's session information (id/username) and message are cleared/reset.

- header.php
> This file contains the left and right menu. The left menu shows if the user is logged in.  The message "Hello Guest" or "Hello Royal Pups Member" is displayed depending on the user's session information.

- registration.php
> This is a sign up/registration form where the user can create an account with the following fields: full name, user name, password, and zipcode. The dual password fields are validated for a match using JavaScript before the form is submitted. The password is hashed using php before it is saved to the database.

- registration_action.php
> When the user submits the registration form, the information is saved to the database. The information is validated before it is saved to the database.

- events.php
> This page contains chronological list of events sponsored by the organization. Everyone is able to view the calender but ONLY logged in users are able to add events.

- new_event.php
> This a page where the user can add a new event. It accepts the following event information: event name, date and time, sponsor, and description. This page is accessible from a button on the events.php page. ONLY accessible by logged in users.

- new_event_action.php
> This script inserts a new event into the database. 


## 5 Screenshots
>Registration/Sign up
![screenshot](images/signup.png)

>Home/Sign In 
![screenshot](images/guest-home.png)

>User logged in
![screenshot](images/member-home.png)

>Events
![screenshot](images/member-event.png)


