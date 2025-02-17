<?php  

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usersearch = $_POST["usersearch"];
        
        
        try{
            require_once "includes/dbh.inc.php";
    
            $query = "SELECT * FROM comments WHERE username = :usersearch;";
    
            $stmt = $pdo->prepare($query);
    
            // $usersearch = "%" . $usersearch . "%";
            $stmt->bindParam(":usersearch", $usersearch, PDO::PARAM_STR);
           
    
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $pdo = null;
            $stmt = null;
            

        } catch(Exception $e){
            die("Query failed: " . $e->getMessage());
        }}
    else{
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>
   
<h1>Search results</h1>

<?php

if(empty($results)){
    echo "<div>";
    echo "<p>There were no results!</p>";
    echo "</div>";

}
else{
    foreach($results as $row){
        echo "<div class='output'>";
        echo "<h3>" . htmlspecialchars($row["username"]). "</h3>";
        echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
        echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
        echo "</div>";
    }

}
?>


</body>
</html>