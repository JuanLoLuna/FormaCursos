@extends('layout')

	@section('header')
		Precios y formas de pago
	@stop

	@section('PageTitle')
		Precios y formas de pago
	@stop

	@section('InitialMessage')
		A continuación encontrará las instrucciones para las diferentes formas de pago del curso Planeación y Diseño de Instalaciones Hospitalarias
	@stop

	@section('FormContent')
	
	<h3>Precio para socios del Colegio de Ingenieros Biomédicos de México</h3>
	<p>Precio del curso completo: <b>$7,2250.00 MXN</b></p>
	<p>Descuento por pronto pago del <b>12%</b> si se realiza antes del 21 de diciembre del 2016: <b>$6,450 MXN</b></p>

	<h3>Pago para socios mediante mercado pago</h3>
	<p>De click en el siguiente botón para realizar el pago con tarjeta de crédito o transferencia bancaria</p>
	<form action="http://mpago.la/fTyx">
		<button type="submit" class="btn btn-primary" id="Button1">
			<span class="glyphicon glyphicon-credit-card"></span> Mercado Pago
		</button>
	</form>

	<h3>Precio para el público en general</h3>
	<p>Precio del curso completo: <b>$8,500.00 MXN</b></p>
	<p>Descuento por pronto pago del <b>12%</b> si se realiza antes del 21 de diciembre del 2016: <b>$7,480 MXN</b></p>

	<h3>Pago para público en general mediante mercado pago</h3>
	<p>De click en el siguiente botón para realizar el pago con tarjeta de crédito o transferencia bancaria</p>
	<form action="http://mpago.la/VBCO">
		<button type="submit" class="btn btn-primary" id="Button1">
			<span class="glyphicon glyphicon-credit-card"></span> Mercado Pago
		</button>
	</form>

	<h3>Precio para extranjeros</h3>
	<p>Precio del curso completo: <b>$420.00 USD</b></p>

	<h3>Pago mediante depósito a cuenta bancaria</h3>
	<p>A continuación se enlistan los datos para realizar un depósito a la cuenta bancaria</p>
	<ul>
		<li><b>Banco:</b> Banamex</li>
		<li><b>Plaza:</b> Perisur, D.F.</li>
		<li><b>Número de sucursal:</b> 7008</li>
		<li><b>Número de cuenta:</b> 2573249</li>
		<li><b>Titular de la cuenta:</b> Escala Service and Logistics, S.A. de C.V.</li>
		<li><b>Tipo de cuenta:</b> Cheques</li>
		<li><b>Moneda:</b> Pesos</li>
	</ul>

	<p>Para cualquier aclaración no dude en ponerse en contacto a través del siguiente correo electrónico: educacion.continua@cib.org.mx</p>

	@stop