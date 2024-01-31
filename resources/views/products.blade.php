<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>bec 3D Designs</title>
    <style>
    .cabecalho {margin: 0 5%; display: flex}
    .cabecalho h2 {margin: 0 5%}
    .produto{margin: 5%}
    </style>


</head>
<body>
    <header>
        <h1 style="text-align: center;">Encontre aqui os melhores produtos de impressão 3D no Brasil!</h1>
        <div class="cabecalho">
            <h2><a href="http://localhost:8000/home">Início</a></h2>
            <h2><a href="http://localhost:8000/products">Produtos</a></h2>
            <h2><a href="http://localhost:8000/policy">Política de Privacidade</a></h2>
            <h2><a href="http://localhost:8000/dashadmin">Dashboard Adm</a></h2>
        </div>
    </header>
    <main>

        <div class="castraProduto">
            <form action="#">
                <div class="produto">
                    <label for="produto1">Digite o nome do produto:</label>
                    <input type="text" name="produto1" id="">
                </div>
                <div class="produto">
                    <label for="produto2">Digite o preço do produto:</label>
                    <input type="text" name="produto2" id="">
                    <button>Cadastrar</button>
                </div>

            </form>
        </div>



    </main>
        
       
</body>
</html>