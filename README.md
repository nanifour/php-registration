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


## 4 Screenshots
>Registration/Sign up
![screenshot](images/signup.png)

>Home/Sign In 
![screenshot](images/guest-home.png)

>User logged in
![screenshot](images/member-home.png)

>Events
![screenshot](images/member-event.png)


