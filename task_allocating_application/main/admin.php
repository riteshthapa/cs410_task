<?php
    $path = "../";
    include $path."head1.html";    
?>

<body>
<!-- navigation bar -->
<?php
    include $path."nav.php"; 
?> 

<!-- BANNER SECTION BEGINS -->
<div>
    <!-- add some images suitable with the program name -->
</div>
<!-- BANNER SECTION ENDS -->

<div class="container">           
    <h1> Welcome! (Admin/Name of the supervisor.....blah blah!)</h1>

    <div id="form_container" class="collapse">
           
        <form id="taskForm" action = "addTask.php" name="myForm" method = "GET">

        	<div class="form-row">
        		<div class="form-group col-md-6">
        			<label>Task Title</label>
        			<input type="text" class="form-control" id="taskTitle" name="taskTitle" placeholder="Task title" required>
        		</div>

        		<div class="form-group col-md-6">
        			<label>Assigned To</label>
        			<input type="text" class="form-control" name="assignedTo" id="assignedTo" placeholder="Employee's Name" required>
        		</div>
        	</div>   
            
            <label for="exampleFormControlTextarea1">Description</label>
    		<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter task description" name="taskDes" rows="3" required></textarea>

            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Priority</label>
            <select class="custom-select my-1 mr-sm-2" name="taskPriority" id="inlineFormCustomSelectPref">
            	<option selected>Choose...</option>
				<option value="High">High</option>
				<option value="Medium">Medium</option>
				<option value="Low">Low</option>
			</select>

			<div class="form-row">
        		<div class="form-group col-md-6">
        			<label>Category</label>
        			<input type="text" class="form-control" id="taskCategory" name="taskCategory" required>
        		</div>

				<div class="form-group col-md-6">
					<label for="example-date-input">Due Date</label>
					<input class="form-control" type="date" name="dueDate" value="2019-10-15" id="example-date-input">
				</div>
        	</div>
        </div>


        <input class="btn btn-primary" type="submit" value="Add Task" data-toggle="collapse" data-target="#form_container" aria-expanded="false" aria-controls="form_container">

        <input class="btn btn-primary" type="button" value="Cancel" onclick="resetForm()">
    </form>
    

    <!-- input class="btn btn-primary" type="submit" value="Add Task" data-toggle="collapse" data-target="#form_container" aria-expanded="false" aria-controls="collapseExample">
     <input class="btn btn-primary" type="button" value="Cancel" onclick="resetForm()"> -->

    <h2>Task Lists</h2>

    <table>
        <thead>
            <tr>
                <th>Task Title</th>
                <th>Description</th>
                <th>Priority</th>
                <th>Category</th>
                <th>Assigned To</th>
                <th>Due Date</th>
            </tr>

            <?php
                error_reporting(E_ERROR | E_WARNING | E_PARSE);
                $file2 = "tasks.txt";
                $taskList = fopen($file2, "r");

                if(!$file2){
                    die("Unable to open $file2.");
                }
                while(!feof($taskList)){
                    $line = fgets($taskList);
                    if($line != ""){
                        $parts = explode(",", $line);
                    
                        echo("<tr><td>$parts[0]</td><td>$parts[1]</td><td>$parts[2]</td><td>$parts[3]</td><td>$parts[4]</td><td>$parts[5]</td></tr>");
                    }
                }
            ?>
        </thead>
        <tbody>    
        </tbody>
    </table>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php
    include $path."footer.html";
?>    

<script src="task.js"></script>
</body>
</html> 