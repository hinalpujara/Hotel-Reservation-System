CREATE DATABASE HotelManagement;
USE HotelManagement;
CREATE table rooms(
room_type varchar(15),
price float,
capacity int,
area int,
type_of_bed varchar(15));

CREATE table inclusions(
room_type varchar(15),
AC boolean,
breakfast boolean,
tv boolean,
mini_fridge boolean,
coffee_machine boolean,
hair_dryer boolean,
wifi boolean,
electronic_safe boolean);

CREATE table occupancy(
room_number int NOT NULL UNIQUE,
room_type varchar(15),
occupied boolean,
user_id bigint);

CREATE table booking_date(
date_of_booking date,
premium_availability int,
deluxe_availability int,
luxury_availability int);

CREATE table user_data(
user_id bigint UNIQUE NOT NULL,
first_name varchar(10),
last_name varchar(15),
email varchar(50),
contact varchar(10),
username varchar(20),
user_password varchar(15)
);

CREATE table booking_data(
booking_id bigint UNIQUE NOT NULL,
user_id bigint,
checkin date,
checkout date,
room_type varchar(15),
no_of_rooms int
);

CREATE table admin_data(
admin_id bigint NOT NULL UNIQUE,
first_name varchar(10),
last_name varchar(15),
contact varchar(10),
birthdate date,
username varchar(20),
admin_password varchar(15)
);
