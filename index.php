<!DOCTYPE html>
<html lang="pt-br">
<head> <!--Configurações-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Programação PHP </title>

    <style type="text/css">
        .formulario{
            background-color: #808080;
            color: #ffff;
            text-shadow: 2px 2px #000;
            padding: 10px;
            font-size: 1.9rem;
            font-weight: bold;
        }
        input{
            font-size: 1.7rem;
            padding: 4px;
            border-radius: 10px;
            border: solid;
            font-weight: bold;
        }
    </style>

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
            Insira as informações para o cálculo do FGTS
        </h2>
        <div class="formulario">
            <form action="analise.php" method="POST" target="">
                <label for="nome">Nome</label><br>
                <input type="text" id="nome" name="nome" placeholder="Insira seu nome">
                <br><br>
                <label for="salario">Salário</label><br>
                <input type="text" id="salario" name="salario" placeholder="Insira seu atual salário">
                <br><br>
                <input type="submit" name="Enviar"><br>
            </form>
        </div> <!--Divisão--> 
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