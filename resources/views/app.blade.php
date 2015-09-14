@include('includes.head')
<div id="container">
	<header class="group">
		<div>
			<a href="<?php echo url(); ?>">Home</a>
		</div>

		<nav>
			<?php if (Auth::user()) { ?>
				<ul>
					<li><a href="<?php echo url('dashboard'); ?>">Dashboard</a></li>
					<li><a href="<?php echo url('todos'); ?>">Todos</a></li>
					<li><a href="<?php echo url('auth/logout'); ?>">Logout (<?php echo Auth::user()->email; ?>)</a></li>
				</ul>

			<?php } else { ?>
			<ul>
				<li><a href="<?php echo url('auth/login'); ?>">Login</a></li>
				<li><a href="<?php echo url('auth/register'); ?>">Registreer</a></li>
			</ul>
			<?php } ?>
		</nav><!-- end nav -->
	</header>

	<div class="body">
		@yield('content')
	</div>
</div>
</body>
</html>