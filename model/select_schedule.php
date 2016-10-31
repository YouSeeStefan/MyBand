<?php

$scheduleContent = $mysqli->query("SELECT * FROM schedule");

$scheduleContent = convertResultToArray($scheduleContent);