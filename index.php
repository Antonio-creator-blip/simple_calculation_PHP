<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_POST)
    {
        switch($_POST["operazioni"]){
            case "somma":
                $risultato = $_POST["primo"] + $_POST["secondo"];
                break;
            case "sottrazione":
                $risultato = $_POST["primo"] - $_POST["secondo"];
                break;
            case "moltiplicazione":
                $risultato = $_POST["primo"] * $_POST["secondo"];
                break;
            case "divisione":
                $risultato = $_POST["primo"] / $_POST["secondo"];
                break;
            case "potenza":
                $risultato = $_POST["primo"] ** $_POST["secondo"];
                break;

        }
        echo "Il risultato : $risultato" ;
    }
    else
    {
    echo "<FORM ACTION= " . $_SERVER['PHP_SELF'] ." METHOD='POST'>";
    ?>
    
    <TABLE >
            <TR>
                <TD>Primo numero: <INPUT type="text" NAME="primo"></TD> 
            </TR><br>
            <TR>
                <TD>Secondo numero: <INPUT type="text" NAME="secondo"></TD> 
            </TR><br>
            <TR>
                <TD>Operatore : <select name="operazioni" id="operazioni">
                    <option value="somma">Somma</option>
                    <option value="sottrazione">Sottrazione</option>
                    <option value="moltiplicazione">Moltiplicazione</option>
                    <option value="divisione">Divisione</option>
                    <option value="potenza">Potenza</option>
                </select></TD>
                
            </TR>
        </TABLE>
        <INPUT type="submit" value="Invia">
        </FORM>
    <?php
    }
    ?>
</body>
</html>