-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema e-commerce_laravel
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `e-commerce_laravel` ;

-- -----------------------------------------------------
-- Schema e-commerce_laravel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `e-commerce_laravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ;
USE `e-commerce_laravel` ;

-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`categories` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`categories` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(120) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`doctypes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`doctypes` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`doctypes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`faqs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`faqs` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`faqs` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `question` VARCHAR(120) NOT NULL,
  `answer` VARCHAR(200) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`migrations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`migrations` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`products` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`products` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `dimension` DECIMAL(4,2) NULL DEFAULT NULL,
  `category_id` INT(11) NULL DEFAULT NULL,
  `price` DECIMAL(8,2) NOT NULL,
  `stock` INT(11) NOT NULL,
  `image` VARCHAR(200) NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `product_category`
    FOREIGN KEY (`category_id`)
    REFERENCES `e-commerce_laravel`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`roles` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`roles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(60) NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`users` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(120) NOT NULL,
  `lastname` VARCHAR(120) NULL DEFAULT NULL,
  `email` VARCHAR(200) NOT NULL,
  `password` VARCHAR(120) NOT NULL,
  `avatar` VARCHAR(200) NOT NULL,
  `doctype_id` INT NOT NULL,
  `document_number` INT(11) NOT NULL,
  `phone` INT(20) NULL DEFAULT NULL,
  `address` VARCHAR(255) NULL DEFAULT NULL,
  `role_id` INT(11) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `user_role`
    FOREIGN KEY (`role_id`)
    REFERENCES `e-commerce_laravel`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `user_doctype`
    FOREIGN KEY (`doctype_id`)
    REFERENCES `e-commerce_laravel`.`doctypes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`paymentypes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`paymentypes` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`paymentypes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`sales`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`sales` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`sales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `date` DATE NOT NULL,
  `amount` FLOAT NOT NULL,
  `payment_type_id` INT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `user_id`, `date`),
  CONSTRAINT `sales_paymenttype`
    FOREIGN KEY (`payment_type_id`)
    REFERENCES `e-commerce_laravel`.`paymentypes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `sales_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `e-commerce_laravel`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`saledetails`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`saledetails` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`saledetails` (
  `sale_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `date_sale` DATE NOT NULL,
  `product_id` INT NOT NULL,
  `quantity` INT(4) NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`sale_id`, `product_id`, `date_sale`, `user_id`),
  CONSTRAINT `saledetails_sale`
    FOREIGN KEY (`sale_id` , `user_id` , `date_sale`)
    REFERENCES `e-commerce_laravel`.`sales` (`id` , `user_id` , `date`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `saledetails_product`
    FOREIGN KEY (`product_id`)
    REFERENCES `e-commerce_laravel`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`orders` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `amount` FLOAT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `user_id`),
  CONSTRAINT `orders_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `e-commerce_laravel`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce_laravel`.`orderdetails`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-commerce_laravel`.`orderdetails` ;

CREATE TABLE IF NOT EXISTS `e-commerce_laravel`.`orderdetails` (
  `order_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  `quantity` INT(4) NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`, `user_id`, `product_id`),
  CONSTRAINT `orderdetails_order`
    FOREIGN KEY (`order_id` , `user_id`)
    REFERENCES `e-commerce_laravel`.`orders` (`id` , `user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `orderdetails_product`
    FOREIGN KEY (`product_id`)
    REFERENCES `e-commerce_laravel`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
