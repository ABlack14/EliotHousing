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
    else
    {
        $favorite_rows = query("SELECT suite_id FROM favorites WHERE user = ?", $_SESSION["id"]);
        // get out all the rooms and for each room look up all joing suites to add to the table
        
        $rows = query("SELECT * FROM favorites AS F
            INNER JOIN joining_suites AS J
            WHERE F.suite_id = J.id AND user= ?", $_SESSION["id"]);
        $n = $rows["0"]["n"];
        $table = [];
        

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
        }
        
        render("favorite_form.php", ["table" => $table]);
        
    }
?>
