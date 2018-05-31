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
			     weekends: false 
			  })

			});
        </script>
</div>

