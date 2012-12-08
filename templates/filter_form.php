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
           <input type="checkbox" id="floor1" onchange=printTable() checked="checked" value="1"> 1 
           <input type="checkbox" id="floor2" onchange=printTable() checked="checked" value="2"> 2 
           <input type="checkbox" id="floor3" onchange=printTable() checked="checked" value="3"> 3 
           <input type="checkbox" id="floor4" onchange=printTable() checked="checked" value="4"> 4 
           <input type="checkbox" id="floor5" onchange=printTable() checked="checked" value="5"> 5<br/>
           <strong>Entryway:</strong> 
           <input type="checkbox" id="a" onchange=printTable() checked="checked" value="A"> A 
           <input type="checkbox" id="b" onchange=printTable() checked="checked" value="B"> B 
           <input type="checkbox" id="c" onchange=printTable() checked="checked" value="C"> C 
           <input type="checkbox" id="d" onchange=printTable() checked="checked" value="D"> D 
           <input type="checkbox" id="e" onchange=printTable() checked="checked" value="E"> E 
           <input type="checkbox" id="f" onchange=printTable() checked="checked" value="F"> F 
           <input type="checkbox" id="g" onchange=printTable() checked="checked" value="G"> G 
           <input type="checkbox" id="h" onchange=printTable() checked="checked" value="H"> H 
           <input type="checkbox" id="i" onchange=printTable() checked="checked" value="I"> I 
           <input type="checkbox" id="j" onchange=printTable() checked="checked" value="J"> J 
           <input type="checkbox" id="k" onchange=printTable() checked="checked" value="K"> K 
           <input type="checkbox" id="l" onchange=printTable() checked="checked" value="L"> L 
           <input type="checkbox" id="m" onchange=printTable() checked="checked" value="M"> M 
           <input type="checkbox" id="n" onchange=printTable() checked="checked" value="N"> N 
           <input type="checkbox" id="o" onchange=printTable() checked="checked" value="O"> O
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
                        print("<tr ") print("class= 
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
                        <button type="submit" onclick="window.location='favorite.php?
                        <?php echo "id=".$t[7] ?>'" class="btn">Add </button>
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
<div id="theData"><?php print json_encode($table) ?></div>

<script>
    // hide and get the data from the server
    $("#theData").hide();
    var dataRaw = $("#theData").html();
    var data = $.parseJSON(dataRaw);
    
    // function to print our table
    function printTable(event){
        var table = $("#theTable");
        // clear the body
        $(table).find("tbody").html("");
        // build a new body
        var newTableHtml = ""
        for(i = 0; i < data.length; i++){
            var row = data[i];
            // check to make sure fits all the filters
            console.log(row);
            var entryway1 = row[1][0];
            if (row[2][0] != NULL)
                var entryway2 = row[2][0];
            else
                entryway2 = 0;
            var entryway3 = row[3][0];
            var entryway4 = row[4][0];
            var theFloor = row[1][1];
            if (($("#floor1").checked() && $("#floor1").value() == theFloor) ||
                ($("#floor2").checked() && $("#floor2").value() == theFloor) ||
                ($("#floor3").checked() && $("#floor3").value() == theFloor) ||
                ($("#floor4").checked() && $("#floor4").value() == theFloor) ||
                ($("#floor5").checked() && $("#floor5").value() == theFloor) ||
            /*|| $("#floor2" + theFloor).checked() 
            || $("#floor3" + theFloor).checked() || $("#floor4" + theFloor).checked() || 
            $("#floor5" + theFloor).checked() || ($("#a" + entryway1).checked() 
            || $("#a" + entryway2).checked() || $("#a" + entryway3).checked() || $("#a" + 
            entryway4).checked())*/)
            {
                var thisRowHtml = "<tr><td>" + row[0] + "</td><td>" + row[1] + 
                    "</td><td>" + row[2] + "</td><td>" + row[3] + "</td><td>" + row[4] + 
                    "</td><td>" + row[5] + "</td><td>" + row[6] + "</td><td>" + 
                    "<div class='control-group'><button type='submit'" +
                    + "onclick='window.location=" + '"favorite.php?id=' + row[7] + '"' + "'" 
                    + "class='btn'>" + "Add</button></td></tr>";
                newTableHtml = newTableHtml + thisRowHtml;
            }
        
        $(table).find("tbody").html(newTableHtml);      
    }
    
    
    // click handler and initial print
    $(function()
    {
       $(".filter").click(function(event){printTable(event)});
       printTable();
    })
    
    }
</script>
