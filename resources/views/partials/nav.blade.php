<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand marvel" href="#">LIBRARY MANAGEMENT SYSTEM</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
			@if(Auth::user())

					<ul class="nav navbar-nav">
						<li><a class="marvel" href="{{ url('/') }}">HOME</a></li>
						<li><a class="marvel" href="{{ url('books') }}">BOOKS</a></li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle marvel" data-toggle="dropdown" role="button" aria-expanded="false"> PEMINJAMAN <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('peminjaman.peminjaman') }}" class="marvel">PEMINJAMAN</a></li>
								<li><a href="{{ route('peminjaman.laporan') }}" class="marvel">LAPORAN PEMINJAMAN</a></li>
								<li><a href="{{ route('peminjaman.histori') }}" class="marvel">HISTORI</a></li>
							</ul>
						</li>
						

						<li class="dropdown">
							<a href="#" class="dropdown-toggle marvel" data-toggle="dropdown" role="button" aria-expanded="false"> SETTINGS <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('settings.book') }}" class="marvel">BOOK</a></li>
								<li><a href="{{ route('settings.category') }}" class="marvel">CATEGORY</a></li>
								<li><a href="{{ route('settings.shelf') }}" class="marvel">SHELF</a></li>
								<li><a href="{{ route('settings.fines') }}" class="marvel">FINES</a></li>
								<li><a href="{{ route('settings.student') }}" class="marvel">STUDENT</a></li>
								<li><a href="{{ route('settings.periode') }}" class="marvel">PERIODE</a></li>
							</ul>
						</li>
					</ul>

			@endif 

			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="{{ url('/auth/login') }}">LOGIN</a></li>
					<li><a href="{{ url('/auth/register') }}">REGISTER</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/auth/logout') }}">LOG OUT</a></li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>