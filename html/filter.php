<?php

    $n = //n if junior, n+1 if senior
    
    $rows = query("SELECT * FROM joining_suites WHERE n = ?", $n);
    $rows2  = query("SELECT * FROM rooms");

    $id = $rows["id"];
    $suite1 = $rows2["suite1"];
    $avgroom1 = query["SELECT averagebedroom FROM rooms WHERE id = ?", $suite1];
    $crm1 = query["SELECT commonroom FROM rooms WHERE id = ?", $suite1];
    $suite2 = $rows2["suite2"];
    $avgroom2 = query["SELECT averagebedroom FROM rooms WHERE id = ?", $suite2];
    $crm2 = query["SELECT commonroom FROM rooms WHERE id = ?", $suite2];
    $suite3 = $rows2["suite3"];
    $avgroom3 = query["SELECT averagebedroom FROM rooms WHERE id = ?", $suite3];
    $crm3 = query["SELECT commonroom FROM rooms WHERE id = ?", $suite3];
    $suite4 = $rows2["suite4"];
    $avgroom4 = query["SELECT averagebedroom FROM rooms WHERE id = ?", $suite4];
    $crm4 = query["SELECT commonroom FROM rooms WHERE id = ?", $suite4];
    
    foreach ($id as $i)
    {
        if ($rows["suite2"] = NULL)
        {
            $avg = $avgroom1;
            $crm = $crm1;
        }
        if ($rows["suite2"] != NULL && $rows["suite3"] = NULL)
        {
            $avg = ($avgroom1+$avgroom2)/2;
            $crm = max($crm1, $crm2);
        }
        if ($rows["suite2"] != NULL && $rows["suite3"] != NULL && $rows["suite4"] = NULL)
        {
            $avg = ($avgroom1+$avgroom2+$avgroom3)/3;
            $crm = max($crm1, $crm2, $crm3);
        }
        if ($rows["suite4"] = NULL)
        {
            $avg = ($avgroom1+$avgroom2+$avgroom3+$avgroom4)/4;
            $crm = max($crm1, $crm2, $crm3, $crm4);
        }
    }
    
    $suite1 = $rows["suite1"];
    $suite2 = $rows["suite2"];
    $suite3 = $rows["suite3"];
    $suite4 = $rows["suite4"];
    
    $table[] = [$n, $suite1, $suite2, $suite3, $suite4, $crm, $avg);
    
    render("filter_form.php", "table" => $table);
    
?>
