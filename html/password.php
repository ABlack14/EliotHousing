<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $user = query("SELECT * from users");
        if (crypt($_POST["hash1"]) == $user["hash"])
        {
            if(empty($_POST["hash2"]))
                apologize("Please enter a new password!");
            else
            {
                query("UPDATE users SET hash = ? WHERE username = ?", crypt($POST["hash2"]), $POST["user"]);
                redirect("login.php");
            }  
        }
        else
            apologize("Incorrect Password");
    }
?>
        
