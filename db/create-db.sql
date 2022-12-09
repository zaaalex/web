create database web;

create table advert
(
    id int auto_increment unique,
    category varchar (255) not null,
    email varchar (255) not null,
    title varchar (255) not null,
    description varchar (255) not null
);

CREATE table category
(
    category_id int auto_increment unique,
    category_name varchar (32) not null
);

INSERT INTO category (category_name) VALUES
(
'PHONE', 'GIFT', 'CAR'
);