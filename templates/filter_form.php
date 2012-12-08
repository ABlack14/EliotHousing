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
           <input type="checkbox" id="all" checked="checked"><br/>
           <strong>Floor:</strong>
           <input type="checkbox" id="floor1" checked="checked" value="1"> 1 
           <input type="checkbox" id="floor2" checked="checked" value="2"> 2 
           <input type="checkbox" id="floor3" checked="checked" value="3"> 3 
           <input type="checkbox" id="floor4" checked="checked" value="4"> 4 
           <input type="checkbox" id="floor5" checked="checked" value="5"> 5<br/>
           <strong>Entryway:</strong> 
           <input type="checkbox" id="A" checked="checked" value="A"> A
           <input type="checkbox" id="B" checked="checked" value="B"> B 
           <input type="checkbox" id="C" checked="checked" value="C"> C 
           <input type="checkbox" id="D" checked="checked" value="D"> D 
           <input type="checkbox" id="E" checked="checked" value="E"> E 
           <input type="checkbox" id="F" checked="checked" value="F"> F 
           <input type="checkbox" id="G" checked="checked" value="G"> G 
           <input type="checkbox" id="H" checked="checked" value="H"> H 
           <input type="checkbox" id="I" checked="checked" value="I"> I 
           <input type="checkbox" id="J" checked="checked" value="J"> J 
           <input type="checkbox" id="K" checked="checked" value="K"> K 
           <input type="checkbox" id="L" checked="checked" value="L"> L 
           <input type="checkbox" id="M" checked="checked" value="M"> M 
           <input type="checkbox" id="N" checked="checked" value="N"> N 
           <input type="checkbox" id="O" checked="checked" value="O"> O
           <br/>
        </form>
    </div>
        <form action="favorite.php" method="post">
        <fieldset> 
        <table class="table table-striped" id="theTable">
            <?php
                // prints header
                print("<thead><tr>");
                print("<th>" . "Number of rooms" . "</th>");      
                print("<th>" . "Suite1" . "</th>");
                print("<th>" . "Suite2" . "</th>");
                print("<th>" . "Suite3" . "</th>");
                print("<th>" . "Suite4" . "</th>");
                print("<th>" . "Common Room Size" . "</th>");
                print("<th>" . "Average Bedroom Size" . "</th>");
                print("<th>" . "Add to Favorites" . "</th>");
                print("</tr></thead><tbody>");
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
                        print("<tr "); print("class= \"floor" . $t[8] . " " . $t[9] . "\" /tr>"); 
                        print("<td>" . $t[0] . "</td>");      
                        print("<td>" . $t[1] . "</td>");
                        print("<td>" . $t[2] . "</td>");
                        print("<td>" . $t[3] . "</td>");      
                        print("<td>" . $t[4] . "</td>");
                        print("<td>" . $t[5] . "</td>");
                        print("<td>" . $t[6] . "</td>");
                        ?>  
                        <td>
                        <div class="control-group">
                        <button type="submit" onclick="favorite( <?= $t[7] ?> )" class="btn">Add </button>
                       
                        </div>
                        </td>
                        </tr>
                        <?php
                    }
                }    
           ?>
           </tbody> 
        </table> 
        </fieldset>
        </form>   
</div>

<script>
    $(document).ready(function() {
        $(":checkbox").click(function() {
            var id = $(this).attr('id');
            
            if($(this).is(":checked")) {
                $("."+id).show();
                $(this).set_checked(false);                
            }else{
                $("."+id).hide();
                $(this).set_checked(true); 
            }
            
            return false;
        });
    }); 
    
   function favorite(id) {
    alert(id);
    $.ajax({
    type: 'POST',
    url: favorite.php,
    data: id,
    success: success(),
    });
    //query("INSERT INTO favorites (user, suite_id) VALUES (?, ?)", x, y); 
    }
    
    function success() {
    alert("Successfully added to favorites.");  
    }
</script>


