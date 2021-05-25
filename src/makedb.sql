
create table [user] 
(

    name varchar(35), 
    username varchar(25),
    email varchar(320), 
    password varchar(255), 
    zipcode int, 
    PRIMARY KEY (username)
);

create table [event] 
(

    eventName varchar(90),
    sponsor varchar(90),
    description varchar(520),
    eventDate date,
    eventTime time
);


