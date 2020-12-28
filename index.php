<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=111, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form name="tempConvert" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <table>
            <tr>
                <td>Enter the value to convert:</td>
                <td><input type="text" id="inp" name="inp"></td>
            </tr>
            <tr>
                <td>Convert to:</td>
                <td><select name="degree" id="degree">
                    <option value="Select" disabled>Select conversion</option>
                    <option value="fahrenheit">Fahrenheit</option>
                    <option value="celcius">Celcius</option>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" name="submit" class="btn"></td>
                <td><input type="reset" value="Reset" onclick="fn()" class="btn"></td>
            </tr>
        </table>
    </form>

    <?php 
        if(isset($_POST['submit'])){
            $inp = $_POST['inp'];
            $degree = $_POST['degree'];

            function converter($inp, $degree){
                if($degree == 'celcius'){
                    $tempp = 5/9 * ($inp - 32);
                }
                else{
                    $tempp = (9*$inp/5) + 32;
                }
                return $tempp;
            
            }
            ?>
            <p>Result:  <?php echo converter($inp, $degree); ?></p>
            <?php
        
        }
     ?>
   
</body>
<script>
    function fn(){
        window.location.reload()
    }
</script>
</html>