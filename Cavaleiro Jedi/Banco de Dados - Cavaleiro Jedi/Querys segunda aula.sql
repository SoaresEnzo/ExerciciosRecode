USE `25112020`;
/*
BLACK FRIDAY RECODE PRO

1 - Qual recorde de vendas de um produto??
2 - Qual comprador comprou mais produtos??
3 - Qual fornecedor entregou mais produtos??
4 - Qual a venda mais cara??  (Produto.valor * vendas.quantidade)
5 - Quais produtos não foram vendidos??
6 - Qual cliente não comprou nada??
7 – Qual a faixa etária de quem comprou mais??

*/

-- 1. SELECT  vendas.quantidade as qntVendida,produtos.* FROM vendas inner join produtos on produtos.idProdutos = vendas.idProduto WHERE vendas.quantidade = (SELECT max(quantidade) FROM vendas) 
-- 2. SELECT cliente.*,count(*) as quantidadeCompras FROM vendas inner join cliente on cliente.idCliente = vendas.idCliente group by vendas.idCliente order by count(*) desc;
-- 3. SELECT fornecedor.*,SUM(quantidade) as totalProdutos FROM produtos inner join fornecedor on fornecedor.idFornecedor = produtos.idFornecedor group by fornecedor.idFornecedor order by totalProdutos desc;
-- 4. SELECT  *,(vendas.quantidade*produtos.preco) as valorTotal FROM vendas inner join produtos on produtos.idProdutos = vendas.idProduto order by valorTotal desc
-- 5. SELECT * FROM produtos left join vendas on vendas.idProduto = produtos.idProdutos where idVendas is null;
-- 6. SELECT * FROM cliente left join vendas on cliente.idCliente = vendas.idCliente where idVendas is null;
-- 7. SELECT cliente.*,count(*) as quantidadeCompras, year(DATE_SUB(date(now()), INTERVAL year(cliente.dataDeNasc) YEAR)) as idade FROM vendas inner join cliente on cliente.idCliente = vendas.idCliente group by vendas.idCliente order by count(*) desc;