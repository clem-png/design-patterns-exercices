<?php

use App\Config;

require('../vendor/autoload.php');


# TODO: Récuperer une instance de Config

$config = Config::getSetting();

# Afficher une valeur contenu dans config.php
echo $config->getValue('db')['host']."\n";

# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques
$config2 = Config::getSetting();
var_dump($config === $config2);