<div class='count'></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(
	$.getJSON( "/Main/count", function( data ) {
		$('div.count').html("Counter: " + data);
	})	
);
</script>