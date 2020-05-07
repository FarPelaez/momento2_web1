CREATE DATABASE medical_appointments

CREATE TABLE user_data (
	id int NOT NULL,
    name varchar (50) NOT NULL,
    lastname varchar (50) NOT NULL,
    birthday date NOT NULL,
    city varchar (20) NOT NULL,
    district varchar (20) NOT NULL,
    phone BIGINT CHECK (phone BETWEEN 1000000000 and 9999999999),
    PRIMARY KEY (id)
)

CREATE TABLE appointment_data(
    user_id int NOT NULL,
    appointment_name varchar (50) NOT NULL,
    appointment_date date NOT NULL,
    PRIMARY KEY (appointment_name, appointment_date),
    CONSTRAINT FK_appointment_user FOREIGN KEY (user_id) REFERENCES user_data (id)
)