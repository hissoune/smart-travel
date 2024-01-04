

drop database smarttravel;
Create database smarttravel;
use smarttravel;
CREATE TABLE City (
    cityname VARCHAR(255) PRIMARY KEY

);
--@block
CREATE TABLE Road (
    
    distance FLOAT,
    duration Time,
    startcity VARCHAR(255),
    endcity VARCHAR(255),
    PRIMARY KEY (startcity, endcity),
    FOREIGN KEY (startcity) REFERENCES City(cityname),
    FOREIGN KEY (endcity) REFERENCES City(cityname)
);


--@block
Create Table Company(
    id int  PRIMARY KEY AUTO_INCREMENT,
    companyname VARCHAR(250) ,
    shortname VARCHAR(250) UNIQUE,
    img VARCHAR(250)
);

--@block
CREATE TABLE Bus (
    id int PRIMARY KEY AUTO_INCREMENT,
    busnumber INT UNIQUE ,
    licenseplate VARCHAR(250) UNIQUE,
    capacity INT,
    companyname VARCHAR(250),
    comp_id int ,
    FOREIGN KEY (comp_id) REFERENCES Company(id)
    

);
--@block
CREATE TABLE Schedule (
    id INT PRIMARY KEY AUTO_INCREMENT,
    date Date,
    departuretime Time,
    arrivaltime Time,
    availableseats INT,
    price Float,  
    bus_id INT,
    startcity VARCHAR(255),
    endcity VARCHAR(255), 
    FOREIGN KEY (bus_id) REFERENCES Bus(id),
    FOREIGN KEY (startcity, endcity) REFERENCES Road(startcity, endcity) ON UPDATE CASCADE ON DELETE CASCADE

);

--@block


-- Inserting 30 roads with start and end cities from the City table
-- Inserting 30 roads with start and end cities from the City table
-- Avoiding duplicates in the City table
INSERT IGNORE INTO City VALUES
('Casablanca'),('Fès'),('Tangier'),('Marrakech'),('Sale'),('Mediouna'),('Rabat'),('Meknès'),('Oujda-Angad'),('Kenitra'),('Agadir'),('Tétouan'),('Taourirt'),('Temara'),('Safi'),('Khénifra'),('Laâyoune'),('Mohammedia'),('Kouribga'),('El Jadida'),('Béni Mellal'),('Ait Melloul'),('Nador'),('Taza'),('Settat'),('Barrechid'),('Al Khmissat'),('Inezgane'),('Ksar El Kebir'),('Larache'),('Guelmim'),('Berkane'),('Khemis Sahel'),('Ad Dakhla'),('Bouskoura'),('Al Fqih Ben Çalah'),('Oued Zem'),('Sidi Slimane'),('Errachidia'),('Guercif'),('Oulad Teïma'),('Ben Guerir'),('Sefrou'),('Fnidq'),('Sidi Qacem'),('Moulay Abdallah'),('Youssoufia'),('Martil'),('Skhirate'),('Ouezzane'),('Sidi Yahya Zaer'),('Al Hoceïma'),('Mdiq'),('Sidi Bennour'),('Midalt'),('Azrou'),('Beni Yakhlef'),('Ad Darwa'),('Al Aaroui'),('El Aïoun'),('Azemmour'),('Temsia'),('Zagora'),('Ait Ourir'),('Aziylal'),('Sidi Yahia El Gharb'),('El Hajeb'),('Imzouren'),('Tit Mellil'),('Arfoud'),('Sidi Smaiil'),('Mehdya'),('Aïn Taoujdat'),('Chichaoua'),('Tahla'),('Moulay Bousselham'),('Oulad Tayeb'),('Bir Jdid'),('Tifariti');

