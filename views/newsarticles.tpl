<!-- <div class="search">
    <form action="http://localhost/MyBand">
        <input type="text" name="search" placeholder="Zoeken...">
        <input type="submit" value="Zoeken">
    </form>
</div> -->

<script>
            function showUser(str) {
              if (str=="") {
                document.getElementById("txtHint").innerHTML="";
                return;
              } 
              if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
              } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                  document.getElementById("txtHint").innerHTML=this.responseText;
                }
              }
              xmlhttp.open("GET","model/getuser.php?q="+str,true);
              xmlhttp.send();
            }
        </script>

<div class="article">
    <section class="section-boven">
        <article>
            <div class="content">
                <form>
                    <input type="type" placeholder="Zoeken..." onkeyup="showUser(this.value)">
                </form>
                <div id="txtHint"></div>
            </div>
        </article>
    </section>
</div>

<div class="article">
    <section>{foreach from=$result item=oneItem}
        <article>
            <div class="content"><br>
                <img class="img" src="img/{$oneItem.image}"><br><br>
                <b style="font-size: 22px;">{$oneItem.title}</b><br>
                <i style="font-size: 10px;">{$oneItem.date_created|date_format:"%e, %B. %Y"}</i>
                <p><content>{$oneItem.content}</content></p>
            </div><br>
        </article>{/foreach}
    </section>
    <section style="text-align: center">
            <ul class="pagination">
                {for $foo=1 to $total_number_articles}
                   <li><a href="index.php?action=home&page_number={$foo}">{$foo}</a></li>
               {/for}
            </ul>
    </section>
</div>

<!-- truncate:30 -->