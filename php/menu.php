<?php
$page = "home";

if (isset($_GET["page"])) {
  $page = $_GET['page'];
}

?>
<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Stand Blog<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?php if ($page == 'home') echo 'active';?>">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item <?php if ($page == 'about') echo 'active';?>">
                <a class="nav-link" href="index.php?page=about">About Us</a>
              </li>
              <li class="nav-item <?php if ($page == 'blog') echo 'active';?>">
                <a class="nav-link" href="index.php?page=blog">Blog Entries</a>
              </li>
              <li class="nav-item <?php if ($page == 'post-details') echo 'active';?>">
                <a class="nav-link" href="index.php?page=post-details">Post Details</a>
              </li>
              <li class="nav-item <?php if ($page == 'contact') echo 'active';?>">
                <a class="nav-link" href="index.php?page=contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>