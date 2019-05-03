@include('layouts.header')
        <nav class="navbar navbar-expand-md sticky-top navbar-light navbar-laravel">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Tickets') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
					
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
					
						</li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block sidebar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('tickets.overview') }}" class="nav-link">Tickets</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                    </ul>
                </nav>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-4">
                    @yield('content')
				</main>
				
				<footer class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-4">
					<?php echo date('Y'); ?> &copy; Copyright {{ config('app.name', 'Tickets') }} | All Rights Reserved
				<footer>
            </div>
		</div>
		
		

@include('layouts.footer')