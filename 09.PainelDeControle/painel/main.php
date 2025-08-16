<?php 
    if(isset($_GET["url"]) == "logout") {
       
        Painel::logout();
         echo "<script>alert('deslogado')</script>";
    }
    
?>
<?php INCLUDE_PATH.$_SESSION['img'];?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH.'css/main.css' ?>">
</head>
<body>

    <!-- Barra Lateral -->
    <aside class="sidebar">
        <div class="logo">
            <h2>Dashboard</h2>
        </div>

         <div class="user-profile">
            <!-- <img src=https://placehold.co/80x80.png alt="User Photo" class="user-photo"> -->
            <img src="<?php echo INCLUDE_PATH."uploads/img/".$_SESSION['img'];?>" alt="User Photo" class="user-photo">              
            <h3><?php echo $_SESSION['nome'].' '.$_SESSION['sobrenome'];?></h3>
            <p><?php echo $_SESSION['cargo'];?></p>
        </div>

        <nav>
            <ul>
                <li><a href="" class="ativo">Visão Geral</a></li>
                <li><a href="">Produtos</a></li>
                <li><a href="">Clientes</a></li>
                <li><a href="">Relatórios</a></li>
                <li><a href="">Configurações</a></li>
                <li class="menu-inferior"><a href="logout">Logout</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Conteúdo Principal -->
    <main class="main-content">
        <header class="navbar">
            <div class="menu-mobile">
                <i class="fa-solid fa-bars"></i>    
            </div>
            <h1>Visão Geral</h1>
        </header>

        <section class="content">
            <!-- Container dos Cards -->
            <div class="cards-container">
                <div class="card">
                    <h3>Total de Vendas</h3>
                    <p>R$ 12.500</p>
                </div>
                <div class="card">
                    <h3>Novos Pedidos</h3>
                    <p>25</p>
                </div>
                <div class="card">
                    <h3>Clientes Ativos</h3>
                    <p>150</p>
                </div>
                <div class="card">
                    <h3>Tráfego do Site</h3>
                    <p>+34%</p>
                </div>
            </div>

            <!-- Tabela de Dados -->
            <div class="tabela-container">
                <h2>Últimos Pedidos</h2>
                <table class="tabela">
                    <thead>
                        <tr>
                            <th>ID do Pedido</th>
                            <th>Cliente</th>
                            <th>Valor</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1001</td>
                            <td>João Silva</td>
                            <td>R$ 250,00</td>
                            <td>Enviado</td>
                        </tr>
                        <tr>
                            <td>#1002</td>
                            <td>Maria Oliveira</td>
                            <td>R$ 450,00</td>
                            <td>Pendente</td>
                        </tr>
                        <tr>
                            <td>#1003</td>
                            <td>Carlos Santos</td>
                            <td>R$ 120,50</td>
                            <td>Entregue</td>
                        </tr>
                        <tr>
                            <td>#1004</td>
                            <td>Ana Souza</td>
                            <td>R$ 675,00</td>
                            <td>Enviado</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>
    </main>
    <script src="<?php echo INCLUDE_PATH."../js/jquery.js";?>"></script>
    <script src="<?php echo INCLUDE_PATH."js/menu.js";?>"></script>
</body>
</html>
