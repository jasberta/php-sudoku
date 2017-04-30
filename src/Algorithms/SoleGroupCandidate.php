<?php

namespace Sudoku\Algorithms;

use Sudoku\Board;
use Sudoku\Cell;
use Sudoku\Collectors\GroupCollector;
use Sudoku\Coords;
use Sudoku\DetermineSoleFromCollector;

class SoleGroupCandidate implements AlgorithmInterface {

	use DetermineSoleFromCollector;

	/**
	 * @param Board  $board
	 * @param Coords $coords
	 *
	 * @return Cell
	 */
	public function run( Board $board, Coords $coords ) {
		return $this->setSoleFromCollector( new GroupCollector(), $board, $coords );
	}
}
