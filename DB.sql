create database if not exists marking;
use marking;

create table if not exists users(
	id int primary key auto_increment,
    name varchar(255) not null,
    email varchar(255) not null unique,
    password varchar(255) not null,
    address varchar(255) not null,
    vic_number int(255) not null unique,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp
);

create table if not exists salesman(
	id int primary key auto_increment,
    name varchar(255) not null,
    email varchar(255) not null unique,
	password varchar(255) not null,
	
	