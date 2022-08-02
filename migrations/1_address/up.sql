CREATE TABLE addresses (
  address_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,

  street TINYTEXT,
  city TINYTEXT,
  state TINYTEXT,
  zip TINYTEXT,
  country TINYTEXT 
);

INSERT INTO addresses (street,city,state,zip,country) VALUES ('test street','test city', 'MS', '12345','merica');
