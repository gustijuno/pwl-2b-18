<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Catalog</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-video-catalog.css">
<!--

TemplateMo 552 Video Catalog

https://templatemo.com/tm-552-video-catalog

-->
</head>
<body>
	<div class="tm-page-wrap mx-auto">
		<div class="position-relative">
			<div class="potition-absolute tm-site-header">
				<div class="container-fluid position-relative">
					<div class="row">						
                        <div class="col-7 col-md-4">
                            <a href="index.html" class="tm-bg-black text-center tm-logo-container">
                                <i class="fas fa-video tm-site-logo mb-3"></i>
                                <h1 class="tm-site-name">Video Catalog</h1>
                            </a>
                        </div>
                        <div class="col-5 col-md-8 ml-auto mr-0">
                            <div class="tm-site-nav">
                                <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed" type="button"
                                        data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item {{Request::path() === 'home' ? 'active' : ''}}">
                                                <a class="nav-link tm-nav-link" href="/home">Home</a>
                                            </li>
                                            <li class="nav-item {{Request::path() === 'news' ? 'active' : ''}}">
                                                <a class="nav-link tm-nav-link" href="/news">news</a>
                                            </li>
                                            <li class="nav-item {{Request::path() === 'about' ? 'active' : ''}}">
                                                <a class="nav-link tm-nav-link" href="/about">About <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item {{Request::path() === 'posts' ? 'active' : ''}}">
                                                <a class="nav-link tm-nav-link" href="/posts">comments</a>
                                            </li>
                                            <li class="nav-item {{Request::path() === 'programmain' ? 'active' : ''}}">
                                                <a class="nav-link tm-nav-link" href="/programmain">program</a>
                                            </li>
                                            <li class="nav-item {{Request::path() === 'productmains' ? 'active' : ''}}">
                                                <a class="nav-link tm-nav-link" href="productmains">product</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<div class="tm-welcome-container tm-fixed-header tm-fixed-header-2">
				<div class="text-center">
					<p class="pt-5 px-3 tm-welcome-text tm-welcome-text-2 mb-1 mt-lg-0 mt-5 text-white mx-auto">UTS</p>                	
				</div>         
                <a href=" {{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf"><button type="button" class="btn btn-warning">Warning</button></a>
            </div>

            <div id="tm-fixed-header-bg"></div> <!-- Header image -->
		</div>