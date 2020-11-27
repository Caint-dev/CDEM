<?php
session_start(); // start up your PHP session! 
?>

<?php $title = "Créer" ?>
<?php ob_start(); ?>

<form class="formCreate" action="index.php?action=waitingRoom" method="POST">

  <div id="partyBlock">
    <h1>Création d'une partie</h1>

    <div class="choices">
      <div class="choice">
        <button class="buttonChoice" type="button" id="Privé" onclick="buttonClicked('Privé')">
          <p>Privé</p>
        </button>
        <button class="buttonChoice " type="button" id="Public" onclick="buttonClicked('Public')">
          <p>Public</p>
        </button>
      </div>

      <div class="code choice">
        <p>Joueurs</p>
        <div class="Scrollbar">
<<<<<<< Updated upstream
          <input type="range" min="3" max="10" class="slider" id="ScrollPlayers" oninput="ScrollValue('ScrollPlayers','ValuePlayers')" autocomplete="off">
=======
          <input type="range" name ="Players" min="3" max="10" value="6" class="slider" id="ScrollPlayers" oninput="ScrollValue('ScrollPlayers','ValuePlayers')" autocomplete="off">
>>>>>>> Stashed changes
          <p id="ValuePlayers" class="scrollValue">6</p>
        </div>
      </div>

      <div class="code choice">
        <p>Score</p>
        <div class="Scrollbar">
<<<<<<< Updated upstream
          <input name="Titre" type="range" min="50" step="25" max="200" value="100" class="slider" id="ScrollScore" oninput="ScrollValue('ScrollScore','ValueScore')" autocomplete="off">
          <p id="ValueScore" class="scrollValue">125</p>
=======
          <input name="Score" type="range" min="50" step="25" max="200" value="100" class="slider" id="ScrollScore" oninput="ScrollValue('ScrollScore','ValueScore')" autocomplete="off">
          <p id="ValueScore" class="scrollValue">100</p>
>>>>>>> Stashed changes
        </div>
      </div>
    </div>

  </div>

  <div class="buttons">
    <button class="button" type="button" name="button" onclick="window.location.href='index.php';">
      <p>Retour</p>
    </button>
    <button class="button" type="submit" name="button" onclick="window.location.href='index.php?action=createParty&varia';">
      <p>Créer</p>
    </button>
  </div>

</form>

<?php $content = ob_get_clean(); ?>
<?php $css = "<link href=\"public/css/game.css?v=<?php echo time(); ?>\" rel=\"stylesheet\" />" ?>
<?php $js = "<script src=\"public/js/PartySettings.js\"></script>" ?>
<?php require('template.php'); ?>