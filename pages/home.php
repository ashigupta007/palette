<html>
<head>
	<title>
		Palette
	</title>

	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="theme-color" content="#1E90FF">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="google-signin-client_id" content="216440914229-ip8fva7r9j5nu2f1c2redlqko1150bqe.apps.googleusercontent.com">
    
    <link rel="icon" type="image/png" href="../images/icon.png">
</head>

<body>

	<div class="row">
		<div class="col-sm-4 padding-0">
			<div class="menu">
				<div class="header">
					<img src="../images/icon.png">
					<h1>Palette</h1>
					
  					<div class="profile_cont">
  						<img src="../images/sample_man.png" class="img-circle" id="profpic"><!--will be changed afterwards-->
  						<p id="name">
  							
  						</p>
  						
  						<div class="dropdown">
						<button class="dropdown-toggle" data-toggle="dropdown">
							<i class="fas fa-ellipsis-v"></i>
						</button>
						<ul class="dropdown-menu dropdown-menu-right">
	    					<li><a href="#">Profile</a></li>
	    					<li><a href="#" onclick="signOut();">Logout</a></li>
	    					<li><a href="#">Help?</a></li>
	  					</ul>
  					</div>
  					</div>
				</div>
				<div class="menu-cont">
					<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
					<div class="menu-item" onclick="load('addnew')">
						<div class="icon-cont">
							<img src="../images/add-icon.png" class="img-circle">
						</div>
						<div class="text-cont">
							Add A New Project
						</div>
					</div>
					<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
				</div>
				
			</div>
		</div>
		<div class="col-sm-8 padding-0" id="container">
			
		</div>
	</div>


</body>
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script type="text/javascript" src="../js/app.js" async="true"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat|Qwigley" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">

	<script type="text/javascript">
			document.getElementById('name').innerHTML=localStorage.getItem('name');
  			document.getElementById('profpic').setAttribute("src", localStorage.getItem('profpic'));

  			$(window).on('load',(function() {
  				load('default');
			}));
	</script>
	<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
</html>