-- Inserting 30 roads with start and end cities from the City table
INSERT IGNORE INTO Road (distance, duration, startcity, endcity)
VALUES
    (100.5, '2 hours', 'Casablanca', 'Fès'),
    (75.2, '1.5 hours', 'Fès', 'Tangier'),
    (120.8, '3 hours', 'Tangier', 'Marrakech'),
    (50.0, '1 hour', 'Marrakech', 'Sale'),
    (85.3, '2.5 hours', 'Sale', 'Rabat'),
    (200.0, '4 hours', 'Rabat', 'Meknès'),
    (90.1, '2.3 hours', 'Rabat', 'Kenitra'),
    -- Add more roads as needed
    (110.0, '2.7 hours', 'Casablanca', 'Sale'),
    (130.5, '3.5 hours', 'Meknès', 'Fès'),
    -- Add more roads as needed
    (80.0, '2 hours', 'Tangier', 'Rabat'),
    (45.0, '1.2 hours', 'Marrakech', 'Fès'),
    -- Add more roads as needed
    (150.0, '3.5 hours', 'Sale', 'Oujda-Angad'),
    (70.0, '1.5 hours', 'Casablanca', 'Meknès'),
    -- Add more roads as needed
    (180.0, '4 hours', 'Rabat', 'Tangier'),
    (95.0, '2 hours', 'Fès', 'Kenitra'),
    -- Add more roads as needed
    (120.0, '2.5 hours', 'Casablanca', 'Rabat'),
    (55.0, '1.3 hours', 'Meknès', 'Oujda-Angad'),
    -- Add more roads as needed
    (200.0, '3.5 hours', 'Sale', 'Marrakech'),
    (65.0, '1.7 hours', 'Rabat', 'Kenitra'),
    -- Add more roads as needed
    (90.0, '2 hours', 'Casablanca', 'Tangier'),
    (40.0, '1 hour', 'Marrakech', 'Kenitra'),
    -- Add more roads as needed
    (110.0, '2.5 hours', 'Sale', 'Fès'),
    (75.0, '1.8 hours', 'Rabat', 'Oujda-Angad'),
    -- Add more roads as needed
    (130.0, '3 hours', 'Casablanca', 'Marrakech'),
    (50.0, '1 hour', 'Fès', 'Tangier');
    -- Add more roads as needed



-- Inserting data into the Company table
INSERT INTO Company (companyname, shortname, img)
VALUES 
    ('AlWissamAddahabi', 'ALA', 'AlWissamAddahabi.jpg'),
    ('BabAllah', 'BAL', 'BabAllah.jpg'),
    ('BabSalama', 'BBS', 'BabSalama.jpg'),
    ('bismilah', 'BLAH', 'bismilah.jpg'),
    ('CATIEM ', 'ctm', 'ctm.jpg'),
    ('ghazala', 'ghz', 'ghazala.jpg'),
    ('GloBus', 'GB', 'GloBus.jpg'),
    ('ItraneSouss', 'IS', 'ItraneSouss.jpg'),
    ('JanaViajes', 'JV', 'JanaViajes.jpg'),
    ('PullmanDuSud', 'BDS', 'PullmanDuSud.jpg'),
    ('SalamaVoyages', 'SV', 'SalamaVoyages.jpg'),
    ('SAT_First', 'SF', 'SAT_First.jpg'),
    ('sotram', 'STR', 'sotram.jpg'),
    ('Supratours', 'ST', 'Supratours.jpg'),
    ('taj', 'taj', 'taj.jpg'),
    ('TransAlYamama', 'TA', 'TransAlYamama.jpg'),
    ('TransAnnamir', 'TAN', 'TransAnnamir.jpg'),
    ('TransFadila', 'TF', 'TransFadila.jpg');


