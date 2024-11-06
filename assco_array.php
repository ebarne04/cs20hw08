<!DOCTYPE html>
<html>
        <head> 
                <meta charset="utf-8">
                <title> PHP Practice </title>
                <style type="text/css"> 
                #hours {
                        background-color: lightpink;
                        font-family: georgia;
                        max-width: 300px;
                }
                #timestable {
                        background-color: lightblue;
                        font-family: georgia;
                        max-width: 300px;
                }

                #title {
                        text-align: center;
                        font-size: 18px;
                }

                </style>
        </head>

                <body>
                        <h1 style= 'text-align: center; font-family:georgia'>PHP Practice</h1>
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

                        function associativeArr()
                        {
                                $officeHrs = array("Sunday"=>"1pm-3pm", "Monday"=>"10am-12pm", "Tuesday"=>"11am-1pm", 
                                "Wednesday"=>"9am-11am", "Thursday"=>"4pm-5pm", "Friday"=>"9am-1pm", "Saturday"=>"10am-2pm");

                                echo "<div id='hours'>";
                                echo "<div id= 'title'> Office Hours </div>";
                                echo "<br/>";
                                foreach ($officeHrs as $officeHrs=>$hours) {
                                        echo "<div id='$officeHrs'>";
                                        echo "$officeHrs: $hours <br/>";
                                        echo "</div>";
                                }
                                echo "</div>";
                        }
                        associativeArr();
                        ?>
                </body>
        </head>
</html>