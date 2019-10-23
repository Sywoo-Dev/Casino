<?php $page = 2; include "../inc/header.php" ?>
    <script src="shop.js"></script>

    <br><br><br>
    <div class="container">
        <form>

            <label for="fname">Prénom</label>
            <input type="text" id="fname" name="firstname" placeholder="Entrez votre prénom">

            <label for="lname">Nom</label>
            <input type="text" id="lname" name="lastname" placeholder="Entrez votre nom">

            <label for="country">Pays</label>
            <select id="country" name="country">
              <option value="australia">Australie</option>
              <option value="canada">Canada</option>
              <option value="usa">USA</option>
              <option value="usa">France</option>
              <option value="usa">Espagne</option>
              <option value="usa">Italie</option>
              <option value="usa">Allemagne</option>
              <option value="usa">Belgique</option>
              <option value="usa">Autre</option>
            </select>

            <label for="subject">Message</label>
            <textarea id="subject" name="subject" placeholder="Votre message" style="height:150px"></textarea>

            <button class="registerbtn" onclick="document.getElementById("overlay-container").style.display = "block";">Envoyer</button>

        </form>
    </div>

    <div id="overlay-container">
      <div id="overlay">
        <p>Merci, votre message a bien été prit en compte ^^</p>
        <button class="signin" onclick="document.getElementById("overlay-container").style.display = "none";">Fermer</div>
      </div>
    </div>
<?php include "../inc/footer.php" ?>
