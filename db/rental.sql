1. 

CREATE DATABASE rental;


2.
USE rental;
CREATE TABLE dvd
(
    dvd_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    production_year YEAR
);


CREATE TABLE customer
(
    customer_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    passport_code VARCHAR(20),
    registration_date DATE
);


CREATE TABLE offer 
(
    offer_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    dvd_id INT(11),
    customer_id INT(11),
    offer_date DATE,
    return_date DATE
);


3.

INSERT INTO dvd
  (title, production_year)
  VALUES
    ('dvd1',1999),
    ('dvd2',2010),
    ('dvd3',2011),
    ('dvd4',2015),
    ('dvd5',2010);


)  
INSERT INTO customer
  (first_name, last_name, passport_code, registration_date)
  VALUES
    ('name1','last_name1','1111 111111','2001-01-01'),
    ('name2','last_name2','2222 222222','2002-02-02'),
    ('name3','last_name3','3333 333333','2003-03-03'),
    ('name4','last_name4','4444 444444','2004-04-04'),
    


INSERT INTO offer (dvd_id, customer_id) 
  SELECT d.dvd_id, c.customer_id 
  FROM dvd d, customer c;

UPDATE offer
  SET offer_date = '2015-05-02',
      return_date = '2015-05-20'
  WHERE offer_id = 1;                   

4.
SELECT * FROM dvd                    
  WHERE 
    production_year = '2010'
  ORDER BY title;    
 

5.
SELECT title FROM dvd 
  WHERE 
    dvd_id IN
    (
       SELECT 
         dvd_id FROM offer
       WHERE
         return_date IS NULL
    );


6.
SELECT c.first_name, d.title FROM customer c
  JOIN offer o ON (o.customer_id=c.customer_id)
  JOIN dvd d ON (d.dvd_id=o.dvd_id)
  WHERE
    year(o.offer_date)=YEAR(CURDATE());
 




















                    