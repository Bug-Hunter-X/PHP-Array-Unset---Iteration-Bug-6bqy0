# PHP Array Unset() Iteration Bug

This repository demonstrates a subtle bug in PHP related to removing elements from an array while iterating over it using a `foreach` loop and `unset()`.  The bug arises because removing an element re-indexes the array, but the loop's internal pointer does not adjust, potentially skipping elements.

## Bug Description

The provided `bug.php` file contains a `foreach` loop that iterates over an associative array. Inside the loop, an element is removed using `unset()`. Due to how PHP handles array reindexing after an `unset()` operation during a `foreach` loop,  the iteration may skip an element.

## Solution

The solution file (`bugSolution.php`) demonstrates a correct approach to removing elements from an array while iterating, avoiding the potential for elements to be skipped.