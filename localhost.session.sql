

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
    companyname VARCHAR(250) PRIMARY KEY,
    shortname VARCHAR(250) UNIQUE,
    img VARCHAR(250)
);

--@block
CREATE TABLE Bus (
    busnumber INT PRIMARY KEY ,
    licenseplate VARCHAR(250) UNIQUE,
    capacity INT,
    companyname VARCHAR(250),
    FOREIGN KEY (companyname) REFERENCES Company(companyname)
    

);
--@block
CREATE TABLE Schedule (
    id INT PRIMARY KEY AUTO_INCREMENT,
    date Date,
    departuretime Time,
    arrivaltime Time,
    availableseats INT,
    price Float,  
    busnumber INT,
    startcity VARCHAR(255),
    endcity VARCHAR(255), 
    FOREIGN KEY (busnumber) REFERENCES Bus(busnumber),
    FOREIGN KEY (startcity, endcity) REFERENCES Road(startcity, endcity)

);

--@block
INSERT INTO City VALUES
('Casablanca'),('Fès'),('Tangier'),('Marrakech'),('Sale'),('Mediouna'),('Rabat'),('Meknès'),('Oujda-Angad'),('Kenitra'),('Agadir'),('Tétouan'),('Taourirt'),('Temara'),('Safi'),('Khénifra'),('Laâyoune'),('Mohammedia'),('Kouribga'),('El Jadida'),('Béni Mellal'),('Ait Melloul'),('Nador'),('Taza'),('Settat'),('Barrechid'),('Al Khmissat'),('Inezgane'),('Ksar El Kebir'),('Larache'),('Guelmim'),('Berkane'),('Khemis Sahel'),('Ad Dakhla'),('Bouskoura'),('Al Fqih Ben Çalah'),('Oued Zem'),('Sidi Slimane'),('Errachidia'),('Guercif'),('Oulad Teïma'),('Ben Guerir'),('Sefrou'),('Fnidq'),('Sidi Qacem'),('Moulay Abdallah'),('Youssoufia'),('Martil'),('Skhirate'),('Ouezzane'),('Sidi Yahya Zaer'),('Al Hoceïma'),('M’diq'),('Sidi Bennour'),('Midalt'),('Azrou'),('Beni Yakhlef'),('Ad Darwa'),('Al Aaroui'),('El Aïoun'),('Azemmour'),('Temsia'),('Zagora'),('Ait Ourir'),('Aziylal'),('Sidi Yahia El Gharb'),('El Hajeb'),('Imzouren'),('Tit Mellil'),('Arfoud'),('Sidi Smai’il'),('Mehdya'),('Aïn Taoujdat'),('Chichaoua'),('Tahla'),('Moulay Bousselham'),('Oulad Tayeb'),('Bir Jdid'),('Tifariti');
--@block
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
    companyname VARCHAR(250) PRIMARY KEY,
    shortname VARCHAR(250) UNIQUE,
    img VARCHAR(250)
);

--@block
CREATE TABLE Bus (
    busnumber INT PRIMARY KEY ,
    licenseplate VARCHAR(250) UNIQUE,
    capacity INT,
    companyname VARCHAR(250),
    FOREIGN KEY (companyname) REFERENCES Company(companyname)
    

);
--@block
CREATE TABLE Schedule (
    id INT PRIMARY KEY AUTO_INCREMENT,
    date Date,
    departuretime Time,
    arrivaltime Time,
    availableseats INT,
    price Float,  
    busnumber INT,
    startcity VARCHAR(255),
    endcity VARCHAR(255), 
    FOREIGN KEY (busnumber) REFERENCES Bus(busnumber),
    FOREIGN KEY (startcity, endcity) REFERENCES Road(startcity, endcity)

);

