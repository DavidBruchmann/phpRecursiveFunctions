<?php

/** ***************************************************************************
 * This function's result is the same as function example_003 in contrast to 
 * function example_004.
 * To reduce the amount of recursive calls there exist two options:
 * - Increasing the incoming value, or 
 * - decreasing the maximum value in the condition.
 * Increasing the incoming value would change the output: counting would
 * begin with 1 instead of 0 if no parameter is given. Therefore the maximum 
 * in the condition is decreased, like that also the maximum output stays with
 * the value 9 below 10.
 *
 * The internal difference between function example_003 and example_005 is
 * that the value of $n inside the condition is not the same.
 * While in function example_003 the value is increased before the condition,
 * the inrease of the value in example_005 is only inside the function-call,
 * inside the condition the value of $n is 1 less.
 * This difference never has an impact of the result, function example_005 even
 * has been adjusted to deal with this difference and to keep the value
 * internal always the same, but there is no usage of this feature yet.
 ** **************************************************************************/
function example_005($n = 0){
	echo $n.'<br>';
	if($n < 9){
		example_005($n+1);
	}
}

example_005();
