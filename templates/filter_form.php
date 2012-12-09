<div style="align:center">
<ul class="nav nav-pills">
    <center>
    <!-- links -->
    <a href="index.php">New Search</a>    
    <a href="favorite.php">Favorites</a>    
    <a href="logout.php">Log Out</a>    
    </center>
</ul>
</div>
<div>
    <div>
        <strong>Filter Results By:</strong>
        <form name="filters">
           <!-- checkboxes -->
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
        <fieldset> 
        <table class="table table-striped" id="theTable">
            <?php
                // prints table header
                print("<thead><tr>");
                print("<th style='background-color:#87cefa'>" . "Number of rooms" . "</th>");      
                print("<th style='background-color:#87cefa'>" . "Suite1" . "</th>");
                print("<th style='background-color:#87cefa'>" . "Suite2" . "</th>");
                print("<th style='background-color:#87cefa'>" . "Suite3" . "</th>");
                print("<th style='background-color:#87cefa'>" . "Suite4" . "</th>");
                print("<th style='background-color:#87cefa'>" . "Common Room Size" . "<img src='img/arrow.png' width='20' height='40' />" . "</th>");
                print("<th style='background-color:#87cefa'>" . "Average Bedroom Size" . "<img src='img/arrow.png' width='20' height='40' />" . "</th>");;
                print("<th style='background-color:#87cefa'>" . "Add Favorite" . "</th>");
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
                // prints table body with hidden classes
                foreach ($table as $t)
                    {
                        print("<tr "); print("class= \"floor" . $t[8] . " ");
                        if ($t[2]){ print($t[2][0] . " ");};
                        if ($t[3]){ print($t[3][0] . " ");};
                        if ($t[4]){ print($t[4][0] . " ");};
                        print($t[9] . "\" /tr>"); 
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
</div>

<script>
    // checkbox filter function
    $(document).ready(function() 
    {
        $(":checkbox").click(function() 
        {
            var id = $(this).attr('id');
            
            // show rows that correspond with a checked box
            if($(this).is(":checked")) 
            {
                $("."+id).show();
                $(this).set_checked(false);                
            }
            // hide rows that correspond to an unchecked box
            else
            {
                $("."+id).hide();
                $(this).set_checked(true); 
            }
            
            return false;
        });
    }); 
    
   // posts id of rooming option to favorite.php
   function favorite(id) 
   {
    $.ajax(
    {
        type: 'POST',
        url: 'favorite.php',
        data: {'id': id},
        success: success(),
    });
   }
    
    // Informs the user that the row was added to the favorite page
    function success() 
    {
        alert("Successfully added to favorites.");  
    }
    
    // function to sort the table
    $(function()
    {
        $("#theTable").tablesorter();
    });
    
</script>
