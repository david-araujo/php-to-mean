<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Obeject Interation</title>
</head>
<body>
    <?php
        //Old school way to require classes.
        //require('./class/Worker.class.php');
        //require('./class/Company.class.php');

        //Autoload Classes
        require_once("./includes/Config.inc.php");
        //$teste = new Test;

        $david = new Worker('David', 25);
        $thiago = new Worker('Thiago', 32);

        $ibm = new Company('IBM');
        $ibm->contract($david, 1800, 'Web Builder');
        $ibm->pay();
        $ibm->promote('Scrum Developer',2900);
        $ibm->pay();
        //$ibm->dismiss(300);

        $ibm->contract($thiago, 6000, 'FullStack Developer');
        $ibm->pay();

        $ibm->setEmployee($david);
        $ibm->pay();
        $ibm->dismiss(6000);


        echo '<pre>';
            var_dump($david, $thiago, $ibm);
        echo '</pre>';
    ?>
</body>
</html>
