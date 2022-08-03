CREATE TABLE people (
  person_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  first_name TINYTEXT NOT NULL,
  last_name TINYTEXT NOT NULL,
  nickname TINYTEXT NULL,
  company TINYTEXT NULL,
  website MEDIUMTEXT NULL,
  notes TINYTEXT NULL,
  favorites BOOLEAN NOT NULL,
  active BOOLEAN NOT NULL,
  address_id INT NOT NULL,
  FOREIGN KEY (address_id) REFERENCES addresses(address_id)
);

INSERT INTO people (first_name,last_name,nickname,company,website,notes,favorites,active,address_id) VALUES ('test','guy','testy','test inc','test.com','this is a test',true,true,1);
