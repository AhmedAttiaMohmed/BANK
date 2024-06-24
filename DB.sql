create database if not exists marking;
use marking;

create table if not exists users(
	id int primary key auto_increment,
    name varchar(255) not null,
    email varchar(255) not null unique,
    password varchar(255) not null,
    address varchar(255) not null,
    vic_number int(255) not null unique,
    role enum('users','salesman') default 'users',
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp
);

create table if not exists posts(
	id int primary key auto_increment,
    title varchar(255) not null,
    content text,
	image varchar(255),
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp,
	user_id int,
	constraint fk_posts_users
    foreign key (user_id)
    references users(id)

);

create table if not exists comments(
	id int primary key auto_increment,
    comment varchar(255) not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp,
    user_id int,
    post_id int,
    constraint fk_posts_users_user_id
    foreign key (user_id)
    references users(id),
    constraint fk_posts_comments
    foreign key (user_id)
    references users(id)
);