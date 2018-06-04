<!-- Full Calender -->
<link rel='stylesheet' href='<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.css' />
<script src='<?php echo base_url(); ?>assets/plugins/fullcalendar/lib/moment.min.js'></script>
<script src='<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.js'></script>
<link rel='stylesheet' href='<?php echo base_url(); ?>assets/plugins/fullcalendar-scheduler/dist/scheduler.min.css' />
<script src='<?php echo base_url(); ?>assets/plugins/fullcalendar-scheduler/dist/scheduler.min.js'></script>


<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box box-danger">
    <div class="box-header">
        <div class="col-md-12" style="padding: 0;">
        <div id='calendar'></div>
        <script type="text/javascript">
        	$(document).ready(function(){
   				var calendar = $('#calendar').fullCalendar({
			    // put your options and callbacks here

			      height: 400,
				  selectable: true,
   				  selectHelper: true,
				  schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
			      editable: true,
			      aspectRatio: 1.8,
			      scrollTime: '06:00',
			      minTime: "05:00:00",
   				  maxTime: "24:00:00",
   				  

			      header: {
			        left: 'prev,next',
			        center: 'title',
			        right: 'timelineDay'
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
			        { id: 'a', titles: 'Galang', eventColor: 'yellow'},
			        { id: 'b', title: 'Flores', eventColor: 'blue' },
			        { id: 'c', title: 'Natuna', eventColor: 'orange' },
			        { id: 'e', title: 'Papua', eventColor: 'green'},
			        { id: 'f', title: 'Manggas', eventColor: 'red' },
			        { id: 'g', title: 'Rote', eventColor: 'gray'},
			        { id: 'h', title: 'Room Last', eventColor: 'purple'}
			      ],
			      events: [
			        { id: '1', resourceId: 'b', start: '2018-06-04T07:00:00', end: '2018-05-31T10:00:00', title: 'event 1', description: 'This is a cool event' },
			        { id: '2', resourceId: 'c', start: '2018-06-04T05:00:00', end: '2018-05-31T07:30:00', title: 'event 2', description: 'This is a cool event' },
			        { id: '3', resourceId: 'c', start: '2018-06-04T07:00:00', end: '2018-05-31T09:30:00', title: 'event 3', description: 'This is a cool event'},
			        
			      ],

				   select: function(startDate, endDate, jsEvent, view, resource) {
				      //alert('selected ' + startDate.format() + ' to ' + endDate.format() + ' on Room ' + resource.title);
				      var title = resource.title;
				      var startDate = startDate.format();
				      tanggal = startDate.split('T')[0];
				      startDate = startDate.split('T')[1];
				      var endDate = endDate.format();
				      endDate = endDate.split('T')[1];
				      $('#namaruangan').val( title );
				      $('#tanggal').val( tanggal );
				      $('#mulaidurasi').val( startDate );
				      $('#selesaidurasi').val( endDate );
				     console.log('select start');
				        $('#tambahbooking').modal({
				           show  : true,
				        });
						
				        /*.on('loaded.bs.modal', function(e) {
				            console.log('loaded');
				            $('#calendar').fullCalendar('unselect');
				        }).on('shown.bs.modal', function (e) {
				            console.log('shown ' + start.format('DD.MM.YYYY'));
				            $('#calendar').fullCalendar('unselect');
				        }).on('hidden.bs.modal', function(e) {
				            console.log('hidden ' + start.format('DD.MM.YYYY'));
				            $('#calendar').fullCalendar('unselect');
				        });
				        console.log('select end');
				        $('#calendar').fullCalendar('unselect');*/
				    },

				     eventRender: function(event, element) {
					      element.popover({
					        title: event.title,
					        content: event.description + 'Mulai:'+event.start + "Selesai:" + event.end,
					        trigger: 'hover'
					      });
					    },

				

				    eventClick: function(calEvent, jsEvent, view) {

					    alert('Event: ' + calEvent.title);
					    alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
					    alert('View: ' + view.name);

					    // change the border color just for fun
					       $('.detail').removeClass('hidden');
				      

					  
				  }, 
				  eventDrop: function(event, delta, revertFunc, jsEvent ) {

				    alert(event.title + " was dropped on " + event.start.format() + ' to ');
				    $el.popover({
					        show:false,
					      });

				    $('#tambahbooking').modal({
				           show  : true
				        })

				    /* if (!confirm("is this okay?")) {
				      revertFunc();
				    } */

					},

				eventResize: function(event, delta, revertFunc) {

				    alert(event.title + " end is now " + event.end.format());
				    $('#tambahbooking').modal({
				           show  : true
				        })
				   /* if (!confirm("is this okay?")) {
				      revertFunc();
				    } */

				  }
			    });	

			});

        	
        </script>


</div>

<!-- Modal -->
<div class="modal fade" id="tambahbooking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Booking Room</h4>
            </div>

            <div class="modal-body">
               <form id="tambah-evidence" method="POST">
                    <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-list-alt"></i>
                      </span>
                            <input type="text" id="namaruangan" class="form-control" placeholder="Nama Ruangan" name="nama-ruangan" aria-describedby="sizing-addon2">
                    </div>
                      <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-list-alt"></i>
                      </span>
                            <input type="text" id="tanggal" class="form-control" placeholder="Tanggal" name="tanggal" aria-describedby="sizing-addon2">
                    </div>
                    <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-list-alt"></i>
                      </span>
                            <input type="text" id="mulaidurasi" class="form-control" placeholder="Mulai-Durasi" name="mulai-durasi" aria-describedby="sizing-addon2">
                    </div>
                    <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-list-alt"></i>
                      </span>
                            <input type="text" id="selesaidurasi" class="form-control" placeholder="Selesai-Durasi" name="selesai-durasi" aria-describedby="sizing-addon2">
                    </div>
                      
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


            <div class="detail" style="height: 100px;width: 20%;background: green;display: none;">
               <form id="tambah-evidence" method="POST">
                  <div>nyoba-nyoba</div>

                </form>
            </div>
            