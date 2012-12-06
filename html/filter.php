<?php
    
    // configuration
    require("../includes/config.php");
    
    if ($_POST["Year"] = 1)
        $n = $_POST["Group_Size"];
    else if ($_POST["Year"] = 2)
        $n = $_POST["Group_Size"] + 1;
    
    $rows = query("SELECT * FROM joining_suites WHERE n = ?", $n);
    $counter = 0;
    $table = [];

    foreach ($rows as $row)
    {
        $counter++;
           
        if ($row["suite3"] = NULL && $row["suite2"] != NULL)
         {    
            $suite1 = $row["suite1"];
            
            $id1 = query("SELECT * FROM suites WHERE id = ?", $suite1);
            
            $name1 = "{$id1["entryway"]}{$id1["number"]}";
            $name2 = NULL;
            $name3 = NULL;
            $name4 = NULL;
            
            $crm = $id1["commonroom"];
            
            $avg = $id1["averagebedroom"];
     
           $table[$counter] = [$n, $name1, $name2, $name3, $name4, $crm, $avg];
        }
        
        if ($row["suite3"] = NULL && $row["suite2"] != NULL)
        {    
            $suite1 = $row["suite1"];
            $suite2 = $row["suite2"];
            
            $id1 = query("SELECT * FROM suites WHERE id = ?", $suite1);
            $id2 = query("SELECT * FROM suites WHERE id = ?", $suite2);
            
            $name1 = "{$id1["entryway"]}{$id1["number"]}";
            $name2 = "{$id2["entryway"]}{$id2["number"]}";
            $name3 = NULL;
            $name4 = NULL;
            
            $crm = max($id1["commonroom"],$id2["commonroom"]);
            
            $avg = ((($id1["averagebedroom"]*$id1["n"])+($id2["averagebedroom"]*$id2["n"]))/$n);
     
            $table[$counter] = [$n, $name1, $name2, $name3, $name4, $crm, $avg];
        }
        
        if ($row["suite4"] = NULL && $row["suite3"] != NULL)
        {    
            $suite1 = $row["suite1"];
            $suite2 = $row["suite2"];
            $suite3 = $row["suite3"];
            
            $id1 = query("SELECT * FROM suites WHERE id = ?", $suite1);
            $id2 = query("SELECT * FROM suites WHERE id = ?", $suite2);
            $id3 = query("SELECT * FROM suites WHERE id = ?", $suite3);
            
            $name1 = "{$id1["entryway"]}{$id1["number"]}";
            $name2 = "{$id2["entryway"]}{$id2["number"]}";
            $name3 = "{$id3["entryway"]}{$id3["number"]}";
            $name4 = NULL;
            
            $crm = max($id1["commonroom"],$id2["commonroom"],$id3["commonroom"]);
            
            $avg = ((($id1["averagebedroom"]*$id1["n"])+($id2["averagebedroom"]*$id2["n"])+($id3["averagebedroom"]
              *$id3["n"]))/$n);
     
           $table[$counter] = [$n, $name1, $name2, $name3, $name4, $crm, $avg];
        }
        
        if ($row["suite4"] != NULL)
        {    
            $suite1 = $row["suite1"];
            $suite2 = $row["suite2"];
            $suite3 = $row["suite3"];
            $suite4 = $row["suite4"];
            
            $id1 = query("SELECT * FROM suites WHERE id = ?", $suite1);
            $id2 = query("SELECT * FROM suites WHERE id = ?", $suite2);
            $id3 = query("SELECT * FROM suites WHERE id = ?", $suite3);
            $id4 = query("SELECT * FROM suites WHERE id = ?", $suite4);
            
            $name1 = "{$id1['entryway']}{$id1['number']}";
            $name2 = "{$id2['entryway']}{$id2['number']}";
            $name3 = "{$id3['entryway']}{$id3['number']}";
            $name4 = "{$id4['entryway']}{$id4['number']}";
            
            $crm = max($id1["commonroom"],$id2["commonroom"],$id3["commonroom"],$id4["commonroom"]);
            
            $avg = ((($id1["averagebedroom"]*$id1["n"])+($id2["averagebedroom"]*$id2["n"])+($id3["averagebedroom"]
              *$id3["n"])+($id4["averagebedroom"]*$id4["n"]))/$n);
              
            $table[$counter] = [$n, $name1, $name2, $name3, $name4, $crm, $avg];
        }
        
    }
    
    render("filter_form.php", ["table" => $table]);
    
?>
