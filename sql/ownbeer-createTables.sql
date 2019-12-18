--database
--create database ownbeer;
--use ownbeer;

create table benutzer(
	id int NOT NULL auto_increment,
    userName varchar(255),
    userPw varchar(255),
    email varchar(255),
    shoppingcart int NOT NULL,
    orders int NOT NULL,
    PRIMARY KEY (id)
    );
    
create table orders(
	id int NOT NULL auto_increment,
    userID int NOT NULL,
    timeStamps timestamp,
    products varchar(255),
    currentPrice int NOT NULL,
    primary key (id)
    #foreign key (userID) references benutzer(orders)
	);
    
create table shoppingcart(
	id int NOT NULL auto_increment,
    userID int NOT NULL,
    products varchar(255),
    currentPrice int,
    primary key (id),
    foreign key (userID) references benutzer(id)
);
    
create table product(
	id int NOT NULL auto_increment,
    pname varchar(255),
    price float,
    category int NOT NULL,
    primary key (id)
    --foreign key (id) references orders(products),
    --foreign key (id) references shoppingcart(products)
);

create table category(
	id int NOT NULL auto_increment,
	catName varchar(255),
    size float NOT NULL,
    alc float,
    manufactuerer varchar(255),
    primary key(id)
    --foreign key (id) references product(category)
);

    