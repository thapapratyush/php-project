<?php include("top.html"); ?>
<?php
    $logs = "";
    function validate_data(){
         if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!is_numeric($_POST["age"])) {
                $logs += "ERROR! Age should be a number. \n";
            }

            if (!in_array($_POST["personality_type"], [STJ, ISFJ,INFJ, INTJ, ISFP, INFP, INTP, ESTP, ESFP, ENFP, ENTP, ESTJ, ESFJ, ENFJ, ENTJ], true)) {
                $logs += "Error! Enter a Keirsey personality type! \n";
            }

            if (!is_numeric($_POST["max_seek_age"] || !is_numeric($_POST["min_seek_age"]))) { 
                $logs += "Error! The seeking age has to be a number. \n";
            }

            //implement name check
            //implement writing to server or file
        }
    }
    validate_data();
    if ($logs !== ""){          //if no errors connect to database
        $db = new PDO("mysql:dbname=singles;host=localhost", "root", "toor");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $personality_type = $_POST["personality_type"];
        $os = $_POST["os"];
        $seeking_gender = $_POST["seeking_gender"];
        $min_age = $_POST["min_age"];
        $max_age = $_POST["max_age"];
    }
?>

<?php include("bottom.html"); ?>