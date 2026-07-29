Identidade Visual e Paleta de Cores — MesaLivre

A identidade visual do MesaLivre foi desenvolvida para transmitir os valores de tecnologia, organização, confiança, agilidade e profissionalismo. A escolha do azul como cor principal busca diferenciar o sistema dos tradicionais ERPs para restaurantes, que normalmente utilizam excesso de vermelho e laranja. O azul cria uma experiência visual mais agradável para usuários que permanecem muitas horas utilizando o sistema, além de transmitir estabilidade e segurança.

A paleta foi construída seguindo o conceito do Tailwind CSS Color Palette, permitindo uma escala consistente de tons para diferentes estados da interface (hover, active, disabled, backgrounds e elementos secundários).

Paleta Primária (Blue)

O azul representa a identidade do MesaLivre.

Escala	Hex	Utilização
Blue 50	#EFF6FF	Fundo de badges, cards informativos, estados selecionados suaves
Blue 100	#DBEAFE	Fundo de alertas informativos
Blue 200	#BFDBFE	Hover de elementos claros
Blue 300	#93C5FD	Ícones secundários
Blue 400	#60A5FA	Elementos ilustrativos
Blue 500	#3B82F6	Cor institucional
Blue 600	#2563EB	Botões primários
Blue 700	#1D4ED8	Hover dos botões
Blue 800	#1E40AF	Estado pressionado
Blue 900	#1E3A8A	Links ativos
Blue 950	#172554	Sidebar e Header Escuro
Aplicação do Azul
Botão Primário

Estado Normal

background: #2563EB;
color: #FFFFFF;

Hover

background: #1D4ED8;

Active

background: #1E40AF;

Disabled

background: #93C5FD;
color: #FFFFFF;
opacity: .7;
Botão Secundário

Normal

background: #FFFFFF;
border: 1px solid #2563EB;
color: #2563EB;

Hover

background: #EFF6FF;

Active

background: #DBEAFE;
Botão Fantasma (Ghost)

Muito utilizado em tabelas.

Normal

background: transparent;
color: #2563EB;

Hover

background: #EFF6FF;
Sidebar

A sidebar é um dos principais elementos da identidade do MesaLivre.

Cor

background:
#172554

Logo

Branca

Texto

#FFFFFF

Texto secundário

rgba(255,255,255,.70)
Item do Menu

Normal

background: transparent;

Hover

background:
rgba(255,255,255,.08);

Selecionado

background:
#2563EB;

Ícone

Branco
Header

Fundo

#FFFFFF

Linha inferior

#E2E8F0

Botões de ação

Hover

#EFF6FF
Cards

Background

#FFFFFF

Hover

transform: translateY(-3px);

box-shadow:
0 10px 25px rgba(37,99,235,.12);

Borda

#E2E8F0
Campo de Busca

Normal

background:
#FFFFFF;

border:
#CBD5E1;

Hover

border:
#93C5FD;

Focus

border:
#2563EB;

box-shadow:
0 0 0 4px rgba(37,99,235,.15);
Inputs

Normal

border:
#CBD5E1;

Hover

border:
#60A5FA;

Focus

border:
#2563EB;

Erro

border:
#EF4444;
Links

Normal

#2563EB

Hover

#1D4ED8

Visited

#1E40AF
Checkbox

Selecionado

background:
#2563EB;

Hover

#1D4ED8;
Switch

Desligado

#CBD5E1

Ligado

#2563EB
Scrollbar

Track

#F1F5F9

Thumb

#CBD5E1

Hover

#94A3B8
Status do Sistema
Disponível

Cor

#22C55E

Badge

background:
#DCFCE7;

Texto

#166534;
Ocupada

Cor

#F97316

Badge

#FFEDD5

Texto

#9A3412
Reservada

Cor

#EAB308

Badge

#FEF3C7

Texto

#854D0E
Em preparo

Cor

#3B82F6

Badge

#DBEAFE

Texto

#1E40AF
Pedido Pronto

Cor

#10B981

Badge

#D1FAE5

Texto

#065F46
Cancelado

Cor

#EF4444

Badge

#FEE2E2

Texto

#991B1B
Manutenção

Cor

#64748B

Badge

#E2E8F0

Texto

#334155
Fundo da Aplicação
background:
#F8FAFC;
Cards
background:
#FFFFFF;
Bordas
#E2E8F0
Separadores
#F1F5F9
Tipografia

Título Principal

32px
700
#0F172A

Título de Página

28px
600
#1E293B

Subtítulo

18px
500
#334155

Texto

16px
400
#475569

Texto Secundário

14px
400
#64748B

Placeholder

#94A3B8
Sombras

Cards

box-shadow:
0 4px 12px rgba(15,23,42,.05);

Hover

box-shadow:
0 10px 30px rgba(37,99,235,.10);

Modal

0 20px 50px rgba(15,23,42,.18);
Filosofia Visual

A linguagem visual do MesaLivre é baseada no conceito de "Blue First Design", onde o azul representa a identidade institucional e guia toda a interação do usuário. Em vez de utilizar cores chamativas em excesso, o sistema emprega uma interface predominantemente neutra — composta por tons de branco, cinza e azul — deixando que as cores de status (verde, laranja, amarelo e vermelho) chamem a atenção apenas quando realmente necessário. Esse equilíbrio reduz a fadiga visual, melhora a leitura das informações e torna a experiência mais agradável durante longos períodos de uso. Cada componente, desde botões e menus até tabelas e formulários, segue a mesma linguagem visual, garantindo consistência, escalabilidade e uma aparência profissional que posiciona o MesaLivre como um software moderno de gestão para restaurantes.