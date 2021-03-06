DROP SCHEMA IF EXISTS `adoptapet`;

CREATE SCHEMA `adoptapet` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

USE `adoptapet`;

CREATE TABLE `adoptapet`.`pets` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `species` VARCHAR(45) NOT NULL,
    `breed`   VARCHAR(45),
    `name`    VARCHAR(45),
    `age`     INT,
    `gender`  VARCHAR(45),
    `avail`   VARCHAR(45) NOT NULL,
    `photo`   VARCHAR(45) DEFAULT 'nophoto.jpg',
    PRIMARY KEY(`id`),
    UNIQUE INDEX `id_unique` (`id` ASC)
);

INSERT INTO pets (species, breed, name, age, gender, avail)
VALUES
  ('canine', 'Poodle',                      'Fluffy', 2, 'M', 'AVAILABLE'),
  ('canine', 'German Shepherd',             'Spike',  2, 'F', 'AVAILABLE'),
  ('canine', 'German Short-Haired Pointer', 'Hans',   2, 'M', 'AVAILABLE'),
  ('canine', 'Chihuahua',                   'Pablo',  3, 'F', 'AVAILABLE'),
  ('canine', 'Collie',                      'Lassie', 1, 'M', 'AVAILABLE');


CREATE TABLE `adoptapet`.`users`(
	  `id`        INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `email`     VARCHAR(90) NOT NULL,
    `firstName` VARCHAR(45),
    `lastName`  VARCHAR(45),
    `password`  VARCHAR(100) NOT NULL,
    `admin`     VARCHAR(1) DEFAULT 'N',
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC)
);










