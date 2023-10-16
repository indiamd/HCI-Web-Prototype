<nav class="nav2">
    <a class="<?php
        if($path_parts['filename']=="messaging"){
            print 'activePage';
        } 
    ?>" href="home.php">Home</a>

    <a class="<?php
        if($path_parts['filename']=="index"){
            print 'activePage';
        } 
    ?>" href="info.php">More Info</a>

    <a class="<?php
        if($path_parts['filename']=="profile"){
            print 'activePage';
        } 
    ?>" href="feed.php">Feed</a>

</nav>