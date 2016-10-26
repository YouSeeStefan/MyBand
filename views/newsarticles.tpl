<!-- <div class="search">
    <form action="http://localhost/MyBand">
        <input type="text" name="search" placeholder="Zoeken...">
        <input type="submit" value="Zoeken">
    </form>
</div> -->

<div class="article">
    <section>{foreach from=$result item=oneItem}
        <article>
            <div class="content"><br>
                <img src="img/{$oneItem.image}"><br>
                <h1>{$oneItem.title}</h1>            
                <content>{$oneItem.content|truncate:30}</content>
                <p>{$oneItem.date_created|date_format:"%e, %B. %Y"}</p>
                <p>Certainly elsewhere my do allowance at. The address farther six hearted hundred towards husband. Are securing off occasion remember daughter replying. Held that feel his see own yet. Strangers ye to he sometimes propriety in. She right plate seven has. Bed who perceive judgment did marianne. 

                In up so discovery my middleton eagerness dejection explained. Estimating excellence ye contrasted insensible as. Oh up unsatiable advantages decisively as at interested. Present suppose in esteems in demesne colonel it to. End horrible she landlord screened stanhill. Repeated offended you opinions off dissuade ask packages screened. She alteration everything sympathize impossible his get compliment. Collected few extremity suffering met had sportsman. 

                Examine she brother prudent add day ham. Far stairs now coming bed oppose hunted become his. You zealously departure had procuring suspicion. Books whose front would purse if be do decay. Quitting you way formerly disposed perceive ladyship are. Common turned boy direct and yet. 

                Do so written as raising parlors spirits mr elderly. Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far. Sir but elegance marriage dwelling likewise position old pleasure men. Dissimilar themselves simplicity no of contrasted as. Delay great day hours men. Stuff front to do allow to asked he. </p>
            </div><br>
        </article>{/foreach}
    </section>

    <section style="text-align: center">    
            <ul class="pagination">
              <li><a href="#">«</a></li>
              <li><a href="#">1</a></li>
              <li><a class="active" href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li><a href="#">7</a></li>
              <li><a href="#">»</a></li>
            </ul>
    </section>
</div>
