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
    
    query("INSERT INTO favorites (user, suite_id, n, suite1, suite2, suite3, suite4, commonroom, averagebedroom) 
           VALUES (?, ?, ?, ?, ?, ?, ?, ?)", $_SESSION["id"], $table[7], 
           $table[0], $table[1], $table[2], $table[3], $table[4], $table[5], $table[6]);
    $favorites = query("SELECT * FROM favorites");
    
    render("favorite_form.php", ["favorites" => $favorites]);
    
    redirect("/filter.php");
?>
