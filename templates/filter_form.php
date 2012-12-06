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
                foreach ($table as $t)
                    {
                        print("<tr>");
                        print("<td>" . $t["n"] . "</td>");      
                        print("<td>" . $t["name1"] . "</td>");
                        print("<td>" . $t["name2"] . "</td>");
                        print("<td>" . $t["name3"] . "</td>");      
                        print("<td>" . $t["name4"] . "</td>");
                        print("<td>" . $t["crm"] . "</td>");
                        print("<td>" . $t["avg"] . "</td>");
                        print("</tr>");     
                    }
                }    
            ?>
        </table>    
</div>
