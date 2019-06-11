<?php

trySomething() || trySomethingElse();
if (trySomething() === false) {
    trySomethingElse();
}

$success || fail();
if ($success === false) {
    fail();
}

$foo = ($bar || $foo);

doSomething() || die();

if ($something || somethingElse()) {
    while ($foo && $bar) {
    }

    do {
        // Code here.
    }
    while ($foo && $bar);
}

?>