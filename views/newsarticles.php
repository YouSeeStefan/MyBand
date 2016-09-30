<?php

echo '<section>';

//fetch_assoc should not be in the view!
foreach ($result as $row=>$oneItem) {
	
	echo '<article>';
	echo '<h1>'.$oneItem['title'].'</h1>';
    echo '<img src="img/' . $oneItem ['image'] . '" alt="Smiley face"><br>';
	echo '<content>'.$oneItem['content'].'</content>';
	echo '</article>';
}

echo '</section>';