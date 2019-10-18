<?php
    $path = "../";
    include $path."head1.html";    
?>
    <link rel="stylesheet" type="text/css" href="css/tableStyles.css">

<!-- navigation bar -->
<?php
    include $path."nav.php"; 
?> 

<?php
    $delete = $_GET["taskTitle"];
    
    $file = "tasks.txt";
    $fileName = fopen($file, "r");
    
    if(!$file){
        die("Unable to open $file.");
    }
    $newFile = array();
    while(!feof($fileName)){
        $line = fgets($fileName);
        $parts = explode(",", $line);
        
        $taskTitle = $parts[0];
        if($taskTitle != $delete){
            array_push($newFile, $line);
        }
    }
    fclose($fileName);
    $fileName = fopen($file, "w");
    $x = "";
    for($i = 0; $i < count($newFile); $i++){
        $x .= $newFile[$i];
    }

    fwrite($fileName, $x);
?>


<h1>
    Mentioned task has been successfully deleted!
</h1>


<form action = "admin.php" method = "POST">
    <input type = "submit" class = "button" value = "Back">
</form>

<?php
    include $path."footer.php";
?>      
    </body>
</html>