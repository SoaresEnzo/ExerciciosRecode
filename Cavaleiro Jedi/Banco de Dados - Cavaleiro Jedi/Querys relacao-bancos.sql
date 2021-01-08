-- /*
-- 1 - Consultar todas as pessoas que tem conta no Santander (inner join);
-- 2 – Consultar todos os bancos que possuem pessoas ou não (left outer join);
-- 3 – Consultar pessoas que não possuem conta em nenhum banco (right outer join);
-- */

-- 1. SELECT * FROM relacao_bancos.bancos inner join relacao_bancos.conta_corrente on conta_corrente.fk_banco = 33 where codigo = fk_banco;
-- 2. SELECT * FROM relacao_bancos.bancos left outer join relacao_bancos.conta_corrente on conta_corrente.fk_banco = bancos.codigo;
-- 3. SELECT * FROM relacao_bancos.conta_corrente right outer join relacao_bancos.pessoas on conta_corrente.fk_pessoa = pessoas.cpf WHERE fk_banco is null;