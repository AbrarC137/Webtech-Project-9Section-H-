create table products
(
    id         int auto_increment
        primary key,
    name       varchar(20) not null,
    vendorname varchar(20) not null,
    catagory   varchar(20) not null,
    model      varchar(20) not null,
    price      varchar(50) not null,
    stock      varchar(10) not null
);


