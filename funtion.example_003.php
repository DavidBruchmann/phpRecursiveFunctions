<?php

/** ***************************************************************************
 * This function is the same as function example_002 but it produces an output,
 * so the changing value $n can be controlled and the amount of total and
 * recursive function-calls can be counted: each printed number is one
 * function-call.
 * The output is placed in the beginning of the function to show the 
 * parmeter $n unchanged and before it's increased. Printing the output after 
 * increasing or even in the condition can be confusing for beginners.
 *
 * If the function is called with a value $n >= 0 and $n < 9 it calls itself 
 * so long till $n + 1 is still < 10.
 * If the funtion is called with a value 9 or larger it's executed only once.
 * if the function is called with a value lower than 0, a minus-value, then
 * the function is called (abs($n) + 10) times
 ** **************************************************************************/
function example_003($n = 0){
	echo $n.'<br>';
	$n++;
	if($n < 10){
		example_003($n);
	}
}

example_003();
