<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modeling Class PHP</title>
</head>
<body>
    <?php
        require("./class/ModelingClass.class.php");

        $david = new ModelingClass('David',22,'Developer',1000);

        $david->Age = 33;

        $david->work('Web site', 100);

        echo '<pre>';
            var_dump($david);
        echo '</pre>';
    ?>
</body>
</html>
