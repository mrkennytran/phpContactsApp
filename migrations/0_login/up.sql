CREATE TABLE users (
  user_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  user TINYTEXT NOT NULL,
  email TINYTEXT NOT NULL,
  pass LONGTEXT NOT NULL
);
