<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>顧客權益</title>
    <!-- reset css檔案 -->
    <link rel="stylesheet" href="../css/reset.css" />
    <!-- 模板 css檔案 -->
    <link rel="stylesheet" href="../css/right_of_customer.css" />
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
      <div class="right_of_customer">
        <!-- 大標題 -->
        <div class="right_of_inner_title text_color">顧客權益</div>
        <!-- 小標 -->
        <div class="right_of_inner_text_title text_color line">
          個資告知條款
        </div>
        <!-- 內文 -->
        <div class="right_of_inner_text text_color">
          歐巴斯(即興友企業社)為聯繋、查詢所需，將於顧客回饋中，蒐集顧客姓名、電話及E-MAIL等相關個人資料，
          本公司將於處理顧客反應事項中之必要範圍，提供予處理人員或進行查證與聯繋用，並限於台灣使用。因處理該客訴事件或反應
          事項所蒐集之個資，將於該顧客反映事件處理完成1年後銷毀，台端有權拒絕提供個人資料，但請恕無法提供有效服務與聯繫。
        </div>
        <div class="right_of_inner_text_title text_color">
          個人資料保護政策
        </div>
        <div class="right_of_inner_text text_color">
          歐巴斯為提供完善之服務，對於您所提供之個人資料，將依個人資料保護法之規定來使用，並維護您的隱私權，同時對您的資料一下列聲明進行使用、管理。
        </div>
        <div class="right_of_inner_text_title text_color">
          客戶資料之使用目的
        </div>
        <div class="right_of_inner_text text_color">
          歐巴斯為商業與技術資訊，客戶管理會員管理、行銷資訊與資料庫管理、統計調查與分析、其他合於營業登記項目或章程所定業務之需要等目的，蒐集並於前述目的範圍內利用您所提供之個人資料。
        </div>
        <div class="right_of_inner_text_title text_color">
          客戶資料蒐集方式、利用範圍
        </div>
        <div class="right_of_inner_text text_color">
          當您使用歐巴斯服務時，本網站基於服務之提供，將會請您填寫服務所需之相關資料（顧客意見回饋或基於服務需要）而取得您的基本資料，歐巴斯僅將您的資料使用在您所需的服務上。
        </div>
        <div class="right_of_inner_text_title text_color">
          客戶資料使用期間、使用區域
        </div>
        <div class="right_of_inner_text text_color">
          歐巴斯將持續使用您提供的個人資料，直至您提出停止使用或多那之停止提供服務之日為止，您的個人資料使用區域僅限於台灣使用，並為提供您更完善、更多元的服務以及更好之服務品質。我們將會在法令許可或您同意下，將您的資料提供給合作廠商、商品供應商或關係企業，以提供您所需的個別服務、行銷活動及相關優恵訊息給您。
        </div>

        <div class="right_of_inner_text_title text_color">
          客戶資料分類及項目
        </div>
        <div class="right_of_inner_text text_color">
          歐巴斯依所提供之服務需要，可能需請您提供的個人資料，包括基本資料帳務資料、分類標準如下：
          </br></br>
          （ㄧ）基本資料：包括姓名、電話及電子郵件信箱等資料。
        </div>
        <div class="right_of_inner_text_title text_color">
          客戶資料儲存及保管方式
        </div>
        <div class="right_of_inner_text text_color">
          您的個人資料均被嚴密地保存在本公司的資料庫系統中，同時，任何人均需在本公司訂定之資料授權管理規範下，進行資料之取得與使用，而不在授權範圍內之任何人，均不得亦無法通過授權控管系統而取得資料。
        </div>
        <div class="right_of_inner_text_title text_color">
          資料安全及保護方法
        </div>
        <div class="right_of_inner_text text_color">
          我們以Secure Sockets Layer (SSL)機制進行資料傳輸的加密，並已加裝防火牆防止不法入侵，避免您的個人資料遭到非法存取。
        </div>
        <div class="right_of_inner_text_title text_color">
          客戶資料使用對象
        </div>
        <div class="right_of_inner_text text_color">
          我們絕對不會任意出售、交換、出租或以其他變相之方式，將您的個人資料揭露與其他團體或個人，惟有下列三種情形，我們將與第三者共用您的個人資料：
          </br></br>
          （一）經過您的事前同意或授權允許
          </br>
          司法單位或其他主管機關經合法正式的程序要求時，為了提供您其他服務或優恵權益，需要與提供該服務或優恵之第三者共用您的資料，我們會在活動時提供充分說明並告知，您可以自由選擇是否接受這項服務或優惠。
          </br></br>
          （二）客戶資料變更修改方式
          </br>
          您得就您留於本網站之個人資料依法向本網站以書面或電子文件請求行使：查詢或請求閱覽、複製、補充或更正，請求停止蒐集或利用、請求刪除等權利，惟上述權利，若因顧客不符合申請程序或法律規定，或本網站依法負有保存義務，或法律另有規定之情況者，則不在此限，
        </div>
      </div>
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
                <path d="M256 0C114.6 0 0 114.6 0 256c0 141.4 114.6 256 256 256s256-114.6 256-256C512 114.6 397.4 0 256 0zM382.6 254.6c-12.5 12.5-32.75 12.5-45.25 0L288 205.3V384c0 17.69-14.33 32-32 32s-32-14.31-32-32V205.3L174.6 254.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l103.1-103.1C241.3 97.4 251.1 96 256 96c4.881 0 14.65 1.391 22.65 9.398l103.1 103.1C395.1 221.9 395.1 242.1 382.6 254.6z"/>
            </svg>
           </a>
        </div>
      </div>
    </footer>
  </body>
</html>
