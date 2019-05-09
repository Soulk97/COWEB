<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS de Bootstrap -->
		<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
		crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstraptheme.min.css" integrity="sha384-
		rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>

		<script>
		src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js">
		</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
		<script src="https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/scriptaculous.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">


		<title>
			HOTEL?
		</title>



		<script>
			function showHint(str) {
			    if (str.length == 0) {
			        document.getElementById("txtHint").innerHTML = "";
			        return;
			    } else {
			        var xmlhttp = new XMLHttpRequest();
			        xmlhttp.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById("txtHint").innerHTML = this.responseText;
			            }
			        };
			        xmlhttp.open("GET", "gethint.php?q=" + str, true);
			        xmlhttp.send();
			    }
			}
		</script>

		<script>
			function showHotel(str) {
    		if (str == "") {
        	document.getElementById("txtHint").innerHTML = "";
        	return;
    		} else {
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("txtHint").innerHTML = this.responseText;
						}
					};
					xmlhttp.open("GET","gethotel.php?q="+str,true);
					xmlhttp.send();
				}
			}
		</script>

	</head>
<body>

	<!-- Librería jQuery requerida por los plugins de JavaScript -->
	<script src="http://code.jquery.com/jquery.js"></script>
	<!-- Todos los plugins JavaScript de Bootstrap (también puedes
	incluir archivos JavaScript individuales de los únicos
	plugins que utilices) -->
	<script src="js/bootstrap.min.js"></script>


	<!--
	Header
	-->
<header class="container-fluid">
	<div class="row" >
		<div class="col-md-2">
			 <img class="img-rounded" src="media/hotel-background.jpg" width=75%/>
		</div>
		<div class="col-md-10">
			 <h1> Book a Hotel </h1>
		 </div>
	 </div>

	 <nav class="navbar navbar-inverse" role="navigation">
	 	<div class="navbar-header">
	 		<button type="button" class="navbar-toggle" data-toggle="collapse"
	 			data-target=".navbar-ex1-collapse">
	 			<span class="sr-only">Display navigation</span>
	 			<span class="icon-bar"></span>
	 			<span class="icon-bar"></span>
	 			<span class="icon-bar"></span>
	 		</button>
	 		<a class="navbar-brand" href="#">Home</a>
	 	</div>

	 	<div class="collapse navbar-collapse navbar-ex1-collapse">
	 		<ul class="nav navbar-nav">
	 			<li class="active"><a href="#">Register</a></li>
	 			<li><a href="#">Login</a></li>
	 			<li class="dropdown">
	 				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	 				Bookings <b class="caret"></b>
	 				</a>
	 				<ul class="dropdown-menu">
	 					<li><a href="#">Book a room</a></li>
	 					<li><a href="#">My Bookings</a></li>
	 				</ul>
	 			</li>
	 		</ul>
	 		<form class="navbar-form navbar-right" role="search">
	 			<div class="form-group">
	 				<input type="text" class="form-control"
	 				placeholder="Buscar">
	 			</div>
	 			<button type="submit" class="btn btndefault">Enviar</button>
	 		</form>
	 	</div>
	 </nav>

</header>

	<div class="container-fluid">
		<div class="row">
			<!--
			Left
			-->
			<br>
			<div class="col-md-2">
					<dl>
						<dt><a href="https://www.icelandairhotels.com/en/hotels/akureyri"> <h5>Akureyri Hotel: </h5></a> </dt>
							<dd><img class=img-thumbnail src="media/akureyri-hotel.jpg" alt="Akuyeri Hotel" height="150" width="250"></dd>

						<dt><a href="https://www.dayuse.com/hotels/united-arab-emirates/dukes-hotel-dubai"> <h5>Dukes Hotel: </h5></a></dt>
							<dd><img class=img-thumbnail src="media/dukes-hotel-dubai.jpeg" alt="Dukes Hotel" height="150" width="250"></dd>

						<dt><a href="http://pannoniatower.at/en/"><h5>Pannonia Tower: </h5></a></dt>
							<dd><img class=img-thumbnail src="media/pannonia-tower.jpg" alt="Pannonia Tower" height="150" width="250"></dd>
					</dl>
				</h5>

			</div>

			<!--
			Center
			-->
			<div class="col-md-8">
				<!--
				Registration form
				-->
				<h2> Register to book a hotel</h2>
				<form method="POST" action="servidor.php">
					<div class="input-group">
						<label>Username</label>
						<input type="text" name="username">
					</div>
					<div class="input-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email"
						placeholder="Enter your email">
					</div>
					<div class="input-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password"
						placeholder="Enter your password">
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox"> I have read and agree to the Terms and Conditions
						</label>
					</div>
					<button type="submit" class="btn btn-default">Register</button>
					</form>




					<form action="http://webster.cs.washington.edu/params.php"
						method="post" enctype="multipart/form-data">
						Upload an image as your avatar:
						<input type="file" name="avatar" />
						<input type="submit" />
						</form>

				<br><br>
				<table class="table table-hover">
					<caption>Table with hotels and prices</caption>
					<thead>
						<tr>
							<th>Name</th>
							<th>Location</th>
							<th>Rating</th>
							<th>Price Range Per Night</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>Akureyri Hotel</td>
							<td>Iceland</td>
							<td>★★★</td>
							<td>ISK 15 000 - ISK 20 000</td>
						</tr>

						<tr>
							<td>Dukes Hotel</td>
							<td>Dubai</td>
							<td>★★★★★</td>
							<td>$218 - $235</td>
						</tr>

						<tr>
							<td>Pannonia Tower</td>
							<td>Washington</td>
							<td>★★★★</td>
							<td>€104 - €183</td>
						</tr>
					</tbody>
				</table>


				<p><b>Start typing a name in the input field below:</b></p>
				<form>
				Hotel name: <input type="text" onkeyup="showHint(this.value)">
				</form>
				<p>Suggestions: <span id="txtHint"></span></p>

				<form>
					<select name="hotels" onchange="showHotel(this.value)">
					  <option value="">Select a Hotel:</option>
					  <option value="Akureyri">Akureyri Hotel</option>
					  <option value="Dukes">Dukes Hotel</option>
					  <option value="Pannonia">Pannonia Tower</option>
				  </select>
				</form>
				<br>
				<div id="txtHint"><b>Hotel info will be listed here...</b></div>

			</div>

			<!--
			Right
			-->
			<div class="col-md-2">
				<!--
				Google and Wikipedia search
				!-->
				<form action="http://www.google.com/search">
					<div>
						<img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" class="img-responsive" width=30% alt="Google Search">
						<input name="q" />
						<input type="submit" />
					</div>
				</form>
				<br>

				<form action="https://en.wikipedia.org/w/index.php">
					<div>
						<img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Wikipedia_wordmark.svg" class="img-responsive" width=40% alt="Wikipedia Search">
					  <input name="search">
					  <input type="submit">
					</div>
				</form>


			</div>
		</div>

	</div>

	<!--
	Footer
	-->
	<footer class="container-fluid text-center">
		<h1>Hotel?</h1>
	</footer>

</body>
</html>

<? php
function check_valid($regex, $param) {
if (preg_match($regex, $_POST[$param])) {
return $_POST[$param];
} else {
die("Bad $param");
}
}
?>
