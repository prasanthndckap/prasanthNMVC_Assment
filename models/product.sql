create database products;
create table productdetails(
id int not null AUTO_INCREMENT,
    productname varchar(255),
    productimage varchar(255),
    SKU varchar(255),
    price varchar(255),
   brand varchar(255),
    manufacturedate date,
    availablestock int,
   created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY (id),
);