<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>餐點列表</title>
  <!-- reset css檔案 -->
  <link rel="stylesheet" href="../css/reset.css" />
  <!-- 模板 css檔案 -->
  <link rel="stylesheet" href="../css/mealsindex.css" />
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
                <a class="commodity-list" href="/drink_list">
                  <p>
                    飲料列表
                  </p>
                  <img src="../pics/drink_icon.png" alt="drink_icon" style="width: 60px;">
                </a>
              </li>
              <li>
                <a class="commodity-list" href="/mealsindex_original">
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
    <section id="Meals-box">
      <div class="Meals-list">
        <div class="list-btn" tabindex="1" onclick="all_Meals();">全部餐點<br>All</div>
        <div class="list-btn-two" tabindex="1" onclick="breakfast();">精選早餐／附飲品<br>Breakfast Brunch</div>
        <div class="list-btn" tabindex="1" onclick="salad();">沙拉／附飲品<br>Salad</div>
        <div class="list-btn-two" tabindex="1" onclick="dessert();">點心<br>Snack</div>
        <div class="list-btn" tabindex="1" onclick="afternoon_tea();">精選下午茶／附飲品<br>Afternoon tea</div>
        <div class="list-btn-two" tabindex="1" onclick="nchu_student();">中興大學<br>學生優惠特餐<br>NCHU Students's<br>Special Offer</div>
        <div class="list-btn" tabindex="1" onclick="curry_jp();">日式咖哩飯/附飲品<br>Japanese Curry</div>
        <div class="list-btn-two" tabindex="1" onclick="exotic_rice();">異國米飯料理/附飲品<br>Exotic Rice</div>
        <div class="list-btn" tabindex="1" onclick="pasta();">義大利麵／附飲品<br>Spaghetti</div>
      </div>
      <div class="Meals-project-box">
        <!-- RWD出現的餐點選擇列表 -->
        <div class="Meals-list-RWD">
          <form action="">
            <!-- required使用者一定要選擇 -->
            <select name="" id="meals" required onclick="meal(this)">
              <option selected disabled style="display:none;">請選擇餐點分類</option>
              <option value="1">全部餐點</option>
              <option value="2">精選早餐／附飲品</option>
              <option value="3">沙拉／附飲品</option>
              <option value="4">點心</option>
              <option value="5">精選下午茶／附飲品</option>
              <option value="6">中興大學學生優惠特餐</option>
              <option value="7">日式咖哩飯/附飲品</option>
              <option value="8">異國米飯料理/附飲品</option>
              <option value="9">義大利麵／附飲品</option>
            </select>
          </form>
        </div>
        <!-- 餐點項目顯示區 -->
        <div class="box-inner">
          <div class="Remark">
            <div>
              <div style="color:#f95223; font-size: 20px;font-weight: 600;">※供餐時間表：</div>
              <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">1.早餐－08：00～10：30</div>
              <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">2.沙拉－08：00～19：30</div>
              <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">3.點心－08：00～19：30</div>
              <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">4.精選下午茶－14：00～16：30</div>
              <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">5.興大學生特惠餐－11：00～19：30</div>
              <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem; text-align: center;">※學生特惠餐限興大學生憑學生證選用<br>一證一套。</div>
              <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">6.日式咖哩－11：00～19：30</div>
              <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem; text-align: center;">※升級套餐可享有濃湯與手工麵包一份</div>
              <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">7.異國米飯－11：00～19：30</div>
              <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem;text-align: center;">※升級套餐可享有濃湯與手工麵包一份</div>
              <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">8.義大利麵－11：00～19：30</div>
              <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem;text-align: center;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
          </div>
          <!-- 餐點項目區 -->
        </div>
        <div class="project">
          <!-- 餐點項目卡片-->
          {{-- @foreach ($mealTag[0]->meal as $item)
                  <div class="project-card">
                    <div class="project-name">{{$item->tag}}sss</div>
                    <div class="img-box">
                      <img src="{{ $item->img_path }}" alt="..." width="100%">
                    </div>
                    <div class="project-body">
                      <p class="project-title">{{ $item->meal_name }}</p>
                      <p class="project-text">{{ $item->note }}</p>
                      <p class="project-text">{{ $item->second_note }}</p>
                      <p class="project-price">{{ '$'.$item->price }}</p>
                    </div>
                  </div>
          @endforeach --}}
          @foreach ( $breakfast as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($salad as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($dessert as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($afternoonTea as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($nchuStudent as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($curryJp as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($exoticRice as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($pasta as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        </div>
      </div>
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
              <a href="https://www.facebook.com/nchuallpass/"> FB粉絲專頁 </a>
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
  <script>
    //全部餐點
    function all_Meals() {
      var Meals_project = document.querySelector('.box-inner');
      var project = document.querySelector('.project');
      Meals_project.innerHTML = "";
      project.innerHTML = "";

      Meals_project.innerHTML = `
            <div class="Remark">
              <div>
                <div style="color:#f95223; font-size: 20px;font-weight: 600;">※供餐時間表：</div>
                <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">1.早餐－08：00～10：30</div>
                <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">2.沙拉－08：00～19：30</div>
                <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">3.點心－08：00～19：30</div>
                <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">4.精選下午茶－14：00～16：30</div>
                <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">5.興大學生特惠餐－11：00～19：30</div>
                <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem; text-align: center;">※學生特惠餐限興大學生憑學生證選用<br>一證一套。</div>
                <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">6.日式咖哩－11：00～19：30</div>
                <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem; text-align: center;">※升級套餐可享有濃湯與手工麵包一份</div>
                <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">7.異國米飯－11：00～19：30</div>
                <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem;text-align: center;">※升級套餐可享有濃湯與手工麵包一份</div>
                <div style="color:black; font-size: 20px;font-weight: 600;padding-top:0.5rem;">8.義大利麵－11：00～19：30</div>
                <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem;text-align: center;">※升級套餐可享有濃湯與手工麵包一份</div>
              </div>
            </div>
          ` ;

      project.innerHTML =`
              @foreach ( $breakfast as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($salad as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($dessert as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($afternoonTea as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($nchuStudent as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($curryJp as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($exoticRice as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($pasta as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach



        `;
    }
    //早餐
    function breakfast() {
      var Meals_project = document.querySelector('.box-inner');
      var project = document.querySelector('.project');
      Meals_project.innerHTML = "";
      project.innerHTML = "";
      Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～10：30</div>
            </div>
            `;
      project.innerHTML =`
              @foreach ($breakfast as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
    }
    //沙拉
    function salad() {
      var Meals_project = document.querySelector('.box-inner');
      var project = document.querySelector('.project');
      Meals_project.innerHTML = "";
      project.innerHTML = "";
      Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～19：30</div>
            </div>
            `;
      project.innerHTML = `
              @foreach ($salad as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
    }
    //點心
    function dessert() {
      var Meals_project = document.querySelector('.box-inner');
      var project = document.querySelector('.project');
      Meals_project.innerHTML = "";
      project.innerHTML = "";
      Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～19：30</div>
            </div>
            `;
      project.innerHTML =`
              @foreach ($dessert as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
    }
    //精選下午茶
    function afternoon_tea() {
      var Meals_project = document.querySelector('.box-inner');
      var project = document.querySelector('.project');
      Meals_project.innerHTML = "";
      project.innerHTML = "";
      Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間14：00～16：30</div>
            </div>
            `;
      project.innerHTML =`
              @foreach ($afternoonTea as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
    }
    //中興大學學生特餐
    function nchu_student() {
      var Meals_project = document.querySelector('.box-inner');
      var project = document.querySelector('.project');
      Meals_project.innerHTML = "";
      project.innerHTML = "";
      Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px;">※限興大學生憑學生證選用<br>一證一套。</div>
            </div>
            `;
      project.innerHTML =`
              @foreach ($nchuStudent as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
    }
    //日式咖哩
    function curry_jp() {
      var Meals_project = document.querySelector('.box-inner');
      var project = document.querySelector('.project');
      Meals_project.innerHTML = "";
      project.innerHTML = "";
      Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
            `;
      project.innerHTML =`
              @foreach ($curryJp as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
    }
    //異國米飯
    function exotic_rice() {
      var Meals_project = document.querySelector('.box-inner');
      var project = document.querySelector('.project');
      Meals_project.innerHTML = "";
      project.innerHTML = "";
      Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
            `;
      project.innerHTML =`
              @foreach ($exoticRice as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
    }
    //義大利麵
    function pasta() {
      var Meals_project = document.querySelector('.box-inner');
      var project = document.querySelector('.project');
      Meals_project.innerHTML = "";
      project.innerHTML = "";
      Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
            `;
      project.innerHTML =`
              @foreach ($pasta as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
    }
    // RWD出現的餐點選擇列表
    function meal() {
      var Meals = document.querySelector('#meals').value;
      var Meals_project = document.querySelector('.box-inner');
      var project = document.querySelector('.project');

      if (Meals == "1") {
        // 全部餐點
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        Meals_project.innerHTML = `
            <div class="Remark">
              <div>
                <div style="color:#f95223; font-size: 18px;font-weight: 600;">※供餐時間表：</div>
                <div style="color:black; font-size: 18px;font-weight: 600;padding-top:0.5rem;">1.早餐－08：00～10：30</div>
                <div style="color:black; font-size: 18px;font-weight: 600;padding-top:0.5rem;">2.沙拉－08：00～19：30</div>
                <div style="color:black; font-size: 18px;font-weight: 600;padding-top:0.5rem;">3.點心－08：00～19：30</div>
                <div style="color:black; font-size: 18px;font-weight: 600;padding-top:0.5rem;">4.精選下午茶－14：00～16：30</div>
                <div style="color:black; font-size: 18px;font-weight: 600;padding-top:0.5rem;">5.興大學生特惠餐－11：00～19：30</div>
                <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem; text-align: center;">※學生特惠餐限興大學生憑學生證選用<br>一證一套。</div>
                <div style="color:black; font-size: 18px;font-weight: 600;padding-top:0.5rem;">6.日式咖哩－11：00～19：30</div>
                <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem; text-align: center;">※升級套餐可享有濃湯與手工麵包一份</div>
                <div style="color:black; font-size: 18px;font-weight: 600;padding-top:0.5rem;">7.異國米飯－11：00～19：30</div>
                <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem;text-align: center;">※升級套餐可享有濃湯與手工麵包一份</div>
                <div style="color:black; font-size: 18px;font-weight: 600;padding-top:0.5rem;">8.義大利麵－11：00～19：30</div>
                <div style="color:#f95223; font-size: 12px;font-weight: 600;padding-top:0.5rem;text-align: center;">※升級套餐可享有濃湯與手工麵包一份</div>
              </div>
            </div>
            `;
        project.innerHTML =`
        @foreach ($breakfast as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($salad as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($dessert as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($afternoonTea as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($nchuStudent as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($curryJp as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($exoticRice as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach

              @foreach ($pasta as $item)
                    <div class="project-card">
                      <div class="project-name">{{$item->tag}}</div>
                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
      } else if (Meals == "2") {
        // 早餐
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        Meals_project.innerHTML = `
          <div class="Remark">
              <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～10：30</div>
          </div>
          `;
        project.innerHTML =`
              @foreach ($breakfast as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;

      } else if (Meals == "3") {
        // 沙拉
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        Meals_project.innerHTML = `
        <div class="Remark">
            <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～19：30</div>
        </div>`
        ;
        project.innerHTML =`
              @foreach ($salad as $item)
                        <div class="project-card">

                          <div class="img-box">
                            <img src="{{ $item->img_path }}" alt="..." width="100%">
                          </div>
                          <div class="project-body">
                            <p class="project-title">{{ $item->meal_name }}</p>
                            <p class="project-text">{{ $item->note }}</p>
                            <p class="project-text">{{ $item->second_note }}</p>
                            <p class="project-price">{{ '$'.$item->price }}</p>
                          </div>
                        </div>
              @endforeach
        `;

      } else if (Meals == "4") {
        // 點心
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～19：30</div>
            </div>
            `;
        project.innerHTML =`
              @foreach ($dessert as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
      } else if (Meals == "5") {
        // 精選下午茶
        Meals_project.innerHTML = "";
        project.innerHTML = "";

        Meals_project.innerHTML = `
        <div class="Remark">
            <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間14：00～16：30</div>
        </div>
        `;
        project.innerHTML =`
        <div class="project">
          @foreach ($afternoonTea as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        </div>
    `;
      } else if (Meals == "6") {
        // 中興大學學生特餐
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        Meals_project.innerHTML = `
        <div class="Remark">
            <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
            <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※限興大學生憑學生證選用<br>一證一套。</div>
        </div>
        `;
        project.innerHTML = `
          @foreach ($nchuStudent as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
    `;
      } else if (Meals == "7") {
        // 日式咖哩
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
            `;
        project.innerHTML = `
              @foreach ($curryJp as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;

      } else if (Meals == "8") {
        // 異國米飯
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
            `;
        project.innerHTML = `
              @foreach ($exoticRice as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
      } else if (Meals == "9") {
        // 義大利麵
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
            `;
        project.innerHTML = `
              @foreach ($pasta as $item)
                    <div class="project-card">

                      <div class="img-box">
                        <img src="{{ $item->img_path }}" alt="..." width="100%">
                      </div>
                      <div class="project-body">
                        <p class="project-title">{{ $item->meal_name }}</p>
                        <p class="project-text">{{ $item->note }}</p>
                        <p class="project-text">{{ $item->second_note }}</p>
                        <p class="project-price">{{ '$'.$item->price }}</p>
                      </div>
                    </div>
              @endforeach
        `;
      }
    }
  </script>
</body>
</html>
