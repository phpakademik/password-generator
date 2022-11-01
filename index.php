<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Password generator</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>


<div style="height: 250px;">
	
</div>

<div class="container">
	<div class="row">
		<div class="offset-2"></div>
		<div class="col-9">
			<form>
				<div class="row">
					<div class="col-9">
						<input type="text" id="hash" name="hash" placeholder="password" class="form-control">
					</div>
					<div class="col-1">
					<button type="button" class="btn btn-primary" id="button">Generate</button>	
					</div>
					<div class="offset-1"></div>
					<div class="col-1">
					<button type="button" class="btn btn-primary" id="copy">Copy</button>	
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<script type="text/javascript" src="js/jquery_3.6.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#button').click(function(event){
			event.preventDefault();
			$.ajax({
				url: '/generator.php',
				method: 'POST',
				success: function(data)
				{
					$('#hash').val(data);
				}
			})
		})
		$('#copy').click(function(){
			var password = $('#hash');
			hash.select();
			document.execCommand('copy')
		})
	})
</script>
</body>
</html>