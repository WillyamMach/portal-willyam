DROP DATABASE IF EXISTS db_users;

CREATE DATABASE db_users;

CREATE TABLE `db_users`.`tb_users` (
  `usu_id` INT NOT NULL AUTO_INCREMENT,
  `usu_name` VARCHAR(150) NOT NULL,
  `usu_email` VARCHAR(255) NOT NULL,
  `usu_password` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`usu_id`));


