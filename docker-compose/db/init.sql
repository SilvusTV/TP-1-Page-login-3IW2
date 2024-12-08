-- create database esgi;

create table USERS
(
    id         integer      not null
        constraint ID
            primary key,
    uername    varchar(128) not null,
    email      varchar(320) not null,
    password   varchar(255) not null,
    created_at timestamp default current_timestamp
);