INSERT INTO Bus (busnumber, licenseplate, capacity,comp_id )
VALUES 
     (1, 'ABC123', 50,1 ),
    (2, 'DEF456', 45,2 ),
    (3, 'GHI789', 60,1),
    (4, 'JKL012', 55,1),
    (5, 'MNO345', 40,2),
    (6, 'PQR678', 50,2),
    (7, 'STU901', 48,1),
    (8, 'VWX234', 52,1),
    (9, 'YZA567', 66,2),
    (10, 'YSA567', 65,3),
    (11, 'YAA567', 65,4),
    (12, 'YBA567', 65,5 ),
    (13, 'YTTA567', 65,3 ),
    (14, 'YUUA567', 65,6 ),
    (15, 'YRE567', 65,7 ),
    (16, 'YZE567', 65, 9),
    (17, 'YZA533', 65, 8),
    (18, 'YFF567', 65, 7),
    (19, 'YZYUI67', 65,10 ),
    (20, 'YZ22367', 65,12),
    (21, 'YZEER67', 65, 11),
    (22, 'YZZER67', 65,13 ),
    (23, 'YZAZE67', 65, 4),
    (24, 'BFFD890', 44, 5),
     (25, 'EFF901', 55, 7),
    (26, 'HIFF234', 60,6),
    (27, 'KJ567', 45,9 ),
    (28, 'NOGH890', 50,9),
    (29, 'QLM123', 48, 15),
    (30, 'TUFD56', 52,12),
    (31, 'WAQZ01', 65,9 ),
    (32, 'ABDS34', 65,7 ),
    (33, 'DEF567', 65,6 ),
    (34, 'GHI890', 65,4 ),
    (35, 'JKL123', 65, 5),
    (36, 'MNO456', 65, 2),
    (37, 'PQR789', 65, 7),
    (38, 'STU012', 65, 9),
    (39, 'VWX345', 65, 7),
    (40, 'YZA678', 65, 4),
    (41, 'BCD901', 65, 13),
    (42, 'EFG234', 65,2 ),
    (43, 'HIJ567', 65,8 ),
    (44, 'KLM890', 65, 5),
    (45, 'NOP123', 65,4 ),
    (46, 'QRS456', 65,3 ),
    (47, 'TUV789', 65, 2),
    (48, 'WXYZ12', 65,6 );


    -- Inserting schedules for bus ID 1

