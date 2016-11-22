@extends('layout')

	@section('header')
		Pago
	@stop

	@section('PageTitle')
		Enlaces para realizar los pagos
	@stop

	@section('InitialMessage')
		<h4>Una vez efectuado el pago hacer envío del comprobante a la dirección electrónica: educacion.continua@cib.org.mx</h4>
	@stop

	@section('FormContent')
		
	<div class="col-xs-6">
		<h2>Pago para socios</h2>
		<h3>$7,225.00 MXN</h3>
		<p>Hasta el 21 de diciembre del 2016: <b>$6,450.00 MXN</b></p>
			<form action="http://mpago.la/fTyx">
			<button type="submit" class="btn btn-primary" id="Button1">
				<span class="glyphicon glyphicon-credit-card"></span> Mercado Pago
			</button>
		</form>
	</div>

	<div class="col-xs-6">
		<h2>Pago para el público en general</h2>
		<h3>$8,500.00 MXN</h3>
		<p>Hasta el 21 de diciembre del 2016: <b>$7,480.00 MXN</b></p>
		<form action="http://mpago.la/VBCO">
			<button type="submit" class="btn btn-primary" id="Button1">
				<span class="glyphicon glyphicon-credit-card"></span> Mercado Pago
			</button>
		</form>
	</div>


		<p style="padding-top: 200px">Para cualquier aclaración no dude en ponerse en contacto a través del siguiente correo electrónico: educacion.continua@cib.org.mx</p>

	@stop
