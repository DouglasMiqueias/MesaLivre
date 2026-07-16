# MesaLivre - Sistema de Reservas de Mesas

Sistema web para gerenciamento de reservas de mesas em restaurantes, desenvolvido em PHP com arquitetura MVC.

## 🚀 Tecnologias Utilizadas

- **PHP** - Linguagem de programação
- **MySQL** - Banco de dados
- **PDO** - Conexão com banco de dados
- **HTML/CSS** - Interface do usuário
- **Arquitetura MVC** - Padrão de projeto

## 📁 Estrutura do Projeto

```
MesaLivre/
├── modelo/
│   └── usuario/
│       ├── ConnectionFactory_class.php  # Conexão com BD
│       ├── Cliente_class.php            # Entidade Cliente
│       └── ClienteDAO_class.php         # CRUD de Clientes
├── controle/
│   └── usuario/
│       ├── CadastrarCliente_class.php   # Controlador de cadastro
│       ├── ListarCliente_class.php      # Controlador de listagem
│       ├── AlterarCliente_class.php     # Controlador de alteração
│       ├── ExcluirCliente_class.php     # Controlador de exclusão
│       └── ExibirCliente_class.php      # Controlador de exibição
├── visao/
│   ├── topo.php                         # Cabeçalho
│   ├── base.php                         # Rodapé
│   ├── listaCliente.php                 # Lista de clientes
│   ├── formCadastroCliente.php          # Formulário de cadastro
│   ├── formAlteraCliente.php            # Formulário de alteração
│   ├── exibeCliente.php                 # Detalhes do cliente
│   └── pagAutorizaExcluir.php           # Confirmação de exclusão
├── index.php                            # Página inicial
├── cliente.php                          # Roteador de clientes
├── usuario.php                          # Roteador de usuários
└── database.sql                         # Script de criação do BD

```

## ⚙️ Configuração

### 1. Banco de Dados

Execute o arquivo `database.sql` no seu MySQL para criar o banco de dados e as tabelas:

```sql
mysql -u root -p < database.sql
```

Ou importe manualmente via phpMyAdmin.

### 2. Configuração da Conexão

Edite o arquivo `modelo/usuario/ConnectionFactory_class.php` e ajuste as credenciais:

```php
public $host = "localhost";
public $user = "root";
public $senha = "";  // Sua senha do MySQL
public $db = "mesalivre";
```

### 3. Servidor Web

Inicie um servidor PHP local:

```bash
php -S localhost:8000
```

Ou use XAMPP/WAMP e acesse via `http://localhost/MesaLivre/`

## 📋 Funcionalidades Implementadas

### ✅ CRUD de Clientes
- **Cadastrar** - Adicionar novos clientes
- **Listar** - Visualizar todos os clientes
- **Exibir** - Ver detalhes de um cliente
- **Alterar** - Editar informações do cliente
- **Excluir** - Remover cliente (com confirmação)

## 🔜 Próximas Implementações

### Fase 2 - Gerenciamento de Mesas
- [ ] CRUD de Mesas
- [ ] Status das mesas (disponível, ocupada, reservada)
- [ ] Visualização de layout do restaurante

### Fase 3 - Sistema de Reservas
- [ ] CRUD de Reservas
- [ ] Associar cliente + mesa + data/hora
- [ ] Verificação de disponibilidade
- [ ] Confirmação de reservas

### Fase 4 - Autenticação
- [ ] Sistema de login
- [ ] Controle de acesso (admin/funcionário)
- [ ] Sessões de usuário

## 🎯 Padrão de Desenvolvimento

O projeto segue o padrão **MVC (Model-View-Controller)**:

- **Model** (`modelo/`) - Classes de entidade e acesso a dados (DAO)
- **View** (`visao/`) - Interface do usuário (HTML/CSS)
- **Controller** (`controle/`) - Lógica de negócio e processamento

### Fluxo de Funcionamento

1. **Roteador** (`cliente.php`) recebe requisição com parâmetro `?fun=`
2. **Controller** processa a lógica e chama o DAO
3. **DAO** executa operações no banco de dados
4. **View** exibe os dados para o usuário

## 📝 Exemplos de Uso

### Listar Clientes
```
http://localhost:8000/cliente.php?fun=listar
```

### Cadastrar Cliente
```
http://localhost:8000/cliente.php?fun=cadastrar
```

### Alterar Cliente
```
http://localhost:8000/cliente.php?fun=alterar&id=1
```

### Excluir Cliente
```
http://localhost:8000/cliente.php?fun=excluir&id=1
```

## 👨‍💻 Autor

Desenvolvido seguindo o padrão do projeto **agendaNovo**.

## 📄 Licença

Projeto educacional - Livre para uso e modificação.
