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
    
    <body>
        <?php require ("nav.php") ?> 


        <div style="background-color: black;color: white; background-attachment: fixed">
            <br>            
            <br>

            <div id="title" style="color:black;background-image:url('./img/6.jpg');height: 100px;background-attachment: fixed">
                <h1>The Movement of Art</h1>
                <p>enjoying the essence of dance as a kind of art</p>
            </div>     

            <br>
            <br>

            <div class="nabar">
                <div class="dropdown">
                    <button class="dropbtn">-CHOOSE AN EVENT-
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="booking.php">Culture is Style</a>
                        <a href="bookEvent2.php">Dance Together</a>
                        <a href="bookEvent3.php">Dance Workshop</a>                        
                        <a href="#">Ethereal</a>
                        <a href="bookEvent5.php">Sport Day Cheering</a>
                    </div>
                </div> 
            </div>

            <br>
            <br>
            <br>
            <br>

            <div class="flex-container">
                <div style="background-color: darkred;width: 60%;padding: 30px 30px">
                    <table>
                        <tr>
                            <th style = 'text-align: center' colspan = '2'><h1>Ethereal</h1></th>
                        </tr>
                        <tr>
                            <td colspan='2'><h5>K-pop, Hip-Hop, Popping, Breaking competition</h5></td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>: Dances</td>
                        </tr>
                        <tr>
                            <td>Event Date</td>
                            <td>: 11 Nov 2022</td>
                        </tr>
                        <tr>
                            <td>Venue</td>
                            <td>: TARUC Main Hall</td>
                        </tr>
                    </table>
                </div>

                <div>
                    <form method="POST" action="validationBook.php">

                        <table>
                            <tr>
                                <th colspan='2'>
                                    <h3>Book Event</h3>
                                </th>
                            </tr>
                            <tr>
                                <td>User Name :</td>
                                <td><input type="text" name="name" placeholder="Name" maxlenght="30" required></td>
                            </tr>                        
                            <tr>
                                <td colspan=2><input type="text" name="numberOfMember" placeholder="Number of member" required style="width: 300px;margin-top: 15px"></td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                    <textarea name="remark" style="width: 300px" placeholder="User Remark.."></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="book" value="book now">
                                </td>
                                <td>
                                    <input type="reset" name="Reset" value="reset">
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="event" value="ETR">
                    </form>
                </div>
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