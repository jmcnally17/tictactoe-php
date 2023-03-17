<?php
include "./src/HasAPlayerWon.php";

use PHPUnit\Framework\TestCase;

final class HasAPlayerWonTest extends TestCase
{
  public function testReturnsFalseWhenNobodyHasWon(): void
  {
    $board = [["1", "2", "3"], ["4", "5", "6"], ["7", "8", "9"]];
    $this->assertFalse(hasAPlayerWon($board));
  }

  public function testReturnsTrueWhenFirstRowIsTaken(): void
  {
    $board = [["X", "X", "X"], ["4", "5", "6"], ["7", "8", "9"]];
    $this->assertTrue(hasAPlayerWon($board));
  }

  public function testReturnsTrueWhenSecondRowIsTaken(): void
  {
    $board = [["1", "2", "3"], ["O", "O", "O"], ["7", "8", "9"]];
    $this->assertTrue(hasAPlayerWon($board));
  }

  public function testReturnsTrueWhenThirdRowIsTaken(): void
  {
    $board = [["1", "2", "3"], ["4", "5", "6"], ["X", "X", "X"]];
    $this->assertTrue(hasAPlayerWon($board));
  }

  public function testReturnsTrueWhenFirstColumnIsTaken(): void
  {
    $board = [["O", "2", "3"], ["O", "5", "6"], ["O", "8", "9"]];
    $this->assertTrue(hasAPlayerWon($board));
  }

  public function testReturnsTrueWhenSecondColumnIsTaken(): void
  {
    $board = [["1", "X", "3"], ["4", "X", "6"], ["7", "X", "9"]];
    $this->assertTrue(hasAPlayerWon($board));
  }

  public function testReturnsTrueWhenThirdColumnIsTaken(): void
  {
    $board = [["1", "2", "O"], ["4", "5", "O"], ["7", "8", "O"]];
    $this->assertTrue(hasAPlayerWon($board));
  }

  public function testReturnsTrueWhenFirstDiagonalIsTaken(): void
  {
    $board = [["X", "2", "3"], ["4", "X", "6"], ["7", "8", "X"]];
    $this->assertTrue(hasAPlayerWon($board));
  }

  public function testReturnsTrueWhenSecondDiagonalIsTaken(): void
  {
    $board = [["1", "2", "O"], ["4", "O", "6"], ["O", "8", "9"]];
    $this->assertTrue(hasAPlayerWon($board));
  }
}
