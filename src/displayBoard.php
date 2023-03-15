<?php
function displayBoard($board)
{
  $lineOne = "     |     |     \n";
  $lineTwo = "  " . $board[0][0] . "  |  " . $board[0][1] . "  |  " . $board[0][2] . "  \n";
  $lineThree = "_____|_____|_____\n";
  $lineFour = "     |     |     \n";
  $lineFive = "  " . $board[1][0] . "  |  " . $board[1][1] . "  |  " . $board[1][2] . "  \n";
  $lineSix = "_____|_____|_____\n";
  $lineSeven = "     |     |     \n";
  $lineEight = "  " . $board[2][0] . "  |  " . $board[2][1] . "  |  " . $board[2][2] . "  \n";
  $lineNine = "     |     |     \n";

  echo "\n" . $lineOne . $lineTwo . $lineThree . $lineFour . $lineFive . $lineSix . $lineSeven . $lineEight . $lineNine;
}
