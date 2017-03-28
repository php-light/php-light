CREATE DATABASE IF NOT EXISTS `php-light`;

USE `php-light`;

CREATE TABLE IF NOT EXISTS `php-light`.`car` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand` VARCHAR(45) NOT NULL DEFAULT '',
  `pictures` MEDIUMBLOB,
  `user` INT(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FOREIGN_KEY` (`user`),
  CONSTRAINT `FK_car_user` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;