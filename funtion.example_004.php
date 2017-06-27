<?php

/** ***************************************************************************
 * This function is nearly the same as function example_003 but $n itself is not 
 * directly increased, but summed with 1 in the recursive function call.
 * Therefore inside the function itself the value of $n stays always the same.
 *
 * The output respectively the amount of recursive calls is different than in 
 * function example_003, it's 1 time more, it's counting from 0 to 10, all in 
 * all the function is therefore called 11 times.
 ** **************************************************************************/
function example_004($n = 0){
	echo $n.'<br>';
	if($n < 10){
		example_004($n+1);
	}
}

example_004();
