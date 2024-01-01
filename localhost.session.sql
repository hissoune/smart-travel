

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
    FOREIGN KEY (startcity, endcity) REFERENCES Road(startcity, endcity)

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
    ('Company A', 'CoA', 'company_a_logo.jpg'),
    ('Company B', 'CoB', 'images/company_b_logo.jpg'),
    ('Company C', 'CoC', 'images/company_c_logo.jpg');


INSERT INTO Bus (busnumber, licenseplate, capacity, companyname)
VALUES 
    (1, 'ABC123', 50, 'Company A'),
    (2, 'DEF456', 45, 'Company B'),
    (3, 'GHI789', 60, 'Company C'),
    (4, 'JKL012', 55, 'Company A'),
    (5, 'MNO345', 40, 'Company B'),
    (6, 'PQR678', 50, 'Company C'),
    (7, 'STU901', 48, 'Company A'),
    (8, 'VWX234', 52, 'Company B'),
    (9, 'YZA567', 65, 'Company C'),
    (10, 'BCD890', 44, 'Company A');


    -- Inserting schedules for bus ID 1
-- Inserting schedules for bus ID 1
INSERT INTO Schedule (date, departuretime, arrivaltime, availableseats, price, bus_id, startcity, endcity)
VALUES
    ('2023-01-01', '08:00:00', '12:00:00', 30, 50.0, 1, 'Casablanca', 'Fès'),
    ('2023-01-02', '10:00:00', '14:00:00', 25, 45.0, 1, 'Fès', 'Tangier');
    -- Add more scheduling information based on your requirements and available data
