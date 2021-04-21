create table addproduct
(
    id        int auto_increment
        primary key,
    name      varchar(20) not null,
    catagory  varchar(20) not null,
    entrydate date        not null,
    model     varchar(20) not null,
    price     varchar(50) not null,
    discount  varchar(10) not null,
    status    varchar(10) not null
);

create table alluser
(
    id       int auto_increment
        primary key,
    name     varchar(20) not null,
    password varchar(20) not null,
    dob      date        not null,
    gender   varchar(10) not null,
    email    varchar(20) not null,
    phone    varchar(20) not null,
    address  varchar(50) not null,
    type     varchar(20) not null
);


