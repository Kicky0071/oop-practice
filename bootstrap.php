<?php

require_once __DIR__ . '/lib/Model/Ship.php';
require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/ShipLoader.php';
require_once __DIR__ . '/lib/Model/BattleResult.php';
require_once __DIR__ . '/lib/Service/Container.php';
require_once __DIR__ . '/lib/Model/RebelShip.php';

$config = array(
    'user' => 'thelia',
    'db' => 'mysql:host=localhost;dbname=oo_battle',
    'password' => 'thelia123'
);