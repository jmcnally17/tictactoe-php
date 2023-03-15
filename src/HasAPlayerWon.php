<?php
function hasAPlayerWon($board)
{
  $conditionOne = $board[0][0] == $board[0][1] && $board[0][0] == $board[0][2];
  $conditionTwo = $board[1][0] == $board[1][1] && $board[1][0] == $board[1][2];
  $conditionThree = $board[2][0] == $board[2][1] && $board[2][0] == $board[2][2];
  $conditionFour = $board[0][0] == $board[1][0] && $board[0][0] == $board[2][0];
  $conditionFive = $board[0][1] == $board[1][1] && $board[0][1] == $board[2][1];
  $conditionSix = $board[0][2] == $board[1][2] && $board[0][2] == $board[2][2];
  $conditionSeven = $board[0][0] == $board[1][1] && $board[0][0] == $board[2][2];
  $conditionEight = $board[0][2] == $board[1][1] && $board[0][2] == $board[2][0];
  return $conditionOne || $conditionTwo || $conditionThree || $conditionFour || $conditionFive || $conditionSix || $conditionSeven || $conditionEight;
}
