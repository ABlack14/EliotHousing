<?php
    
    // configuration
    require("../includes/config.php");
    
    $insert = query("INSERT INTO favorites (suite_id, n, suite1, suite2, suite3, suite4, commonroom, averagebedroom) 
           VALUES (?, ?, ?, ?, ?, ?, ?, ?) WHERE suite_id = ?", $table[7], $table[1], $table[2], $table[3], 
           $table[4], $table[5], $table[6], $table[7]);
    $favorites = query("SELECT * FROM favorites");
    
    render("filter_form.php", ["favorites" => $favorites]);
?>
