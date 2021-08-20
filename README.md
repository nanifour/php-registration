# PHP login and Registration Forms


![](https://img.shields.io/github/languages/top/nanifour/php-registration?style=for-the-badge)        [![Demo](https://img.shields.io/badge/Demo-informational?style=for-the-badge&logo=github)](https://royal-pup-php.herokuapp.com/)

A login and signup form built with PHP, HTML, CSS, and SQLite. This project contains two data entry forms, one for registrations and one for events. Only users who are logged in are able to add events. The data that is entered into both forms are saved to a database (SQLite). 

The passwords that are entered into the registration form are hashed using php before being saved to the database. These pages also look in the session for messages, and, if found, displays them at the top of the page, above the form, and delete them from the session when done. When a user logs in, the project searches through the database to find the corresponding username and hashed password.

    The website was deployed on a server cloud (Heroku & CS Department linux servers).



## 2 Technologies used
- PHP
- HTML
- CSS
- Boostrap 5
- SQLite for database 


## 3 Screenshots
>Registration/Sign up
![screenshot](images/signup.png)

>Home/Sign In 
![screenshot](images/guest-home.png)

>User logged in
![screenshot](images/member-home.png)

>Events
![screenshot](images/member-event.png)


