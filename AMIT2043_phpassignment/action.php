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
        table, th ,td {
            text-align: center;
            border:2px solid #333;
            margin: auto;
        }
        td, th{
            text-align: left;
        }
    </style>

    <body>
        <?php require ("nav.php") ?> 


        <div style="background-color: black;color:white">
            <br>
            <br>

            <div style="color:black;background-image:url('./img/6.jpg');height: 60px;background-attachment: fixed;">
                <h1>Action</h1>
            </div>  

            <br>
            <br>
            <div class="Action">
                <form method="POST" action="cancel.php">
                    <table style = "width: 40%;color:black;background-color: aliceblue;">

                        <?php
                        $dbc = new mysqli("localhost", "root", "", "dance society"); //dbhost, name, password, dbname
                        $query = "SELECT * FROM booking";

                        if (isset($_POST['Check'])) {
                            $bookId = $_POST['Check'];
                        }

                        if ($result = $dbc->query($query)) {
                            while ($row = $result->fetch_object()) {
                                if ($row->BookID == $bookId) {
                                    if ($row->Event == "CS") {
                                        $event = "Culture is Style";
                                    } else if ($row->Event == "DT") {
                                        $event = "Dance Together";
                                    } else if ($row->Event == "DW") {
                                        $event = "Dance Workshop";
                                    } else if ($row->Event == "ETR") {
                                        $event = "Ethereal";
                                    } else if ($row->Event == "SDC") {
                                        $event = "Sport Day Cheerleading";
                                    }

                                    echo "<tr>";
                                    echo "<th> Book ID </th>";
                                    echo "<td> $row->BookID </td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<th> Booker </th>";
                                    echo "<td> $row->Name </td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<th> Event </th>";
                                    echo "<td> $event </td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<th> Book Date </th>";
                                    echo "<td> $row->DateOfBook</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<th> Action </th>";
                                    echo "<td> Success </td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td class='cancel' colspan='2'><a href='#' name='cancel'>Cancel</a></td>";
                                    echo "<input type='hidden' name='cancel' value='$row->BookID'>";
                                    echo "</tr>";
                                }
                            }
                        }
                        ?>   
                    </table>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='book_list.php' style='color:red'>Back</a>
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
