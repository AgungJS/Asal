@if (count($errors) > 0 )
<div class="alers alers-danger">
	<strong>Perhatian</strong>
	<br>
	<ul>
		@foreach ($error->all () as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<h1>Form Register<h1>
<form action="{{ url('register') }}" method="POST">
@csrf

Username: <input type="text" name="username" /><br/>
Password: <input type="Password" name="Password" /><br/>
Retype Password: <input type="password" name="password" name="password_confirmation" /><br/>

<input type="submit" value="Login" />
</form>