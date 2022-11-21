create database web;

create table advert
(
    id int auto_increment unique,
    category varchar (255) not null,
    email varchar (255) not null,
    title varchar (255) not null,
    description varchar (255) not null
);