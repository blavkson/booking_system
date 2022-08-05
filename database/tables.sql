CREATE TABLE services(
    service_code VARCHAR(255) PRIMARY KEY not NULL,
    service_name VARCHAR(255) NOT NULL,
    service_price double NOT NULL
);
INSERT INTO services (service_code, service_name, service_price)VALUES ('N101','Manicure','55.00');
INSERT INTO services (service_code, service_name, service_price)VALUES ('N102','Pedicure','55.00');
INSERT INTO services (service_code, service_name, service_price)VALUES ('N103','Manicure & Pedicure','90.00');
INSERT INTO services (service_code, service_name, service_price)VALUES ('N104','Nail installation','70.00');
INSERT INTO services (service_code, service_name,service_price)VALUES ('N105','Nail painting','40.00');

INSERT INTO services (service_code, service_name,service_price) VALUES ('H101','Chiskop','40.00');
INSERT INTO services (service_code, service_name, service_price)VALUES ('H102','Fade','50.00');
INSERT INTO services (service_code, service_name, service_price) VALUES ('H103','S-curl','55.00');
INSERT INTO services (service_code, service_name,service_price) VALUES ('H104','Ladies-fade','50.00');

INSERT INTO services (service_code, service_name, service_price) VALUES ('M101','Full body massage','450.00');
INSERT INTO services (service_code, service_name, service_price)VALUES ('M102','Back massage','200.00');
INSERT INTO services (service_code, service_name, service_price)VALUES ('M103','Foot massage','100.00');

INSERT INTO services (service_code, service_name,service_price)VALUES ('B101','Straight back','350.00');
INSERT INTO services (service_code, service_name, service_price)VALUES ('B102','Straight up','350.00');
INSERT INTO services (service_code, service_name, service_price)VALUES ('B103','Twist','280.00');
INSERT INTO services (service_code, service_name,service_price)VALUES ('B104','Dreadlocks','650.00');

CREATE TABLE Appointments (
    appoint_num int PRIMARY KEY not NULL,
    service_code VARCHAR(255) NOT NULL,
    beautician_code VARCHAR(255) NOT NULL,
    appoint_time time NOT NULL,
    appoint_date date NOT NULL
);
INSERT INTO Appointments (appoint_num, service_code, beautician_code, appoint_time,appoint_date)VALUES ('1','B101','001','08:00:00','2022-04-04');
INSERT INTO Appointments (appoint_num, service_code, beautician_code, appoint_time,appoint_date)VALUES ('2','H104','003','10:00:00','2022-04-04');
INSERT INTO Appointments (appoint_num, service_code, beautician_code, appoint_time,appoint_date)VALUES ('3','B104','005','12:00:00','2022-04-05');
INSERT INTO Appointments (appoint_num, service_code, beautician_code, appoint_time,appoint_date)VALUES ('4','M101','002','12:00:00','2022-04-05');
INSERT INTO Appointments (appoint_num, service_code, beautician_code, appoint_time,appoint_date)VALUES ('5','N104','001','08:00:00','2022-04-07');


CREATE TABLE beautician (
    beautNum int PRIMARY KEY not NULL,
    beaut_name VARCHAR(255) NOT NULL,
    service_code VARCHAR(255) NOT NULL
);
INSERT INTO beautician (beautNum, beaut_name,service_code)VALUES('001','Stacy Van Wyk','B101');
INSERT INTO beautician (beautNum, beaut_name, service_code) VALUES('002','John de Ville','H101');
INSERT INTO beautician (beautNum, beaut_name, service_code)VALUES ('003','Jenet Mbatha','M101');
INSERT INTO beautician (beautNum, beaut_name,service_code) VALUES ('004','Kgothatso Mashaba','B104');
INSERT INTO beautician (beautNum, beaut_name,service_code) VALUES ('005','Zandile Moloi','N104');

CREATE TABLE Admin
(
    admin_id INTEGER NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT
);

INSERT INTO Admin (admin_id, username, password) VALUES ('001', 'admin', 'Queens1234');

INSERT INTO customer(cust_num,first_name,last_name,email) VALUES ('00001','admin','system','admin@example.com');