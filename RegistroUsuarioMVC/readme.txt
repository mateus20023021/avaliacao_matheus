/*CREATE TABLE `avaliacao_pweb`.`profissional` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(255) NOT NULL,
  `contato` VARCHAR(255) NULL,
  `email` VARCHAR(255) NOT NULL,
  `status` VARCHAR(255) NOT NULL,
  `rg` VARCHAR(255) NOT NULL,
  `nome_prof` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `cargo` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);*/

Query para criar o banco de dados.

Usei o MysqlWorkbench
Para rodar o projeto basta criar uma conexão no MysqlWorkbench 
com os dados:

mysql:
    host=localhost:3306;
    dbname=avaliacao_pweb; 
    username = root;
    senha = root;

Importar o banco de dados que está no diretório Database: 
e abrir o projeto


Link do Repositório: https://github.com/mateus20023021/avaliacao_matheus.git