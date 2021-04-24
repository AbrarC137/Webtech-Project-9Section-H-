create table ordered
(
    id         int auto_increment
        primary key,
    name       varchar(100) not null,
    model      varchar(10)  not null,
    vendorname varchar(20)  not null,
    price      int          not null,
    quantity   int          not null,
    total      int          not null,
    delivered  tinyint(1)   not null
);


