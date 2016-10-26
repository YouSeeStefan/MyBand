<div class="article">
    <section>
        <article>
        <div class="content"><br>
            {foreach from=$aboutContent item=oneItemAbout}
            	<h1>{$oneItemAbout.title}</h1>
                <img src="img/{$oneItemAbout.image}">
                <br><br>
                <content>{$oneItemAbout.content}</content><br><br>
                <content class="content_bold">{$oneItemAbout.content_2}</content><br>
                <content>{$oneItemAbout.content_3}</content><br>
                <content class="content_bold">{$oneItemAbout.content_4}</content>
            {/foreach}<br>
        </div>
        </article>
    </section>
</div>
