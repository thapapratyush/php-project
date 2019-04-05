<?php include("top.html"); ?>
<?php
    function validate_data(){
         if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!is_numeric($_POST["age"])) {
                echo "ERROR! Age should be a number.";
            }

            if (!in_array($_POST["personality_type"], [STJ, ISFJ,INFJ, INTJ, ISFP, INFP, INTP, ESTP, ESFP, ENFP, ENTP, ESTJ, ESFJ, ENFJ, ENTJ], true)) {
                echo "Error! Enter a Keirsey personality type!";
            }

            if (!is_numeric($_POST["max_seek_age"] || !is_numeric($_POST["min_seek_age"]))) { 
                echo "Error! The seeking age has to be a number.";
            }

            //implement name check
            //implement writing to server or file
        }

         
    }
?>

<?php include("bottom.html"); ?>