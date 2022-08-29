<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Nomes</h1>
    <?php

$nome = ['Mateus','Marcos','Lucas','Joao'];
$capitulos = [28,16,24,21];

echo '<table border =1>';
echo '<tr><th>nomes</th></tr>';

for ($i=0; $i<4; $i++) {
    echo '<tr>';
    echo "<td>$nome[$i]</td>";
    echo '</tr>';
}
echo '</table>';
     
    ?>
</body>
</html>