<?php
include "./DisplayBoard.php";
include "./MakeMove.php";
include "./HasAPlayerWon.php";

echo "Welcome to Tic-Tac-Toe!\n";
$board = [["1", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]];
$turn = 1;

while (true) {
  displayBoard($board);
  $turn == 1 ? makeMove($board, "X") : makeMove($board, "O");
  if (hasAPlayerWon($board)) {
    echo "\nCongratulations player " . ($turn == 1 ? 1 : 2) . ", you win!\n";
    break;
  }
  $turn *= -1;
}
