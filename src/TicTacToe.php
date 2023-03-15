<?php
include "./DisplayBoard.php";
include "./MakeMove.php";
include "./HasAPlayerWon.php";

echo "Welcome to Tic-Tac-Toe!\n";
$board = [["1", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]];
$turn = 1;

while (true) {
  displayBoard($board);
  makeMove($board, $turn);
  if (hasAPlayerWon($board)) {
    echo "\nCongratulations player " . ($turn == 1 ? 2 : 1) . ", you win!\n";
    break;
  }
}
