<?php
function displayBoard($board)
{
  $line_one = "     |     |     \n";
  $line_two = "  " . $board[0][0] . "  |  " . $board[0][1] . "  |  " . $board[0][2] . "  \n";
  $line_three = "_____|_____|_____\n";
  $line_four = "     |     |     \n";
  $line_five = "  " . $board[1][0] . "  |  " . $board[1][1] . "  |  " . $board[1][2] . "  \n";
  $line_six = "_____|_____|_____\n";
  $line_seven = "     |     |     \n";
  $line_eight = "  " . $board[2][0] . "  |  " . $board[2][1] . "  |  " . $board[2][2] . "  \n";
  $line_nine = "     |     |     \n";

  echo "\n" . $line_one . $line_two . $line_three . $line_four . $line_five . $line_six . $line_seven . $line_eight . $line_nine;
}
