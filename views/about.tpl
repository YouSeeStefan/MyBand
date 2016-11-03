<div class="article">
    <section>
        <article>
        <div class="content"><br>
            {foreach from=$aboutContent item=oneItemAbout}
                <b style="font-size: 22px;">{$oneItemAbout.title}</b><br>
                <a class="date_size">{$oneItemAbout.date|date_format:"%e, %B. %Y"}</a><br><br>
                <div id="trainers">
                    <img class="img-trainer top" src="img/{$oneItemAbout.image}" alt="">
                    <img class="img-trainer top" src="img/{$oneItemAbout.image_2}" alt="">
                    <img class="img-trainer top" src="img/{$oneItemAbout.image_3}" alt="">
                </div>
                <br><br>
                <content>{$oneItemAbout.content}</content><br><br>
                <content class="content_bold">{$oneItemAbout.content_2}</content><br>
                <content>{$oneItemAbout.content_3}</content><br>
                <content class="content_bold">{$oneItemAbout.content_4}</content>
                <p>{$oneItemAbout.content_5}</p>
            {/foreach}<br>
        </div>
        </article>
    </section>
</div>
