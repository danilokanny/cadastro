CREATE TABLE `doacao`.`familia` ( `id` INT NOT NULL AUTO_INCREMENT , `pai` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `mae` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `filho1` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `filho2` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `renda` FLOAT(10,2) NOT NULL , `cidade` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `rua` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `bairro` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `fone` INT(50) NOT NULL , PRIMARY KEY (`id`) ) ENGINE = InnoDB;