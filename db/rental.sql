1. 

CREATE DATABASE rental;


2.
CREATE TABLE dvd
{
    dvd_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    production_year YEAR
};

USE rental;

CREATE TABLE customer
{
    customer_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    passport_code VARCHAR(20),
    registration_date DATE
};

USE rental;

CREATE TABLE offer 
{
    offer_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    dvd_id INT(11),
    customer_id INT(11),
    offer_date DATE,
    return_date DATE
};

3.
INSERT INTO dvd
  SET
    title='dvd1',      
    production_year = 1999;

INSERT INTO customer
  SET
    first_name = 'name1',      
    last_name = 'name2',
    passport_code = '1234 123456',
    registration_date = '2000-01-01';   
  


INSERT INTO offer (dvd_id, customer_id) 
  SELECT dvd.dvd_id, customer.customer_id 
  FROM dvd, customer;

UPDATE offer 
  SET offer_date = '2010-11-02',
      registration_date = '2010-11-20'
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
SELECT customer.first_name, dvd.title FROM customer, dvd 
  WHERE 
    dvd.dvd_id IN
    (
      SELECT dvd_id FROM offer
        WHERE
          customer.customer_id IN         
          (
            SELECT
              customer_id FROM offer
            WHERE
              offer_date=YEAR(CURDATE())
          )  
    );





















                    