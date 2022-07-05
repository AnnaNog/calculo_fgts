<!DOCTYPE html>
<html lang="pt-br">
<head> <!--Configurações-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Programação PHP </title>
</head>
<body>
    <header> <!--Configurações do topo do site-->
        <h3>Programação PHP</h3>
        <h4>Tectreinamentos</h4>
    </header>
    <br>
    <section> <!--Seção-->
        <h1>
            Programação PHP
        </h1>
        <br>
        <h2> 
            Resultados de FGTS
        </h2>
        <?php    
        $nomeCliente = $_POST["nome"];
        $salarioCliente = $_POST["salario"];

        $resultadoMensal = $salarioCliente * 0.08;
        $resultadoAnual = $resultadoMensal * 12;

        echo "<br>Olá $nomeCliente, seu recolhimento mensal de FGTS é de R$ $resultadoMensal<br><br>";
        echo "Seu recolhimento anual de FGTS é de R$ $resultadoAnual";

        ?>
        <br>
        <a href="index.php"><b> << Voltar </b></a>
        <br>
    </section>
    <br><br><br><br><br><br><br><br><br>
    <footer> <!--Informações de rodapé-->
        <h3>Programação PHP</h3>
        <h4>Tectreinamentos</h4>
        <br>
        <p class="rodape">
            <b>CONTATOS</b>
        </p>
        <br>
        <P class="rodape">
            <b>Campinas e Região:</b> 
        </P>
        <p class="rodape">
            (19) 0000-0000
        </p>
        <p class="rodape">
            (19) 0000-0000
        </p>
        <br>
        <p class="rodape">
            <b>Grande SP:</b> 
        </p>
        <p class="rodape">
            (11) 0000-0000
        </p>
        <p class="rodape">
            (11) 0000-0000
        </p>
    </footer>
</body>
</html>