<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>Карта сайта</title>
<meta name="Keywords" content="" >
<meta name="Description" content="" >
<meta name="google-site-verification" content="HgxM5mlLK6npvnMkRhl7Bcs-1uABQjKYeeq6zbmKtb0">
<meta name="yandex-verification" content="5eb55ef94d5b056b" >
    
    <script type="text/javascript" src="/wa-content/js/jquery/jquery-1.8.2.min.js"></script>
              
            <!-- shop app css -->
  <link rel="shortcut icon" href="/wa-data/public/shop/themes/fonarik/images/favicon.png">
  <link rel="stylesheet" href="/wa-data/public/shop/themes/fonarik/style.css" type="text/css" media="screen" >
  <link href="/wa-data/public/shop/themes/fonarik/css/grid.css" media="screen" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="/wa-data/public/shop/themes/fonarik/css/jquery.jqzoom.css" type="text/css" >

    <!-- js -->
    <script type="text/javascript" src="/wa-content/js/jquery-wa/wa.core.js"></script>
    


  <script src="/wa-data/public/shop/themes/fonarik/js/html5.js" type="text/javascript" ></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/jflow.plus.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/jquery.carouFredSel-5.2.2-packed.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/checkbox.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/radio.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/selectBox.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/jquery.jqzoom-core.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/custom.shop.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        
  <script type="text/javascript">
    $(function() {
      $('#list_product').carouFredSel({
        prev: '#prev_c1',
        next: '#next_c1',
        auto: false
      });
     $('#list_product2').carouFredSel({
        prev: '#prev_c2',
        next: '#next_c2',
        auto: false
      });
      $('#thumblist').carouFredSel({
        prev: '#img_prev',
        next: '#img_next',
        scroll: 1,
        auto: false,
        circular: false,
      });
     
      $(window).resize();
    });
  </script>
  <script type="text/javascript">
       $(document).ready(function(){
           
           
           
          $("button").click(function(){
             $(this).addClass('click')
          });

        $('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens:true,
            preloadImages: true,
            alwaysOn:false
        });

        $('#wrapper_tab a.tab_link').click(function() {
            if ($(this).attr('class') != $('#wrapper_tab').attr('class') ) {
                $('#wrapper_tab').attr('class',$(this).attr('class'));
            }
            return false;
        });
        
         $("#myController").jFlow({
            controller: ".control", 
            slideWrapper : "#jFlowSlider", 
            slides: "#slider", 
            selectedWrapper: "jFlowSelected", 
            width: "984px", 
            height: "300px",  
            duration: 400,  
            prev: ".slidprev", 
            next: ".slidnext", 
            auto: true
    });
    $('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
    $("select.select").selectBox();
});
        
    });
  </script>

    
    
  
      <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6681162-17']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body><div class="container_12">
    <div id="top">
    
    <a href="/" title="Fonarik.ua" id="top_home"></a>
    
    
      <div class="grid_3" id="top_pages_nav">
                   <a href="/oplata/" >Оплата</a>             <a href="/dostavka/" >Доставка</a>             <a href="/garantiya/" >Гарантия</a>             <a href="/vozvrat/" >Возврат</a>             <a href="/kontakty/" >Контакты</a>                   
      </div><!-- .grid_3 -->
      
       
      <div class="grid_3" id="top_loginblock">
       
      <a href="/my" id="top_profile"><span></span>Профиль</a>&nbsp;
      <a href="/?logout" id="top_logout"><span></span>Выйти</a>
            </div>
      
    </div>

    <div class="clear"></div>

    <div id="branding">
      <div class="grid_3" style="width:auto;float:left;display:block;margin:25px 0px 0px 12px;" >       
          <a href="/" title="Fonarik.ua" style="width:auto;margin:0px;padding:0px;">
          <img src="/wa-data/public/shop/themes/fonarik/images/logo.png" alt="Fonarik.ua"></a>
      </div><!-- .grid_3 -->



<div id="search_header">
<div id="top_phones"><sup>(044)</sup>&nbsp;<span>392-19-00</span>&nbsp;&nbsp;&nbsp;<sup>(067)</sup>&nbsp;<span>574-85-08</span></div>
<div id="top_time"><span></span><p>Время&nbsp;работы:&nbsp;ПН-ПТ&nbsp;с&nbsp;8:00&nbsp;до&nbsp;19:00/СБ,ВС&nbsp;с&nbsp;9:00&nbsp;до&nbsp;18:00</p></div>
<form method="get" id="searchform" class="search" action="/search/">
<input class="text entry_form" type="text" name="query"  id="search">
<input type="submit" class="submit" name="Submit" value="" >
</form>  
</div>

