<?php
function makeMove(&$board)
{
  $move = readline("\nPlease enter the number of the cell you would like to take:\n");
  switch ($move) {
    case "1":
      $board[0][0] = "X";
      break;
    case "2":
      $board[0][1] = "X";
      break;
    case "3":
      $board[0][2] = "X";
      break;
    case "4":
      $board[1][0] = "X";
      break;
    case "5":
      $board[1][1] = "X";
      break;
    case "6":
      $board[1][2] = "X";
      break;
    case "7":
      $board[2][0] = "X";
      break;
    case "8":
      $board[2][1] = "X";
      break;
    case "9":
      $board[2][2] = "X";
      break;
  }
}