--@block
INSERT INTO City VALUES
('Casablanca'),('Fès'),('Tangier'),('Marrakech'),('Sale'),('Mediouna'),('Rabat'),('Meknès'),('Oujda-Angad'),('Kenitra'),('Agadir'),('Tétouan'),('Taourirt'),('Temara'),('Safi'),('Khénifra'),('Laâyoune'),('Mohammedia'),('Kouribga'),('El Jadida'),('Béni Mellal'),('Ait Melloul'),('Nador'),('Taza'),('Settat'),('Barrechid'),('Al Khmissat'),('Inezgane'),('Ksar El Kebir'),('Larache'),('Guelmim'),('Berkane'),('Khemis Sahel'),('Ad Dakhla'),('Bouskoura'),('Al Fqih Ben Çalah'),('Oued Zem'),('Sidi Slimane'),('Errachidia'),('Guercif'),('Oulad Teïma'),('Ben Guerir'),('Sefrou'),('Fnidq'),('Sidi Qacem'),('Moulay Abdallah'),('Youssoufia'),('Martil'),('Skhirate'),('Ouezzane'),('Sidi Yahya Zaer'),('Al Hoceïma'),('Mdiq'),('Sidi Bennour'),('Midalt'),('Azrou'),('Beni Yakhlef'),('Ad Darwa'),('Al Aaroui'),('El Aïoun'),('Azemmour'),('Temsia'),('Zagora'),('Ait Ourir'),('Aziylal'),('Sidi Yahia El Gharb'),('El Hajeb'),('Imzouren'),('Tit Mellil'),('Arfoud'),('Sidi Smaiil'),('Mehdya'),('Aïn Taoujdat'),('Chichaoua'),('Tahla'),('Moulay Bousselham'),('Oulad Tayeb'),('Bir Jdid'),('Tifariti');
--@block


--@block
-- INSERT INTO Road (distance, duration, startcity, endcity) VALUES
-- (250.5, '2:30:00', 'Casablanca', 'Fès'),
-- (200.0, '3:00:00', 'Casablanca', 'Tangier'),
-- (100.0, '1:30:00', 'Fès', 'Marrakech'),
-- (80.0, '1:30:00', 'El Jadida', 'Casablanca'),
-- (60.0, '0:45:00', 'El Jadida', 'Rabat'),
-- (200.0, '4:30:00', 'El Jadida', 'Marrakech'),
-- (80.0, '1:30:00', 'Casablanca', 'El Jadida'),
-- (60.0, '0:45:00', 'Rabat', 'El Jadida'),
-- (100.0,'3:30:00','Safi', 'El Jadida'),
-- (100.0,'3:30:00', 'El Jadida','Safi'),
-- (250.0,'4:30:00','Safi', 'Casablanca'),
-- (250.0, '4:30:00', 'Casablanca', 'Safi'),
-- (200.0, '4:30:00', 'Marrakech', 'El Jadida'),
-- (120.0, '1:30:00', 'Casablanca', 'Rabat'),
-- (200.0, '2:45:00', 'Casablanca', 'Marrakech'),
-- (120.0, '1:30:00', 'Rabat', 'Casablanca'),
-- (180.0, '2:15:00', 'Rabat', 'Marrakech'),
-- (300.0, '4:00:00', 'Zagora', 'Casablanca'),
-- (250.0, '3:30:00', 'Zagora', 'Agadir'),
-- (400.0, '5:30:00', 'Zagora', 'El Jadida'),
-- (350.0, '4:45:00', 'Zagora', 'Safi'),
-- (100.0, '1:45:00', 'Rabat', 'Safi'),
-- (150.0, '2:15:00', 'Agadir', 'Casablanca'),
-- (120.0, '1:45:00', 'Agadir', 'El Jadida'),
-- (90.0, '1:15:00', 'Agadir', 'Safi'),
-- (60.0, '0:45:00', 'El Jadida', 'Agadir')

