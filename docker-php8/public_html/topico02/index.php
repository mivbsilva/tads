<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="processa.php?id=<?=$_POST["userId"]?>" method="post">
        <input type="text" name="nome"><br>
        <input type="radio" name="estCivil" value="Solteiro">Solteiro <br>
        <input type="radio" name="estCivil" value="Casado">Casado<br>
        <select name="selEstado">
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
            <option value="SP">São Paulo</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="BA">Bahia</option>
        </select><br>

        <!-- <select name="mes">
            <option value="Janeiro">1</option>
            <option value="Fevereiro">2</option>
            <option value="Março">3</option>
            <option value="Abril">4</option>
            <option value="Maio">5</option>
            <option value="Junho">6</option>
            <option value="Julho">7</option>
            <option value="Agosto">8</option>
            <option value="Setembro">9</option>
            <option value="Outubro">10</option>
            <option value="Novembro">11</option>
            <option value="Dezembro">12</option>
        </select><br> -->

        <input type="checkbox" name="extras[]" value="Garagem"">Garagem<br>
        <input type="checkbox" name="extras[]" value="Piscina"">Piscina<br>
        <input type="checkbox" name="extras[]" value="Jardim"">Jardim<br>
        
        <!-- 
        <input type="hidden" name="token" value="123456">
        <input type="hidden" name="id" value=<? //isset($_POST["userId"])?$_POST["userId"]:"" ?>">        
        <input type="hidden" name="id" value="<? //$_POST["userId"]??"" ?>">
        -->


        <input type="submit" value="Enviar">
    </form>
</body>
</html>