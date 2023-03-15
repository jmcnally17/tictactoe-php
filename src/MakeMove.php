<?php
function makeMove(&$board, $symbol)
{
  $playerNumber = $symbol == "X" ? 1 : 2;
  $move = readline("\nPlayer $playerNumber, please pick a cell from 1 to 9:\n");
  switch ($move) {
    case "1":
      $board[0][0] = $symbol;
      break;
    case "2":
      $board[0][1] = $symbol;
      break;
    case "3":
      $board[0][2] = $symbol;
      break;
    case "4":
      $board[1][0] = $symbol;
      break;
    case "5":
      $board[1][1] = $symbol;
      break;
    case "6":
      $board[1][2] = $symbol;
      break;
    case "7":
      $board[2][0] = $symbol;
      break;
    case "8":
      $board[2][1] = $symbol;
      break;
    case "9":
      $board[2][2] = $symbol;
      break;
  }
}
