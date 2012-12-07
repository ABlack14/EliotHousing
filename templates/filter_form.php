<form action="filter.php" method="post">  
<fieldset> 
    <ul class="nav nav-pills">
        <li><a href="index.php">New Search</a></li>
        <li><a href="favorite.php">Favorites</a></li>
        <li><a href="password.php">Change Password</a></li>
        <li><a href="logout.php">Log Out</a></li>
    </ul>

<div>
    <div>
        <strong>Filter Results By:</strong>
        <form name="filters">
           <strong>View All:</strong> 
           <input type="checkbox" name="filter" checked="checked" onchange="selectAll();" value=""><br/>
           <strong>Floor:</strong> 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> 1 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="2"> 2 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="3"> 3 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="4"> 4 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="5"> 5<br/>
           <strong>Entryway:</strong> 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> A 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> B 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> C 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> D 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> E 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> F 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> G 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> H 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> I 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> J 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> K 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> L 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> M 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> N 
           <input type="checkbox" name="filter" checked="checked" onchange="load();" value="1"> O<br/>
           <br/>
        </form>
    </div>
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
                print("<th>" . "Add to Favorites" . "</th>");
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
                        //<select name = "$i">
                        print("<tr>");
                        print("<td>" . $t[0] . "</td>");      
                        print("<td>" . $t[1] . "</td>");
                        print("<td>" . $t[2] . "</td>");
                        print("<td>" . $t[3] . "</td>");      
                        print("<td>" . $t[4] . "</td>");
                        print("<td>" . $t[5] . "</td>");
                        print("<td>" . $t[6] . "</td>");
                        //</select>
                        ?>  
                        <td>
                        <div class="control-group">
                        <button type="submit" class="btn">Add</button>
                        </div>
                        </td>
                        </tr>
                        <?php 
                    }
                }    
           ?> 
        </table>    
</div>
</form>
</fieldset>
