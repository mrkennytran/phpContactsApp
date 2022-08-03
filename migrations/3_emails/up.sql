CREATE TABLE emails (
  email_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  person_id int NOT NULL,
  FOREIGN KEY (person_id) REFERENCES people(person_id),
  email TINYTEXT NOT NULL
);

INSERT INTO emails (person_id,email) VALUES (1,'test@test.com');
