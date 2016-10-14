<section>
    <article>
        <p>About</p>
    </article>
</section>


<section>
    <article>
    {foreach from=$aboutContent item=oneItemAbout}
        <img src="img/{$oneItemAbout.image}"><br>
        <content>{$oneItemAbout.content|truncate:30}</content>
    {/foreach}
    </article>
</section>