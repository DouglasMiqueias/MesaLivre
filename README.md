# MesaLivre - Sistema de Reservas de Mesas

Sistema web completo para gerenciamento de reservas de mesas em restaurantes, desenvolvido em PHP com arquitetura MVC.

## 🚀 Tecnologias Utilizadas

- **PHP** - Linguagem de programação
- **MySQL** - Banco de dados
- **PDO** - Conexão com banco de dados
- **HTML/CSS** - Interface do usuário
- **Arquitetura MVC** - Padrão de projeto
- **Bootstrap Icons** - Ícones da interface
- **Google Fonts** - Tipografia (Plus Jakarta Sans)

## 📁 Estrutura do Projeto

```
MesaLivre/
├── modelo/
│   ├── usuario/          # Entidades e DAO de usuários
│   ├── cliente/          # Entidades e DAO de clientes
│   ├── mesa/             # Entidades e DAO de mesas
│   ├── produto/          # Entidades e DAO de produtos
│   ├── reserva/          # Entidades e DAO de reservas
│   └── categoria/        # Entidades e DAO de categorias
├── controle/
│   ├── usuario/          # Controladores de usuários (login/logout)
│   ├── cliente/          # Controladores de clientes (CRUD + consulta)
│   ├── mesa/             # Controladores de mesas (CRUD + consulta)
│   ├── produto/          # Controladores de produtos (CRUD + consulta)
│   ├── reserva/          # Controladores de reservas (CRUD + consulta)
│   └── categoria/        # Controladores de categorias (CRUD + consulta)
├── visao/
│   ├── topo.php          # Cabeçalho com menu lateral
│   ├── base.php          # Rodapé
│   ├── usuario/          # Telas de login
│   ├── cliente/          # Telas de clientes
│   ├── mesa/             # Telas de mesas
│   ├── produto/          # Telas de produtos
│   ├── reserva/          # Telas de reservas
│   └── categoria/        # Telas de categorias
├── assets/
│   └── css/
│       └── visao/            # CSS centralizado (exibir, alterar, cadastrar, listar, excluir)
├── index.php                 # Dashboard principal
├── cliente.php               # Roteador de clientes
├── produto.php               # Roteador de produtos
├── mesa.php                  # Roteador de mesas
├── reserva.php               # Roteador de reservas
├── categoria.php             # Roteador de categorias
├── usuario.php               # Roteador de usuários (login/logout)
├── database.sql              # Script de criação do BD
└── README.md
```

## ⚙️ Configuração

### 1. Banco de Dados

Execute o arquivo `database.sql` no seu MySQL para criar o banco de dados e as tabelas:

```sql
mysql -u root -p < database.sql
```

Ou importe manualmente via phpMyAdmin.

### 2. Configuração da Conexão

Edite os arquivos `ConnectionFactory_class.php` em cada módulo (cliente, mesa, produto, reserva, categoria, usuario) e ajuste as credenciais:

```php
public $host = "localhost";
public $user = "root";
public $senha = "";  // Sua senha do MySQL
public $db = "mesalivre";
```

### 3. Servidor Web

Inicie um servidor PHP local:

```bash
cd MesaLivre
php -S localhost:8000
```

Ou use XAMPP/WAMP e acesse via `http://localhost/MesaLivre/`

### 4. Acesso Inicial

Acesse `http://localhost/MesaLivre/usuario.php?fun=logar` para fazer login.

**Usuário padrão:** `iftm`
**Senha padrão:** (verificar no banco de dados - hash MD5)

## 📋 Funcionalidades Implementadas

### ✅ Sistema de Autenticação
- **Login** - Autenticação de usuários com email e senha
- **Logout** - Encerramento de sessão
- **Proteção de rotas** - Redirecionamento para login em páginas protegidas
- **Sessões** - Gerenciamento de sessões de usuário

### ✅ CRUD de Clientes
- **Cadastrar** - Adicionar novos clientes
- **Listar** - Visualizar todos os clientes
- **Exibir** - Ver detalhes de um cliente
- **Alterar** - Editar informações do cliente
- **Excluir** - Remover cliente (com confirmação)
- **Consultar** - Buscar clientes por nome

### ✅ CRUD de Mesas
- **Cadastrar** - Adicionar novas mesas
- **Listar** - Visualizar todas as mesas
- **Exibir** - Ver detalhes de uma mesa
- **Alterar** - Editar informações da mesa
- **Excluir** - Remover mesa (com confirmação)
- **Consultar** - Buscar mesas por número, localização, status ou capacidade
- **Status** - Disponível, ocupada, reservada, limpeza, manutenção

### ✅ CRUD de Produtos
- **Cadastrar** - Adicionar novos produtos
- **Listar** - Visualizar todos os produtos
- **Exibir** - Ver detalhes de um produto
- **Alterar** - Editar informações do produto
- **Excluir** - Remover produto (com confirmação)
- **Consultar** - Buscar produtos por nome
- **Categorias** - Produtos vinculados a categorias

