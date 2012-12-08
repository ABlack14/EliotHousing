<div id="theData"><?php print json_encode($table) ?>
</div>

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
