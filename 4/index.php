<!DOCTYPE html>
<html>
<head>
    <title>Расчет затрат на посев</title>
    <link href="jqui/jquery-ui.css" rel="stylesheet">
<script src="js/jquery-3.7.1.js"></script>
<script src="jqui/jquery-ui.js"></script>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="form"> 
    <form method="POST" action="">
    <div class="form-group">
        <label for="area">Площадь засева (в м²):</label>
        </div>
        <div class="form-group">
        <input type="text" name="area" id="area">
        </div>
        <button type="submit">Рассчитать</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $area = $_POST["area"];
            
            $file = fopen("norms.txt", "a+");
            if ($file) {
                $line = fgets($file);
                list($landNorm, $seedsNorm) = explode(";", $line);
                fclose($file);
                
                $landAmount = $landNorm * $area;
                $seedsAmount = $seedsNorm * $area;
                
                echo "<p>Для посева на площади $area м² требуется:</p>";
                echo "<p>Земли: $landAmount кг</p>";
                echo "<p>Семян: $seedsAmount упаковок</p>";
            } else {
                echo "Ошибка при чтении файла";
            }
        }
    ?>
    </div> 
</body>
</html>