-- --@block
-- INSERT INTO Bus VALUES
-- (1, 'ABC123', 50, 'Compagnie de transports au Maroc'),
-- (2, 'XYZ456', 40, 'TajVoyage'),
-- (4, 'PQR012', 55, 'SAT First'),
-- (5, 'JKL345', 60, 'Ghazala'),
-- (6, 'DEF678', 48, 'Sotram'),
-- (7, 'MNO901', 42, 'GloBus Trans'),
-- (8, 'IJK890', 46, 'Trans Al Yamama'),
-- (9, 'NOP123', 52, 'Pullman Du Sud'),
-- (10, 'ABC456', 40, 'Trans Annamir'),
-- (11, 'ABC789', 50, 'Compagnie de transports au Maroc'),
-- (12, 'XYZ012', 45, 'Compagnie de transports au Maroc'),
-- (13, 'LMN567', 42, 'TajVoyage'),
-- (14, 'PQR890', 48, 'TajVoyage'),
-- (15, 'JKL901', 55, 'Pullman Du Sud'),
-- (16, 'DEF234', 46, 'Pullman Du Sud'),
-- (17, 'MNO567', 60, 'Ghazala'),
-- (18, 'RST890', 52, 'Ghazala')
-- --@block
-- INSERT INTO Schedule (date, departuretime, arrivaltime, availableseats, price, busnumber, startcity, endcity) VALUES
-- ('2024-01-17', '14:00:00', '18:30:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-18', '16:30:00', '21:00:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-19', '09:00:00', '13:30:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-20', '08:00:00', '12:30:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-20', '11:30:00', '16:00:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-20', '14:00:00', '18:30:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-17', '08:00:00', '12:30:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-18', '11:30:00', '16:00:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-19', '14:00:00', '18:30:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-20', '16:30:00', '21:00:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-20', '19:00:00', '23:30:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-20', '22:00:00', '02:30:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-18', '10:00:00', '14:30:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-18', '13:30:00', '18:00:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-18', '16:00:00', '20:30:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-18', '08:30:00', '13:00:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-18', '11:00:00', '15:30:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-18', '14:30:00', '19:00:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-19', '12:00:00', '16:30:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-19', '15:30:00', '20:00:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-19', '18:00:00', '22:30:00', 40, 200.0, 1, 'Safi', 'El Jadida'),
-- ('2024-01-19', '09:30:00', '14:00:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-19', '12:00:00', '16:30:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-19', '15:30:00', '20:00:00', 30, 150.0, 1, 'El Jadida', 'Safi'),
-- ('2024-01-17', '14:00:00', '18:30:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-18', '16:30:00', '21:00:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-19', '09:00:00', '13:30:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-20', '08:00:00', '12:30:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-20', '11:30:00', '16:00:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-20', '14:00:00', '18:30:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-17', '08:00:00', '12:30:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-18', '11:30:00', '16:00:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-19', '14:00:00', '18:30:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-20', '16:30:00', '21:00:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-20', '19:00:00', '23:30:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-20', '22:00:00', '02:30:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-18', '10:00:00', '14:30:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-18', '13:30:00', '18:00:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-18', '16:00:00', '20:30:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-18', '08:30:00', '13:00:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-18', '11:00:00', '15:30:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-18', '14:30:00', '19:00:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-19', '12:00:00', '16:30:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-19', '15:30:00', '20:00:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-19', '18:00:00', '22:30:00', 40, 200.0, 2, 'Safi', 'El Jadida'),
-- ('2024-01-19', '09:30:00', '14:00:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-19', '12:00:00', '16:30:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-19', '15:30:00', '20:00:00', 30, 150.0, 2, 'El Jadida', 'Safi'),
-- ('2024-01-17', '14:00:00', '18:30:00', 25, 180.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-18', '16:30:00', '21:00:00', 30, 190.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-19', '09:00:00', '13:30:00', 20, 170.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-20', '08:00:00', '12:30:00', 25, 185.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-20', '11:30:00', '16:00:00', 28, 195.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-20', '14:00:00', '18:30:00', 22, 175.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-17', '08:00:00', '12:30:00', 18, 160.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-18', '11:30:00', '16:00:00', 15, 150.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-19', '14:00:00', '18:30:00', 20, 170.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-20', '16:30:00', '21:00:00', 17, 165.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-20', '19:00:00', '23:30:00', 12, 140.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-20', '22:00:00', '02:30:00', 10, 130.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-18', '10:00:00', '14:30:00', 28, 195.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-18', '13:30:00', '18:00:00', 22, 175.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-18', '16:00:00', '20:30:00', 25, 185.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-18', '08:30:00', '13:00:00', 15, 150.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-18', '11:00:00', '15:30:00', 20, 170.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-18', '14:30:00', '19:00:00', 18, 160.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-19', '12:00:00', '16:30:00', 30, 190.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-19', '15:30:00', '20:00:00', 22, 175.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-19', '18:00:00', '22:30:00', 25, 185.0, 7, 'Agadir', 'El Jadida'),
-- ('2024-01-19', '09:30:00', '14:00:00', 12, 140.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-19', '12:00:00', '16:30:00', 18, 160.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-19', '15:30:00', '20:00:00', 20, 170.0, 7, 'El Jadida', 'Agadir'),
-- ('2024-01-17', '14:00:00', '18:30:00', 20, 170.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-18', '16:30:00', '21:00:00', 15, 160.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-19', '09:00:00', '13:30:00', 18, 160.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-20', '08:00:00', '12:30:00', 22, 175.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-20', '11:30:00', '16:00:00', 25, 185.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-20', '14:00:00', '18:30:00', 30, 190.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-17', '08:00:00', '12:30:00', 15, 160.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-18', '11:30:00', '16:00:00', 20, 170.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-19', '14:00:00', '18:30:00', 18, 160.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-20', '16:30:00', '21:00:00', 12, 140.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-20', '19:00:00', '23:30:00', 10, 130.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-20', '22:00:00', '02:30:00', 8, 120.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-18', '10:00:00', '14:30:00', 25, 185.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-18', '13:30:00', '18:00:00', 30, 190.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-18', '16:00:00', '20:30:00', 22, 175.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-18', '08:30:00', '13:00:00', 18, 160.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-18', '11:00:00', '15:30:00', 20, 170.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-18', '14:30:00', '19:00:00', 15, 160.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-19', '12:00:00', '16:30:00', 30, 190.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-19', '15:30:00', '20:00:00', 22, 175.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-19', '18:00:00', '22:30:00', 25, 185.0, 4, 'Agadir', 'El Jadida'),
-- ('2024-01-19', '09:30:00', '14:00:00', 12, 140.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-19', '12:00:00', '16:30:00', 18, 160.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-19', '15:30:00', '20:00:00', 20, 170.0, 4, 'El Jadida', 'Agadir'),
-- ('2024-01-17', '14:00:00', '18:30:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-18', '16:30:00', '21:00:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-19', '09:00:00', '13:30:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-20', '08:00:00', '12:30:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-20', '11:30:00', '16:00:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-20', '14:00:00', '18:30:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-17', '08:00:00', '12:30:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-18', '11:30:00', '16:00:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-19', '14:00:00', '18:30:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-20', '16:30:00', '21:00:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-20', '19:00:00', '23:30:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-20', '22:00:00', '02:30:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-18', '10:00:00', '14:30:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-18', '13:30:00', '18:00:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-18', '16:00:00', '20:30:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-18', '08:30:00', '13:00:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-18', '11:00:00', '15:30:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-18', '14:30:00', '19:00:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-19', '12:00:00', '16:30:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-19', '15:30:00', '20:00:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-19', '18:00:00', '22:30:00', 40, 200.0, 5, 'Casablanca', 'El Jadida'),
-- ('2024-01-19', '09:30:00', '14:00:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-19', '12:00:00', '16:30:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-19', '15:30:00', '20:00:00', 30, 150.0, 5, 'El Jadida', 'Casablanca'),
-- ('2024-01-17', '14:00:00', '18:30:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-18', '16:30:00', '21:00:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-19', '09:00:00', '13:30:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-20', '08:00:00', '12:30:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-20', '11:30:00', '16:00:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-20', '14:00:00', '18:30:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-17', '08:00:00', '12:30:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-18', '11:30:00', '16:00:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-19', '14:00:00', '18:30:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-20', '16:30:00', '21:00:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-20', '19:00:00', '23:30:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-20', '22:00:00', '02:30:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-18', '10:00:00', '14:30:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-18', '13:30:00', '18:00:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-18', '16:00:00', '20:30:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-18', '08:30:00', '13:00:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-18', '11:00:00', '15:30:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-18', '14:30:00', '19:00:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-19', '12:00:00', '16:30:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-19', '15:30:00', '20:00:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-19', '18:00:00', '22:30:00', 40, 200.0, 6, 'El Jadida', 'Casablanca'),
-- ('2024-01-19', '09:30:00', '14:00:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-19', '12:00:00', '16:30:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-19', '15:30:00', '20:00:00', 30, 150.0, 6, 'Casablanca', 'El Jadida'),
-- ('2024-01-17', '14:00:00', '18:30:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-18', '16:30:00', '21:00:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-19', '09:00:00', '13:30:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-20', '08:00:00', '12:30:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-20', '11:30:00', '16:00:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-20', '14:00:00', '18:30:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-17', '08:00:00', '12:30:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-18', '11:30:00', '16:00:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-19', '14:00:00', '18:30:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-20', '16:30:00', '21:00:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-20', '19:00:00', '23:30:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-20', '22:00:00', '02:30:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-18', '10:00:00', '14:30:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-18', '13:30:00', '18:00:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-18', '16:00:00', '20:30:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-18', '08:30:00', '13:00:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-18', '11:00:00', '15:30:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-18', '14:30:00', '19:00:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-19', '12:00:00', '16:30:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-19', '15:30:00', '20:00:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-19', '18:00:00', '22:30:00', 15, 100.0, 9, 'El Jadida', 'Marrakech'),
-- ('2024-01-19', '09:30:00', '14:00:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-19', '12:00:00', '16:30:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-19', '15:30:00', '20:00:00', 10, 80.0, 9, 'Marrakech', 'El Jadida'),
-- ('2024-01-17', '14:00:00', '18:30:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-18', '16:30:00', '21:00:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-19', '09:00:00', '13:30:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-20', '08:00:00', '12:30:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-20', '11:30:00', '16:00:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-20', '14:00:00', '18:30:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-17', '08:00:00', '12:30:00', 15, 100.0, 10, 'El Jadida', 'Marrakech'),
-- ('2024-01-18', '11:30:00', '16:00:00', 15, 100.0, 10, 'El Jadida', 'Marrakech'),
-- ('2024-01-19', '14:00:00', '18:30:00', 15, 100.0, 10, 'El Jadida', 'Marrakech'),
-- ('2024-01-20', '16:30:00', '21:00:00', 15, 100.0, 10, 'El Jadida', 'Marrakech'),
-- ('2024-01-20', '19:00:00', '23:30:00', 15, 100.0, 10, 'El Jadida', 'Marrakech'),
-- ('2024-01-20', '22:00:00', '02:30:00', 15, 100.0, 10, 'El Jadida', 'Marrakech'),
-- ('2024-01-18', '10:00:00', '14:30:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-18', '13:30:00', '18:00:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-18', '16:00:00', '20:30:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-18', '08:30:00', '13:00:00', 15, 100.0, 10, 'El Jadida', 'Marrakech'),
-- ('2024-01-18', '11:00:00', '15:30:00', 15, 100.0, 10, 'El Jadida', 'Marrakech'),
-- ('2024-01-18', '14:30:00', '19:00:00', 15, 100.0, 10, 'El Jadida', 'Marrakech'),
-- ('2024-01-19', '12:00:00', '16:30:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-19', '15:30:00', '20:00:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-19', '18:00:00', '22:30:00', 10, 80.0, 10, 'Marrakech', 'El Jadida'),
-- ('2024-01-19', '09:30:00', '14:00:00', 15, 100.0, 10, 'El Jadida', 'Marrakech'),
-- ('2024-01-19', '12:00:00', '16:30:00', 15, 100.0, 10, 'El Jadida', 'Marrakech'),
-- ('2024-01-19', '15:30:00', '20:00:00', 15, 100.0, 10, 'El Jadida', 'Marrakech')


