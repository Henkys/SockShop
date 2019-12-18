<title>ThemeSocks</title>
<?php require_once '../app/view/Header.php'; ?>
<div class="hero">
  <div class="container">
    <div class="row">
      <div class="col-md- herotext">
        <h4 class="center">Make the right choice</h4>
        <h1 class="center">Sock-shop</h1>
      </div>
    </div>
  </div>
</div>
<section class="bg-default">
  <div class="section-wave">
    <svg x="0px" y="0px" width="1920px" height="46px" viewBox="0 0 1920 46" preserveAspectRatio="none">
      <path d="M1920,0.5c-82.8,0-109.1,44-192.3,44c-78.8,0-116.2-44-191.7-44c-77.1,0-115.9,44-192,44c-78.2,0-114.6-44-192-44c-78.4,0-115.3,44-192,44c-76.9-0.1-119-44-192-44c-77,0-115.2,44-192,44c-73.6,0-114-44-190.9-44c-78.5,0-117.2,44-194.1,44c-75.9,0-113-44-191-44V46h1920V0.5z"></path>
    </svg>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-md-6">

    </div>
    <div class="col-md-6">
    </div>
  </div>
</div>
<div class="container fullcover">
  <div class="row">
    <div class="col-md-12">

      <div class="sock-deals">

        <h2>Sock Deals</h2>
        <div class="s-border"></div>

        <div class="sock-item">
          <div class="sock-item-img">

          </div>
          <div class="sock-item-desc">

          </div>
        </div>

      </div>

    </div>
  </div>
</div>

<div class="sock-list">

  <h2>Sock Themes</h2>
  <div class="s-border">
    <?php
    $html = "";

    foreach ($mainThemes as $mainTheme) {
      $html .= "<div class='sock-item'>";
      $html .= "<div class='sock-item-img'>";
      $html .= "</div>";
      $html .= "<div class='sock-item-desc'>";
      $html .= "<h2>$mainTheme[mainThemeName] Sokken</h2>";
      $html .= "</div>";
      $html .= "</div>";
      // $thisThemes = $this->ThemeModel->readThisMainTheme($mainTheme['mainThemeCode']);
    }
    echo $html;
    ?>
  </div>

</div>

<div class="info">

  <h2>SockShop Information</h1>
    <div class="s-border"></div>

</div>



<div class="sock-banner">

  <h3>Great Socks you get at the SockShop. <a>Get them now!</a></h3>

</div>

<?php require_once '../app/view/Footer.php'; ?>