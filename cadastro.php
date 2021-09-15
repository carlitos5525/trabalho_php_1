 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Aparelho Cadastrado</title>
 </head>
 <body>
    <h1>Aparelho Cadastrado</h1>
    <?php
        if(isset($_POST['enviar'])){
            $nome = $_POST['nome'];
            $consumo_watts = $_POST['consumo_watts'];
            $horas = $_POST['horas'];
            $dias = $_POST['dias'];
            $kilowatt = $_POST['kilowatt'];
    
            // calculando consumo diário do aparelho
            $x = $consumo_watts / 1000;
            $consumo_diario = $x * $horas;
    
            // calculando consumo mensal do aparelho
            $consumo_mensal = $consumo_diario * $dias;
    
            //calculando consummo do aparelho em R$
            $consumo_em_real = $consumo_mensal * $kilowatt;
    
            echo "<p>O nome do aparelho é $nome.<p>"; 
            echo "<p>Seu consumo máximo é $consumo_watts W.<p>";
            echo "<p>Ele fica ligado por $horas horas no dia.<p>"; 
            echo "<p>Ele fica ligado por $dias dias no mês.<p>"; 
            echo "<p>O valor do kilowatt é R\$$kilowatt.<p>"; 
            echo "<p>O consumo diário é $consumo_diario W.<p>"; 
            echo "<p>O consumo mensal é $consumo_mensal W.<p>";
            echo "<p>O consumo do aparelho é R\$$consumo_em_real.<p>";
    
            if($consumo_em_real < 5){
                echo "<p>Portanto, a categoria de consumo é considerada <b>baixa<b>.<p>";
            }
            elseif($consumo_em_real < 10){
                echo "<p>Portanto, a categoria de consumo é considerada <b>moderada<b>.<p>";
            }
            else{
                echo "<p>Portanto, a categoria de consumo é considerada <b>elevada<b>.<p>";
            }
        }
       else{
           echo "<p>Não há aparelho eletrônico cadastrado para análise<p>";
           echo "<a href='index.php'>clique aqui para cadastrar o seu aparelho<a>";
       }
    ?>
 </body>
 </html>   
    
    