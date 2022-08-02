CREATE TABLE emails (
  email_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  person_id int NOT NULL,
  FOREIGN KEY (user_id) REFERENCES people(person_id),
  email TINYTEXT NOT NULL
);

INSERT INTO emails (person_id,email) VALUES (4,'test@test.com');