<div class="grid_6" id="links_header">
<div id="online_call"></div>
 <form method="POST" accept-charset="utf-8" id="siteheart_button_121106" action="https://siteheart.com/webconsultation/121106?byhref=1" target="siteheart_button_121106" >
                    <input type="hidden" name="_charset_">
                    <input type="hidden" name="data[your_name]" value="your_value">
                    <a href="https://siteheart.com/webconsultation/121106?byhref=1" target="siteheart_sitewindow_121106" onclick="_gaq.push(['_trackEvent', 'button', 'ask']);o=window.open;o('https://siteheart.com/webconsultation/121106', 'siteheart_sitewindow_121106', 'width=550,height=400,top=30,left=30,resizable=yes'); return false;">
                        <span></span><span class="text">Онлайн-консультация</span></a>
   </form>
   <a style="cursor:pointer;" onclick="popupWin = window.open('/zvonok.php', 'contacts', 'location,width=400,height=300,top=0'); popupWin.focus();return false;"><span class="linkcall"></span><span class="text">Обратный звонок</span></a>
 </div><!-- .grid_6 -->
      

<div class="grid_3"  id="cart_header">
              <p class="cart_head">В корзине: <span></span></p>
       <a class="cart_li" href="/cart/" id="cart_count">0 товаров</a>
       <p class="cart-total-container">На сумму: <span class="cart-total">0 грн.</span></p>
       <a class="cart_li_checkout" href="/checkout/">Оформить заказ</a>
</div>

