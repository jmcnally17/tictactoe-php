<?php
include_once "src/MakeMove.php";

use PHPUnit\Framework\TestCase;

final class CheckIfCellIsValidTest extends TestCase
{
  public function testFillsCellWithX()
  {
    $board = [["1", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]];
    $a = 0;
    $b = 0;
    $turn = 1;
    checkIfCellIsValid($board, $a, $b, $turn);
    $this->assertSame([["X", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]], $board);
  }

  public function testSwitchesTurnToMinus1()
  {
    $board = [["1", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]];
    $a = 0;
    $b = 0;
    $turn = 1;
    checkIfCellIsValid($board, $a, $b, $turn);
    $this->assertSame(-1, $turn);
  }

  public function testFillsCellWithO()
  {
    $board = [["1", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]];
    $a = 0;
    $b = 0;
    $turn = 2;
    checkIfCellIsValid($board, $a, $b, $turn);
    $this->assertSame([["O", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]], $board);
  }

  public function testSwitchesTurnTo1()
  {
    $board = [["1", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]];
    $a = 0;
    $b = 0;
    $turn = -1;
    checkIfCellIsValid($board, $a, $b, $turn);
    $this->assertSame(1, $turn);
  }

  public function testPrintsCellIsTakenByX()
  {
    $board = [["X", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]];
    $a = 0;
    $b = 0;
    $turn = -1;
    checkIfCellIsValid($board, $a, $b, $turn);
    $this->expectOutputString("That cell is already taken!\n");
  }

  public function testPrintsCellIsTakenByO()
  {
    $board = [["O", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]];
    $a = 0;
    $b = 0;
    $turn = 1;
    checkIfCellIsValid($board, $a, $b, $turn);
    $this->expectOutputString("That cell is already taken!\n");
  }
}
