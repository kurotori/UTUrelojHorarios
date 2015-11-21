SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `UTUasistencias` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `UTUasistencias` ;

-- -----------------------------------------------------
-- Table `UTUasistencias`.`funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `UTUasistencias`.`funcionarios` (
  `ci` CHAR(8) NOT NULL,
  `nombre1` VARCHAR(20) NOT NULL,
  `nombre2` VARCHAR(20) NULL,
  `apellido1` VARCHAR(20) NOT NULL,
  `apellido2` VARCHAR(20) NULL,
  `cargo` ENUM('docente','administrativo','auxiliar') NOT NULL,
  `admin` TINYINT(1) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`ci`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `UTUasistencias`.`ingresos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `UTUasistencias`.`ingresos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `hora_reg` TIMESTAMP NOT NULL DEFAULT current_timestamp,
  `funcionarios_ci` CHAR(8) NOT NULL,
  `tipo_reg` ENUM('entrada','salida') NOT NULL,
  PRIMARY KEY (`id`, `funcionarios_ci`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_ingresos_funcionarios_idx` (`funcionarios_ci` ASC),
  CONSTRAINT `fk_ingresos_funcionarios`
    FOREIGN KEY (`funcionarios_ci`)
    REFERENCES `UTUasistencias`.`funcionarios` (`ci`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `UTUasistencias`.`fotos-reg`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `UTUasistencias`.`fotos-reg` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `ingresos_id` INT UNSIGNED NOT NULL,
  `datos_foto` BLOB NOT NULL,
  PRIMARY KEY (`id`, `ingresos_id`),
  INDEX `fk_fotos-reg_ingresos1_idx` (`ingresos_id` ASC),
  CONSTRAINT `fk_fotos-reg_ingresos1`
    FOREIGN KEY (`ingresos_id`)
    REFERENCES `UTUasistencias`.`ingresos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
