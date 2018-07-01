<html>
<head>
	<title>
		Palette
	</title>

	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="theme-color" content="#1E90FF">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>
	<div class="add-new">
		<div class="page-title">
			Start New Project !
		</div>
		<div class="form-cont">
				<form>

					<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
					<p class="description">Choose Your Project Icon and Name</p>
					<input id="files" style="visibility:hidden;" type="file">
					<label for="files" style="display: inline-block;">
						<img src="../images/default.png" class="project-icon img-circle">
					</label>
      				<input type="text" name="project_name" class="txt-sml" autocomplete="off" placeholder="Poject Title">
      				<p class="description" style="margin-top: 30px;">Choose Your Theme Color</p>
      				  

      				<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
      				<p class="label">Theme Color</p>
      				<input type="text" name="themecolor" placeholder="#ffffff" class="txt-sml" maxlength="6" onkeydown="display_color(this,'themecolor')" autocomplete="off">
      				<div class="singelton-color-display" id="themecolor"></div>

      				<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
      				<p class="description" style="margin-top: 30px;">Add Your Color Combination</p>
      				<div class="col-sm-6 color-cont">

      					<div class="color-cont-display"></div>
      				</div>
				</form>
			</div>
	</div>
</body>
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <script type="text/javascript" src="../js/app.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <meta name="google-signin-client_id" content="216440914229-ip8fva7r9j5nu2f1c2redlqko1150bqe.apps.googleusercontent.com">

	<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">

</html>