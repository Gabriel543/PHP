insert into tb_tipocomida(nome) values('Pizzas Simples');
insert into tb_tipocomida(nome) values('Pizzas Especiais');
insert into tb_tipocomida(nome) values('Pizzas Doces');

insert into tb_prato values(null,'Mussarela','Molho de tomate e mussarela.',29,33,40,1);
insert into tb_prato values(null,'Calabresa','Molho de tomate, mussarela e calabresa.',29,33,40,1);
insert into tb_prato values(null,'Presunto' ,'Presunto, molho de tomate e mussarela.',29,33,40,1);
insert into tb_prato values(null,'Margherita','Molho de tomate, mussarela, tomates e manjericão.',29,33,40,1);
insert into tb_prato values(null,'Frango c/ Catupiry','Molho de tomate, mussarela, frango desfiado com catupiry.',29,33,40,1);
insert into tb_prato values(null,'Portuguesa','Molho de tomate, presunto, mussarela, ovos, cebola e azeitonas.',29,33,40,1);
insert into tb_prato values(null,'Carne Seca c/ Catupiry','Molho de tomate, mussarela, carne seca desfiada com catupiry.',29,33,40,1);
insert into tb_prato values(null,'Bacon','Molho de tomate, mussarela e bacon.',29,33,40,1);
insert into tb_prato values(null,'Americana','Molho de tomate, mussarela, bacon, calabresa, ovos e cebola.',29,33,40,1);

insert into tb_prato values(null,'Milão','Presunto cozido picado, mussarela, calabresa artesanal moída, fatias de cebola branca e azeitona verde fatiada.',36,41,49,2);
insert into tb_prato values(null,'Cacciatore','Queijo parmesão, calabresa de javali e pimenta dedo-de-moça. Finalizada com folhas frescas de alecrim.',36,41,49,2);
insert into tb_prato values(null,'Cinco Queijos','Mozzarella, provolone, gorgonzola, requeijão cremoso e parmesão.',36,41,49,2);
insert into tb_prato values(null,'Caprese','Mozzarella, fatias de tomate fresco, mozzarella de búfala em bola. Finalizada com pesto de azeitonas portuguesa e manjericão.',36,41,49,2);
insert into tb_prato values(null,'Baiana','Mozzarella, calabresa artesanal moída, pimenta calabresa, tomate fresco picado, alho frito e azeitona portuguesa.',36,41,49,2);
insert into tb_prato values(null,'Burrata','Mozzarella de búfala, alho poró e queijo burrata. Finalizada com fatias de tomate cereja.',36,41,49,2);
insert into tb_prato values(null,'Di Parma','Mozzarella, fatias de tomate fresco. Finalizada com lâminas de presunto parma.',36,41,49,2);
insert into tb_prato values(null,'Shitake','Mozzarella, Delicioso Mix de Cogumelos e Alho Poró.',36,41,49,2);
insert into tb_prato values(null,'Farnese','Mozzarella, tomate seco, lâminas de presunto parma e rúcula fresca.',36,41,49,2);

insert into tb_prato values(null,'Banana','Mozzarella, banana, açúcar e canela.',36,41,49,3);
insert into tb_prato values(null,'Sensação','Requeijão cremoso, recheio de morango, chocolate ao leite e morangos.',36,41,49,3);
insert into tb_prato values(null,'Nutella','Creme de leite, nutella, avelã picada.',36,41,49,3);
insert into tb_prato values(null,'Brownie','Creme de leite, requeijão cremoso, chocolate em lasca, brownie em cubo.',36,41,49,3);

insert into tb_login values(null,'gabriel@gmail.com','Gabriel531','1234','Gabriel Ramalho Braga');

select * from tb_tipoComida;

select * from tb_prato;

select * from tb_prato where tipoComida_id = 7 ORDER BY id_prato ASC;

update tb_prato set nomePrato='teste',descricaoPrato='teste',precoP = 123,precoM = 123,precoG=123,tipoComida_id=7 where id_prato = 25;