### ✅ CRUD de Reservas
- **Cadastrar** - Criar novas reservas
- **Listar** - Visualizar todas as reservas
- **Exibir** - Ver detalhes de uma reserva
- **Alterar** - Editar informações da reserva
- **Excluir** - Remover reserva (com confirmação)
- **Consultar** - Buscar reservas por nome do cliente
- **Associações** - Vincula cliente + mesa + data/hora

### ✅ CRUD de Categorias
- **Cadastrar** - Adicionar novas categorias
- **Listar** - Visualizar todas as categorias
- **Exibir** - Ver detalhes de uma categoria
- **Alterar** - Editar informações da categoria
- **Excluir** - Remover categoria (soft delete - ativo/inativo)
- **Consultar** - Buscar categorias por nome
- **Atributos** - Nome, cor, ícone, status ativo

### ✅ Dashboard
- **Visão geral** - Dashboard com estatísticas das mesas
- **Cards de status** - Total de mesas, disponíveis, ocupadas
- **Grid visual** - Visualização em grade das mesas com status

### ✅ Interface
- **Menu lateral** - Navegação entre módulos
- **Design moderno** - Interface com gradientes e sombras
- **Responsivo** - Adaptável a diferentes tamanhos de tela
- **CSS centralizado** - Estilos organizados em arquivos separados
- **Ícones** - Bootstrap Icons para melhor UX

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

### Autenticação
```
http://localhost/MesaLivre/usuario.php?fun=logar     # Login
http://localhost/MesaLivre/usuario.php?fun=logout    # Logout
```

### Clientes
```
http://localhost/MesaLivre/cliente.php?fun=listar    # Listar clientes
http://localhost/MesaLivre/cliente.php?fun=cadastrar # Cadastrar cliente
http://localhost/MesaLivre/cliente.php?fun=alterar&id=1  # Alterar cliente
http://localhost/MesaLivre/cliente.php?fun=exibir&id=1   # Exibir cliente
http://localhost/MesaLivre/cliente.php?fun=excluir&id=1  # Excluir cliente
http://localhost/MesaLivre/cliente.php?fun=consultar     # Consultar cliente
```

### Mesas
```
http://localhost/MesaLivre/mesa.php?fun=listar      # Listar mesas
http://localhost/MesaLivre/mesa.php?fun=cadastrar    # Cadastrar mesa
http://localhost/MesaLivre/mesa.php?fun=alterar&id=1 # Alterar mesa
http://localhost/MesaLivre/mesa.php?fun=exibir&id=1  # Exibir mesa
http://localhost/MesaLivre/mesa.php?fun=excluir&id=1 # Excluir mesa
http://localhost/MesaLivre/mesa.php?fun=consultar    # Consultar mesa
```

### Produtos
```
http://localhost/MesaLivre/produto.php?fun=listar     # Listar produtos
http://localhost/MesaLivre/produto.php?fun=cadastrar   # Cadastrar produto
http://localhost/MesaLivre/produto.php?fun=alterar&id=1 # Alterar produto
http://localhost/MesaLivre/produto.php?fun=exibir&id=1  # Exibir produto
http://localhost/MesaLivre/produto.php?fun=excluir&id=1 # Excluir produto
http://localhost/MesaLivre/produto.php?fun=consultar    # Consultar produto
```

### Reservas
```
http://localhost/MesaLivre/reserva.php?fun=listar     # Listar reservas
http://localhost/MesaLivre/reserva.php?fun=cadastrar   # Cadastrar reserva
http://localhost/MesaLivre/reserva.php?fun=alterar&id=1 # Alterar reserva
http://localhost/MesaLivre/reserva.php?fun=exibir&id=1  # Exibir reserva
http://localhost/MesaLivre/reserva.php?fun=excluir&id=1 # Excluir reserva
http://localhost/MesaLivre/reserva.php?fun=consultar    # Consultar reserva
```

### Categorias
```
http://localhost/MesaLivre/categoria.php?fun=listar     # Listar categorias
http://localhost/MesaLivre/categoria.php?fun=cadastrar   # Cadastrar categoria
http://localhost/MesaLivre/categoria.php?fun=alterar&id=1 # Alterar categoria
http://localhost/MesaLivre/categoria.php?fun=exibir&id=1  # Exibir categoria
http://localhost/MesaLivre/categoria.php?fun=excluir&id=1 # Excluir categoria
http://localhost/MesaLivre/categoria.php?fun=consultar    # Consultar categoria
```

### Dashboard
```
http://localhost/MesaLivre/index.php    # Dashboard principal
```

## 👨‍💻 Autor

Douglas Miquéias

## 📄 Licença

Projeto educacional - Livre para uso e modificação.
