<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<title>Криптовалюти</title>
</head>

<nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo"><strong><u>ITC</u></strong></div>
    <ul class="links">
        <li class="search-form">
            <div class="d1">
                <div class="form">
                    <input id="search_inp" type="text" placeholder="Введіть назву криптовалюти...">
                    <button onclick="getCoinInfo()" class="search_button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </li>
        <li><a href="index.php">Новини</a></li>
        <li><a href="crypto.php">Криптовалюта</a></li>

    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
</nav>

<body onload="func('bitcoin')">



  <div class="main-wrapper">


    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">



    <div class="main-block">
      <div class="left-column">
        <div class="sec_row">
          <img src="" id="small_img">
          <p id="crypto_name"></p>
          <div class="prices">
            <p id="crypto_price"></p>
          </div>
          <p id="price_change_perc_24h"></p>
        </div>

        <div class="third_row">
          <div>
            <div class="market_cap ">
              <p id="market_cap">Market Cap</p>
              <div class="market_rank">
                <p id="market_rank"></p>
              </div>
            </div>

            <div class="websites m-t-10px">
              <p id="website">Website: </p>
              <a id="web_link"></a>
            </div>

            <div class="source_code m-t-10px">
              <p id="source_code">Source Code:</p>
              <a id="source_code_link">Github </a>
            </div>

            <div class="tags m-t-10px">
              <p id="tags">Tags:</p>
              <p id="tag"></p>
            </div>
          </div>
          <div class="right_block m-t-10px">
            <p id="market_cap_vol">Market cap</p>
            <p id="market_cap_vol1"></p>

            <p id="traiding_vol">24 Hour Trading Vol</p>
            <p id="traiding_vol1"></p>

            <p id="low_high">24h Low / 24h High</p>
            <p id="low_high1"></p>

            <p id="dil_val">Fully Diluted Valuation</p>
            <p id="dil_val1"></p>

            <p id="circ_sup">Circulating Supply</p>
            <p id="circ_sup1"></p>

            <p id="max_supply">Max Supply</p>
            <p id="max_supply1"></p>
          </div>
        </div>
      </div>
      <!-- TradingView Widget BEGIN -->
      <div class="tradingview-widget-container">
        <div id="tradingview_fe11e"></div>
        <div class="tradingview-widget-copyright"><a href="https://ru.tradingview.com/symbols/MSFT/" rel="noopener" target="_blank"><span class="blue-text">Apple</span></a> от TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
        </script>
      </div>
      <!-- TradingView Widget END -->
    </div>

  </div>

  <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
  <?php
  require_once "blocks/footer.php";
  ?>
</body>

</html>