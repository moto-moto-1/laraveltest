    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/">Twinlist</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Personal</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
  <h2>Form control: input</h2>
  <p>The form below contains two input elements; one of type text and one of type password:</p>
  
    <div class="form-group">
      <label for="usr">Add new task</label>
      <input type="text" class="form-control" id="taskname" placeholder="task name">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="taskrevenue" placeholder="revenue">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="taskprogress" placeholder="progress 0-100 ">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="taskevaluation" placeholder="evaluation 0-100 ">
    </div>

    <div class="form-group">
      <textarea  type="text" class="form-control" id="taskdescription" placeholder="description "></textarea>
    </div>

 <div class="form-group">
 	<label for="usr">Status:</label>
    <select id="taskstatus">
  <option value="planned">planned</option>
  <option value="active">active</option>
  <option value="hold">hold</option>
  <option value="finished">finished</option>
  <option value="delete">delete</option>

</select>
</div>

    

    <button type="button" class="btn btn-primary" id="submittask">Submit task</button>

   
 
</div>

<script>
$("#submittask").on("click" , function (){

	var newtask={
		crud: "create",
		resource: "task",
		id : "",
		taskname : $("#taskname").val(),
		taskprogress : $("#taskprogress").val(),
		taskevaluation : $("#taskevaluation").val(),
		taskrevenue : $("#taskrevenue").val(),
		taskdescription : $("#taskdescription").val(),
		taskstatus : $("#taskstatus").val(),
		
	}
	var TaskObject=JSON.stringify(newtask);
$.get("https://twinlist.com/personal", newtask ,function(data, status){
	alert("data received");
      alert("Data: " + data.taskstatus + "\nStatus: " + status);
    });

alert ("pressed");

}

	);

	</script>








