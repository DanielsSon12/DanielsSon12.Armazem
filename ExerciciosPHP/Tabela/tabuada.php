<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <h3>Tabuada</h3>
    <hr>
    <main>
        <table border="1px">
            <tbody>
                <?php
                    $limite = 10;
                    $linha;
                    $coluna;
                    echo "                
                        <tr>
                            <th  colspan='10'>
                                Tabuada de 10 gerada automaticamente com laço de     repetição com for
                            </th>
                        </tr>";

                    for ($linha = 1; $linha <= $limite; $linha++){
                        echo "<tr>";
                        for ($coluna = 1; $coluna <= $limite; $coluna++){
                            $valorColuna = ($linha*$coluna);
                            echo "<td>$valorColuna</td>";
                        }
                        echo "</tr>";
                    }
                ?>
                <?php
                    $limite = 10;
                    $linha;
                    $coluna;
                    echo "                
                        <tr>
                            <th  colspan='10'>
                                Tabuada de 10 gerada automaticamente com laço de     repetição com while
                            </th>
                        </tr>";

                    $linha = 1;
                    while ($linha <= $limite){
                        echo "<tr>";
                        $coluna = 1;
                        while ($coluna <= $limite){
                            $valorColuna = ($linha * $coluna);
                            echo "<td>$valorColuna</td>";
                            $coluna++;
                        }
                        echo "</tr>";
                        $linha++;
                    }                    
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>
