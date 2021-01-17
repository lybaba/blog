<?php

$page = $_GET['page'];


if ($page == "about") {
    include("about.php");
} else if ($page == "blog") {
    include("blog.php");
} else if ($page == "post-details") {
    include("post-details.php");
} else if ($page == "contact") {
    include("contact.php");
} else {
    include("section.php");
}
