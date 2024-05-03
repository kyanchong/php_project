<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- external css -->
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="book.css">
        <link rel="stylesheet" href="responsive.css">
        <!-- Bootstrap cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    </head>

    <style>
        table, td, th{
            border:1px solid #333;
            text-align: center;
            margin: auto;
        }
        th{
            background-color: ghostwhite;
        }
    </style>

    <body>
        <?php require ("nav.php") ?> 

        <div style="background-color: black; margin: auto">
            <br>
            <br>

            <div style="color:black;background-image:url('./img/6.jpg');height: 60px;background-attachment: fixed">
                <h1>My Booking</h1>
            </div>             
            <br>
            <br>
            <div class="myBooking">
                <form method="POST" action="action.php">
                    <table style = "width:80%; background-image:url('./img/6.jpg');; color:black; background-attachment: fixed">

                        <?php
                        echo "<tr>";
                        echo "<th> Book ID </th>";
                        echo "<th> Booker </th>";
                        echo "<th> Event </th>";
                        echo "<th> Number join </th>";
                        echo "<th> Book Date </th>";
                        echo "<th> Action </th>";
                        echo "</tr>";

                        $dbc = new mysqli("localhost", "root", "", "dance society"); //dbhost, name, password, dbname
                        $query = "SELECT * FROM booking";

                        if ($result = $dbc->query($query)) {
                            while ($row = $result->fetch_object()) {

                                printf("<tr>"
                                        . "<td>%s</td>"
                                        . "<td>%s</td>"
                                        . "<td>%s</td>"
                                        . "<td>%s</td>"
                                        . "<td>%s</td>"
                                        . "<td><input type='submit' name='Check' value='$row->BookID'></td>"  //input
                                        . "</tr>",
                                        $row->BookID,
                                        $row->Name,
                                        $row->Event,
                                        $row->NumberOfJoin,
                                        $row->DateOfBook);
                            }
                        }
                        ?>       
                    </table>
                    <br>
                    <div class="manageBook">
                        <a href='bookAdmin.php'>Manage booking</a>
                    </div>
                    <div style="font-size: 12px;color: lightgray;margin-left: 27px">
                        *only for admin*
                    </div>
                </form>
            </div>

            <br>
            <br>

        </div>

        <?php require("Footer.php") ?>

        <!-- carousel's javascirpt-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- footer design's javascirpt-->
        <script src="https://kit.fontawesome.com/c6d5d86863.js" crossorigin="anonymous"></script>
    </body>
</html>
