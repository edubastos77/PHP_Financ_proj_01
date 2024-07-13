-- Update: Atualizar.

update tb_categoria
	set id_usuario = 2
    where id_categoria = 2;

update tb_categoria
	set id_usuario = 2
    where id_categoria = 4;
    
update tb_empresa
	set id_usuario = 3
    where id_empresa = 4;

update tb_usuario
	set nome_usuario = 'Carlos Alberto', 
		email_usuario = 'c.alberto@gmail.com',
		senha_usuario = 'cal123',
		data_cadastro = '2021-05-2'
	where id_usuario = 2;
    
update tb_usuario
	set nome_usuario = 'Julio Cesar', 
		email_usuario = 'juliocesar@gmail.com', 
		senha_usuario = 'juc321', 
		data_cadastro = '2024-02-11' 
	where id_usuario = 3;

update tb_usuario
	set nome_usuario = 'Bruno Henrique', 
		email_usuario = 'bh.fla@gmail.com',
		senha_usuario =  'bh_321', 
		data_cadastro = '2023-03-30'
	where id_usuario = 4;

update tb_usuario
	set nome_usuario = 'David Luis', 
		email_usuario = 'luis.david@gmail.com', 
		senha_usuario = 'luis21',
		data_cadastro = '2022-06-21'
	where id_usuario = 5;


