-- MySQL Script generated by MySQL Workbench
-- 11/29/16 16:42:56
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema four-biblio
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema four-biblio
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `four-biblio` DEFAULT CHARACTER SET utf8 ;
USE `four-biblio` ;

-- -----------------------------------------------------
-- Table `four-biblio`.`cad_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `four-biblio`.`cad_usuario` (
  `idcad_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `login` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`idcad_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `four-biblio`.`cad_exemplar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `four-biblio`.`cad_exemplar` (
  `idcad_exemplar` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NULL,
  `autor` VARCHAR(45) NULL,
  `ano` VARCHAR(45) NULL,
  PRIMARY KEY (`idcad_exemplar`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
