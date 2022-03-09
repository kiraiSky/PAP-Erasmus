-- MySQL Script generated by MySQL Workbench
-- Fri Jan 14 09:46:05 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`difficulties`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`difficulties` (
  `idDifficulty` TINYINT(1) NOT NULL,
  `difficultyEN` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idDifficulty`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vehicles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`vehicles` (
  `idvehicle` TINYINT(4) NOT NULL,
  `vehicleEN` VARCHAR(45) NULL,
  PRIMARY KEY (`idvehicle`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`countries`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`countries` (
  `idCountry` VARCHAR(2) NOT NULL,
  `countryEN` VARCHAR(45) NULL,
  PRIMARY KEY (`idCountry`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`schools`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`schools` (
  `idSchool` INT(11) NOT NULL,
  `schoolName` VARCHAR(45) NULL,
  `email` VARCHAR(100) NULL,
  `telephone` VARCHAR(45) NULL,
  `adress` VARCHAR(45) NULL,
  `url` VARCHAR(100) NULL,
  `idRegion` INT(11) NULL,
  `descriptionEN` MEDIUMTEXT NULL,
  `username` VARCHAR(100) NULL,
  `idCountry` VARCHAR(2) NULL,
  PRIMARY KEY (`idSchool`),
  INDEX `fk_schools_countries1_idx` (`idCountry` ASC) VISIBLE,
  CONSTRAINT `fk_schools_countries1`
    FOREIGN KEY (`idCountry`)
    REFERENCES `mydb`.`countries` (`idCountry`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`users` (
  `username` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NULL,
  `birthDate` DATE NULL,
  `email` VARCHAR(100) NULL,
  `password` VARCHAR(45) NULL,
  `lastAccess` DATETIME NULL,
  `idUserGroup` INT(11) NULL,
  `blocked` INT(11) NULL,
  `idSchool` INT(11) NULL,
  PRIMARY KEY (`username`),
  INDEX `fk_users_schools1_idx` (`idSchool` ASC) VISIBLE,
  CONSTRAINT `fk_users_schools1`
    FOREIGN KEY (`idSchool`)
    REFERENCES `mydb`.`schools` (`idSchool`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pathways`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pathways` (
  `idPathWay` INT(11) NOT NULL,
  `pathwayNameEN` VARCHAR(255) NULL,
  `registerDate` DATETIME NULL,
  `totalMeters` INT(11) NULL,
  `estimatedCalories` INT(11) NULL,
  `estimatedTime` INT(11) NULL,
  `estimatedStepsRotat` INT(11) NULL,
  `averageHeartBitRate` VARCHAR(45) NULL,
  `clicks` INT(4) NULL,
  `idDifficulty` TINYINT(1) NULL,
  `idVehicle` TINYINT(4) NULL,
  `username` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idPathWay`),
  INDEX `fk_pathways_difficulties_idx` (`idDifficulty` ASC) VISIBLE,
  INDEX `fk_pathways_vehicles1_idx` (`idVehicle` ASC) VISIBLE,
  INDEX `fk_pathways_users1_idx` (`username` ASC) VISIBLE,
  CONSTRAINT `fk_pathways_difficulties`
    FOREIGN KEY (`idDifficulty`)
    REFERENCES `mydb`.`difficulties` (`idDifficulty`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pathways_vehicles1`
    FOREIGN KEY (`idVehicle`)
    REFERENCES `mydb`.`vehicles` (`idvehicle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pathways_users1`
    FOREIGN KEY (`username`)
    REFERENCES `mydb`.`users` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`mediapublications`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`mediapublications` (
  `idMediaPublication` INT(11) NOT NULL,
  `originalTitle` VARCHAR(150) NOT NULL,
  `publisherName` VARCHAR(45) NULL,
  `publicationDate` DATE NULL,
  `publicationLink` VARCHAR(255) NULL,
  `username` VARCHAR(45) NULL,
  PRIMARY KEY (`idMediaPublication`),
  INDEX `fk_mediapublications_users1_idx` (`username` ASC) VISIBLE,
  CONSTRAINT `fk_mediapublications_users1`
    FOREIGN KEY (`username`)
    REFERENCES `mydb`.`users` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`news`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`news` (
  `idArticle` INT(11) NOT NULL,
  `articleDate` DATETIME NULL,
  `titleEN` VARCHAR(255) NULL,
  `articleBodyEN` MEDIUMTEXT NULL,
  `homepage` TINYINT(1) NULL,
  `username` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idArticle`),
  INDEX `fk_news_users1_idx` (`username` ASC) VISIBLE,
  CONSTRAINT `fk_news_users1`
    FOREIGN KEY (`username`)
    REFERENCES `mydb`.`users` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`events` (
  `idEvent` INT NOT NULL,
  `titleEN` VARCHAR(150) NULL,
  `descriptionEN` MEDIUMTEXT NULL,
  `endDate` DATE NULL,
  `startDate` DATE NULL,
  `galleryLink` VARCHAR(150) NULL,
  `username` VARCHAR(45) NULL,
  `idSchool` INT(11) NULL,
  PRIMARY KEY (`idEvent`),
  INDEX `fk_events_users1_idx` (`username` ASC) VISIBLE,
  INDEX `fk_events_schools1_idx` (`idSchool` ASC) VISIBLE,
  CONSTRAINT `fk_events_users1`
    FOREIGN KEY (`username`)
    REFERENCES `mydb`.`users` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_schools1`
    FOREIGN KEY (`idSchool`)
    REFERENCES `mydb`.`schools` (`idSchool`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pointtypes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pointtypes` (
  `idPointType` INT(11) NOT NULL,
  `typeEN` VARCHAR(45) NULL,
  PRIMARY KEY (`idPointType`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`interestpoints`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`interestpoints` (
  `idInterestPoints` INT(11) NOT NULL,
  `lat` DECIMAL(18,14) NULL,
  `lon` DECIMAL(18,14) NULL,
  `altitude` DECIMAL(18,14) NULL,
  `interestPointNameEN` VARCHAR(255) NULL,
  `description` LONGTEXT NULL,
  `idPathway` INT(11) NULL,
  `idPointType` INT(11) NULL,
  PRIMARY KEY (`idInterestPoints`),
  INDEX `fk_interestpoints_pathways1_idx` (`idPathway` ASC) VISIBLE,
  INDEX `fk_interestpoints_pointtypes1_idx` (`idPointType` ASC) VISIBLE,
  CONSTRAINT `fk_interestpoints_pathways1`
    FOREIGN KEY (`idPathway`)
    REFERENCES `mydb`.`pathways` (`idPathWay`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_interestpoints_pointtypes1`
    FOREIGN KEY (`idPointType`)
    REFERENCES `mydb`.`pointtypes` (`idPointType`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`coordenates`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`coordenates` (
  `idCoord` BIGINT(20) NOT NULL,
  `lat` DECIMAL(18,14) NULL,
  `lon` DECIMAL(18,14) NULL,
  `altitude` DECIMAL(18,14) NULL,
  `sort` INT(11) NULL,
  `registerDate` DATETIME NULL,
  `idPathway` INT(11) NULL,
  PRIMARY KEY (`idCoord`),
  INDEX `fk_coordenates_pathways1_idx` (`idPathway` ASC) VISIBLE,
  CONSTRAINT `fk_coordenates_pathways1`
    FOREIGN KEY (`idPathway`)
    REFERENCES `mydb`.`pathways` (`idPathWay`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`evaluations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`evaluations` (
  `idEvaluation` BIGINT(20) NOT NULL,
  `evaluation` TINYINT(4) NULL,
  `commentEN` INT(11) NULL,
  `idContent` INT(11) NULL,
  `idInterestPoint` INT(11) NULL,
  `idPathway` INT(11) NULL,
  PRIMARY KEY (`idEvaluation`),
  INDEX `fk_evaluations_pathways1_idx` (`idPathway` ASC) VISIBLE,
  CONSTRAINT `fk_evaluations_pathways1`
    FOREIGN KEY (`idPathway`)
    REFERENCES `mydb`.`pathways` (`idPathWay`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`project`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`project` (
  `idProject` INT NOT NULL,
  `projectSummaryEN` MEDIUMTEXT NOT NULL,
  `projectDescriptionEN` LONGTEXT NULL,
  `erasmusLink` VARCHAR(45) NULL,
  `eTwinningLink` VARCHAR(45) NULL,
  `facebookLink` VARCHAR(45) NULL,
  `youtubeLink` VARCHAR(45) NULL,
  `androidAppLink` VARCHAR(45) NULL,
  PRIMARY KEY (`idProject`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`activities`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`activities` (
  `idActivity` INT(11) NOT NULL,
  `titleEN` VARCHAR(255) NOT NULL,
  `descriptionEN` VARCHAR(45) NULL,
  `registerDate` DATETIME NOT NULL,
  `idInterestPoints` INT(11) NULL,
  PRIMARY KEY (`idActivity`),
  INDEX `fk_activities_interestpoints1_idx` (`idInterestPoints` ASC) VISIBLE,
  CONSTRAINT `fk_activities_interestpoints1`
    FOREIGN KEY (`idInterestPoints`)
    REFERENCES `mydb`.`interestpoints` (`idInterestPoints`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`multimediaElements`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`multimediaElements` (
  `idMultElements` INT NOT NULL,
  `idMultimediaType` TINYINT(4) NULL,
  `elementURL` VARCHAR(255) NOT NULL,
  `idContent` INT NOT NULL,
  PRIMARY KEY (`idMultElements`, `elementURL`),
  INDEX `fk_multimediaElements_activities1_idx` (`idContent` ASC) VISIBLE,
  CONSTRAINT `fk_multimediaElements_activities1`
    FOREIGN KEY (`idContent`)
    REFERENCES `mydb`.`activities` (`idActivity`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;