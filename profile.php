<?php include 'top.php'?>
<main class="profile">

<h2>My Profile</h2>

<section class="profiletop">
    <img src="images/profile.webp">
    <section>
        <p>Tyler Tea <br> @tyler123 <br>University of Miami <br> Speaks: English, Spanish </p>
        <p>Hi! I'm Tyler and I love to travel </p>
        <p class="edit">Edit Profile</p>
    </section>
</section>

<div class="profiletab">
  <button class="tablinks" onclick="openPosts(event, 'myposts')" id="defaultOpen">My Posts</button>
  <button class="tablinks" onclick="openPosts(event, 'savedposts')">Saved Posts</button>
</div>

<div id="myposts" class= "profiletabcontent">
   <section class="post"> 
        <img src="images/tyler.jpg">
        <section class= "feedcaption">
            <p>tyler123</p>
            <p>At the colloseum</p>
        </section>
    </section>
</div>

<div id="savedposts" class="profiletabcontent">
    <section class="post"> 
        <img src="images/rome3.jpg">
        <section class= "feedcaption">
            <p>i.am.john</p>
            <p>Field Trip!</p>
            <p><img src="images/save.png">
            <img src="images/mail.webp"></p>
        </section>
    </section>
</div>

<script>
function openPosts(evt, post) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("profiletabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("profiletablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(post).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();

</script>

</main>
</body>