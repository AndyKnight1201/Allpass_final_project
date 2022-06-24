<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>門市據點</title>
  <!-- reset css檔案 -->
  <link rel="stylesheet" href="../css/reset.css" />
  <!-- 模板 css檔案 -->
  <link rel="stylesheet" href="../css/position_map.css" />
  {{-- 網頁小圖標icon --}}
  <link href="./pics/logo.png" rel="shortcut icon" />
</head>

<body>
  <header id="header">
    <nav>
      <!-- 導覽列上的店家logo -->
      <a href="/" class="nav_logo">
        <div class="logo">
          <img class="logo_img" src="../pics/logo.jpeg" alt="" />
        </div>
      </a>
      <!-- 選單列 -->
      <div class="nav_content">
        <!-- 1440px 選單列 -->
        <ul class="nav_content_pc">
          <li>
            <a href="/story">
              品牌故事
            </a>
          </li>
          <li>
            <a href="/mealsindex_original">
              餐點介紹
            </a>
          </li>
          <li>
            <a href="/drink_list">
              飲品介紹
            </a>
          </li>
          <li>
            <a href="/position_map">
              門市據點
            </a>
          </li>
        </ul>
      </div>
      <div class="burger_link">
        <!-- 漢堡條樣式 -->
        <label class="burger" for="burger">
          <div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </label>
        <input type="checkbox" id="burger" hidden />
        <ul class="list">
          <li>
            <a href="/story" class="list-project">品牌故事</a>
          </li>
          <li>
            <label class="list-project" for="commodity" for="commodity">
              商品介紹
            </label>
            <input type="checkbox" id="commodity" hidden />
            <ul class="commodity-box">
              <li>
                <a href="/drink_list" class="commodity-list">
                  <p>
                    飲料列表
                  </p>
                  <img src="../pics/drink_icon.png" alt="drink_icon" style="width: 60px;">
                </a>
              </li>
              <li>
                <a href="/mealsindex_original" class="commodity-list">
                  <p>
                    餐點列表
                  </p>
                  <img src="../pics/meal_icon.png" alt="meal_icon" style="width: 60px;">
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="/position_map" class="list-project">門市據點</a>
          </li>
          <li>
            <a href="/feedback" class="list-project">意見回饋</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main id="main">
    <!-- 佔位子用，到時候拿來挖洞 -->
    <section>
      <div class="banner">
        <div class="position-left">
          <div class="left-inner">
            <div class="title">歐巴斯複合式餐廳</div>
            <div class="Store_base">
              <p>Store base</p>
              <h1>門市據點</h1>
            </div>
            <div class="img">
              <img src="../pics/11.jpg" width="100%" alt="">
            </div>
          </div>
        </div>
        <div class="position-right">
          <div class="right-inner">
            <div class="title">歐巴斯複合式餐廳</div>
            <!-- <p class="word">
              據歐巴斯創辦人之一的元大營造有限公司土木、大地工程技師劉啟鋒說，當初在還沒標到進善亭時，他們一群人就在構想要開一間怎麼樣的餐廳？店名要取什麼？由於大家都是興大畢業的同學，很自然就聊起大學時代的生活，交女朋友、玩社團、準備考試等，最後認為所有學生最希望的還是考試能夠ALL
              PASS，因此就一致決定採用「歐巴斯」這個店名了。</p> -->
            <div class="address">
              <p>地址：402台中市南區興大路145號</p>
              <p>電話：04 2285 4466</p>
              <div class="open-time">
                <p>營業時間：</p>
                <div>
                  <p>周一至週六：8:00~21:00</p>
                  <p>週日：8:00~16:30</p>
                </div>
              </div>
            </div>
            <div class="serve">
              <p class="serve-list">WIFI</p>
              <p class="serve-list">內用座位</p>
              <p class="serve-list">早餐</p>
              <p class="serve-list">午餐</p>
              <p class="serve-list">晚餐</p>
            </div>
          </div>
        </div>
      </div>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2727.953753647895!2d120.67281849109463!3d24.12323632443596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d0207a4337b%3A0xc2e1e86038ee0ef3!2z5q2Q5be05pav77yIQWxsIFBhc3Mg77yJ6KSH5ZCI5byP6aSQ5buz!5e0!3m2!1szh-TW!2stw!4v1654344607937!5m2!1szh-TW!2stw"
          width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="footer_content">
      <div class="logo_and_links">
        <a href="/" class="logo">
          <img src="../pics/logo.png" alt="logo" />
        </a>
        <div class="links_group_wrapper">
          <ul class="links_group">
            <li class="link">
              <a href="/right_of_customer"> 顧客權益 </a>
            </li>
            <li class="link">
              <a href="/feedback"> 意見回饋 </a>
            </li>
            <li class="link">
              <a href="https://www.facebook.com/nchuallpass/" target="_blank"> FB粉絲專頁 </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="company_and_phone">
        <p>Copyright © 2022 歐巴斯複合式餐飲</p>
        <p>連絡電話:04 2285 4466</p>
      </div>
      <div class="go_to_top">
        <a href="#main">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 30px;">
            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path
              d="M256 0C114.6 0 0 114.6 0 256c0 141.4 114.6 256 256 256s256-114.6 256-256C512 114.6 397.4 0 256 0zM382.6 254.6c-12.5 12.5-32.75 12.5-45.25 0L288 205.3V384c0 17.69-14.33 32-32 32s-32-14.31-32-32V205.3L174.6 254.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l103.1-103.1C241.3 97.4 251.1 96 256 96c4.881 0 14.65 1.391 22.65 9.398l103.1 103.1C395.1 221.9 395.1 242.1 382.6 254.6z" />
          </svg>
        </a>
      </div>
    </div>
  </footer>
</body>

</html>
