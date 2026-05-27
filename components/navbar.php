<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="index.php">
                <img src="img/logo2.png" class="logo-img" alt="" title="Rupankan archo interiors">
            </a>
        </div>

        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">

                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php">
                        <span class="rolling-text">Home</span>
                    </a>
                </li>

                <!-- About -->
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'about.php') ? 'active' : '' ?>" href="about.php">
                        <span class="rolling-text">About</span>
                    </a>
                </li>

                <!-- Services -->
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'services.php') ? 'active' : '' ?>" href="services.php">
                        <span class="rolling-text">Services</span>
                    </a>
                </li>

                <!-- Portfolio -->
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'portfolio.php') ? 'active' : '' ?>" href="portfolio.php">
                        <span class="rolling-text">Portfolio</span>
                    </a>
                </li>

                <!-- Pages Dropdown -->
                <!-- <li class="nav-item dropdown <?= in_array($currentPage, ['team.php','team-details.php','pricing.php','testimonials.php','gallery-image.php','gallery-video.php','faq.php','404.php']) ? 'active' : '' ?>">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">
                        <span class="rolling-text">Pages</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="team.php" class="dropdown-item">Team</a></li>
                        <li><a href="team-details.php" class="dropdown-item">Team Details</a></li>
                        <li><a href="pricing.php" class="dropdown-item">Pricing</a></li>
                        <li><a href="testimonials.php" class="dropdown-item">Testimonials</a></li>
                        <li><a href="gallery-image.php" class="dropdown-item">Image Gallery</a></li>
                        <li><a href="gallery-video.php" class="dropdown-item">Video Gallery</a></li>
                        <li><a href="faq.php" class="dropdown-item">FAQ</a></li>
                        <li><a href="404.php" class="dropdown-item">404 Page</a></li>
                    </ul>
                </li> -->

                <!-- Blog Dropdown -->

                    <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'blog.php') ? 'active' : '' ?>" href="blog.php">
                        <span class="rolling-text">Blog</span>
                    </a>
                </li>


                <!-- <li class="nav-item dropdown <?= in_array($currentPage, ['blog.php']) ? 'active' : '' ?>">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">
                        <span class="rolling-text">Blog</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="blog.php" class="dropdown-item">Blog 01</a></li>
                        <li><a href="blog2.php" class="dropdown-item">Blog 02</a></li>
                        <li><a href="post.php" class="dropdown-item">Single Post</a></li>
                    </ul>
                </li> -->

                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="contact.php">
                        <span class="rolling-text">Contact</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
