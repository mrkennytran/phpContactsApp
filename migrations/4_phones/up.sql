CREATE TABLE phone_numbers (
  phone_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  person_id int NOT NULL,
  FOREIGN KEY (person_id) REFERENCES people(person_id),
  phone_number TINYTEXT NOT NULL
);

INSERT INTO phone_numbers (person_id,phone_number) VALUES (1,'123-867-5309');
