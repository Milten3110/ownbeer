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
CREATE SCHEMA IF NOT EXISTS `ownbeer` DEFAULT CHARACTER SET utf8 ;
USE `ownbeer` ;

-- -----------------------------------------------------
-- Table `mydb`.`shoppingcart`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ownbeer`.`shoppingcart` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `userID` INT NOT NULL,
  `productID` INT NOT NULL,
  PRIMARY KEY (`id`)
	);
  --,
  --UNIQUE INDEX `userID_UNIQUE` (`userID` ASC),
  --UNIQUE INDEX `productID_UNIQUE` (`productID` ASC)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ownbeer`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `userName` VARCHAR(255) NOT NULL,
  `userPw` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `shoppingCart` INT NULL,
  `boughtID` INT NULL,
  `shoppingcart_id` INT NOT NULL,
  `userInfo_id` INT NOT NULL,
  `name` VARCHAR(255) NULL,
  `surename` VARCHAR(255) NULL,
  `birthday` DATE NULL,
  PRIMARY KEY (`id`)
);
  --UNIQUE INDEX `usercol_UNIQUE` (`boughtID` ASC),
  --UNIQUE INDEX `shoppingCart_UNIQUE` (`shoppingCart` ASC),
  --INDEX `fk_user_shoppingcart_idx` (`shoppingcart_id` ASC),
  --CONSTRAINT `fk_user_shoppingcart`
    --FOREIGN KEY (`shoppingcart_id`)
    --REFERENCES `mydb`.`shoppingcart` (`id`)
    --ON DELETE NO ACTION
    --ON UPDATE NO ACTION
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ownbeer`.`orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `userID` INT NOT NULL,
  `timeStamps` TIMESTAMP NOT NULL,
  `productID` INT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`)
);
  --UNIQUE INDEX `product_UNIQUE` (`productID` ASC),
  --UNIQUE INDEX `userID_UNIQUE` (`userID` ASC),
  --INDEX `fk_orders_user1_idx` (`user_id` ASC),
  --CONSTRAINT `fk_orders_user1`
    --FOREIGN KEY (`user_id`)
    --REFERENCES `mydb`.`user` (`id`)
    --ON DELETE NO ACTION
    --ON UPDATE NO ACTION
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ownbeer`.`Categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `catDESC` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);
  --UNIQUE INDEX `id_UNIQUE` (`id` ASC)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ownbeer`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pName` VARCHAR(255) NOT NULL,
  `price` FLOAT NOT NULL,
  `category` VARCHAR(100) NOT NULL,
  `size` FLOAT NOT NULL,
  `alc` FLOAT NOT NULL,
  `manufacturer` VARCHAR(255) NOT NULL,
  `Categories_id` INT NOT NULL,
  `shoppingcart_id` INT NOT NULL,
  PRIMARY KEY (`id`)
);
  --INDEX `fk_product_Categories1_idx` (`Categories_id` ASC),
  --INDEX `fk_product_shoppingcart1_idx` (`shoppingcart_id` ASC),
  --CONSTRAINT `fk_product_Categories1`
    --FOREIGN KEY (`Categories_id`)
    --REFERENCES `mydb`.`Categories` (`id`)
    --ON DELETE NO ACTION
    --ON UPDATE NO ACTION,
  --CONSTRAINT `fk_product_shoppingcart1`
    --FOREIGN KEY (`shoppingcart_id`)
    --REFERENCES `mydb`.`shoppingcart` (`id`)
    --ON DELETE NO ACTION
    --ON UPDATE NO ACTION
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`orders_has_product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ownbeer`.`orders_has_product` (
  `orders_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  PRIMARY KEY (`orders_id`, `product_id`)
);
  --INDEX `fk_orders_has_product_product1_idx` (`product_id` ASC),
  --INDEX `fk_orders_has_product_orders1_idx` (`orders_id` ASC),
  --CONSTRAINT `fk_orders_has_product_orders1`
    --FOREIGN KEY (`orders_id`)
    --REFERENCES `mydb`.`orders` (`id`)
    --ON DELETE NO ACTION
    --ON UPDATE NO ACTION,
  --CONSTRAINT `fk_orders_has_product_product1`
    --FOREIGN KEY (`product_id`)
    --REFERENCES `mydb`.`product` (`id`)
    --ON DELETE NO ACTION
    --ON UPDATE NO ACTION
)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

