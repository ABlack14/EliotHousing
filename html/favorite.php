<?php
    
    // configuration
    require("../includes/config.php");
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //save suite id
        $new_suite = $_POST["id"];
        //get user info
        $user = $_SESSION["id"];
        //add favorite to database
        query("INSERT INTO favorites (user, suite_id) VALUES (?, ?)", $user, $new_suite); 
    }
    
    
    $rows = query("SELECT * FROM joining_suites WHERE id = ?", $new_suite);
    $table = [];
    $counter = 0;

    foreach ($rows as $row)
    {   
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
     
            $table[] = [$n, $name1, $name2, $name3, $name4, $crm, $avg];
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
     
            $table[] = [$n, $name1, $name2, $name3, $name4, $crm, $avg];
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
     
            $table[] = [$n, $name1, $name2, $name3, $name4, $crm, $avg];
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
              
            $table[] = [$n, $name1, $name2, $name3, $name4, $crm, $avg];
        }
        $counter++;
    }
    
    render("favorite_form.php", ["table" => $table]);
    
    /* or 
    query("INSERT INTO favorites (user, suite_id, n, suite1, suite2, suite3, suite4, commonroom, averagebedroom) 
           VALUES (?, ?, ?, ?, ?, ?, ?, ?)", $user, $new_suite, $table[1], $table[2], $table[3], $table[4], 
           $table[5], $table[6]);
    $favorites = query("SELECT * FROM favorites");
    
    render("favorite_form.php", ["favorites" => $favorites]); */
    
    redirect("/filter.php");
?>
