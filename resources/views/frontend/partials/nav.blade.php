<!-- Top Bar - Set "white" or "dark" below -->
<div class="topbar-outer dark">
    <div class="topbar content-width">

        <!-- Logo -->
        <div class="table fullheight">
            <div class="table-cell fullheight middle">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img alt="" src="{{ asset('frontend/images/topbar/logo_white.png') }}" height="17" />
                    </a>
                </div>
            </div>
        </div>
        <!-- END Logo -->

        <!-- Social Icons -->
        <ul class="topsocial">
            <li><a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Twitter</div></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Google+</div></a></li>
        </ul>
        <!-- END Social Icons -->

        <!-- Main Navigation -->
        <ul class="topnav">
            <li><a href="index.html" class="current">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="portfolio.html" class="drop">Portfolio</a>
                <ul>
                    <li><a href="portfolio.html">4 Column Portfolio</a></li>
                    <li><a href="portfolio-3-columns.html">3 Column Portfolio</a></li>
                    <li><a href="portfolio-detail.html">Portfolio Detail</a></li>
                </ul>
            </li>
            <li><a href="blog.html" class="drop">Blog</a>
                <ul>
                    <li><a href="blog.html">Article List</a></li>
                    <li><a href="blog-post.html">Blog Post</a></li>
                </ul>
            </li>
            <li><a href="shortcodes.html">Shortcodes</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <!-- END Main Navigation -->

        <!-- Mobile Navigation -->
        <!-- Show/Hide Menu Button -->
        <a href="#" class="mobilenav-click">
            <div class="mobilenav-button-container">
                <div class="mobilenav-button-inner">
                    <div class="mobilenav-button"></div>
                </div>
            </div>
        </a>
        <!-- END Show/Hide Menu Button -->

        <!-- Navigation Menu (Populated using jQuery) -->
        <div class="mobilenav-container">
            <ul class="mobilenav">
            </ul>
        </div>
        <!-- END Navigation Menu
        <!-- END Mobile Navigation -->

    </div>
</div>
<!-- END Top Bar -->
