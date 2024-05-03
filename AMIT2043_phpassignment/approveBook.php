<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>

        <div class='w3-container w3-content w3-padding-64' style=max-width:900px>

            <from method="POST" action="approveBook.php">
                <div class='w3-wide w3-center'>
                    <?php
                    echo "<h2>Comfirm to approve the booking?</h2>";
                    echo "<div>";
                    echo "<input type='submit' name='yes' value='YES' class='w3-button w3-black w3-padding-large w3-large w3-margin-top'>";
                    echo "&nbsp;";
                    echo "<input type='submit' name='no' value='NO' class='w3-button w3-black w3-padding-large w3-large w3-margin-top'>";
                    echo "</div>";
                    ?>    
                </div>
            </from>
            <br>
            <br>
            <div class="w3-button w3-padding-large w3-large w3-margin-top">
                <a href="manageBooking.php">Back</a>
            </div>
        </div>
    </body>
</html>
