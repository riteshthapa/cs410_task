// function addTask() { 
// 	var rows = "";
// 	// getting the form input value using getElementById
//     var taskTitle = document.getElementById("taskTitle").value;
//     var taskPriority = document.getElementById("taskDes").value;
//     var taskDes = document.getElementById("taskPriority").value; 
//     var taskCat= document.getElementById("taskCategory").value;
//     var taskAssignedTo = document.getElementById("assignedTo").value; 

//     // this is how we create table 
//     rows = rows+ "<td>" + taskTitle + "</td><td>" + taskDes + "</td><td>" + taskPriority + "</td><td>" +  taskCat + "</td><td>" + taskAssignedTo;
//     var tbody = document.querySelector("#maintable tbody");
//     var tr = document.createElement("tr");

//     tr.innerHTML = rows;
// 	tbody.appendChild(tr);

// 	resetForm();
// }

//resets the user form value
function resetForm() {
    document.getElementById("taskForm").reset();
}