create database bestcare;

create table user(
    id int(11)  AUTO_INCREMENT,
    firstname varchar(255),
    lastname varchar(255),
    email varchar(255),
    username varchar(255),
    password varchar(255)
    primary key (id)
);

create table patients(
    id int(11) AUTO_INCREMENT primary key,
    title varchar(255),
    firstname varchar(255),
    middlename varchar(255),
    lastname varchar(255),
    dob varchar(255),
    gender varchar(255),
    maritalstatus varchar(255),
    procedures varchar(255),
    ssn varchar(255),
    license varchar(255),
    billing varchar(255),
    comment varchar(255)
);

create table bridge_table(
    id int(11) AUTO_INCREMENT primary key,
    user_id int(11) foreign key(user),
    patient_id int(11) foreign key (patients)
)