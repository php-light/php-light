CREATE TABLE IF NOT EXISTS `user` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `uniqueId` VARCHAR(191) UNIQUE NOT NULL DEFAULT '',
  `name` VARCHAR(191) UNIQUE NOT NULL DEFAULT '',
  `email` VARCHAR(191) UNIQUE NOT NULL DEFAULT '',
  `createdAt` DATETIME,
  PRIMARY KEY (`id`)
)ENGINE = InnoDB;

INSERT INTO `user` (`uniqueId`, `name`, `email`, `createdAt`) VALUES ('123456', 'Moussa Camara', 'msa.camara@gmail.com', '2017-01-23 15:05:55');
