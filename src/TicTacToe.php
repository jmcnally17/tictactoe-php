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
  if (hasAPlayerWon($board)) break;
  $turn *= -1;
}

echo "\nCongratulations player " . ($turn == 1 ? 1 : 2) . ", you win!\n";
