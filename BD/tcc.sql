Create Database tcc;

CREATE TABLE registro( 
IdRegistro int PRIMARY KEY AUTO_INCREMENT, 
emailCadastro varchar(50) not null, 
nomeCadastro varchar(50) not null, 
senhaCadastro varchar(50) not null, 
csenhaCadastro varchar(50) not null,
imagem varchar(50) not null 
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
