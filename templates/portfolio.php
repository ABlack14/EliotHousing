<form action="filter.php" method="post">
    <fieldset>
        Group Size:
        <br/>
        <select name = "Group_Size">
            <option value='0'></option>
            <?php
              $value = 1;
              $array = [1,2,3,4,5,6,7,8];
              foreach($array as $a)
              {
                echo "<option value = '$value'> $a</option>\n";
                $value++;    
              }  
            ?>
        </select>
        <br/>
        Year:
        <br/>
        <select name = "Year">
            <option value='0'></option>
            <?php
              $value = 1;
              $array = ["Junior", "Senior"];
              foreach($array as $a)
              {
                echo "<option value = '$value'> $a</option>\n";
                $value++;    
              }  
            ?>
        </select>
        <div class="control-group">
            <button type="submit" class="btn">Go!</button>
        </div>
        <br/>
        <div>
            <a href="logout.php">Logout</a>
        </div>
    </fieldset>
</form>
