CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `user` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255),
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC));
CREATE TABLE `evaluation` (
  `id_user` INT NOT NULL,
  `id_synset` VARCHAR(255) NOT NULL,
  `correct` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id_user`, `id_synset`),
  INDEX `fk_evaluation_synsets_idx` (`id_synset` ASC),
  CONSTRAINT `fk_evaluation_users`
    FOREIGN KEY (`id_user`)
    REFERENCES `mapping_evaluation`.`users` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_evaluation_synsets`
    FOREIGN KEY (`id_synset`)
    REFERENCES `mapping_evaluation`.`synsets` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);
