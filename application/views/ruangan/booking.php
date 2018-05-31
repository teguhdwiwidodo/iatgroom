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
				 now: '2018-05-31',
				 selectable: true,
				 schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
      editable: true,
      aspectRatio: 1.8,
      scrollTime: '00:00',

      header: {
        left: 'promptResource today prev,next',
        center: 'title',
        right: 'timelineDay,timelineThreeDays,agendaWeek,month'
      },
      customButtons: {
        promptResource: {
          text: '+ room',
          click: function() {
            var title = prompt('Room name');
            if (title) {
              $('#calendar').fullCalendar(
                'addResource',
                { title: title },
                true // scroll to the new resource?
              );
            }
          }
        }
      },
      defaultView: 'timelineDay',
      views: {
        timelineThreeDays: {
          type: 'timeline',
          duration: { days: 3 }
        }
      },
      resourceLabelText: 'Rooms',
      resourceRender: function(resource, cellEls) {
        cellEls.on('click', function() {
          if (confirm('Are you sure you want to delete ' + resource.title + '?')) {
            $('#calendar').fullCalendar('removeResource', resource);
          }
        });
      },
      resources: [
        { id: 'a', title: 'Auditorium A' },
        { id: 'b', title: 'Auditorium B', eventColor: 'green' },
        { id: 'c', title: 'Auditorium C', eventColor: 'orange' },
        /*{ id: 'd', title: 'Auditorium D', children: [
          { id: 'd1', title: 'Room D1' },
          { id: 'd2', title: 'Room D2' }
        ] },*/
        { id: 'e', title: 'Auditorium E' },
        { id: 'f', title: 'Auditorium F', eventColor: 'red' },
        { id: 'g', title: 'Auditorium G' }
      ],
      events: [
        { id: '1', resourceId: 'b', start: '2018-05-31T02:00:00', end: '2018-05-31T31:00:00', title: 'event 1' },
        { id: '2', resourceId: 'c', start: '2018-05-31T05:00:00', end: '2018-05-31T22:00:00', title: 'event 2' },
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

