-- Where & Inner Join (Filtros e Relatórios).

-- Exemplos de Where - Filtro.

select * from tb_categoria where id_usuario = 2;

select * from tb_empresa where id_usuario = 1;

select * from tb_movimento where tipo_movimento = 1;

select nome_usuario from tb_usuario where nome_usuario like '%u%';

select nome_usuario, data_cadastro 
	from tb_usuario
	where data_cadastro
    between '2023-01-01' and '2024-04-30';
    
-- Exemplos de Inner Join - Relatório.

select nome_usuario, nome_categoria, banco_conta
	from tb_usuario
inner join tb_categoria
    on tb_categoria.id_usuario = tb_usuario.id_usuario
inner join tb_conta
    on tb_conta.id_usuario = tb_usuario.id_usuario;

select nome_usuario, nome_categoria, banco_conta
	from tb_usuario
inner join tb_categoria
	on tb_categoria.id_usuario = tb_usuario.id_usuario
inner join tb_conta
	on tb_conta.id_usuario = tb_usuario.id_usuario
where tb_usuario.id_usuario = 2;

select nome_usuario,
		email_usuario,
        data_cadastro,
        nome_categoria,
        nome_empresa,
        telefone_empresa,
        endereco_empresa,
        banco_conta,
        saldo_conta,
        tipo_movimento,
        Valor_movimento,
        obs_movimento
        from tb_usuario as us
inner join tb_categoria as ca
on ca.id_usuario = us.id_usuario
inner join tb_empresa as em
on em.id_usuario = us.id_usuario
inner join tb_conta as co
on co.id_usuario = us.id_usuario
inner join tb_movimento as mv
on mv.id_usuario = us.id_usuario;

select * from tb_usuario, tb_categoria, tb_empresa, tb_conta, tb_movimento;
