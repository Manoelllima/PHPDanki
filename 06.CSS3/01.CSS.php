<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página com Seções</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>

    
    <header>
        <!-- Ícone de Ponto de Venda (SVG simples) -->
        <div class="header-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4V8h16v10zm-2-7H6v-2h12v2z"/>
            </svg>
        </div>
        <h1>PDV Inovador</h1>
    </header>

    <nav>
        <button class="menu-toggle">
             &#9776; <!-- Ícone de hambúrguer -->
        </button>
        <div class="nav-links">
            <a href="#sobre">Sobre Nós</a>
            <a href="#servicos">Serviços</a>
            <a href="#contato">Contato</a>
        </div>
    </nav>

    <!-- Nova Seção Principal -->
    <main>
        <!-- Div para o conteúdo de descrição inovadora do sistema de PDV -->
        <div class="main-conteudo">
            <h2>Revolucione Seu Negócio com Nosso PDV Inteligente</h2>
            <p>
                Imagine um sistema de Ponto de Venda que não apenas processa transações, mas que se torna o cérebro da sua operação. Nosso PDV inovador utiliza inteligência artificial para entender o comportamento do seu cliente, sugerindo produtos complementares e aumentando o valor de cada venda.
            </p>
            <p>
                Com ele, a gestão de estoque é automatizada e em tempo real, alertando sobre a necessidade de reposição e otimizando o seu capital de giro. Diga adeus às perdas por produtos parados ou falta de mercadoria!
            </p>
            <p>
                Além disso, a plataforma oferece relatórios e análises preditivas detalhadas, transformando dados brutos em insights acionáveis. Tome decisões estratégicas com confiança, identifique tendências e personalize a experiência de compra para cada consumidor. Nosso sistema de PDV não é apenas uma ferramenta, é um parceiro estratégico para o crescimento sustentável do seu negócio.
            </p>
        </div>

        <!-- Div para a imagem -->
        <div class="main-imagem-container">
            <img src="https://placehold.co/600x400/2563eb/ffffff?text=PDV+Inovador" alt="Imagem de um Sistema de PDV Inovador">
        </div>
    </main>

    <div class="container">

        <section id="sobre" class="secao">
            <h2>Sobre Nós</h2>
            <p>
                Bem-vindo à nossa página! Somos uma empresa dedicada a fornecer soluções inovadoras e de alta qualidade. Nossa missão é superar as expectativas dos nossos clientes e construir parcerias duradouras. Acreditamos que a inovação e a excelência são os pilares do sucesso.
            </p>
            <p>
                Com uma equipe de profissionais experientes, estamos sempre buscando novas maneiras de aprimorar nossos produtos e serviços para atender às necessidades do mercado em constante evolução.
            </p>
        </section>

        <section id="servicos" class="secao">
            <h2>Nossos Serviços</h2>
            <p>Oferecemos uma variedade de serviços especializados para atender às suas necessidades. Nossas principais áreas de atuação incluem:</p>

            <div class="listas-servicos">
                <div>
                    <h3>Serviços Gerais</h3>
                    <ul>
                        <li>Consultoria estratégica para negócios</li>
                        <li>Desenvolvimento de software personalizado</li>
                        <li>Marketing digital e otimização SEO</li>
                        <li>Suporte técnico e manutenção de sistemas</li>
                    </ul>
                </div>
                <div>
                    <h3>Funções do PDV</h3>
                    <ul>
                        <li>Registro de Vendas Rápido e Intuitivo</li>
                        <li>Gestão de Estoque em Tempo Real</li>
                        <li>Integração com Meios de Pagamento</li>
                        <li>Relatórios e Análises Completas</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="contato" class="secao">
            <h2>Entre em Contato</h2>
            <p>Se você tem alguma dúvida ou gostaria de saber mais sobre nossos serviços, preencha o formulário abaixo e entraremos em contato.</p>

            <div class="contact-form-container">
                <form class="contact-form">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="sobrenome">Sobrenome:</label>
                        <input type="text" id="sobrenome" name="sobrenome" required>
                    </div>
                    <div class="form-group">
                        <label for="email_contato">Email:</label>
                        <input type="email" id="email_contato" name="email_contato" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="tel" id="telefone" name="telefone">
                    </div>
                    <div class="form-group">
                        <label for="comentarios">Comentários:</label>
                        <textarea id="comentarios" name="comentarios"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">Enviar Mensagem</button>
                    </div>
                </form>
            </div>
        </section>

    </div>

    <footer>
        <p>&copy; 2025 Minha Empresa. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
