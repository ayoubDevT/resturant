<?php 
include 'header.php';
 ?>
<title>Calendra</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <style type="text/css">
    .fc-content{
        height: 40px;
        width: 40PX
        font-size: 6px;
        color: black;
    }
    .fc-title{
        margin-top: 30px;
        font-size: 8px;
    }
   </style>
   
<div class="">
    <div class="main-content">
    	<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        	
                        	   <div class="col-lg-10 offset-md-1">
                                <div class="card">
                                	<dir class="card-header">
                                        <center>
                                            <i>Calendar</i>
                                        </center>
                                    </dir>
                    			<div class="card-body">
                                    <div id="calendar">
                                        
                                    </div>
                                </div>
                    		</div>
	                   </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



	
	<script type="text/javascript"> 
$(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     right:'month,basicWeek,agendaDay'
    },
       eventRender: function(event, eventElement) {
    if (event.imageurl) {
        eventElement.find("div.fc-content").prepend("<img src='" + event.imageurl +"' width='40' height='40'>");
    }
},
    events:'calendar-crud.php'
    
   });
  });

	</script>
	 <script src="//code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="floating-wpp.min.js"></script>


<?php include 'footer.php'; ?>