<div class="container marginbot-100" >
	<ul id="gn-menu" class="gn-menu-main">
		<li class="gn-trigger">
			<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
			<nav class="gn-menu-wrapper">
				<div class="gn-scroller">
					<ul class="gn-menu">
						<li class="gn-search-item">
							<input placeholder="Search" type="search" class="gn-search">
							<a class="gn-icon gn-icon-search"><span>Search</span></a>
						</li>
						<li>
							<a href="#about" class="gn-icon gn-icon-download">About</a>
						</li>
						<li><a href="#service" class="gn-icon gn-icon-cog">Service</a></li>
						<li><a href="#works" class="gn-icon gn-icon-help">Works</a></li>
						<li>
							<a href="#contact" class="gn-icon gn-icon-archive">Contact</a>
						</li>
					</ul>
					</div><!-- /gn-scroller -->
				</nav>
			</li>
			<li><a href="/"><i>Songs</i></a></li>
			<li><a href="songs/read"><i>Add Songs</i></a></li>
			<li class="hidden-xs">
				{{-- <ul class="company-social">
					<li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
					<li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
				</ul> --}}
			</li>
			{{-- <li>
				<input placeholder="Search" type="search" class="gn-search gn-icon gn-icon-search">
				
			</li> --}}
			{{-- <li style="margin-right: 40px;">
				<input class="form-control gn-search gn-icon gn-icon-search" placeholder="Search" name="srch-term" id="srch-term" type="text">
			</li>
			<li>
				<input type="submit" class="gn-icon gn-icon-search" name="ssdf" value="sdaf">
			</li> --}}
			<li style="margin-right: 40px;">
			<form action="/songs" method="POST"  class="form-inline" role="search">
				{{ csrf_field() }}
				<div>
					<input type="text" class="form-control" name="song"
					placeholder="Search Song / Movie">
					
					<button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
					</button>
				</div>
			</form>
			</li>
			{{-- <li style="margin-right: 40px;">
				<input type="submit" name="" class="btn btn-default">
			</li> --}}
		</ul>
		
		{{-- <nav class="navbar navbar-default navbar-fixed-top navbar-color">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Ba<span class="logo-dec">ker</span></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#main-header">Home</a></li>
						<li class=""><a href="#feature">About</a></li>
						<li class=""><a href="#service">Services</a></li>
						<li class=""><a href="#portfolio">Portfolio</a></li>
						<li class=""><a href="#testimonial">Testimonial</a></li>
						<li class=""><a href="#blog">Blog</a></li>
						<li class=""><a href="#contact">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav> --}}
		
	</div>