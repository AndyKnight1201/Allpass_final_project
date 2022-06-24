<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>飲料列表</title>
    <!-- reset css檔案 -->
    <link rel="stylesheet" href="../css/reset.css" />
    <!-- 模板 css檔案 -->
    <link rel="stylesheet" href="../css/drink_list.css" />
    {{-- 網頁小圖標icon --}}
    <link href="./pics/logo.png" rel="shortcut icon" />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
    />
  </head>
  <body>
    <header id="header">
      <nav>
        <!-- 導覽列上的店家logo -->
        <a href="/" class="nav_logo">
          <div class="logo">
            <img class="logo_img" src="../pics/logo.png" alt="歐巴斯複合式餐飲" />
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
                      <!-- <a href="https://www.flaticon.com/free-icons/drink" title="drink icons">Drink icons created by Freepik - Flaticon</a> -->
                        <p>
                          飲料列表
                        </p>
                        <img src="../pics/drink_icon.png" alt="drink_icon" style="width: 60px;">
                    </a>
                  </li>
                  <li>
                    <a href="/mealsindex_original" class="commodity-list">
                      <!-- <a href="https://www.flaticon.com/free-icons/spaghetti" title="spaghetti icons">Spaghetti icons created by photo3idea_studio - Flaticon</a> -->
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
      <div id="vue_menu">
        <div class="btns row justify-content-center">
          <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
            <div class="dropdown w-100 d-flex justify-content-center">
              <button class="btn btn-all dropdown-toggle ice-hot-selector w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                照冷熱選擇
              </button>
              <ul class="dropdown-menu w-100 bg-main" aria-labelledby="dropdownMenuButton1" >
                <li class="d-flex justify-content-around align-items-center bg-main-hover" @click="showColdDrink()">
                  <button class="btn btn-ic d-flex">
                    選擇冷飲@{{cold_length}}
                  </button>
                  <div class="cold rounded-circle"></div>
                </li>
                <li class="d-flex justify-content-around align-items-center bg-main-hover" @click="showHotDrink()">
                  <button class="btn btn-hot d-flex justify-content-around">
                     選擇熱飲@{{hot_length}}
                  </button>
                  <div class="hot rounded-circle"></div>
                </li>
                <li class="d-flex justify-content-around align-items-center bg-main-hover" @click="show_cold_and_Hot_Drink()">
                  <button class="btn btn-ice-hot d-flex">
                    冷熱皆可@{{cold_and_hot_length}}
                  </button>
                  <div class="d-flex">
                    <div class="cold rounded-circle"></div>
                    <div class="hot rounded-circle"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="btn_groups col-md-9  p-0 row d-flex justify-content-center align-items-center">
            <div class="btn_selector d-none d-md-flex justify-content-around flex-wrap">
              <button class="btn btn-all me-3" @click="showAllMenu()">
                全部飲品@{{all_length}}
              </button>
              <button class="btn btn-fresh-tea me-3" @click="showFreshTea()">
                調茶飲@{{fresh_length}}
              </button>
              <button class="btn btn-handpicked-tea  me-3" @click="showHandPick_Tea()">
                嚴選茶品@{{HandPick_Tea_length}}
              </button>
              <button class="btn btn-milk-juice me-3" @click="showMilk_and_Juice()">
                牛奶跟果汁@{{Milk_and_Juice_length}}
              </button>
              <button class="btn btn-tea-latte me-3" @click="showTeaLatte()">
                茶拿鐵@{{TeaLatte_length}}
              </button>
              <button class="btn btn-coffee-latte me-3" @click="showCoffee_and_Latte()">
                咖啡跟拿鐵@{{Coffee_and_Latte_length}}
              </button>
            </div>
            <div class="d-flex justify-content-center d-md-none" style="min-width: 155px;">
              <div class="dropdown  mt-3 mb-3 w-100 bg-main">
                <button @click="showAllMenu()"
                class="btn btn-secondary dropdown-toggle w-100 pe-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                全部飲品@{{all_length}}
                </button>
                <ul class="dropdown-menu w-100 ps-3 pe-3 bg-main" aria-labelledby="dropdownMenuButton1">
                  <li class="bg-main-hover">
                    <button class="btn btn-all btn-lg me-3 mb-3 mt-3 w-100" @click="showAllMenu()">
                      全部飲品@{{all_length}}
                    </button>
                  </li>
                  <li class="bg-main-hover">
                    <button class="btn btn-fresh-tea btn-lg me-3 mb-3 mt-3 w-100" @click="showFreshTea()">
                      調茶飲@{{fresh_length}}
                    </button>
                  </li>
                  <li class="bg-main-hover">
                    <button class="btn btn-handpicked-tea btn-lg me-3 mb-3 mt-3 w-100" @click="showHandPick_Tea()">
                      嚴選茶品@{{HandPick_Tea_length}}
                    </button>
                  </li>
                  <li class="bg-main-hover">
                    <button class="btn btn-milk-juice btn-lg me-3 mb-3 mt-3 w-100" @click="showMilk_and_Juice()">
                      牛奶跟果汁@{{Milk_and_Juice_length}}
                    </button>
                  </li>
                  <li class="bg-main-hover">
                    <button class="btn btn-tea-latte btn-lg me-3 mb-3 mt-3 w-100" @click="showTeaLatte()">
                      茶拿鐵@{{TeaLatte_length}}
                    </button>
                  </li>
                  <li class="bg-main-hover">
                    <button class="btn btn-coffee-latte btn-lg me-3 w-100" @click="showCoffee_and_Latte()">
                      咖啡跟拿鐵@{{Coffee_and_Latte_length}}
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card border-3 rounded-3">
          <div class="card-body p-0">
            <div class="item d-flex justify-content-between mb-3 rounded" v-for="(i,index) in tempMenu">
              @{{index+1}}.@{{i.teaname}}<br>@{{i.EngName}}
              <div class="row info">
                <div class="item_price col-6">
                  $@{{i.price}}元
                </div>
                <div class="col-6 d-flex">
                  <div v-if="i.hot==true">
                    熱飲
                    <div class="hot rounded-circle"></div>
                  </div>
                  <div v-if="i.ice==true">
                    冷飲
                    <div class="cold rounded-circle"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section id="recommend">
          <div class="alert alert-success border-0 text-center" role="alert">
            <p class="fs-3">
              想不到應該喝什麼嗎?請讓歐巴斯為您推薦一杯好喝的飲品吧!
            </p>
          </div>
          <div class="d-flex justify-content-center mt-5 pt-3">
            <div class="recommend_drink row">
              <div v-if="recommended_drink_show" class="col-10">
                <div class="d-flex flex-wrap align-items-center">
                  <div>
                    <h3 v-if="predicted_question" class="text-nowrap fs-5 text-start">
                      <span class="d-block pb-1">
                        為您推薦
                      </span>
                      <br>
                      <div class="d-flex">
                        <div>
                          <p class="recommended-text">@{{teaname}}&nbsp&nbsp&nbsp@{{EngName}}&nbsp&nbsp&nbsp@{{price}}元</p>
                        </div>
                        <div class="hot-ice col-2 d-flex pb-3 ps-3">
                          <div v-if="hot==true">
                            <div class="hot rounded-circle"></div>
                          </div>
                          <div v-if="ice==true">
                            <div class="cold rounded-circle"></div>
                          </div>
                        </div>
                      </div>
                    </h3>
                  </div>
                  <div class="d-flex question">
                    <span v-if="predicted_question" class="d-block pe-3">是您想要喝的飲品嗎?</span>
                    <div v-if="predicted_question" class="predicted_results d-flex justify-content-around">
                      <span @click="result_is_accurate()" class="d-block pe-3 ps-3">
                        <!-- <a href="https://www.flaticon.com/free-icons/right" title="right icons">Right icons created by kliwir art - Flaticon</a> -->
                        <img src="../pics/drink_list_icons/correct.png" alt="正確">
                      </span>
                      <span @click="result_is_not_accurate()" class="d-block pe-3">
                        <!-- <a href="https://www.flaticon.com/free-icons/delete" title="delete icons">Delete icons created by Pixel perfect - Flaticon</a> -->
                        <img src="../pics/drink_list_icons/remove.png" alt="錯誤">
                      </span>
                    </div>
                    <div v-if="predicted_result_show" class="result_text">
                      @{{predicted_result_text}}
                      <br>
                      <a class="go_to_allpass_meals text-nowrap" v-if="predicted_result" href="./mealsindex_original">
                        前往歐巴斯餐點區逛逛
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <button v-if="predicted_button" @click="show_recommended_drink()" class="recommend-btn rounded-pill border-0">
                推薦飲品
              </button>
            </div>
          </div>
        </section>
      </div>
    </main>
    <footer id="footer">
      <div class="footer_content">
        <div class="logo_and_links">
          <a href="./" class="logo">
            <img src="../pics/logo.png" alt="logo"/>
          </a>
          <div class="links_group_wrapper">
            <ul class="links_group">
              <li class="link">
                <a href="/right_of_customer">顧客權益</a>
              </li>
              <li class="link">
                <a href="/feedback">意見回饋</a>
              </li>
              <li class="link">
                <a href="https://www.facebook.com/nchuallpass/" target="_blank">FB粉絲專頁</a>
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
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('/js/drink_list.js')}}"></script>
  </body>
</html>
