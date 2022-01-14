<?php 
require_once "includes/functions.php";
$gases = letsGetGas();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Budgeting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
    <!-- Form layout -->
    
    <form class="border d-flex flex-column p-3 w-25" method="post">
        <div class="form-group">
        <h3>Super cool gas budget tool</h3>
        <label for="mpg">Your vehicle's miles per gallon:</label><br>
        <input type="text" name="mpg" placeholder="Enter Value" id='mpg'><br>
        <label for="commute">Miles you drive per week:</label><br>
        <input type="text" name="commute" placeholder="Enter Value" id="commute"><br>
        <label for="groceries">How much you spend on groceries per week:</label><br>
        <input type="text" name="groceries" placeholder="Enter value" id="groceries"><br>
        </div>
        
        <!-- Fuel select -->
        
        <div class="form-select">
        <p>Please select your Fuel Grade: </p>
        <select name="fuelgrade">
            
            <option value=""></option>
            <?php
            foreach($gases as $price => $quality):
            ?>
                <option value="<?=$price?>"><?=$quality?></option>
                <?php endforeach; ?>
        
            <!-- <option>87 Octane</option>
            <option>89 Octane</option>
            <option>92 Octane</option> -->
        </select>
        </div><br>
        <div class="button-select">
        <button name="submit" value="submit" type="submit">Calculate!</button>
        </div><br>
        <p>Amount you should budget weekly for gas:</p>
        
        <!-- PHP section where gas prices are assigned and calculations are...calculated -->
        
        <?php handlesubmission(); ?>


    </form>
    
   
</body>
</html>