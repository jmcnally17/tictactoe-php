<?php
include_once "src/DisplayBoard.php";

use PHPUnit\Framework\TestCase;

final class DisplayBoardTest extends TestCase
{
  public function testPrintsBoardContents()
  {
    $board = [["X", "2", "3"], ["O", "O", "X"], ["X", "8", "9"]];
    $lineOne = "     |     |     \n";
    $lineTwo = "  X  |  2  |  3  \n";
    $lineThree = "_____|_____|_____\n";
    $lineFour = "     |     |     \n";
    $lineFive = "  O  |  O  |  X  \n";
    $lineSix = "_____|_____|_____\n";
    $lineSeven = "     |     |     \n";
    $lineEight = "  X  |  8  |  9  \n";
    $lineNine = "     |     |     \n";
    $boardString = "\n" . $lineOne . $lineTwo . $lineThree . $lineFour . $lineFive . $lineSix . $lineSeven . $lineEight . $lineNine;
    $this->expectOutputString($boardString);
    displayBoard($board);
  }
}
