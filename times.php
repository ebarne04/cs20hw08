<!DOCTYPE html>
<html>
        <head> 
                <meta charset="utf-8">
                <title> PHP Practice </title>
                <style type="text/css"> 
                        h1 {
                                text-align: center;
                        }
                        #timestable {
                                background-color: lightblue;
                                font-family: georgia;
                                max-width: 300px;
                        }
                </style>
        </head>

                <body>
                        <h1>PHP Practice</h1>
                        <?php
                                function timesTable()
                                {

                                        $n = $_GET["n"];
                                        echo "<div id='timestable'>";
                                        echo "<div style = 'font-family:georia; font-size: 18px'> Times Table </div>";
                                        echo "<br/>";
                                        for ($i = 1; $i < 13; $i++)
                                                echo $i . "x" . $n . "=". ($i * $n). "<br/>";
                                        echo "<br/>";
                                        echo "</div>";
                                }

                                timesTable();
                        ?>
                </body>
        </head>
</html>