<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="03-tabuada.php">
        Número:
        <select onselect="1" name="val">
            <?php
                $n = 0;

                while ($n < 10){
                    $n++;
                    echo "<option>$n</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada"/>
    </form>

</div>
</body>
</html>
 