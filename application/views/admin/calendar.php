<div id="middle">

		<div id="container">
			<div id="content">
				
                <style type="text/css">
		.calendar {
			font-family: Arial; font-size: 12px;
		}
		table.calendar {
			margin: auto; border-collapse: collapse;
		}
		.calendar .days td {
			width: 80px; height: 80px; padding: 4px;
			border: 1px solid #999;
			vertical-align: top;
			background-color: #DEF;
		}
		.calendar .days td:hover {
			background-color: #FFF;
		}
		.calendar .highlight {
			font-weight: bold; color: #00F;
		}
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body>
	<?php echo $calendar; ?>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.calendar .day').click(function() {
			day_num = $(this).find('.day_num').html();
			day_data = prompt('Enter Stuff', $(this).find('.content').html());
			if (day_data = day_data) {
				
				$.ajax({
					url: window.location,
					type: 'POST',
					data: {
						day: day_num,
						data: day_data
					},
					success: function(msg) {
						location.reload();
					}						
				});
				
			}
			
		});
		
	});
		
	</script>
              
			</div><!-- #content-->
		</div><!-- #container-->