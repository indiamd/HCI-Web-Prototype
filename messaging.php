<?php include 'top.php' ?>
<main class="messaging">

<div class="tab">
  <button class="tablinks" onclick="openMessage(event, 'Hannah')" >Hannah</button>
  <button class="tablinks" onclick="openMessage(event, 'Oliver')">Oliver</button>
  <button class="tablinks" onclick="openMessage(event, 'Ava')">Ava</button>
  <button class="tablinks" onclick="openMessage(event, 'Finn')">Finn</button>
  <button class="tablinks" onclick="openMessage(event, 'Greg')">Greg</button>
</div>

<div id="Hannah" class="tabcontent">
  <h3>Hannah</h3>
  <p>Hey, I saw you studied in Spain!</p>
</div>
<div id="Oliver" class="tabcontent">
  <h3>Oliver</h3>
  <p>Hello, could you tell me more about your experience?</p>
</div>
<div id="Ava" class="tabcontent">
  <h3>Ava</h3>
  <p>Hi, nice to meet you</p>
</div>
<div id="Finn" class="tabcontent">
  <h3>Finn</h3>
  <p>How was hour study abroad</p>
</div>
<div id="Greg" class="tabcontent">
  <h3>Greg</h3>
  <p>Hey</p>
</div>

<script>
function openMessage(evt, name) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(name).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</main>

</body>