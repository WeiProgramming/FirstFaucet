@extends('main')

@section('title','| Home')


{{-- Meat of the site --}}
@section('content')

	<div class = "contaienr">
	<div align = "center" class = "col-md-8 col-md-offset-2">
		<div class="row">
		<form action ="#" mehood = "POST">
			<label for = "wallet-addr"><h3>Wallet Address: </h3></label>
			<input size = "80" type="text" name="wallet-addr">


			<div align = "center">
				<div class="g-recaptcha" data-sitekey="6LeebToUAAAAAE1dRlrXX-XmIb2tLZ7vIB9WgMGs"></div>
				<button class = "btn" style = "margin-top: 5%;color: white; background-color: black;">Bless Me With Coins</button>
			</div>
		</form>
		</div>
	</div>
	</div>

@endsection