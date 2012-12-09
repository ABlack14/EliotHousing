<ul class="nav nav-pills">
    <center>
    <!-- links -->
    <a href="index.php">New Search</a>    
    <a href="favorite.php">Favorites</a>    
    <a href="logout.php">Log Out</a>    
    </center>
</ul>
<div>
    
    <table class="table table-striped">
            <?php
                // prints header
                print("<tr>");
                print("<th style='background-color:#87cefa'>" . "Number of rooms" . "</th>");      
                print("<th style='background-color:#87cefa'>" . "Suite1" . "</th>");
                print("<th style='background-color:#87cefa'>" . "Suite2" . "</th>");
                print("<th style='background-color:#87cefa'>" . "Suite3" . "</th>");
                print("<th style='background-color:#87cefa'>" . "Suite4" . "</th>");
                print("<th style='background-color:#87cefa'>" . "Common Room Size" . "</th>");
                print("<th style='background-color:#87cefa'>" . "Average Bedroom Size" . "</th>");
                print("</tr>");
                // prints cells of table
                if (empty($table))
                {
                    print("<tr>");
                    print("<td/td>");
                    print("<td/td>");
                    print("<td/td>");
                    print("<td/td>");
                    print("<td/td>"); 
                    print("<td/td>"); 
                    print("<td/td>"); 
                    print("</tr>");    
                }
                 
                else
                {
                // iterates over every row using information from $table
                foreach ($table as $t)
                    {
                        print("<tr>");
                        print("<td>" . $t[0] . "</td>");      
                        print("<td>" . $t[1] . "</td>");
                        print("<td>" . $t[2] . "</td>");
                        print("<td>" . $t[3] . "</td>");      
                        print("<td>" . $t[4] . "</td>");
                        print("<td>" . $t[5] . "</td>");
                        print("<td>" . $t[6] . "</td>");
                        print("</tr>");     
                    }
                }    
            ?>
        </table>    
</div>


