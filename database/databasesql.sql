CREATE TABLE customer(
cust_num int(11) AUTO_INCREMENT PRIMARY KEY not null,
first_name varchar(255) not null,
last_name varchar(255) not null,
email varchar(255) not null,
username varchar(255) not null,
passwd varchar(255) not null
);

CREATE TABLE appointment (
    appoint_num int PRIMARY KEY not NULL,
    service_code VARCHAR(255) FOREIGN KEY NOT NULL references service(service_code),
	cust_num int(11) FOREIGN KEY not null references customer(cust_num),
    appoint_time time NOT NULL,
    appoint_date date NOT NULL,
    payment_type char(1) not null
);

CREATE TABLE service(
    service_code VARCHAR(255) PRIMARY KEY not NULL,
    service_name VARCHAR(255) NOT NULL,
    service_price double NOT NULL
);

CREATE TABLE serviceBeautician (
	service_code VARCHAR(255) Primary key FOREIGN KEY NOT NULL references service(service_code),
    beautician_ID int Primary key FOREIGN KEY not null references beautician(beautician_ID),
);

CREATE TABLE beautician (
    beautician_ID int PRIMARY KEY not NULL,
    beautician_name VARCHAR(255) NOT NULL,
);