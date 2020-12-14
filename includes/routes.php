<?php
// Déclaration de la page d'accueil
$fmk->initIndexRoute("home", "", "homeController.php");

//cette ligne crée une route les arguments sont le nom, l'adresse lisible, le chemin vers le contrôleur et l'action
$fmk->initRoute("createGame", "create-game", "gameController.php", "create/");
$fmk->initRoute("joinGame", "join-game", "gameController.php", "join/");
$fmk->initRoute("delete-username", "delete-username", "gameController.php", "deleteUsername");

$fmk->initRoute("connect", "connect", "playerController.php", "connect");
$fmk->initRoute("disconnect", "disconnect", "playerController.php", "disconnect");
$fmk->initRoute("forgotten-password", "forgotten-password", "playerController.php", "forgottenPassword");

$fmk->initRoute("create-room", "create-room", "gameController.php", "createRoom");
$fmk->initRoute("join-room", "join-room", "gameController.php", "joinRoom");
$fmk->initRoute("room", "room", "gameController.php", "room/");

$fmk->initRoute("get-players", "get-players", "gameController.php", "getPlayers/");
$fmk->initRoute("delete-player", "delete-player", "gameController.php", "deletePlayer/");
$fmk->initRoute("delete-game", "delete-game", "gameController.php", "deleteGame/");
$fmk->initRoute("new-host", "new-host", "gameController.php", "newHost/");

$fmk->initRoute("game", "game", "gameController.php", "playGame");
