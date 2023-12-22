CREATE DATABASE SmartTravel;
USE SmartTravel;


CREATE TABLE City (
    cityname VARCHAR(255) PRIMARY KEY
    
);
INSERT INTO City (cityname) VALUES 
('Agadir'), ('Al Hoceima'), ('Beni Mellal'), ('Casablanca'), ('Dakhla'), ('El Jadida'), ('Errachidia'), ('Essaouira'),
('Fes'), ('Guelmim'), ('Kenitra'), ('Khemisset'), ('Khenifra'), ('Khouribga'), ('Laayoune'), ('Larache'), ('Marrakech'),
('Meknes'), ('Nador'), ('Ouarzazate'), ('Oujda'), ('Rabat'), ('Safi'), ('Settat'), ('Sidi Kacem'), ('Tan-Tan'), 
('Tangier'), ('Taroudant'), ('Taza'), ('Tetouan'), ('Tiznit'), ('Zagora'), ('Taourirt'), ('Sefrou'), ('Midelt'), ('Martil'),
('Oued Zem'), ('Sidi Bennour'), ('Azrou'), ('Berkane'), ('Ksar El Kebir'), ('Oulad Teima'), ('Sidi Slimane'), ('Tinghir'),
('Youssoufia'), ('Boujniba'), ('Imzouren'), ('Bouznika'), ('Taounate'), ('Benslimane'), ('Ouezzane'), ('Souk El Arbaa'),
('Skhirat'), ('Sidi Yahya El Gharb'), ('Chefchaouen'), ('Sidi Ifni'), ('Tafraout'), ('Moulay Yacoub'), ('Had Kourt');

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
    company_name VARCHAR(250) PRIMARY KEY,
    shortname VARCHAR(250) UNIQUE,
    img VARCHAR(250)
);

--@block
CREATE TABLE Bus (
    bus_number INT PRIMARY KEY ,
    licenseplate VARCHAR(250) UNIQUE,
    capacity INT,
    company_name VARCHAR(250),
    FOREIGN KEY (company_name) REFERENCES Company(company_name),
    

);
--@block
CREATE TABLE  Time (
    id INT PRIMARY KEY,
    date Date,
    departuretime Time,
    arrivaltime Time,
    availableseats INT,
    price Float,
    bus_number INT,
    startcity VARCHAR(255),
    endcity VARCHAR(255), 
    FOREIGN KEY (bus_number) REFERENCES Bus(bus_number),
    FOREIGN KEY (startcity, endcity) REFERENCES Road(startcity, endcity)

);