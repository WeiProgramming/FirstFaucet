<!DOCTYPE html>
<html>
	<head>
	@include('partials/_header')

	<style type="text/css">
		body{
			background-image: url("/images/bitcoin-bg.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
		}
	</style>
	</head>

<body>
	<div class="row">
    	<div class="col-md-2 col-md-offset-5">	
    		<h1>Happy Faucet</h1>
    	</div>
	</div>

	@yield('content')


	<script
  	src="https://code.jquery.com/jquery-3.2.1.min.js"
 	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  	crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html> 