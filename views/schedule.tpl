<section>
    <article>
        <p>Schema</p>
    </article>
</section>

<section>
    <article>
    {foreach from=$scheduleContent item=oneItoneItemSchedule}
        <h1>{$oneItoneItemSchedule.title}</h1>
        <content>{$oneItoneItemSchedule.content|truncate:30}</content>
        <p>{$oneItoneItemSchedule.date|date_format:"%e, %B. %Y"}</p>
    {/foreach}
    </article>
</section>