</div><!-- #branding -->
</div><!-- .container_12 -->

  <div class="clear"></div>

  <div id="block_nav_primary">
    <div class="container_12">
      <div class="grid_12">
        <div class="primary">
          <ul><li><a href="/fonari/">Фонари</a></li><li><a href="/aksessuary_k_fonoryam/">Аксессуары к фонарям</a></li><li><a href="/nozhi/">Ножи</a></li><li><a href="/multituly/">Мультитулы</a></li><li><a href="/tochilki-dlya-nozhey">Точилки для ножей</a></li><li><a href="/instrumenty/">Инструменты</a></li><li><a href="/odejda/">Одежда</a></li><li><a href="/aksessuary/">Аксессуары</a></li></ul>
        </div><!-- .primary -->
      </div><!-- .grid_12 -->
    </div><!-- .container_12 -->
  </div><!-- .block_nav_primary -->

  <div class="clear"></div>
  <!-- navigation breadcrumbs --> 
 <div id="main">  
  <div class="container_12">
            <div id="sidebar" class="grid_3">
        <!-- plugin hook: 'frontend_nav' -->
    
        
    <!-- info pages -->
            <div class="aside" >         
    <div class="left_menu">
        <ul class="menu-v" id="page-list"><li>
        <a href="/oplata/" title="Оплата">Оплата</a></li><li>
        <a href="/dostavka/" title="Доставка">Доставка</a></li><li>
        <a href="/garantiya/" title="Гарантия">Гарантия</a></li><li class="selected">
        <a href="/vozvrat/" title="Возврат">Возврат</a></li><li>
        <a href="/kontakty/" title="Контакты">Контакты</a></li><li>
        <a href="/404/" title="404 ошибка">404 ошибка</a></li></ul>
     </div></div>
    
    <!-- category tree -->
  
    <div class="aside" id="categories_nav">
        <h3>Категории</h3>            
        <div class="left_menu"><ul>
                        <li><a href="/tochilki-dlya-nozhey/">Точилки для ножей</a></li>
                                                                                                                                                <li><a href="/fonari/">Фонари</a></li>
                                                                                                                                                                                <li><a href="/aksessuary_k_fonoryam/">Аксессуары к фонарям</a></li>
                                                                                                                                <li><a href="/nozhi/">Ножи</a></li>
                                                                                                                                                                                <li><a href="/multituly/">Мультитулы</a></li>
                                                                                <li><a href="/instrumenty/">Инструменты</a></li>
                                <li><a href="/odejda/">Одежда</a></li>
                                                                                                                <li><a href="/aksessuary/">Аксессуары</a></li>
                                                                                                     </ul></div><!-- .left_menu -->
  </div>
       
        
        
    <!-- tag cloud -->
       <div class="aside" id="tags">
             <h3>Теги</h3>      
                            <a href="/tag/Ganzo/" style="font-size: 99%;">Ganzo</a>
                            <a href="/tag/Gerber/" style="font-size: 150%;">Gerber</a>
                            <a href="/tag/Fenix/" style="font-size: 150%;">Fenix</a>
                            <a href="/tag/Bear+Grylls/" style="font-size: 94%;">Bear Grylls</a>
                            <a href="/tag/Work+Sharp/" style="font-size: 80%;">Work Sharp</a>
                            <a href="/tag/Myth/" style="font-size: 84%;">Myth</a>
                            <a href="/tag/MagicShine/" style="font-size: 86%;">MagicShine</a>
                            <a href="/tag/Polarion/" style="font-size: 81%;">Polarion</a>
                            <a href="/tag/Lansky/" style="font-size: 99%;">Lansky</a>
                            <a href="/tag/Ferei/" style="font-size: 85%;">Ferei</a>
                            <a href="/tag/DexShell/" style="font-size: 91%;">DexShell</a>
                            <a href="/tag/DMT/" style="font-size: 101%;">DMT</a>
                            <a href="/tag/Lasting/" style="font-size: 99%;">Lasting</a>
                            <a href="/tag/Victorinox/" style="font-size: 85%;">Victorinox</a>
                            <a href="/tag/Wenger/" style="font-size: 81%;">Wenger</a>
                            <a href="/tag/Apex+Edge+Pro/" style="font-size: 81%;">Apex Edge Pro</a>
                            <a href="/tag/Zebra/" style="font-size: 81%;">Zebra</a>
                            <a href="/tag/Avant/" style="font-size: 84%;">Avant</a>
                            <a href="/tag/AW/" style="font-size: 80%;">AW</a>
                            <a href="/tag/Bossman/" style="font-size: 80%;">Bossman</a>
                            <a href="/tag/Sanyo/" style="font-size: 84%;">Sanyo</a>
                            <a href="/tag/Eneloop/" style="font-size: 82%;">Eneloop</a>
                            <a href="/tag/Cameleon/" style="font-size: 80%;">Cameleon</a>
                            <a href="/tag/TrustFire/" style="font-size: 87%;">TrustFire</a>
                            <a href="/tag/Varta/" style="font-size: 81%;">Varta</a>
                            <a href="/tag/Panasonic/" style="font-size: 80%;">Panasonic</a>
                            <a href="/tag/GP/" style="font-size: 83%;">GP</a>
                            <a href="/tag/Led+Lenser/" style="font-size: 122%;">Led Lenser</a>
                            <a href="/tag/Ultrafire/" style="font-size: 80%;">Ultrafire</a>
                            <a href="/tag/%D0%A2%D0%BE%D1%87%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9+%D0%BA%D0%B0%D0%BC%D0%B5%D0%BD%D1%8C/" style="font-size: 82%;">Точильный камень</a>
                            <a href="/tag/LaCrosse/" style="font-size: 83%;">LaCrosse</a>
                            <a href="/tag/Maha+Powerex/" style="font-size: 81%;">Maha Powerex</a>
                            <a href="/tag/TechnoLine/" style="font-size: 83%;">TechnoLine</a>
                            <a href="/tag/Avalanche/" style="font-size: 80%;">Avalanche</a>
                            <a href="/tag/%D0%AD%D0%BD%D0%B5%D1%80%D0%B3%D0%B8%D1%8F/" style="font-size: 82%;">Энергия</a>
                            <a href="/tag/Mastak/" style="font-size: 82%;">Mastak</a>
                            <a href="/tag/Power+Bank/" style="font-size: 83%;">Power Bank</a>
                            <a href="/tag/Zippo/" style="font-size: 94%;">Zippo</a>
                            <a href="/tag/Chako/" style="font-size: 85%;">Chako</a>
                            <a href="/tag/Leatherman/" style="font-size: 90%;">Leatherman</a>
                            <a href="/tag/DuoSharp/" style="font-size: 82%;">DuoSharp</a>
                            <a href="/tag/%D0%A2%D0%BE%D1%87%D0%B8%D0%BB%D0%BA%D0%B0+%D0%B0%D0%BB%D0%BC%D0%B0%D0%B7%D0%BD%D0%B0%D1%8F/" style="font-size: 83%;">Точилка алмазная</a>
                            <a href="/tag/Mini-Sharp/" style="font-size: 82%;">Mini-Sharp</a>
                            <a href="/tag/Angler+Mini-Sharp/" style="font-size: 81%;">Angler Mini-Sharp</a>
                            <a href="/tag/%D0%90%D0%BB%D0%BC%D0%B0%D0%B7%D0%BD%D1%8B%D0%B9+%D1%82%D0%BE%D1%87%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9+%D0%BA%D0%B0%D0%BC%D0%B5%D0%BD%D1%8C/" style="font-size: 89%;">Алмазный точильный камень</a>
                            <a href="/tag/Diafold/" style="font-size: 85%;">Diafold</a>
                            <a href="/tag/%D0%9D%D0%B0%D0%B1%D0%BE%D1%80+%D0%B4%D0%BB%D1%8F+%D0%B7%D0%B0%D1%82%D0%BE%D1%87%D0%BA%D0%B8/" style="font-size: 83%;">Набор для заточки</a>
                            <a href="/tag/Aligner+Quick+Edg%D0%B5/" style="font-size: 80%;">Aligner Quick Edgе</a>
                            <a href="/tag/Aligner+ProKit/" style="font-size: 80%;">Aligner ProKit</a>
                            <a href="/tag/Aligner/" style="font-size: 80%;">Aligner</a>
                            <a href="/tag/Aligner+DELUXE/" style="font-size: 80%;">Aligner DELUXE</a>
                            <a href="/tag/Whetstone/" style="font-size: 84%;">Whetstone</a>
                            <a href="/tag/Pohl+Force/" style="font-size: 87%;">Pohl Force</a>
                            <a href="/tag/Cold+Steel/" style="font-size: 86%;">Cold Steel</a>
                            <a href="/tag/Spyderco/" style="font-size: 83%;">Spyderco</a>
                            <a href="/tag/Boker/" style="font-size: 86%;">Boker</a>
                            <a href="/tag/Mora/" style="font-size: 84%;">Mora</a>
                            <a href="/tag/Fox/" style="font-size: 81%;">Fox</a>
                </div>
    
