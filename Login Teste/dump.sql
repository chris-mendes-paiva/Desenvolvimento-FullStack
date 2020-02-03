CREATE TABLE `db`.`TESTE_CHRISTIAN` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`usuario_id`));

INSERT INTO `TESTE_CHRISTIAN` (`usuario_id`,`usuario`,`senha`, `nome`, `data_cadastro`) VALUES (1,'christian.gabriel','123', 'Christian Gabriel Mendes', now());