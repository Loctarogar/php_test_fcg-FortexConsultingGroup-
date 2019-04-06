CREATE TABLE buildings (
BuildId INT,
Address VARCHAR(50)
);

CREATE TABLE persons (
PersonId INT,
Name VARCHAR(50),
BuildId INT
);

CREATE TABLE contacts (
ContactId INT,
PersonId INT,
Contact VARCHAR(50)
);

INSERT INTO buildings
VALUES ( 101, 'Test 11' ),
       ( 101, 'Protest 11' );

INSERT INTO persons
VALUE (10, 'Ivanov', 101),
      (20, 'Admin', 102);

INSERT INTO contacts
VALUES (15, 10, '901-12345678'),
       (25, 20, '901-12345678');


