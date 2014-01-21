SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(16) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NULL,
  `is_admin` TINYINT(1) NOT NULL,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  PRIMARY KEY (`user_id`));


-- -----------------------------------------------------
-- Table `mydb`.`request`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`request` (
  `request_id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `status` ENUM('pending', 'accepted', 'rejected') NOT NULL,
  `start_date` DATE NOT NULL,
  `end_date` DATE NOT NULL,
  `type` ENUM('paid', 'unpaid', 'university', 'sick') NOT NULL,
  `comment` VARCHAR(200) NULL,
  PRIMARY KEY (`request_id`),
  INDEX `fk_request_user_idx` (`user_id` ASC),
  CONSTRAINT `fk_request_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `mydb`.`user` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`days_left`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`days_left` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `type` ENUM('paid', 'unpaid', 'university', 'sick') NOT NULL,
  `days` INT NOT NULL,
  PRIMARY KEY (`user_id`, `type`),
  INDEX `fk_days_left_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_days_left_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `mydb`.`user` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
