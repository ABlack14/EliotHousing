<ul class="nav nav-pills">
    <li><a href="index.php">New Search</a></li>
    <li><a href="favorite.php">Favorites</a></li>
    <li><a href="password.php">Change Password</a></li>
    <li><a href="logout.php">Log Out</a></li>
</ul>
<div>
    
    <table class="table table-striped">
            <?php
                // prints header
                print("<tr>");
                print("<th>" . "Number of rooms" . "</th>");      
                print("<th>" . "Suite1" . "</th>");
                print("<th>" . "Suite2" . "</th>");
                print("<th>" . "Suite3" . "</th>");
                print("<th>" . "Suite4" . "</th>");
                print("<th>" . "Common Room Size" . "</th>");
                print("<th>" . "Average Bedroom Size" . "</th>");
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
                foreach ($favorites as $f)
                    {
                        print("<tr>");
                        print("<td>" . $f["n"] . "</td>");      
                        print("<td>" . $f["suite1"] . "</td>");
                        print("<td>" . $f["suite2"] . "</td>");
                        print("<td>" . $f["suite3"] . "</td>");      
                        print("<td>" . $f["suite4"] . "</td>");
                        print("<td>" . $f["commonroom"] . "</td>");
                        print("<td>" . $f["averagebedroom"] . "</td>");
                        print("</tr>");     
                    }
                }    
            ?>
        </table>    
</div>


