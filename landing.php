<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MesaLivre — Sistema de Reservas para Restaurantes</title>
<link rel="stylesheet" href="assets/css/landing.css">
</head>
<body>

  <header class="site-header">
    <div class="container">
      <div class="brand">
        <span class="brand-mark">MesaLivre</span>
        <span class="brand-tag">Reservas</span>
      </div>
      <a href="MesaLivre/usuario.php?fun=logar" class="nav-cta">Testar grátis</a>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <div class="hero-copy">
        <div class="eyebrow">Gestão de reservas para restaurantes</div>
        <h1>O controle da sua casa cheia, <em>numa tela só.</em></h1>
        <p class="lede">MesaLivre organiza mesas, horários e clientes em um só painel — para você lotar o salão sem overbooking e sem planilha.</p>
        <div class="hero-actions">
          <a href="#teste" class="btn-primary">Começar agora, é grátis </a>
          <a href="#como-funciona" class="btn-secondary">Ver como funciona</a>
        </div>
      </div>

    </div>
  </section>

  <section class="features" id="funcionalidades">
    <div class="container">
      <div class="section-head reveal">
        <div class="eyebrow">Funcionalidades</div>
        <h2>Tudo o que o salão precisa, nada do que sobra</h2>
        <p>Sem telas complicadas ou treinamento longo. O MesaLivre foi desenhado para o ritmo de um restaurante em movimento.</p>
      </div>

      <div class="ledger">
        <div class="ledger-row reveal">
          <div class="ledger-num">N.01</div>
          <h3>Gestão de clientes</h3>
          <p class="ledger-desc">Cadastre contatos, preferências e histórico de visitas para atender cada cliente pelo nome — e pela mesa que ele prefere.</p>
        </div>
        <div class="ledger-row reveal">
          <div class="ledger-num">N.02</div>
          <h3>Controle de mesas</h3>
          <p class="ledger-desc">Organize o salão por capacidade e localização, com o status de cada mesa atualizado em tempo real.</p>
        </div>
        <div class="ledger-row reveal">
          <div class="ledger-num">N.03</div>
          <h3>Reservas sem conflito</h3>
          <p class="ledger-desc">Data, horário e número de pessoas cruzados automaticamente — o sistema avisa antes de você dar duas reservas para a mesma mesa.</p>
        </div>
        <div class="ledger-row reveal">
          <div class="ledger-num">N.04</div>
          <h3>Painel do dia</h3>
          <p class="ledger-desc">Veja a ocupação do salão inteiro de relance, com um painel pensado para decisões rápidas no meio do serviço.</p>
        </div>
        <div class="ledger-row reveal">
          <div class="ledger-num">N.05</div>
          <h3>Acesso seguro</h3>
          <p class="ledger-desc">Login autenticado por usuário, para que cada membro da equipe entre só com o que precisa ver.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="process" id="como-funciona">
    <div class="container">
      <div class="section-head reveal">
        <div class="eyebrow">Como funciona</div>
        <h2>Do login à mesa reservada em três passos</h2>
      </div>

      <div class="timeline">
        <div class="timeline-step reveal">
          <span class="timeline-time">Passo 1</span>
          <h3>Entre no sistema</h3>
          <p>Acesse com suas credenciais — sem instalação, direto do navegador.</p>
        </div>
        <div class="timeline-step reveal">
          <span class="timeline-time">Passo 2</span>
          <h3>Configure o salão</h3>
          <p>Cadastre suas mesas, capacidades e a disposição do espaço uma única vez.</p>
        </div>
        <div class="timeline-step reveal">
          <span class="timeline-time">Passo 3</span>
          <h3>Comece a reservar</h3>
          <p>Cadastre clientes e registre reservas em segundos, todos os dias.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="benefits">
    <div class="container">
      <div class="section-head reveal">
        <div class="eyebrow">Por que MesaLivre</div>
        <h2>Resultado direto no salão</h2>
      </div>

      <div class="benefit-grid reveal">
        <div>
          <div class="benefit-line"><span>Menos conflitos de reserva</span><span class="mark">tempo real</span></div>
          <div class="benefit-line"><span>Melhor aproveitamento do espaço</span><span class="mark">por mesa</span></div>
          <div class="benefit-line"><span>Atendimento mais pessoal</span><span class="mark">histórico completo</span></div>
        </div>
        <div>
          <div class="benefit-line"><span>Equipe operando sem treinamento longo</span><span class="mark">intuitivo</span></div>
          <div class="benefit-line"><span>Decisões mais rápidas no serviço</span><span class="mark">painel único</span></div>
          <div class="benefit-line"><span>Gestão do negócio mais eficiente</span><span class="mark">dia a dia</span></div>
        </div>
      </div>
    </div>
  </section>

  <section class="final-cta" id = 'teste'>
    <div class="container">
      <h2>Sua próxima reserva pode ser a <em>primeira sem conflito.</em></h2>
      <p>Comece a usar o MesaLivre agora — gratuito para começar.</p>
      <a href="MesaLivre/usuario.php?fun=logar" class="btn-primary">Testar grátis →</a>
    </div>
  </section>

  <footer>
    <div class="container">
      <span class="brand-mark">MesaLivre</span>
      <p>© 2026 MesaLivre — Sistema de Reservas de Mesas. Todos os direitos reservados.</p>
    </div>
  </footer>

  <script>
    const revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
      const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            io.unobserve(entry.target);
          }
        });
      }, { threshold: 0.15 });
      revealEls.forEach(el => io.observe(el));
    } else {
      revealEls.forEach(el => el.classList.add('is-visible'));
    }
  </script>

</body>
</html>