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
}
