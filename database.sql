CREATE DATABASE IF NOT EXISTS mesalivre
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE mesalivre;

-- ==========================================
-- CATEGORIAS
-- ==========================================

CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(60) NOT NULL,
    cor VARCHAR(20),
    icone VARCHAR(100),
    ativo BOOLEAN DEFAULT TRUE
);

-- ==========================================
-- USUÁRIOS
-- ==========================================

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,

    tipo ENUM(
        'admin',
        'gerente',
        'garcom',
        'cozinha'
    ) NOT NULL,

    ativo BOOLEAN DEFAULT TRUE,

    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- ==========================================
-- CLIENTES
-- ==========================================

CREATE TABLE clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    endereco VARCHAR(200),
    bairro VARCHAR(100),
    observacoes TEXT,

    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- ==========================================
-- PRODUTOS
-- ==========================================

CREATE TABLE produtos (

    id_produto INT AUTO_INCREMENT PRIMARY KEY,

    id_categoria INT NOT NULL,

    nome VARCHAR(100) NOT NULL,

    descricao TEXT,

    preco DECIMAL(10,2) NOT NULL,

    estoque INT DEFAULT 0,

    tempo_preparo INT,

    imagem VARCHAR(255),

    ativo BOOLEAN DEFAULT TRUE,

    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (id_categoria)
        REFERENCES categorias(id_categoria)

);

-- ==========================================
-- MOVIMENTAÇÃO DE ESTOQUE
-- ==========================================

CREATE TABLE movimentacao_estoque (

    id_movimentacao INT AUTO_INCREMENT PRIMARY KEY,

    id_produto INT NOT NULL,

    id_usuario INT NOT NULL,

    tipo ENUM(
        'entrada',
        'saida',
        'ajuste'
    ) NOT NULL,

    quantidade INT NOT NULL,

    observacao TEXT,

    data_movimentacao DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (id_produto)
        REFERENCES produtos(id_produto),

    FOREIGN KEY (id_usuario)
        REFERENCES usuarios(id_usuario)

);

-- ==========================================
-- MESAS
-- ==========================================

CREATE TABLE mesas (

    id_mesa INT AUTO_INCREMENT PRIMARY KEY,

    numero VARCHAR(20) NOT NULL,

    capacidade INT NOT NULL,

    localizacao VARCHAR(60),

    status ENUM(
        'disponivel',
        'ocupada',
        'reservada',
        'limpeza',
        'manutencao'
    ) DEFAULT 'disponivel',

    descricao TEXT

);

-- ==========================================
-- RESERVAS
-- ==========================================

CREATE TABLE reservas (

    id_reserva INT AUTO_INCREMENT PRIMARY KEY,

    id_cliente INT NOT NULL,

    id_mesa INT NOT NULL,

    data_reserva DATE NOT NULL,

    hora_inicio TIME NOT NULL,

    hora_fim TIME NOT NULL,

    numero_pessoas INT NOT NULL,

    status ENUM(
        'confirmada',
        'cancelada',
        'finalizada'
    ) DEFAULT 'confirmada',

    observacoes TEXT,

    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (id_cliente)
        REFERENCES clientes(id_cliente),

    FOREIGN KEY (id_mesa)
        REFERENCES mesas(id_mesa)

);

-- ==========================================
-- PEDIDOS
-- ==========================================

CREATE TABLE pedidos (

    id_pedido INT AUTO_INCREMENT PRIMARY KEY,

    id_cliente INT,

    id_mesa INT NOT NULL,

    id_usuario INT NOT NULL,

    numero_comanda VARCHAR(20),

    data_pedido DATETIME DEFAULT CURRENT_TIMESTAMP,

    status ENUM(
        'pendente',
        'aceito',
        'preparo',
        'pronto',
        'entregue',
        'fechado',
        'cancelado'
    ) DEFAULT 'pendente',

    total DECIMAL(10,2) DEFAULT 0.00,

    observacoes TEXT,

    FOREIGN KEY (id_cliente)
        REFERENCES clientes(id_cliente),

    FOREIGN KEY (id_mesa)
        REFERENCES mesas(id_mesa),

    FOREIGN KEY (id_usuario)
        REFERENCES usuarios(id_usuario)

);

