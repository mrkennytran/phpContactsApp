CREATE TABLE people (
  user_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  first_name TINYTEXT NOT NULL,
  last_name TINYTEXT NOT NULL,
  nickname TINYTEXT NULL,
  company TINYTEXT NULL,
  website MEDIUMTEXT NULL,
  notes TINYTEXT NULL,
  favorites BOOL NOT NULL,
  active BOOL NOT NULL,
  address_id INT NULL
);