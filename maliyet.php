<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Perakende</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="title icon" href=" ">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/satislar.css">



</head>
<body>


  <!-- Start Top Navbar -->

  <div class="top-navbar">
    <div class="top-menu">
      <div class="title">ONLINE PERAKENDE</div>
      <ul>

        <li class="icon-parent"><a href="#" class="icon-bullet" id="dropdownMenuLink" data-toggle="dropdown">

          <i class="fa fa-comments"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-title"><h5>BİLDİRİMLERİNİZ</h5></div>
            <h6>Konu 1</h6>
            <p>Mesajın içeriği burada yer alacaktır.</p><hr>
            <h6>Konu 2</h6>
            <p>Mesajın içeriği burada yer alacaktır.</p><hr>
            <h6>Konu 3</h6>
            <p>Mesajın içeriği burada yer alacaktır.</p>
          </div>
        </a></li>


        <li class="icon-parent"><a href="#" class="icon-bullet" id="dropdownMenuLink" data-toggle="dropdown">
          <i class="fa fa-bell"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-right: 160px;">
            <div class="dropdown-title"><h5>UYARILARINIZ</h5></div>
            <h6>Konu 1</h6>
            <p>Uyarı içeriği burada yer alacaktır.</p><hr>
            <h6>Konu 2</h6>
            <p>Uyarı içeriği burada yer alacaktır.</p><hr>
            <h6>Konu 3</h6>
            <p>Uyarı içeriği burada yer alacaktır.</p>
          </div>
        </a></li>


        <li><a href="#">
          <i class="fa fa-user"></i>
        </a></li>
        <li><a href="#" data-toggle="modal" data-target="#sign-out">
          <i class="fa fa-power-off"></i>
        </a></li>
      </ul>

    </div>
  </div>

  <!-- Finish Top Navbar -->







  <!-- Start Modal -->
  <div class="modal fade" id="sign-out">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Çıkış yapmak istediğinize emin misiniz?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>         
        <div class="modal-footer">

          <button type="button" class="btn btn1" data-dismiss="modal">Burada Kal</button>
          <button type="button" class="btn btn1" data-dismiss="modal" onclick="window.location.href = 'logout.php';">Çıkış Yap</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Finish Modal -->







  <!-- Start Main Menu -->

  <nav class="main-menu">
    <ul>
      <li class="active">
        <a href="anasayfa.php"><i class="fa fa-home fa-2x"></i>
          <span class="nav-text">Anasayfa</span>
        </a>
      </li>

      <li class="has-subnav">
        <a href="satislar.php"><i class="fa fa-shopping-cart fa-2x"></i>
          <span class="nav-text">Satışlar</span>
        </a>
      </li>           
      <li class="has-subnav">
        <a href=""><i class="fa fa-bar-chart fa-2x"></i>
          <span class="nav-text">Sütun Grafikleri</span>
        </a>
      </li>
      <li>
        <a href=""><i class="fa fa-line-chart fa-2x"></i>
          <span class="nav-text">Çizgi Grafikleri</span>
        </a>
      </li>
      <li>
        <a href=""><i class="fa fa-pie-chart fa-2x"></i>
          <span class="nav-text">Pasta Grafikleri</span>
        </a>
      </li>
      <li>
        <a href=""><i class="fa fa-map-marker fa-2x"></i>
          <span class="nav-text">Haritalar</span>
        </a>
      </li>
      <li>
        <a href=""><i class="fa fa-info fa-2x"></i>
          <span class="nav-text">Hakkında</span>
        </a>
      </li>


    </ul>

    <ul class="logout">
      <li>
        <a href="#" data-toggle="modal" data-target="#sign-out">
          <i class="fa fa-power-off fa-2x"></i>
          <span class="nav-text">Çıkış</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Finish Main Menu -->





  <!-- Start Area -->

  <div class="area">



         <!-- Start Ürünlere Göre Satışlar -->

    <div class="satis-1" style="margin-left: 24px;">

        <div class='tableauPlaceholder' id='viz1588860065439' style='position: relative'><noscript><a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;rnGrubunaGreMaliyet&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='OP-Maliyet&#47;rnGrubunaGreMaliyet' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;rnGrubunaGreMaliyet&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1588860065439');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
       
    </div>

    <!-- Finish Ürünlere Göre Satışlar -->






    <!-- Şehirlere Göre Satışlar / Harita -->

    <div class="satis-2">

       <div class='tableauPlaceholder' id='viz1588860095231' style='position: relative'><noscript><a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;ehirlereGreMaliyet&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='OP-Maliyet&#47;ehirlereGreMaliyet' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;ehirlereGreMaliyet&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1588860095231');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>


        

    </div>

    <!-- Finish Şehirlere Göre Satışlar / Harita -->







    <!-- Start Toplam Satışlar -->

    <div class="satis-3">

      <div class="total-sales">

            <div class="row">
             
              <div class="col-auto">
                <div class="icon">
                  <i class="fa fa-cart-arrow-down" style="font-size: 100px;"></i>
                </div>
              </div>
               <div class="col">
                <h5 class="card-title font-weight-bold mb-2" style="padding-bottom: 10px;">Toplam Maliyet</h5>
                <span class="h3  mb-0">$27,832,892.00</span>
              </div>
            </div>
        
    </div>

    <!-- Finish Toplam Satışlar -->







    <!-- Start Ödeme Şekline Göre Satışlar -->

    <div class="satis-4">

       <div class='tableauPlaceholder' id='viz1588860349798' style='position: relative'><noscript><a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;rnlerindemeeklineGreMaliyeti&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='OP-Maliyet&#47;rnlerindemeeklineGreMaliyeti' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;rnlerindemeeklineGreMaliyeti&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1588860349798');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
          

    </div>

    <!-- Finish Ödeme Şekline Göre Satışlar -->







    <!-- Start Ödeme Şekline Göre Satışlar -->

    <div class="satis-5">

      <h5 class="total">Ödeme Şekline Göre Maliyet</h5>
      <img src="img/odeme-maliyet.png" class="img-1" style="margin-top: 10px;">
     

    </div>

    <!-- Finish Ödeme Şekline Göre Satışlar -->






    <!-- Start Müşteri Tipine Göre Ürün Satışları -->

    <div class="satis-6">

      <div class='tableauPlaceholder' id='viz1588860423784' style='position: relative'><noscript><a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;rnlerinMteriTrneGreMaliyeti&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='OP-Maliyet&#47;rnlerinMteriTrneGreMaliyeti' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;rnlerinMteriTrneGreMaliyeti&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1588860423784');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>

        


    </div>

    <!-- Finish Müşteri Tipine Göre Ürün Satışları -->







    <!-- Start Müşteri Tipine Göre Satışlar -->

    <div class="satis-5">

      <h5 class="total">Müşteri Türüne Göre Maliyet</h5>
      <img src="img/musteri-maliyet.png" class="img-1" style="margin-top: 10px;">

      
    </div>

    <!-- Finish Müşteri Tipine Göre Satışlar -->










    <!-- Start Cinsiyete Göre Ürün Satışları -->

    <div class="satis-6">

        <div class='tableauPlaceholder' id='viz1588860188479' style='position: relative'><noscript><a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;rnlerinCinsiyeteGreMaliyeti&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='OP-Maliyet&#47;rnlerinCinsiyeteGreMaliyeti' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;rnlerinCinsiyeteGreMaliyeti&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1588860188479');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>


        
         


    </div>

    <!-- Finish Cinsiyete Göre Ürün Satışları -->







    <!-- Start Cinsiyete Göre Satışlar -->

    <div class="satis-5">

      <h5 class="total">Cinsiyete Göre Maliyet</h5>
      <img src="img/cinsiyet-maliyet.png" class="img-1" style="margin-top: 15px;">
  
    </div>

    <!-- Finish Cinsiyete Göre Satışlar -->









    <!-- Start Şehirlere Göre Ürün Satışları -->

    <div class="satis-6">

        <div class='tableauPlaceholder' id='viz1588860210719' style='position: relative'><noscript><a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;rnlerinehirlereGreMaliyeti&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='OP-Maliyet&#47;rnlerinehirlereGreMaliyeti' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;OP&#47;OP-Maliyet&#47;rnlerinehirlereGreMaliyeti&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1588860210719');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>

          


    </div>

    <!-- Finish Şehirlere Göre Ürün Satışları -->








    <!-- Start Şehirlere Göre Satışları -->

    <div class="satis-5">

      <h5 class="total">Şehirlere Göre Maliyet</h5>
      <img src="img/sehir-maliyet.png" class="img-1" >
      
    </div>

    <!-- Finish Şehirlere Göre Satışlar -->







    





   







   

















   
    







  </div>
  <!-- Finish Area -->


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="script.js"></script>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>