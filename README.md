# Web_CRUD_PHP

Este projeto é um exemplo de CRUD (Create, Read, Update, Delete) utilizando PHP e MySQL. Para rodá-lo em sua máquina local, siga os passos abaixo:

## Passos para rodar o projeto

### 1. Baixar e instalar o XAMPP
Primeiramente, baixe o XAMPP (um pacote que inclui o Apache e o MySQL) em seu computador. Você pode baixar a versão mais recente do XAMPP através deste [link](https://www.apachefriends.org/pt_br/index.html).

Após o download, siga os passos de instalação normalmente.

### 2. Ativar o MySQL e o Apache
Depois de instalar o XAMPP, abra o painel de controle do XAMPP. Você verá várias opções, mas para o nosso projeto, precisamos ativar o **MySQL** e o **Apache**. 

- Clique em "Start" ao lado de **Apache** para iniciar o servidor web.
- Clique em "Start" ao lado de **MySQL** para iniciar o banco de dados.

### 3. Criar o banco de dados e a tabela
Agora, vamos criar o banco de dados e a tabela para armazenar as informações dos usuários.

#### Passo 3.1: Acessar o phpMyAdmin
- No painel de controle do XAMPP, clique no botão **Admin** ao lado de MySQL. Isso abrirá o **phpMyAdmin** em seu navegador, que é uma ferramenta para gerenciar bancos de dados MySQL.
  
#### Passo 3.2: Criar o banco de dados
- No phpMyAdmin, clique em "Novo" (ou "New") no menu lateral esquerdo para criar um novo banco de dados.
- Dê um nome ao banco de dados, por exemplo: **webcrudphp**.
- Clique em "Criar".

#### Passo 3.3: Criar a tabela "User"
Agora que você criou o banco de dados, é hora de criar a tabela. Abaixo está o código SQL que você deve executar para criar a tabela "User":

```sql
CREATE TABLE User (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Password TEXT NOT NULL,
    Phone VARCHAR(14) NOT NULL,
    Email VARCHAR(100) NOT NULL
);
```
Para executar esse código:

Selecione o banco de dados webcrudphp na barra lateral esquerda.

Clique na guia SQL no topo da tela.

Cole o código SQL acima na caixa de texto e clique em Executar (ou Go).


### 4.Configurar o arquivo *db_connection.php*
Para que o seu projeto consiga se conectar ao banco de dados, você precisa configurar as credenciais de conexão. Abra o arquivo db_connection.php no seu projeto.

Localize a parte do código onde são definidos o nome do banco de dados e a tabela, e altere conforme necessário:
```php
$servername = "localhost"; // Geralmente localhost para o XAMPP
$username = "root"; // Usuário padrão do XAMPP
$password = ""; // Deixe em branco, pois o XAMPP não usa senha por padrão
$dbname = "webcrudphp"; // Substitua pelo nome do seu banco de dados
```
Aqui, você deve alterar o valor da variável $dbname para o nome do seu banco de dados (por exemplo, "webcrudphp"), caso tenha usado um nome diferente.

Agora o projeto está pronto para ser executado em sua máquina local!

### 5. Executando o Projeto
Coloque o código do seu projeto na pasta *htdocs* dentro do diretório onde o XAMPP está instalado (geralmente em C:\xampp\htdocs).

No navegador, acesse *http://localhost/seu_projeto*, substituindo seu_projeto pelo nome da pasta onde o seu projeto está armazenado.

Agora você pode usar a interface do WebCRUDPHP para adicionar, listar, editar e excluir usuários do banco de dados.
