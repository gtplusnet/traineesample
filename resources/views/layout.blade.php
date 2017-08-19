<header>
	THIS IS THE HEADER
	@if(session("login") == true)
		<div>Hi, you are logged in. <a href='/logout'>LOGOUT</a></div>
	@else
		<div>Hi, guest!</div>
	@endif
</header>

<nav>
	<a href="/">HOMEPAGE</a>
	<a href="/crud">CRUD PAGE</a>
	<a href="/login">LOGIN PAGE</a>
</nav>

<div style="border: 1px solid #eee; padding: 30px; margin: 30px; background-color: #fafafa">
	@yield("content")
</div>

<footer>
kd;ka;dka;lka;lkd;ak;ak;ak
	THIS IS THE FOOTER 
</footer>