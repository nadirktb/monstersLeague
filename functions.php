<?php

require __DIR__ . '/monster.php';

function getMonsters()
{
    $monster1 = new Monster('Bodoi', 25, 1000, 500);
    $monster2 = new Monster('Siriush', 30, 120, 300);
    $monster3 = new Monster('Domovoi', 55, 300, 250);
    //var_dump($monster1, $monster2);
    return 
       array ($monster1, $monster2, $monster3);
}

/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function fight(Monster $firstMonster, Monster $secondMonster)
{
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