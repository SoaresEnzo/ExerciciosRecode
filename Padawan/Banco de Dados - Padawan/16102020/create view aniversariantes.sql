CREATE TABLE usuario
(nome VARCHAR(25) NOT NULL,
sobrenome VARCHAR(30) NOT NULL,
data_nascimento date);


CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `viewaniversariante` (`nome` , `sobrenome` , `data_nascimento`) AS
    SELECT 
        `usuario`.`nome` AS `nome`,
        `usuario`.`sobrenome` AS `sobrenome`,
        `usuario`.`data_nascimento` AS `data_nascimento`
    FROM
        `usuario`