<?php
require('../vendor/autoload.php');

use App\MySqlQueryBuilder;
use App\LiteralBuilder;

// Test MySqlQueryBuilder
$mysqlBuilder = new MySqlQueryBuilder();
$query = $mysqlBuilder
    ->select(['name', 'email'])
    ->from('users')
    ->where('age > 18')
    ->limit(10)
    ->getSQL();

echo "MySQL Query: " . $query . "\n\n";

// Test LiteralBuilder
$literalBuilder = new LiteralBuilder();
$literal = $literalBuilder
    ->select(['nom', 'email'])
    ->from('utilisateurs')
    ->where('age > 18')
    ->limit(10)
    ->getSQL();

echo "Requête en français: " . $literal . "\n";