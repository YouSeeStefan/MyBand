<section>
    <article>
    {foreach from=$result item=oneItem}
        <h1>{$oneItem.title}</h1>
        <img src="img/{$oneItem.image}"><br>
        <content>{$oneItem.content|truncate:30}</content>
        <p>{$oneItem.date_created|date_format:"%e, %B. %Y"}</p>
    {/foreach}
    </article>
</section>


<!--
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

echo '</section>';-->
