<?php
    $servername = "127.0.0.1:56552";
    $username = "azure";
    $password = "6#vWHD_$";
    $dbname = "comp1006";

    $fname = (isset($_POST['firstName']) ? $_POST['firstName'] : '');
    $lname = (isset($_POST['lastName']) ? $_POST['lastName'] : '');
    $age = (isset($_POST['age']) ? $_POST['age'] : '');
    $song = (isset($_POST['song']) ? $_POST['song'] : '');

    // connetc to the DB
    
    try {
        //try to connect to the database 
        $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        echo "<p> You are connected! YAY! </p>"; 

    }
    catch(PDOException $e) {
        echo "<p> Sorry can't connect! Boooooooo! </p>"; 
        echo $e; 
    }
    //set up an sql query
    $sql = "INSERT INTO songs (fname, lname, age, song) 
    VALUES (:fname, :lname, :age, :song)";
    // prepare the query
    $cmd = $db->prepare($sql);
    // bind parameters
    $cmd->bindParam(':fname', $fname);
    $cmd->bindParam(':lname', $lname);
    $cmd->bindParam(':age', $age);
    $cmd->bindParam(':song', $song);
    // execute the query
    $cmd->execute();
    echo "<p>Thank you $fname $lname! Your data is in my database. Ha!</p>";
    // close db connection
    $cmd->closeCursor();
    header('Location: https://kbarsukov.azurewebsites.net');
?>