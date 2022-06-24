<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>品牌故事</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/story.css">
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
            <input type="checkbox" id="burger" hidden/>
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
                    <a href="/mealsindex_original" class="commodity-list" >
                        <p>
                          餐點列表
                        </p>
                        <img src="../pics/meal_icon.png" alt="meal_icon" style="width: 60px;">
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="/position_map" class="list-project" >門市據點</a>
              </li>
              <li>
                <a href="/feedback" class="list-project">意見回饋</a>
              </li>
            </ul>
        </div>
      </nav>
    </header>
    <main id="main">
      <section>
        <ul>
          <div class="top_photo"></div>
          <li class="story_of_allpass" data-aos="fade-left">
            <img src="../pics/balls/ball_1.png" alt="歐巴斯的誕生">
            <div class="story_content">
              <div class="title">歐巴斯的誕生</div>
              <ul>
                <li id="show" class="show" data-aos="zoom-in">
                  <span id="hide1" class="inner_text">
                    最初是由中興大學土木系的校友們，以興友企業的身分，奪得興大進善亭的經營權，才成立了歐巴斯。
                  </span>
                </li>
                <li id="show" class="show" data-aos="zoom-in">
                  <span id="hide1" class="inner_text inner_text_2">
                    聊起大學生活，最重要的三學分則是，愛情、課業、社團。其重要性彷彿沒有修滿就不是所謂的大學生，
                    而餐廳的名字也因希望所有學生的學分能夠ALL PASS，因此店名就採用「歐巴斯」這個名字。
                  </span>
                </li>
              </ul>
            </div>
          </li>
          <!-- 經營型態 -->
          <li class="item item1" data-aos="fade-right">
            <div class="content">
              <div>
                <img src="../pics/balls/ball_2.png" alt="經營型態">
              </div>
              <div class="title">小故事
                <div class="text" data-aos="zoom-in">
                  初開幕時，有學生建議夏季可以販售冰品，因此我們就進來杜老爺冰淇淋。但因冰品成本高，也直接導致冰品價格相對高昂，所以學生的購買意願也相對低落，最後老闆則笑著說：「如果在寒假之前沒賣完，那我就自己抱回家吃了！」
                </div>
              </div>
            </div>
          </li>
          <!-- 圖 -->
          <li class="item item2" data-aos="fade-left">
            <img src="../pics/balls/ball_3.png" alt="餐點">
          </li>
          <!-- 餐點種類 -->
          <li class="item item3" data-aos="fade-right">
            <div class="content">
              <div>
                <img src="../pics/balls/ball_4.png" alt="經營型態">
              </div>
              <div class="type">
                精選早餐</br>
                精選下午茶</br>
                日式咖哩飯</br>
                異國米飯料理</br>
                義大利麵</br>
                沙拉</br>
                點心</br>
              </div>
            </div>
          </li>
          <!-- 圖 -->
          <li class="item item4" data-aos="fade-right">
            <img src="../pics/balls//ball_5.png" alt="餐點">
          </li>
          <li class="item item5" data-aos="fade-left">
            <img src="../pics/balls/ball_7.png" alt="餐點">
          </li>
          <li class="item6" data-aos="fade-right">
            <img src="../pics/balls/ball_6.png" alt="圖片">
          </li>
        </ul>
      </section>
    </main>
    <footer id="footer">
      <div class="footer_content">
        <div class="logo_and_links">
          <a href="/" class="logo">
            <img src="../pics/logo.png" alt="logo" />
          </a href="#">
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
                <path d="M256 0C114.6 0 0 114.6 0 256c0 141.4 114.6 256 256 256s256-114.6 256-256C512 114.6 397.4 0 256 0zM382.6 254.6c-12.5 12.5-32.75 12.5-45.25 0L288 205.3V384c0 17.69-14.33 32-32 32s-32-14.31-32-32V205.3L174.6 254.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l103.1-103.1C241.3 97.4 251.1 96 256 96c4.881 0 14.65 1.391 22.65 9.398l103.1 103.1C395.1 221.9 395.1 242.1 382.6 254.6z"/>
            </svg>
           </a>
        </div>
      </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="../js/story.js"></script>


  </body>
</html>