-- ==========================================
-- ITENS DO PEDIDO
-- ==========================================

CREATE TABLE itens_pedido (

    id_item INT AUTO_INCREMENT PRIMARY KEY,

    id_pedido INT NOT NULL,

    id_produto INT NOT NULL,

    quantidade INT NOT NULL,

    preco_unitario DECIMAL(10,2) NOT NULL,

    subtotal DECIMAL(10,2) NOT NULL,

    observacoes TEXT,

    FOREIGN KEY (id_pedido)
        REFERENCES pedidos(id_pedido),

    FOREIGN KEY (id_produto)
        REFERENCES produtos(id_produto)

);

-- ==========================================
-- HISTÓRICO DOS PEDIDOS
-- ==========================================

CREATE TABLE historico_pedido (

    id_historico INT AUTO_INCREMENT PRIMARY KEY,

    id_pedido INT NOT NULL,

    id_usuario INT NOT NULL,

    status ENUM(
        'pendente',
        'aceito',
        'preparo',
        'pronto',
        'entregue',
        'fechado',
        'cancelado'
    ) NOT NULL,

    observacao TEXT,

    data_historico DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (id_pedido)
        REFERENCES pedidos(id_pedido),

    FOREIGN KEY (id_usuario)
        REFERENCES usuarios(id_usuario)

);

-- ==========================================
-- PAGAMENTOS
-- ==========================================

CREATE TABLE pagamentos (

    id_pagamento INT AUTO_INCREMENT PRIMARY KEY,

    id_pedido INT NOT NULL,

    forma_pagamento ENUM(
        'dinheiro',
        'pix',
        'credito',
        'debito',
        'voucher'
    ) NOT NULL,

    valor DECIMAL(10,2) NOT NULL,

    status ENUM(
        'pendente',
        'pago',
        'cancelado'
    ) DEFAULT 'pendente',

    data_pagamento DATETIME,

    FOREIGN KEY (id_pedido)
        REFERENCES pedidos(id_pedido)

);

-- ==========================================
-- DADOS INICIAIS
-- ==========================================

INSERT INTO usuarios
(
    nome,
    email,
    senha,
    tipo
)
VALUES
(
    'Administrador',
    'iftm@mesalivre.com',

    -- senha: admin
    '21232f297a57a5a743894a0e4a801fc3',

    'admin'
);

INSERT INTO categorias
(nome, cor, icone)
VALUES
('Lanches', '#E74C3C', 'fa-burger'),
('Bebidas', '#3498DB', 'fa-glass-water'),
('Porções', '#F39C12', 'fa-utensils'),
('Sobremesas', '#9B59B6', 'fa-ice-cream');

INSERT INTO mesas
(numero, capacidade, localizacao, status)
VALUES
('01',4,'Salão Principal','disponivel'),
('02',4,'Salão Principal','disponivel'),
('03',6,'Salão Principal','disponivel'),
('04',2,'Varanda','disponivel'),
('05',8,'Área VIP','disponivel');

INSERT INTO clientes
(nome, telefone)
VALUES
('Cliente Balcão', '', '');

INSERT INTO produtos
(id_categoria, nome, descricao, preco, estoque, tempo_preparo)
VALUES
(1,'Hambúrguer Clássico','Pão, carne e queijo',28.90,100,15),
(1,'X-Bacon','Hambúrguer com bacon',34.90,80,18),
(2,'Refrigerante Lata','350ml',6.50,200,0),
(2,'Suco Natural','Laranja',9.00,100,5),
(3,'Batata Frita','Porção Individual',18.00,80,10),
(4,'Sorvete','2 bolas',14.00,60,3);