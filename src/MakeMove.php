<?php
function makeMove(&$board, &$turn)
{
  $playerNumber = $turn == 1 ? 1 : 2;
  $move = readline("\nPlayer $playerNumber, please pick a cell from 1 to 9:\n");
  switch ($move) {
    case "1":
      checkIfCellIsValid($board, 0, 0, $turn);
      break;
    case "2":
      checkIfCellIsValid($board, 0, 1, $turn);
      break;
    case "3":
      checkIfCellIsValid($board, 0, 2, $turn);
      break;
    case "4":
      checkIfCellIsValid($board, 1, 0, $turn);
      break;
    case "5":
      checkIfCellIsValid($board, 1, 1, $turn);
      break;
    case "6":
      checkIfCellIsValid($board, 1, 2, $turn);
      break;
    case "7":
      checkIfCellIsValid($board, 2, 0, $turn);
      break;
    case "8":
      checkIfCellIsValid($board, 2, 1, $turn);
      break;
    case "9":
      checkIfCellIsValid($board, 2, 2, $turn);
      break;
  }
}

function checkIfCellIsValid(&$board, $a, $b, &$turn)
{
  if ($board[$a][$b] != "X" && $board[$a][$b] != "O") {
    $board[$a][$b] = $turn == 1 ? "X" : "O";
    $turn *= -1;
  } else {
    echo "That cell is already taken!\n";
  }
}
