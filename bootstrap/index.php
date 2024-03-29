<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Валидация формы</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

	<div class="container content">
<form action="http://geoipsoap/index.php" class="form-horizontal" method="post" id="form">
	<div class="form-group">
		<label for="ip" class="col-sm-2 control-label">Введите Ваш IP <span class="red">*</span></label>
		<div class="col-sm-6">
			<input type="ip" class="form-control" id="ip" name="ip" placeholder="x.x.x.x" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-6">
			<button type="submit" id="submit" class="btn btn-primary">Запрос</button>
			<div></div>
		</div>
	</div>
</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="validator.min.js"></script>

	<script>
$(function(){
	$('#form').validator({
		feedback: {
			success: 'glyphicon-thumbs-up',
			error: 'glyphicon-thumbs-down'
		}
	});
});
	</script>

</body>
</html>