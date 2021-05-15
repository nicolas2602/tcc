Create Database tcc;
------------------------------------------------------------------------
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

-- Perfil Administrador ou Usuário --
create table profile_reg(
idProfile INT PRIMARY KEY AUTO_INCREMENT,
nameProfile varchar(50)
);

insert into profile_reg(nameProfile) values ('Admin'), ('User');

select * from profile_reg;

alter table registro
ADD fk_idProfile int,
ADD FOREIGN KEY(fk_idProfile) REFERENCES profile_reg(idProfile);

alter table registro
ADD fk_IdLogging int(50) not null,
ADD FOREIGN KEY(fk_IdLogging) REFERENCES logging(IdLogging);

------------------------------------------------------------------------

CREATE TABLE pacote( 
IdPacote int PRIMARY KEY AUTO_INCREMENT, 
donoPacote varchar(50) not null, 
nomePacote varchar(50) not null
);

CREATE TABLE pagamento(
IdPagamento int PRIMARY KEY AUTO_INCREMENT, 
enderecoPag varchar(50) not null, 
cepPag varchar(50) not null, 
emailPag varchar(50) not null, 
formaPag varchar(50) not null 
);

--- Log de acesso ---
Create table logging(
IdLogging int primary key AUTO_INCREMENT,
dateLogging datetime not null,
level varchar(100),
msg varchar(100) not null,
fk_registro int not null,
FOREIGN key (fk_registro) references registro (IdRegistro)   
);

insert into logging (dateLogging, level, msg, fk_registro) VALUES (now(), 'INFO', 'Teste', 1);

--- Carrinho de compra ---
CREATE TABLE PRODUTO(
	ID_PRODUTO INT PRIMARY KEY AUTO_INCREMENT,
	NOME_PRODUTO VARCHAR(30) NOT NULL,
    preco decimal(10,2) not null
);


CREATE TABLE COMPRA(
	ID_COMPRA INT PRIMARY KEY AUTO_INCREMENT,
	DATA_COMPRA DATETIME DEFAULT NOW(),
    TOTAL_PRECO FLOAT
);


CREATE TABLE COMPRA_PRODUTO(
    ID INT NOT NULL AUTO_INCREMENT,
	FK_PRODUTO INT NOT NULL,
	FK_COMPRA INT NOT NULL,
    QTD_PRODUTO INT NOT NULL,
	PRIMARY KEY (ID, FK_PRODUTO, FK_COMPRA),
	FOREIGN KEY(FK_PRODUTO) REFERENCES PRODUTO(ID_PRODUTO),
	FOREIGN KEY(FK_COMPRA) REFERENCES COMPRA(ID_COMPRA)
);



INSERT INTO PRODUTO (NOME_PRODUTO, preco) VALUES ('TECLADO x13', '50'), ('MONITOR 39', '800');

INSERT INTO COMPRA (TOTAL_PRECO) VALUES (0);