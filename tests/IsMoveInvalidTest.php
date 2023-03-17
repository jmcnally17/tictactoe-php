<?php
include_once "src/MakeMove.php";

use PHPUnit\Framework\TestCase;

final class IsMoveInvalidTest extends TestCase
{
  public function testReturnsFalseForASingleNumber()
  {
    $move = "4";
    $this->assertFalse(isMoveInvalid($move));
  }

  public function testReturnsFalseForASingleNumberWithWhitespace()
  {
    $move = "  4   ";
    $this->assertFalse(isMoveInvalid($move));
  }

  public function testRemovesWhitespace()
  {
    $move = "  4   ";
    isMoveInvalid($move);
    $this->assertSame("4", $move);
  }

  public function testReturnsTrueFor0()
  {
    $move = "0";
    $this->assertTrue(isMoveInvalid($move));
  }

  public function testReturnsTrueForANumberOfMoreThanOneDigit()
  {
    $move = "12";
    $this->assertTrue(isMoveInvalid($move));
  }

  public function testReturnsTrueForALetter()
  {
    $move = "s";
    $this->assertTrue(isMoveInvalid($move));
  }

  public function testReturnsTrueForASymbol()
  {
    $move = "%";
    $this->assertTrue(isMoveInvalid($move));
  }
}
