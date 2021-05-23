
create table [user] 
(
    
    name varchar(35), 
    nickname varchar(25), 
    email varchar(320), 
    userid varchar(25), 
    password varchar(255), 
    zipcode int, 
    phone int,
    PRIMARY KEY (userid)
);

create table [event] 
(

    eventName varchar(90),
    sponsor varchar(90),
    description varchar(520),
    eventDate date,
    eventTime time
);


