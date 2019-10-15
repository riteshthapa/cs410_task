<?php
    $file = "tasks.txt";

    $fileName = fopen($file, "a");

    $taskTitle = $_GET["taskTitle"];
    $taskDes = $_GET["taskDes"];
    $taskPriority = $_GET["taskPriority"];
    $taskCategory = $_GET["taskCategory"];
    $assignedTo = $_GET["assignedTo"];
    $dueDate = $_GET["dueDate"];

    $x = $taskTitle . "," . $taskDes . "," . $taskPriority . "," . $taskCategory . "," . $assignedTo . "," . $dueDate;
    
    fwrite($fileName,$x ."\n");
?>

<?php
    $path = "../";
    include $path."head1.html";    
?>
	<link rel="stylesheet" type="text/css" href="css/tableStyles.css">

<!-- navigation bar -->
<?php
    include $path."nav.php"; 
?> 


<h1>
    New task has been added successfully!
</h1>

<form action = "admin.php" method = "POST">
    <input type = "submit" class = "button" value = "Back">
</form>

<?php
    include $path."footer.html";
?>      
    </body>
</html>
