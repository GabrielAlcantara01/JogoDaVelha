<?php

function makeMove($board, $position, $player) {

// verifica se a posição está varia

if ($board [$position] === '') {
    $board [$position] = $player; // Rarca a posição com o simbolo do jogador

// Verifica se ha un ganhador
if (checkWinner ($board, $player)) {

return ['board' => $board, 'winner' => $player];
}
// Alterna o turno

$SESSION ['turn']++;
return ['board' => $board, 'winner' => null];
}else {
return ['error' => 'Posição já ocupada'];
}
}
Function checkWinner($board, $player) { 
// Define as combinações vencedoras
$winningCombinations = [
[0, 1, 2], [3, 4, 5], [6, 7, 8], // Linhas
[0, 3, 6], [ 1, 4, 7], [2, 5, 8], // Colunas 
[0, 4, 8], [2, 4, 6] // Diagonals
];
// Verifica se alguna combinação foi atingida
foreach ($winningCombinations as $combination) {
if ($board[$combination[0]] === $player &&
    $board[$combination[1]] === $player &&
    $board[$combination[2]] === $player) {
    return true;
}
}
return false;
}
?>