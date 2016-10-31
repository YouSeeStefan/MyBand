<div class="article">
    <section>{foreach from=$scheduleContent item=oneItoneItemSchedule}
        <article>
        <div class="content"><br>
            <b class="day_size">{$oneItoneItemSchedule.title}</b><br>
            <a class="date_size">{$oneItoneItemSchedule.date|date_format:"%e, %B. %Y"}</a>
            <p><content>{$oneItoneItemSchedule.content}</content></p>
        </div><br>
        </article>{/foreach}
    </section>
</div>