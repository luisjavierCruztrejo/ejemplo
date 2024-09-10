<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('ul li:has(ul)').hover(function(e) {
         $(this).find('ul').slideDown();
     },
     function(e) {
         $(this).find('ul').slideUp();
     });
});
 </script>
<ul class="menu">
    <li><a href="#">Inicio</a></li>
     <li><a href="#">Categorias</a>
        <ul>
             <li><a href="#">Categoria 1</a></li>
             <li><a href="#">Categoria 2</a></li>
             <li><a href="#">Categoria 3</a></li>
         </ul>
    </li>
</ul>
<style>
ul.menu {
 float:left;
 display:block;
 margin-top: 18px;
 list-style-type:none;
 }
 .menu li {
 font-size:13px;
 position:relative;
 float:left;
 padding:10px;
 background:#09F;
 width: 100px;
 }
 .menu li a {
 color: #fff;
 text-decoration:none;
 }
 .menu li ul {
 display:none;
 position:absolute;
 top:36px;
 background-color: #f4f4f4;
 padding:0;
 list-style-type:none;
 }
 .menu li ul li {
 width: 200px;
 padding: 10px 20px;
 }

.menu li ul li a {
 width: 240px;
 margin: 0;
 padding:0;
 }
.menu li ul li a:hover {
 width: 240px;
 margin: 0;
 background:none;
 }
</style>