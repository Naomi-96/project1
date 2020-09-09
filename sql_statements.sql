Create TABLE account(
	id int not null AUTO_INCREMENT,
    email VARCHAR(255) unique,
    password VARCHAR(255),
    Primary Key(id)
);


CREATE TABLE persoon(
    id int not null AUTO_INCREMENT,
    firstname int not null,
    insertion int,
    lastname int not null,
    username int not null,
    account_id int not null,
    PRIMARY Key (id),
    Foreign Key (account_id) references account(id)
);