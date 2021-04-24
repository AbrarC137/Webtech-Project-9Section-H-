create table users
(
    id           int auto_increment
        primary key,
    username     varchar(20) not null,
    password     varchar(20) not null,
    gender       varchar(10) not null,
    email        varchar(20) not null,
    type         varchar(20) not null,
    verification tinyint     not null
);


