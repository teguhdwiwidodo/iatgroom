<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box box-danger">
    <div class="box-header">
        <div class="col-md-12" style="padding: 0;">
        <div id='calendar'></div>
        <script type="text/javascript">
        	$(function() {

			  // page is now ready, initialize the calendar...

			  $('#calendar').fullCalendar({
			    // put your options and callbacks here
			    height: 400,
				 now: '2018-05-31',
				 selectable: true,
				 schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
			      editable: true,
			      aspectRatio: 1.8,
			      scrollTime: '06:00',
			      minTime: "05:00:00",
   				  maxTime: "24:00:00",

			      header: {
			        left: 'prev,next',
			        center: 'title',
			        right: 'timelineDay,timelineThreeDays,agendaWeek,month'
			      },
			     
			      defaultView: 'timelineDay',
			      views: {
			        timelineThreeDays: {
			          type: 'timeline',
			          duration: { days: 3 }
			        }
			      },
			      resourceLabelText: 'Rooms',
			     
			      resources: [
			        { id: 'a', title: 'Galang' },
			        { id: 'b', title: 'Flores', eventColor: 'green' },
			        { id: 'c', title: 'Natuna', eventColor: 'orange' },
			        { id: 'e', title: 'Papua' },
			        { id: 'f', title: 'Manggas', eventColor: 'red' },
			        { id: 'g', title: 'Rote' },
			        { id: 'h', title: 'Room Last' }
			       
			      ],
			      events: [
			        { id: '1', resourceId: 'b', start: '2018-05-31T02:00:00', end: '2018-05-31T31:00:00', title: 'event 1' },
			        { id: '2', resourceId: 'c', start: '2018-05-31T05:00:00', end: '2018-05-31T07:30:00', title: 'event 2' },
			        { id: '3', resourceId: 'd', start: '2018-05-06', end: '2018-04-08', title: 'event 3' },
			        { id: '4', resourceId: 'e', start: '2018-05-31T03:00:00', end: '2018-05-31T08:00:00', title: 'event 4' },
			        { id: '5', resourceId: 'f', start: '2018-05-31T00:30:00', end: '2018-05-31T02:30:00', title: 'event 5' }
			      ],
			      
			    select: function(startDate, endDate, jsEvent, view, resource) {
			      alert('selected ' + startDate.format() + ' to ' + endDate.format() + ' on Room ' + resource.id);
			    }

			    });	

			});
        </script>
        
</div>

