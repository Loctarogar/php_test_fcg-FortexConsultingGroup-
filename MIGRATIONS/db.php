CREATE TABLE `first` (
`RecordId` int(11) DEFAULT NULL,
`Date` date DEFAULT NULL,
`Time` time DEFAULT NULL,
`EventId` int(11) DEFAULT NULL,
`UserId` int(11) DEFAULT NULL,
`ClientId` int(11) DEFAULT NULL
)

INSERT INTO first
VALUES (1, '2019-02-01', '15:00:00', 2, 100, 5),
       (2, '2019-02-01', '17:00:00', 2, 150, 5),
       (3, '2019-02-05', '12:00:00', 2, 200, 5),
       (4, '2019-02-05', '15:00:00', 3, 100, 5),
       (5, '2019-02-06', '15:00:00', 2, 200, 5),
       (6, '2019-02-10', '09:00:00', 4, 150, 5),
       (7, '2019-02-10', '09:00:00', 4, 100, 5)

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


