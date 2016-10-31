<?php

$aboutContent = $mysqli->query("SELECT * FROM about");

$aboutContent = convertResultToArray($aboutContent);