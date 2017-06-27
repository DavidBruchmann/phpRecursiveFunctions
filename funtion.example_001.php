<?php

/** ***************************************************************************
 * WARNING: DON'T USE!
 * This is the simpliest recursive function I can imagine because if once
 * called it just calls itself again.
 * The problem with this function is that there is no condition when the
 * internal call is executed, it's always without any limits.
 * This function will make your server busy and perhaps even crashing.
 *
 * Nevertheless, this function shows very simplified what a recursive function
 * is doing: it's calling itself.
 ** **************************************************************************/
function example_001(){
	example_001();
}

example_001();
