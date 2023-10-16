<nav class="nav">
    <a class= "mail <?php
        if($path_parts['filename']=="messaging"){
            print 'activePage';
        } 
    ?>" href="messaging.php"><figure><img src="images/mail.png" alt= "mail"><figcaption>Mail</figcaption></figure></a>

    <a class="globe <?php
        if($path_parts['filename']=="index"){
            print 'activePage';
        } 
    ?>" href="index.php"><figure><img src="images/globe.webp" alt= "globe"><figcaption>New Location</figcaption></figure></a>

    <a class="profilepic <?php
        if($path_parts['filename']=="profile"){
            print 'activePage';
        } 
    ?>" href="profile.php"><figure><img src="images/profile.png" alt= "profile"><figcaption>Profile</figcaption></figure></a>

</nav>
