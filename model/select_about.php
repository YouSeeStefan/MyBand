<?php

$aboutContent = $mysqli->query("SELECT * FROM about");

$aboutContent = convert($aboutContent);