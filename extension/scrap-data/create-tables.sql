DROP DATABASE
    IF EXISTS scrapping;
CREATE DATABASE scrapping
    DEFAULT CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;
USE scrapping;

CREATE TABLE IF NOT EXISTS `Articles`
(
    `identifier` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(200),
    `author` VARCHAR(200),
    `introduction` VARCHAR(2000),
	`UrlArticle` VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS `Images`
(
    `identifier` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `LinkImage` VARCHAR(255),
    `AltImage` VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS `Dates`
(
    `identifier` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `FullDate` VARCHAR(255),
    `UpdateDate` VARCHAR(20),
    `UploadDate` VARCHAR(20)
);
CREATE TABLE IF NOT EXISTS `Themes`
(
    `identifier` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Theme` VARCHAR(255),
    `ThemePrincipal` VARCHAR(255)
);
