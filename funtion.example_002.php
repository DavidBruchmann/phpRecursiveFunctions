<?php

/** ***************************************************************************
 * This function has a condition integrated to call itself on base of a value.
 * There is no output yet or any useful functional part but it shows how
 * a condition can be realized, here it's just a counter of a number.
 * It's important that the condition is returning at some point FALSE, else the
 * function is calling itself endless. Therefore the variable $n is increased
 * with each function-call.
 ** **************************************************************************/
function example_002($n = 0){
	$n++;
	if($n < 10){
		example_002($n);
	}
}

example_002();
