Create Database tcc;

CREATE TABLE registro( 
IdRegistro int PRIMARY KEY AUTO_INCREMENT, 
nomeCadastro varchar(50) not null, 
dataN varchar(50) not null,
genero varchar(50) not null,
endereco varchar(50) not null,
cidade varchar(50) not null,
estado varchar(50) not null,
cep varchar(50) not null,
tel1 varchar(50) not null,
tel2 varchar(50) not null,
cpf varchar(50) not null,
emailCadastro varchar(50) not null, 
senhaCadastro varchar(50) not null, 
csenhaCadastro varchar(50) not null,
imagem varchar(50) not null,
empresa varchar(50) not null,
cnpj varchar(50) not null,
nomeEmpresa varchar(50) not null,
tservico varchar(50) not null,
endEmpresa varchar(50) not null,
parceria varchar(50) not null
);

CREATE TABLE info( 
IdInfo int PRIMARY KEY AUTO_INCREMENT, 
enderecoInfo varchar(50) not null, 
pacoteInfo varchar(50) not null, 
fpagoInfo varchar(50) not null
);

CREATE TABLE pagamento(
IdPagamento int PRIMARY KEY AUTO_INCREMENT, 
enderecoPag varchar(50) not null, 
cepPag varchar(50) not null, 
emailPag varchar(50) not null, 
formaPag varchar(50) not null 
);
