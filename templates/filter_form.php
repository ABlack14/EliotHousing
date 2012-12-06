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
                foreach ($array as $a)
                    {
                        print("<tr>");
                        print("<td>" . $a["symbol"] . "</td>");      
                        print("<td>" . $a["name"] . "</td>");
                        print("<td>" . $a["shares"] . "</td>");
                        print("<td>" . "$" . number_format($a["price"],2) . "</td>");
                        print("<td>" . "$" . number_format($a["total"],2) . "</td>");      
                        print("</tr>");
                        
                    }
                }
                // print cash
                print("<tr>");
                print("<td>" . "CASH" . "</td>");
                print("<td/td>");
                print("<td/td>");
                print("<td/td>");
                print("<td>" . "$" . number_format($cash,2) . "</td>"); 
                print("</tr>");    
            ?>
        </table>    

</div>