INSERT INTO Schedule (date, departuretime, arrivaltime, availableseats, price, bus_id, startcity, endcity)
VALUES
    ('2024-01-01', '08:00:00', '12:00:00', 30, 50.0, 1, 'Casablanca', 'Fès'),
    ('2024-01-02', '10:00:00', '14:00:00', 25, 45.0,5, 'Fès', 'Tangier'),
    -- Add more values as needed
    ('2024-01-14', '09:00:00', '13:00:00', 28, 55.0, 2, 'Tangier', 'Marrakech'),
    ('2024-01-15', '11:00:00', '15:00:00', 20, 40.0, 6, 'Marrakech', 'Sale'),
    -- Add more values as needed
    ('2024-01-05', '08:30:00', '12:30:00', 32, 60.0, 3, 'Sale', 'Rabat'),
    ('2024-01-06', '10:30:00', '14:30:00', 22, 35.0, 8, 'Rabat', 'Meknès'),

     ('2024-01-07', '09:30:00', '13:30:00', 28, 55.0, 4, 'Rabat', 'Kenitra'),
    ('2024-01-08', '11:30:00', '15:30:00', 20, 40.0, 9, 'Casablanca', 'Sale'),
    -- Schedule for bus number 5
    ('2024-01-09', '08:45:00', '12:45:00', 32, 60.0, 5, 'Meknès', 'Fès'),
    ('2024-01-10', '10:45:00', '14:45:00', 22, 35.0, 22, 'Sale', 'Oujda-Angad'),
    -- Continue with more buses and their schedules
    ('2024-01-11', '09:00:00', '13:00:00', 28, 55.0, 6, 'Casablanca', 'Meknès'),
    ('2024-01-12', '11:00:00', '15:00:00', 20, 40.0, 33,'Rabat', 'Tangier'),
    -- Continue with more buses and their schedules
      ('2024-01-13', '08:30:00', '12:30:00', 30, 50.0, 22, 'Fès', 'Kenitra'),
    ('2024-01-14', '10:30:00', '14:30:00', 25, 45.0, 7, 'Meknès', 'Oujda-Angad'),
    -- Schedule for bus number 8
    ('2024-01-15', '09:00:00', '13:00:00', 28, 55.0, 30, 'Sale', 'Marrakech'),
    ('2024-01-16', '11:00:00', '15:00:00', 20, 40.0, 8, 'Sale', 'Fès'),
    -- Continue with more buses and their schedules
    ('2024-01-05', '08:45:00', '12:45:00', 32, 60.0, 40, 'Sale', 'Rabat'),
    ('2024-01-18', '10:45:00', '14:45:00', 22, 35.0, 9, 'Rabat', 'Oujda-Angad'),
    -- Continue with more buses and their schedules
    ('2024-01-19', '09:00:00', '13:00:00', 28, 55.0, 10,'Casablanca', 'Marrakech'),
    ('2024-01-02', '11:00:00', '15:00:00', 20, 40.0, 10, 'Fès', 'Tangier'),
    -- Continue with more buses and their schedules
    ('2024-01-14', '08:30:00', '12:30:00', 30, 50.0, 11, 'Tangier', 'Marrakech'),
    ('2024-01-15', '10:30:00', '14:30:00', 25, 45.0, 11, 'Marrakech', 'Sale'),
     ('2024-01-05', '09:00:00', '13:00:00', 28, 55.0, 12, 'Sale', 'Rabat'),
    ('2024-01-24', '11:00:00', '15:00:00', 20, 40.0, 12, 'Rabat', 'Meknès'),
    -- Continue with more buses and their schedules
    ('2024-01-01', '08:45:00', '12:45:00', 32, 60.0, 13, 'Casablanca', 'Fès'),
    ('2024-01-02', '10:45:00', '14:45:00', 22, 35.0, 13, 'Fès', 'Tangier'),
    -- Continue with more buses and their schedules
    ('2024-01-14', '09:00:00', '13:00:00', 28, 55.0, 14, 'Tangier', 'Marrakech'),
    ('2024-01-15', '11:00:00', '15:00:00', 20, 40.0, 14, 'Marrakech', 'Sale'),
    -- Continue with more buses and their schedules
    ('2024-01-05', '08:30:00', '12:30:00', 30, 50.0, 15, 'Sale', 'Rabat'),
    ('2024-01-30', '10:30:00', '14:30:00', 25, 45.0, 15, 'Rabat', 'Meknès'),
    -- Continue with more buses and their sch
    ('2024-01-31', '08:00:00', '12:00:00', 30, 50.0, 16, 'Casablanca', 'Fès'),
    ('2024-02-02', '10:00:00', '14:00:00', 25, 45.0, 16, 'Fès', 'Tangier'),
    -- Schedule for bus number 17
    ('2024-02-14', '09:00:00', '13:00:00', 28, 55.0, 17, 'Tangier', 'Marrakech'),
    ('2024-02-15', '11:00:00', '15:00:00', 20, 40.0, 17, 'Marrakech', 'Sale'),
    -- Continue with more buses and their schedules
    ('2024-02-05', '08:30:00', '12:30:00', 32, 60.0, 18, 'Sale', 'Rabat'),
    ('2024-02-05', '10:30:00', '14:30:00', 22, 35.0, 18, 'Rabat', 'Meknès'),
    -- Continue with more buses and their schedules
    ('2024-02-01', '09:00:00', '13:00:00', 28, 55.0, 19, 'Casablanca', 'Fès'),
    ('2024-02-02', '11:00:00', '15:00:00', 20, 40.0, 19, 'Fès', 'Tangier'),
    -- Continue with more buses and their schedules
    ('2024-02-14', '08:30:00', '12:30:00', 30, 50.0, 20, 'Tangier', 'Marrakech'),
    ('2024-02-15', '10:30:00', '14:30:00', 25, 45.0, 20, 'Marrakech', 'Sale'),
    -- Continue with more buses and their schedules
    ('2024-02-05', '09:00:00', '13:00:00', 28, 55.0, 21, 'Sale', 'Rabat'),
    ('2024-02-11', '11:00:00', '15:00:00', 20, 40.0, 21, 'Rabat', 'Meknès'),
    -- Continue with more buses and their schedules
    ('2024-02-01', '08:45:00', '12:45:00', 32, 60.0, 22, 'Casablanca', 'Fès'),
    ('2024-02-02', '10:45:00', '14:45:00', 22, 35.0, 22, 'Fès', 'Tangier'),
    -- Continue with more buses and their schedules
    ('2024-02-14', '09:00:00', '13:00:00', 28, 55.0, 23, 'Tangier', 'Marrakech'),
    ('2024-02-15', '11:00:00', '15:00:00', 20, 40.0, 23, 'Marrakech', 'Sale');
    -- Continue with more buses and their schedules