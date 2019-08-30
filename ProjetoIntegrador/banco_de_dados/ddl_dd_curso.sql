/* Criação de base */
create database db_curso; /*database ou schema*/

/* Selecionar uma base */
use db_curso;

/* Criação da tabela curso */
create table tb_curso(
	id_curso int primary key auto_increment,
    nome varchar(150) not null
);

/* Criação da tabela endereço */
create table tb_endereco(
	id_endereco int primary key auto_increment,
    rua varchar(150) not null,
    bairro varchar(150) not null
);

/*Criação da tabela aluno */
create table tb_aluno(
	id_aluno int primary key auto_increment,
    matricula int not null unique,
    nome varchar(150) not null,
    endereco_id int not null,
    curso_id int not null,
    constraint fk_endereco foreign key(endereco_id) references tb_endereco(id_endereco),
    constraint fk_curso foreign key(curso_id) references tb_curso(id_curso)
);

/*Criação da tabela professor */
create table tb_professor(
	id_professor int primary key auto_increment,
    cpf varchar(14) not null,
    nome varchar(150) not null
);

/*Criação da tabela telefone */
create table tb_telefone(
	id_telefone int primary key auto_increment,
    numero varchar(12) not null,
    professor_id int not null,
    constraint fk_professor foreign key(professor_id) references tb_professor(id_professor)
);

/*Criação da tabela disciplina */
create table tb_disciplina(
	id_disciplina int primary key auto_increment,
    descricao text not null,
    professor_id int not null,
    constraint fk_professor_dis foreign key(professor_id) references tb_professor(id_professor)
);

/*Criação da tabela curso_disciplina */
create table curso_disciplina(
	curso_id int not null,
    disciplina_id int not null,
    primary key(curso_id,disciplina_id),
    constraint fk_curso_dis foreign key(curso_id) references tb_curso(id_curso),
    constraint fk_disciplina_cur foreign key(disciplina_id) references tb_disciplina(id_disciplina)
);

/* Comando para visualizar a descrição da tabela */
desc tb_curso;

/* mysql -u root -p */