<?php
# wikipedia.php

$html = file_get_contents("https://www.anytimeastro.com/panchang/today-panchang/?date=13-01-2025&utm_source=astroweb&utm_campaign=site&utm_medium=AST5690_AST5561_RUNT");

preg_match_all('@<div class="row mt-2 pt-1">(.+)</div>@', $html, $matches);
$listItems = $matches[1];

foreach ($listItems as $item) {
    echo "{$item}\n\n";
}
?>