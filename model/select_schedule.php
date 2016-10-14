<?php

$scheduleContent = $mysqli->query("SELECT * FROM schedule");

$scheduleContent = convert($scheduleContent);