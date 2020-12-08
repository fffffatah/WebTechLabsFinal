create table `lab task`.users
(
    name     varchar(50) null,
    username varchar(50) not null
        primary key,
    password varchar(50) null,
    email    varchar(50) null,
    phone    varchar(50) null
);


