<?php
    
    // configuration
    require("../includes/config.php");
    
    
    
    if ($_POST["Year"] == 1)
        $n = $_POST["Group_Size"];
    else if ($_POST["Year"] == 2)
        $n = $_POST["Group_Size"] + 1;
    
    $rows = query("SELECT * FROM joining_suites WHERE n = ?", $n);
    $rows2 = query("SELECT * FROM suites");
    $table = [];
    $counter = 0;

    foreach ($rows as $row)
    {   
        $id = $row["id"];
        $floor = "";
        $entry = "";
        foreach ($rows2 as $r)
        {
            if($r["id"] == $id)
            {
                $floor = $r["floor"];
                $entry = $r["entryway"];
            }    
        }
        
        if ($row["suite2"] == 0 && $row["suite1"] != 0)
         {    
            $suite1 = $row["suite1"];
            
            $id1 = query("SELECT * FROM suites WHERE id = ?", $suite1);
            
            $name1 = "{$id1[0]['entryway']}{$id1[0]['number']}";
            $name2 = NULL;
            $name3 = NULL;
            $name4 = NULL;
            
            $crm = $id1[0]["commonroom"];
            
            $avg = $id1[0]["averagebedroom"];
     
            $table[] = [$n, $name1, $name2, $name3, $name4, $crm, $avg, $id, $floor, $entry];
        }
        
        if ($row["suite3"] == 0 && $row["suite2"] != 0)
        {    
            $suite1 = $row["suite1"];
            $suite2 = $row["suite2"];
            
            $id1 = query("SELECT * FROM suites WHERE id = ?", $suite1);
            $id2 = query("SELECT * FROM suites WHERE id = ?", $suite2);
            
            $name1 = "{$id1[0]['entryway']}{$id1[0]['number']}";
            $name2 = "{$id2[0]['entryway']}{$id2[0]['number']}";
            $name3 = NULL;
            $name4 = NULL;
            
            $crm = max($id1[0]["commonroom"],$id2[0]["commonroom"]);
            
            $avg = round((($id1[0]["averagebedroom"]*$id1[0]["n"])+($id2[0]["averagebedroom"]*$id2[0]["n"]))/$n);
     
            $table[] = [$n, $name1, $name2, $name3, $name4, $crm, $avg, $id, $floor, $entry];
        }
        
        if ($row["suite4"] == 0 && $row["suite3"] != 0)
        {    
            $suite1 = $row["suite1"];
            $suite2 = $row["suite2"];
            $suite3 = $row["suite3"];
            
            $id1 = query("SELECT * FROM suites WHERE id = ?", $suite1);
            $id2 = query("SELECT * FROM suites WHERE id = ?", $suite2);
            $id3 = query("SELECT * FROM suites WHERE id = ?", $suite3);
            
            $name1 = "{$id1[0]['entryway']}{$id1[0]['number']}";
            $name2 = "{$id2[0]['entryway']}{$id2[0]['number']}";
            $name3 = "{$id3[0]['entryway']}{$id3[0]['number']}";
            $name4 = NULL;
            
            $crm = max($id1[0]["commonroom"],$id2[0]["commonroom"],$id3[0]["commonroom"]);
            
            $avg = round((($id1[0]["averagebedroom"]*$id1[0]["n"])+($id2[0]["averagebedroom"]*$id2[0]["n"])+($id3[0]["averagebedroom"]
              *$id3[0]["n"]))/$n);
     
            $table[] = [$n, $name1, $name2, $name3, $name4, $crm, $avg, $id, $floor, $entry];
        }
        
        if ($row["suite4"] != 0)
        {    
            $suite1 = $row["suite1"];
            $suite2 = $row["suite2"];
            $suite3 = $row["suite3"];
            $suite4 = $row["suite4"];
            
            $id1 = query("SELECT * FROM suites WHERE id = ?", $suite1);
            $id2 = query("SELECT * FROM suites WHERE id = ?", $suite2);
            $id3 = query("SELECT * FROM suites WHERE id = ?", $suite3);
            $id4 = query("SELECT * FROM suites WHERE id = ?", $suite4);
            
            $name1 = "{$id1[0]['entryway']}{$id1[0]['number']}";
            $name2 = "{$id2[0]['entryway']}{$id2[0]['number']}";
            $name3 = "{$id3[0]['entryway']}{$id3[0]['number']}";
            $name4 = "{$id4[0]['entryway']}{$id4[0]['number']}";
            
            $crm = max($id1[0]["commonroom"],$id2[0]["commonroom"],$id3[0]["commonroom"],$id4[0]["commonroom"]);
            
            $avg = round((($id1[0]["averagebedroom"]*$id1[0]["n"])+($id2[0]["averagebedroom"]*$id2[0]["n"])+($id3[0]["averagebedroom"]
              *$id3[0]["n"])+($id4[0]["averagebedroom"]*$id4[0]["n"]))/$n);
              
            $table[] = [$n, $name1, $name2, $name3, $name4, $crm, $avg, $id, $floor, $entry];
        }
        $counter++;
    }
    
    render("filter_form.php", ["table" => $table, "counter" => $counter]);

?>
