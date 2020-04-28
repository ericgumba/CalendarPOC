<?php 
?>
<link href="calendar.css" type="text/css" rel="stylesheet" />
<div> 
	test
	<?php 
	include 'calendar.php';

	$calendar = new Calendar();

	echo $calendar->show();

	echo $calendar->showTimePicker();

	?>
</div>  


<script> 
var prev = ""
function select(calendarCell){   // function that highlights when a user clicks on a calendar date. 
	var cell = document.getElementById(calendarCell); 
	var selectedDate = document.getElementById("selectedDate");
	selectedDate.innerHTML = calendarCell.substring(3);
	cell.setAttribute("class", "selected")

	if (prev && prev != cell){ // unselects the previously chosen calendar cell
		prev.setAttribute("class", "unselected");
	}
	prev = cell;
} 

	
function submitAvail(){
	var date = document.getElementById("selectedDate");
	var beginningAvailability = document.getElementById("beginningAvailability");
	var endingAvailability = document.getElementById("endingAvailability");

	console.log(`values of submit avail ${date.innerHTML} ${beginningAvailability.getAttribute("value")}  ${endingAvailability.getAttribute("value")}`)
 
	
}
	 
	// alert("test")
	// 	$("availabilityForm").on("submit", function(event){
	// 		alert("test");
	// 		event.preventDefault();
	// 		console.log("Hi");
	// 		var post_data = $("availabilityForm").serialize();
			
	// 		console.log("here is post data ", post_data );

	// 	}
  
</script>