</div>

<div id="content" class="grid_9">
    <h1>Карта сайта</h1>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php

$link = mysql_connect('localhost', 'fonarikshop', '221976');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db('fonarikshop'); 
mysql_query('SET NAMES utf8');



 
 
 $q="SELECT * FROM shop_category";
 $res=mysql_query($q);
 while($row=mysql_fetch_array($res))
 {
    echo "<a href='".$row['full_url']."'>".$row['name']."</a><br />";
 }
 
 
 
              
 

    
    


     
           

     mysql_close($link);     



?>

</div>
  </div>
  </div><!-- #main -->
  
  <div class="clear"></div>

<div id="footer">
    <div class="f_navigation">
      <div class="container_12">
        <div class="grid_3">
        <a href="/" title="Fonarik.ua" style="width:auto;margin:0px;padding:0px;">
          <img src="/wa-data/public/shop/themes/fonarik/images/logo.png" alt="Fonarik.ua"></a>  
        </div><!-- .grid_3 -->

        <div class="grid_2">
          <div style="font-size:14px;"><a href="http://fonarik.ua/dostavka/">Доставка</a></div>
          <div style="font-size:14px;"><a href="http://fonarik.ua/oplata/">Оплата</a></div>
          <div style="font-size:14px;"><a href="http://fonarik.ua/garantiya/">Гарантия</a></div>
          <div style="font-size:14px;"><a href="http://fonarik.ua/vozvrat/">Возврат</a></div>
          <div style="font-size:14px;"><a href="http://fonarik.ua/kontakty/">Контакты</a></div>
        </div><!-- .grid_3 -->


        <div class="grid_4">
          <h4>График работы Call-центра</h4>          
          <div class="footer_time"><span ></span><p>ПН-ПТ&nbsp;с&nbsp;8:00&nbsp;до&nbsp;19:00
          <br/>СБ,ВС&nbsp;с&nbsp;9:00&nbsp;до&nbsp;18:00</p></div>
          <form method="get" id="searchform-footer" class="search" action="/search/" style="float:left;display:block;width:230px;margin-top:20px;background-position: -147px -68px;border-left:1px #bec3c7 solid;">
<input class="text entry_form" type="text" name="query"  id="search-footer" style="width:200px;">
<input type="submit" class="submit" name="Submit" value="" >
</form>  
        </div><!-- .grid_3 -->


        <div class="grid_3">
        <h4>Представительства</h4>   
        <div class="footer_time" style="margin-bottom:20px;"><span class="phone"></span><p>(044) 392-19-00 - Киев
          <br/>(067) 574-85-08 - Харьков</p></div>
        <div class="footer_time"><span class="mail"></span><p><a href="mailto:info@fonarik.ua" title="mailto">info@fonarik.ua</a></p></div>  
                         
        </div><!-- .grid_3 --> 
        
         <div class="grid_12">
            <div id="copyright" style="float:left;width:100%;padding-top:10px;margin:20px 0px 20px 0px;border-top:1px #1386b3 solid;">
                <span style="float:left;"><a href="/">© 2013 / Fonarik.ua  Интернет-магазин</a></span>
                <span style="float:right;">&copy; разработка: <a href="http://code201.net">Code201.net</a></span>
            </div>  
         </div>  

        <div class="clear"></div>        
      </div>
      
      
    </div><!-- .f_navigation -->

</div>
  
  </body>
</html>