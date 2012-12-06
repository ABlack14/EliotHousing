<?php

   // configuration
    require("../includes/config.php");
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //check for username
        if (empty($_POST["username"]))
        {
            //if empty, ask user to enter
            apologize("Please enter username.");
        }
        //check for password
        else if (empty($_POST["password"]))
        {
            //if empty, ask user to enter
            apologize("Please enter password.");
        }
        //check for confirmation of password
        else if (empty($_POST["confirmation"]))
        {   
            //if empty, ask user to enter
            apologize("Please confirm password.");
        }
        //check if password and confirmation match
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            //if not, notify user
            apologize("Passwords do not match!");
        }
        
        //add user to database    
        $result = query("INSERT INTO users (username, hash) VALUES(?, ?)",
$_POST["username"], crypt($_POST["password"]));
        if ($result === false)
            apologize("Username already exists.");

        //gather user id info
        $rows = query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        
        //remember id to keep user logged in
        $_SESSION["id"] = $id;
        
        //redirect to index.php
        redirect("/index.php");
    } 
    else 
    {
        // else render form 
        render("register_form.php", ["title" => "Register"]);
        
    }

?>
