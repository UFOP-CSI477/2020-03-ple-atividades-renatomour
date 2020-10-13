# **CSI477-2020-03 - PLE - Trabalho Final - Resultados**
## *Aluna(o): Renato Júnior De Moura (15.2.8113)*

--------------

<!-- Este documento tem como objetivo apresentar o projeto desenvolvido, considerando o que foi definido na proposta e o produto final. -->

### Resumo

O trabalho final tem como tema o desenvolvimento de um Sistema de reserva das Salas do ICEA e tem como objetivo permitir que um usuário consiga cadastrar usuario, salas e o agendamento de salas,ou seja realizar a reserva de salas de forma simples, fazendo as operações CRUD em usuarios, salas s e reservas, visualização dos historico de reservas por sala e por pessoas 

### 1. Funcionalidades implementadas
1 Criar/Alterar/Apagar/visualizar/ Dados do Usuarios

2 Criar/Alterar/Apagar/visualizar/ Dados do Sala

3 Criar/Alterar/Apagar/visualizar/ Dados da Reserva

4 Visualizar histórico de Reservas do usuario

5 Visualizar histórico de Reservas Da Sala 
  
### 2. Funcionalidades previstas e não implementadas

foram implementadas as funcionalidades previstas 
### 3. Outras funcionalidades implementadas
1-area geral

2-area administrativa 

3-autenticação 

### 4. Principais desafios e dificuldades
<!-- Descrever os principais desafios encontrados no desenvolvimento do trabalho, quais foram as dificuldades e como elas foram superadas e resolvidas. -->
  ao se utilizar o comando php artisan make:model -a para a criação do model,algumas entidades,tiveram alguns erros,não gerando o model e o controller,foi solucionado trocando o nome das entidades em questão 
### 5. Instruções para instalação e execução
<!-- Descrever o que deve ser feito para instalar (ou baixar) a aplicação, o que precisa ser configurando (parâmetros, banco de dados e afins) e como executá-la. -->
1-utilizar o comando composer install na raiz do projeto para baixar a pasta (vendor)

2-alterar o arquivo env.example para .env e configurar o banco para o sqlite e o caminho para o arquivo do mesmo 

3-na pasta raiz do projeto pelo terminal utilizar o comando php artisan serve 
### 6. Referências
<!-- Referências podem ser incluídas, caso necessário. Utilize o padrão ABNT. -->
(Bootstrap)
https://getbootstrap.com/docs/4.5/getting-started/introduction/

(Laravel)
https://laravel.com/docs/8.x/database

(Github)
https://github.com/fboliveira

foram utilizados os conceitos aprendidos durante a disciplina,tendo como base os codigos,explicações e sugestôes do docente 

Fernando B Oliveira 

