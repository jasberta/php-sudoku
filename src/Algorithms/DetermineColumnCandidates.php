<?php

namespace Sudoku\Algorithms;

use Sudoku\ApplyCollector;
use Sudoku\Board;
use Sudoku\Cell;
use Sudoku\Collectors\ColumnCollector;
use Sudoku\Coords;

class DetermineColumnCandidates implements AlgorithmInterface {

	use ApplyCollector;

	/**
	 * @param Board  $board
	 * @param Coords $coords
	 *
	 * @return Cell
	 */
	public function run( Board $board, Coords $coords ) {
		return $this->applyCollector( new ColumnCollector(), $board, $coords );
	}
}
