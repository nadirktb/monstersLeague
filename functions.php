<?php

require __DIR__ . '/monster.php';

function getMonsters() {
    $bdd = new PDO('mysql:host=localhost;dbname=monsterleague', 'root', '');
    $recuperation = $bdd->query('SELECT id, name, age, life, strength FROM monsters');
    while ($donnees = $recuperation->fetch()) {
        $monstersTab[] = new Monster($donnees['id'], $donnees['name'], $donnees['age'], $donnees['life'], $donnees['strength']); 
    }
    return $monstersTab;
}

/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function fight(Monster $firstMonster, Monster $secondMonster) {
    $firstMonsterLife = $firstMonster->getlife();
    $secondMonsterLife = $secondMonster->getlife();

    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster->getstrength();
        $secondMonsterLife = $secondMonsterLife - $firstMonster->getstrength();
    }

    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }

    return array(
        'winner' => $winner,
        'looser' => $looser,
    );
}