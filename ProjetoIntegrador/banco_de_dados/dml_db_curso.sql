/* DDL - Linguagem de manipulação de dados */
/* INSERT - Comando responsável por inserir registros no banco */

/* insert do curso PHP com banco de dados na tabela tb_curso */
insert into tb_curso(id_curso, nome) values(null, 'PHP com banco de dados');

/* insert do curso Analise e modelagem de sistemas na tabela tb_curso */
insert into tb_curso(nome) values('Analise e modelagem de sistemas');

/* insert do curso Linguagem de programação - java na tabela tb_curso */
insert into tb_curso values(null,'Linguagem de programação - java');

/* insert de multiplos cursos na tabela tb_curso */
insert into tb_curso(nome) values('Linguagem de Script para Web'),('Consulta e gerenciamento de dados'),('Administração de servidores'),('Desenvolvimento de aplicativos híbridos');

/* SELECT - Comando responsável por consultar registros no banco */

/* select de todos cursos(selecionando os campos) da tabela tb_curso */
select id_curso, nome from tb_curso;

/* select de todos cursos(sem selecionar os campos) da tabela tb_curso */
select * from tb_curso;professor_disciplina

/* select de todos cursos(campos especificos) da tabela tb_curso */
select nome from tb_curso;

/* select de um elemento especifico na tabela tb_curso */
select * from tb_curso where id_curso = 3;

/* select de um elemento(s) especifico(s) na tabela tb_curso */

/* #1 localiza valores que começam com */
select * from tb_curso where nome like 'Linguagem de%'; /*pode-se usar '=' para alguns casos*/

/* #2 localiza valores que começam com */
select * from tb_curso where nome like '%java';

/*# 3 - localiza valores que contenham */
select * from tb_curso where nome like '%php%';

/* #4 - localiza valores entre uma faixa */
select * from  tb_curso where id_curso between 3 and 5;

/* Update de curso na tabela tb_curso */
update tb_curso set nome = 'Linguagem de Programação' where id_curso = 3;

/* Delete de curso na tabela tb_curso */
delete from tb_curso where id_curso = 2;

select nome,cpf,numero as 'telefone' from tb_professor inner join tb_telefone on tb_telefone.professor_id = tb_professor.id_professor;

alter table tb_disciplina add column nome text not null;

/** Funçãoes no banco **/
/* limit -  serve para limitar a quantidade de linhas(registros) a serem exibidas */
select * from tb_disciplina limit 3;

/* count - serve para contar */
select count(*) from tb_disciplina;

/* ordenação */
select * from tb_disciplina order by nome ASC;
select * from tb_disciplina order by nome ASC;

/* distinção */

select distinct descricao  from tb_disciplina order by nome asc;

/* Md5 - criptografia. Muito utilizado para senhas simples */

select Md5('senha@123');

insert into tb_login(username,password) values ('admin',md5('Senha@123'));

