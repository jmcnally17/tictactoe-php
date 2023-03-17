<?php
include_once "src/MakeMove.php";

use PHPUnit\Framework\TestCase;

final class MakeMoveTest extends TestCase
{
  public function testAsksPlayer1ToMove()
  {
    $board = [["1", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]];
    $turn = 1;
    $this->expectOutputString("\nPlayer 1, please pick a cell from 1 to 9:\n");
    makeMove($board, $turn);
  }
}
