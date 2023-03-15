<?php
include "./DisplayBoard.php";
include "./MakeMove.php";

echo "Welcome to Tic-Tac-Toe!\n";
$board = [["1", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]];

while (true) {
  displayBoard($board);
  makeMove($board);
}
