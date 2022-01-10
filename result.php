<?php



if (isset($_SERVER["REQUEST_METHOD"])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["apa"]) && empty($_POST["katt"])) {
            
            echo "Du måste fylla i ett nummer!";
            exit;

        }if($_POST["apa"]) {
            $Apa = ($_POST["apa"]);
            echo "<br>" . $Apa . "st" . " apor";
            
        }if($_POST["katt"]) {
            $Katt = ($_POST["katt"]);
            echo "<br>" . $Katt . "st" . " katter";
            
        }if($_POST["hund"]) {
            $Hund = ($_POST["hund"]);
            echo "<br>" . $Hund . "st" . " hundar";
        }
    }
}
abstract class Animals {
    public $picture
    public $name
}
class Apa extends Animals{

}

class Katt extends Animals{

}

class Hund extends Animals{

}



?>

