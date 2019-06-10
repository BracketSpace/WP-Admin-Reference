<?php
$var = true;
$var = ($foo === $bar);
$var = ($foo * $bar);
$var = !$foo;
$var = ($foo || $bar);
$var = ($foo === true);
$var = ($foo === true
        || $bar === false);
$var = (!$foo);

$var = is_array($foo);
$var = myFunction($one, $two);
$var = myFunction(
    'one',
    'two'
);

for ($i = ($stackPtr + 1); $i < $endStatement; $i++) {
}

// These conditions are allowed by this sniff.
$var = myFunction(!$var);

$depthAdv = array(
             $this,
             !$directLinks,
             false,
            );

$var = myFunction(
    $var,
    array(
     $this,
     !$directLinks,
     false,
    );
);

for ($node = $fieldsTag->nextSibling; $node; $node = $node->nextSibling) {
    if ($node->nodeType !== XML_ELEMENT_NODE) {
        continue;
    }

    for ($node = $fields->nextSibling; $node; $node = $node->nextSibling) {
        if ($node->nodeType !== XML_ELEMENT_NODE) {
            continue;
        }
    }
}

$a = $b ? $c : $d;
$a = $b === true ? $c : $d;

$this->_args = $this->_getArgs(($_SERVER['argv'] ?? []));
$args = ($_SERVER['argv'] ?? []);
