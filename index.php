<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparelhos Eletrônicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h1>Aparelhos Eletrônicos</h1>
    <div class="container">
    <form action="cadastro.php" method="post">
        <div class="form-group col-md-6">
            <label for="nome">Nome do Aparelho</label>
            <input type="text" name="nome" required class="form-control">

            <label for="consumo_watts">Consumo Máximo (em Watts)</label>
            <input type="number" name="consumo_watts" required class="form-control">

            <label for="horas">Quantidade de horas em que o aparelho fica ligado por <b>dia</b></label>
            <input type="number" name="horas" required class="form-control">

            <label for="dias">Quantidade de dias em que o aparelho fica ligado durante o <b>mês</b></label>
            <input type="number" name="dias" required class="form-control">

            <label for="kilowatt">Valor do kilowatt</label>
            <input type="number" name="kilowatt" id="kilowatt" required class="form-control">
        </div>
            <br><button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
            <button type="reset" required class="btn btn-danger">Limpar</button>
        
    </form>
    </div>
   
</body>
</html>