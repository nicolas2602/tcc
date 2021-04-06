CREATE TABLE pagamento
(
IdPagamento int PRIMARY KEY AUTO_INCREMENT, 
enderecoPag varchar(50) not null, 
cepPag varchar(50) not null, 
emailPag varchar(50) not null, 
formaPag varchar(50) not null 
)