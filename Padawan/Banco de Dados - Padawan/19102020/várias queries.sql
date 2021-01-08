select * from curso;

insert into curso (cod_cur, nome, tipo, duracao, mensalidade) 
values ("C6", "Enfermagem", "Bacharelado", 5, 630);

update curso
set mensalidade = 500
where cod_cur = 1;

update curso
set mensalidade = 350
where (cod_cur = "C3" or nome = "Gestão de TI");

delete from produtos
where referencia = "003";

delete from produtos
where descricao = "Arroz" and estoque = 5;

update produtos
set estoque = 10
where referencia = "003";

select * from curso
where cod_cur = 1 or nome = "Ciência da Computação";

select * from curso
where tipo in ("Tecnologo");

select max(mensalidade)
from curso;
select min(mensalidade)
from curso;
select avg(mensalidade)
from curso;
select (mensalidade * 2) As valor_corrigido
from curso;
select count(mensalidade) as contador
from curso;
select distinct tipo
from curso;
select * from curso
order by nome;
select upper(nome) from curso
order by nome;
select lower(nome) from curso
order by nome;
select nome from curso
where nome like 'análise%';
select nome from curso
where nome like 'E%';
select nome from curso
where nome like '%Produção';
select nome from curso
where nome like '%de%';

select mensalidade, count(mensalidade)
from curso
group by mensalidade
having count(mensalidade) = 2;

select curso.cod_cur, curso.nome, disciplina.nome_dis, professor.nome 
from curso, disciplina, professor, grade
where curso.cod_cur = grade.cod_cur and
	disciplina.cod_dis = grade.cod_dis and
    professor.cod_pro = grade.cod_pro;