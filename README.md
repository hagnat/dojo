SUM EXERCISE
============
by Valdir Bruxel Junior <hagnat@gmail.com>

In this dojo exercise your task is to create a class that can 
work with all elementary math functions (addition, subtraction, 
multiplication and division, modulation) as well as more advanced
(exponentiation, root and logarithm) by only using the addition
function of the class.


ELEMENTARY FUNCTIONS
====================

Addition
========

The addition function is plain and simple. It will be the foundation
for your other functions.

    1 + 1 = 2
    1 + 2 = 3
    2 + 2 = 4

Subtraction
===========

In order to subtract, you need to use the addition function create
above with the second parameter inverted. Piece of cake.

    4 - 1 = 4 + (-1) = 3
    7 - 3 = 7 + (-3) = 4
    4 - 4 = 4 + (-4) = 0

Multiplication
==============

Multiplication is simply addition repeated N times. Again, a simple
problem.

    2 * 3 = 2 + 2 + 2 = 6
    5 * 4 = 5 + 5 + 5 + 5 = 20
    2 * 0 = () = 0

Division
========

We will be assuming that any number divided during this exercise will
return an integer, and not focus on what is beyong the floating point.

How to simulate division with only the addition function will be left
as an exercise for the student.

    4 / 2 = 2
    7 / 2 = 3
    0 / 2 = 0
    1 / 0 = false

Modulation
==========

Since our division function ignores the floating point, we will
implement modulation in order to figure out how much is left from
the division function.

    3 \ 2 = 1
    4 \ 2 = 0
    0 \ 2 = 0
    1 \ 0 = false

ADVANCED MATH
=============

Exponentiation, Root and Logarithm share a relationship between
themselves. They all operate over the same equation, only trying
to figure out a different part of it.

    base ^^ exponent = result

Exponentiation knows both BASE and EXPONENT and wants to know 
the RESULT.
Root knows EXPONENT and RESULT, and wants to know the BASE.
Logarithm knows BASE and RESULT, and wants to know the EXPONENT.

With that in mind, you might be able to solve the rest of the
exercise.

Exponentiation
==============

Exponentation is the simplest of all advanced math functions.
Its simply multiplication, repeated.

    2 ^ 1 = 2 * 1 = 2
    2 ^ 2 = 2 * 2 = 2 + 2 = 4
    2 ^ 3 = 2 * 2 * 2 = (2+2) * 2 = (2+2) + (2+2) = 8
    3 ^ 3 = 3 * 3 * 3 = (3+3+3) + (3+3+3) + (3+3+3) = 27
    2 ^ 0 = 1
    0 ^ 0 = 1
    -2 ^ 2 = 4
    -3 ^ 3 = -27
    
Since this exercise is only working with integers, we won't be
covering any tests where the exponent is negative. Mostly because
it always returns a value lesser than 1. 

    2 ^ -2 = 1 / 2^2 = 1/4 = 0.25
    // do not test this

Root
====

Like in the division, we will be working only with integers.
Round down the root value, and return both it AND the remainder 
of the operation.

    4 rth 2 = [2, 0]
    9 rth 2 = [3, 0]
    130 rth 3 = [5, 5]
    40 rth 2 = [6, 4]

I know that this is not how the root operator works, but in
the real life you wouldn't be working with only the addition
function anyway.

We won't be covering the root of negative values and/or negative
exponents mostly because... it gets too complicated for this
exercise.

Logarithm
=========

Again we will be making your life easier. You round down the
exponent, and you return it and the remainder of the base that
wouldn't be reached.

    4 log 2 = [2, 0]
    8 log 2 = [3, 0]
    27 log 3 = [3, 0]
    130 log 5 = [3, 5]
    120 log 10 = [2, 20]

FINSH!
======

If your class managed to fulfill all this exercises without
using any function other then addition you have completed the
test. Congratulations!


BONUS ROUND
===========

If you managed to complete this exercise, now its time to solve
it by using "memory positions". Instead a value directly, you need
to store it in the object and pass the position you are operating
to the functions.

    class MathematicalOperators
    {
        protected $memory = array();

        public function setMemorySlot($slot, $value)
        {
            $this->memory[$slot] = $value;
        } 

        public function sum($slot1, $slot2)
        {
            return $this->memory[$slot1] + $this->memory[$slot2];
        }
    }

    $math = new MathematicalOperators();
    $math->setMemorySlot(1, 1);
    $math->setMemorySlot(2, 2);
    print $math->sum(1, 2); 

Solve the exercise with the least amount of memory slots possible.

ps. any internal variable you use needs to be stored in the memory too.
