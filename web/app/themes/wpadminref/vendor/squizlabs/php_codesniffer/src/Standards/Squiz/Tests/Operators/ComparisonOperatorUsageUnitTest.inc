<?php
if ($value === true) {
} else if ($value === false) {
}

if ($value == true) {
} else if ($value == false) {
}

if ($value) {
} else if (!$value) {
}

if (is_array($array) === true) {
} else if (myFunction($value) === false) {
}

if (is_array($array) == true) {
} else if (myFunction($value) == false) {
}

if (is_array($array)) {
} else if (!myFunction($value)) {
}

if ($value === true || $other === false) {
}

if ($value == true || $other == false) {
}

if ($value || !$other) {
}

if ($one === true || $two === true || $three === false || $four === true) {
}

if ($one || $two || !$three || $four) {
}

if ($var instanceof PHP_CodeSniffer) {
}

if (($var instanceof PHP_CodeSniffer) === false) {
}

if ($good && ($var instanceof PHP_CodeSniffer) === false && $good) {
}

if ($good === true && ($var instanceof PHP_CodeSniffer) === false) {
}

// Without brackets around inline IF condition.
$var1 === true
    ? $var2 = 0
    : $var2 = 1;

$var1 === true ? $var2 = 0 : $var2 = 1;
?>
<?php
$var1 === true ? $var2 = 0 : $var2 = 1;

if ($var2 === true) {
    $var1 === true ? $var2 = 0 : $var2 = 1;
}
$var1 === true ? $var2 = 0 : $var2 = 1;

$var1
    ? $var2 = 0
    : $var2 = 1;

$var1 ? $var2 = 0 : $var2 = 1;


$var1 ? $var2 = 0 : $var2 = 1;

if ($var2 === true) {
    $var1 ? $var2 = 0 : $var2 = 1;
}
$var1 ? $var2 = 0 : $var2 = 1;

if ($value) {
} elseif (!$value) {
}

if (false === ($parent instanceof Foo) && ($parent instanceof Bar) === false) {
}

if (false === ($parent instanceof Foo) && $foo) {
}

while ($var1) {
}

while ($var1 === true) {
}

do {

} while ($var1);

do {

} while ($var1 === true);

for ($var1 = 10; $var1; $var1--) {
}

for ($var1 = 10; $var1 !== 0; $var1--) {
}

for ($var1 = ($var2 === 10); $var1; $var1--) {
}

while (true) {
}

while (false) {
}

$var = ($var1 === true) ? $var1 : "foobar";

$var = ($var1 == true) ? $var1 : "foobar";

$var = ($var1 === false) ? $var1 : "foobar";

$var = ($var1 == false) ? $var1 : "foobar";

$var = ($var1 === 0) ? $var1 : "foobar";

$var = ($var1 == 0) ? $var1 : "foobar";

function foo(string $bar, array $baz, ?MyClass $object) : MyClass
{
}

if (empty($argTags > 0)) {
}

myFunction($var1 === true ? "" : "foobar");
