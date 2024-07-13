-- Create: Cadastrar.

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Ana Maria', 'ana.maria.b@gmail.com', 'ana321', '2024-06-12'),
('Carlos Alberto', 'c.alberto@gmail.com', 'cal121', '2021-05-2'),
('Julio Cesar', 'juliocesar@gmail.com', 'juc321', '2024-02-11'),
('Bruno Henrique', 'bh.fla@gmail.com', 'bh_321', '2023-03-30'),
('David Luis', 'luis.david@gmail.com', 'luis21', '2022-06-21');

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_categoria, id_empresa, id_conta, id_usuario)
values
(1, '2024-06-1', 2000, 'OK', 1, 1, 2, 1),
(1, '2024-06-4', 5000, '', 1, 1, 1, 1),
(2, '2024-06-1', 3500, 'Validado', 1, 1, 2, 1),
(2, '2024-06-4', 4500, 'OK', 1, 1, 1, 1);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Banco do Brasil', '1010', '12389-0', 23000,1),
('Banco do Santander', '9410', '345389-0', 560000,1);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Transporte',1), ('Consultoria',1), ('Cliente',1),('Investimento',1);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('XP Investimentos', '21 34435454', 'Rua Saturno n 10, Centro , Rio de Janeiro, RJ', 1),
('Tata Consultoria', '43 54435454', 'Rua Higienópolis n 300, Lago Igapó , Londrina, PR',1),
('JadLog Transportadora', '11 34435454', 'Av Paulista n 100, Centro , São Paulo, SP',1),
('VIAA Agronegócios', '43 74435454', 'Rua Jerusalem, n 300, Gleba Palhano, Londrina, PR',1);

