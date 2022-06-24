// <!-- 本網頁使用圖片圖片來源與作者 -->
// <!-- <a href="https://www.flaticon.com/free-icons/wellington" title="wellington icons">Wellington icons created by Freepik - Flaticon</a>
// <a href="https://www.flaticon.com/free-icons/ramen" title="ramen icons">Ramen icons created by justicon - Flaticon</a>
// <a href="https://www.flaticon.com/free-icons/cake" title="cake icons">Cake icons created by monkik - Flaticon</a>
// <a href="https://www.flaticon.com/free-icons/salad" title="salad icons">Salad icons created by Roundicons - Flaticon</a>
// <a href="https://www.flaticon.com/free-icons/lunch" title="lunch icons">Lunch icons created by photo3idea_studio - Flaticon</a>
// <a href="https://www.flaticon.com/free-icons/curry" title="curry icons">Curry icons created by Freepik - Flaticon</a>
// <a href="https://www.flaticon.com/free-icons/food-and-restaurant" title="food and restaurant icons">Food and restaurant icons created by Freepik - Flaticon</a>
// <a href="https://www.flaticon.com/free-icons/pasta" title="pasta icons">Pasta icons created by Flat-icons-com - Flaticon</a>
// <a href="https://www.flaticon.com/free-icons/fries" title="fries icons">Fries icons created by Freepik - Flaticon</a>
// <a href="https://www.flaticon.com/free-icons/breakfast" title="breakfast icons">Breakfast icons created by Freepik - Flaticon</a> -->
//區域歸類
//0全部餐點
var all_list = [
    {
        meal_type: "精選早餐",
        meal_img: '../pics/meals_list_img/breakfast/貝果.jpg',
        meal_name: "元氣貝果早餐",
        meal_ex: '※附德式香腸、炒蛋、沙拉、湯品',
        meal_ex2: '',
        meal_price: '125元',
    },
    {
        meal_type: "精選早餐",
        meal_img: '../pics/meals_list_img/breakfast/雙蛋.jpg',
        meal_name: "活力雙蛋套餐",
        meal_ex: '※附沙拉、麵包、湯品',
        meal_ex2: '※雞肉、培根、蔬食(三選一)',
        meal_price: '145元',
    },
    {
        meal_type: "精選早餐",
        meal_img: '../pics/meals_list_img/breakfast/低卡蛋.jpg',
        meal_name: "低卡水煮蛋套餐",
        meal_ex: '※附沙拉、佛卡夏麵包、湯品',
        meal_ex2: '※雞肉、培根、蔬食(三選一)',
        meal_price: '145元',
    },

    {
        meal_type: "沙拉",
        meal_img: '../pics/meals_list_img/salad/水果沙拉.jpg',
        meal_name: "綜合沙拉水果佐優格醬",
        meal_ex: '※蛋奶素',
        meal_ex2: '',
        meal_price: '150元',
    },
    {
        meal_type: "沙拉",
        meal_img: '../pics/meals_list_img/salad/蘑菇沙拉.jpg',
        meal_name: "低卡路里野菇水煮蛋沙拉佐義式油醋",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '160元',
    },
    {
        meal_type: "沙拉",
        meal_img: '../pics/meals_list_img/salad/雞肉沙拉.jpg',
        meal_name: "活力堅果溫香草嫩雞沙拉",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '180元',
    },

    {
        meal_type: "點心",
        meal_img: '../pics/meals_list_img/dessert/薯條.jpg',
        meal_name: "薯條",
        meal_ex: '※蛋奶素',
        meal_ex2: '',
        meal_price: '60元',
    },
    {
        meal_type: "點心",
        meal_img: '../pics/meals_list_img/dessert/雞塊.jpg',
        meal_name: "雞塊",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '60元',
    },
    {
        meal_type: "點心",
        meal_img: '../pics/meals_list_img/dessert/洋蔥圈.jpg',
        meal_name: "洋蔥圈",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '60元',
    },
  
    {
        meal_type: "精選下午茶",
        meal_img: '../pics/meals_list_img/afternoon_tea/什錦沙拉.jpg',
        meal_name: "歐巴斯綜合什錦沙拉",
        meal_ex: '※限外帶',
        meal_ex2: '',
        meal_price: '120元',
    },
    {
        meal_type: "精選下午茶",
        meal_img: '../pics/meals_list_img/afternoon_tea/牛肉捲.jpg',
        meal_name: "乳酪牛肉捲套餐",
        meal_ex: '附沙拉、玉米布丁酥',
        meal_ex2: '',
        meal_price: '160元',
    },
    {
        meal_type: "精選下午茶",
        meal_img: '../pics/meals_list_img/afternoon_tea/雞肉捲.jpg',
        meal_name: "松露起司雞肉捲套餐",
        meal_ex: '附沙拉、玉米布丁酥',
        meal_ex2: '',
        meal_price: '160元',
    },
    
    {
        meal_type: "興大學生優惠特餐",
        meal_img: '../pics/meals_list_img/nchu_student/紅醬義大利麵.jpg',
        meal_name: "鮮番茄肉醬義大利麵",
        meal_ex: '※單數週供應',
        meal_ex2: '',
        meal_price: '85元',
    },
    // {
    //     meal_type: "興大學生優惠特餐",
    //     meal_img: '../pics/meals_list_img/nchu_student/紅醬義大利麵.jpg',
    //     meal_name: "特製香酥翅腿佐咖哩醬",
    //     meal_ex: '※雙數週供應',
    //     meal_ex2: '',
    //     meal_price: '85元',
    // },

    {
        meal_type: "日式咖哩飯",
        meal_img: '../pics/meals_list_img/curry_jp/起司蛋.jpg',
        meal_name: "起司蛋",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '120元',
    },
    {
        meal_type: "日式咖哩飯",
        meal_img: '../pics/meals_list_img/curry_jp/蛋包與蔬食.jpg',
        meal_name: "蛋包與蔬食",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '180元',
    },
    {
        meal_type: "日式咖哩飯",
        meal_img: '../pics/meals_list_img/curry_jp/嫩煎香草雞.jpg',
        meal_name: "嫩煎香草雞",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '200元',
    },
  
    {
        meal_type: "異國米飯料理",
        meal_img: '../pics/meals_list_img/exotic_rice/泰式椒麻雞.jpg',
        meal_name: "泰式椒麻雞佐酸甜醬",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '200元',
    },
    {
        meal_type: "異國米飯料理",
        meal_img: '../pics/meals_list_img/exotic_rice/黑松露蕈菇奶油雞肉.jpg',
        meal_name: "黑松露蕈菇奶油雞肉燉飯",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '220元',
    },
    {
        meal_type: "異國米飯料理",
        meal_img: '../pics/meals_list_img/exotic_rice/和風蒲燒鯛魚.jpg',
        meal_name: "和風蒲燒鯛魚飯",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '250元',
    },
   
    {
        meal_type: "義大利麵",
        meal_img: '../pics/meals_list_img/pasta/田園鮮蔬野菇.jpg',
        meal_name: "田園鮮蔬野菇義大利麵",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '190元',
    },
    {
        meal_type: "義大利麵",
        meal_img: '../pics/meals_list_img/pasta/清炒塔香蒜片.jpg',
        meal_name: "清炒塔香蒜片培根義大利麵",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '210元',
    },
    {
        meal_type: "義大利麵",
        meal_img: '../pics/meals_list_img/pasta/松露起司奶油雞肉.jpg',
        meal_name: "松露起司奶油雞肉義大利麵",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '230元',
    },
    

];
// 1早餐菜單
var breakfast_list = [
    {
        meal_type: "精選早餐",
        meal_img: '../pics/meals_list_img/breakfast/貝果.jpg',
        meal_name: "元氣貝果早餐",
        meal_ex: '※附德式香腸、炒蛋、沙拉、湯品',
        meal_ex2: '',
        meal_price: '125元',
    },
    {
        meal_type: "精選早餐",
        meal_img: '../pics/meals_list_img/breakfast/雙蛋.jpg',
        meal_name: "活力雙蛋套餐",
        meal_ex: '※附沙拉、麵包、湯品',
        meal_ex2: '※雞肉、培根、蔬食(三選一)',
        meal_price: '145元',
    },
    {
        meal_type: "精選早餐",
        meal_img: '../pics/meals_list_img/breakfast/低卡蛋.jpg',
        meal_name: "低卡水煮蛋套餐",
        meal_ex: '※附沙拉、佛卡夏麵包、湯品',
        meal_ex2: '※雞肉、培根、蔬食(三選一)',
        meal_price: '145元',
    },

];
// 2沙拉菜單
var salad_list = [
    {
        meal_type: "沙拉",
        meal_img: '../pics/meals_list_img/salad/水果沙拉.jpg',
        meal_name: "綜合沙拉水果佐優格醬",
        meal_ex: '※蛋奶素',
        meal_ex2: '',
        meal_price: '150元',
    },
    {
        meal_type: "沙拉",
        meal_img: '../pics/meals_list_img/salad/蘑菇沙拉.jpg',
        meal_name: "低卡路里野菇水煮蛋沙拉佐義式油醋",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '160元',
    },
    {
        meal_type: "沙拉",
        meal_img: '../pics/meals_list_img/salad/雞肉沙拉.jpg',
        meal_name: "活力堅果溫香草嫩雞沙拉",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '180元',
    },
   
]
// 3點心菜單
var dessert_list = [
    {
        meal_type: "點心",
        meal_img: '../pics/meals_list_img/dessert/薯條.jpg',
        meal_name: "薯條",
        meal_ex: '※蛋奶素',
        meal_ex2: '',
        meal_price: '60元',
    },
    {
        meal_type: "點心",
        meal_img: '../pics/meals_list_img/dessert/雞塊.jpg',
        meal_name: "雞塊",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '60元',
    },
    {
        meal_type: "點心",
        meal_img: '../pics/meals_list_img/dessert/洋蔥圈.jpg',
        meal_name: "洋蔥圈",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '60元',
    },
   
]
// 4下午茶菜單
var afternoon_tea_list = [
    {
        meal_type: "精選下午茶",
        meal_img: '../pics/meals_list_img/afternoon_tea/什錦沙拉.jpg',
        meal_name: "歐巴斯綜合什錦沙拉",
        meal_ex: '※限外帶',
        meal_ex2: '',
        meal_price: '120元',
    },
    {
        meal_type: "精選下午茶",
        meal_img: '../pics/meals_list_img/afternoon_tea/牛肉捲.jpg',
        meal_name: "乳酪牛肉捲套餐",
        meal_ex: '附沙拉、玉米布丁酥',
        meal_ex2: '',
        meal_price: '160元',
    },
    {
        meal_type: "精選下午茶",
        meal_img: '../pics/meals_list_img/afternoon_tea/雞肉捲.jpg',
        meal_name: "松露起司雞肉捲套餐",
        meal_ex: '附沙拉、玉米布丁酥',
        meal_ex2: '',
        meal_price: '160元',
    },


]
// 5興大學生特餐菜單
var nchu_student_list = [
    {
        meal_type: "興大學生優惠特餐",
        meal_img: '../pics/meals_list_img/nchu_student/紅醬義大利麵.jpg',
        meal_name: "鮮番茄肉醬義大利麵",
        meal_ex: '※單數週供應',
        meal_ex2: '',
        meal_price: '85元',
    },
    // {
    //     meal_type: "興大學生優惠特餐",
    //     meal_img: '../pics/meals_list_img/nchu_student/紅醬義大利麵.jpg',
    //     meal_name: "特製香酥翅腿佐咖哩醬",
    //     meal_ex: '※雙數週供應',
    //     meal_ex2: '',
    //     meal_price: '85元',
    // }
]
// 6日式咖哩飯菜單
var curry_jp_list = [
    {
        meal_type: "日式咖哩飯",
        meal_img: '../pics/meals_list_img/curry_jp/起司蛋.jpg',
        meal_name: "起司蛋",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '120元',
    },
    {
        meal_type: "日式咖哩飯",
        meal_img: '../pics/meals_list_img/curry_jp/蛋包與蔬食.jpg',
        meal_name: "蛋包與蔬食",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '180元',
    },
    {
        meal_type: "日式咖哩飯",
        meal_img: '../pics/meals_list_img/curry_jp/嫩煎香草雞.jpg',
        meal_name: "嫩煎香草雞",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '200元',
    },
   
]
// 7異國米飯料理
var exotic_rice_list = [
    {
        meal_type: "異國米飯料理",
        meal_img: '../pics/meals_list_img/exotic_rice/泰式椒麻雞.jpg',
        meal_name: "泰式椒麻雞佐酸甜醬",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '200元',
    },
    {
        meal_type: "異國米飯料理",
        meal_img: '../pics/meals_list_img/exotic_rice/黑松露蕈菇奶油雞肉.jpg',
        meal_name: "黑松露蕈菇奶油雞肉燉飯",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '220元',
    },
    {
        meal_type: "異國米飯料理",
        meal_img: '../pics/meals_list_img/exotic_rice/和風蒲燒鯛魚.jpg',
        meal_name: "和風蒲燒鯛魚飯",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '250元',
    },
]
// 8義大利麵
var pasta_list = [
    {
        meal_type: "義大利麵",
        meal_img: '../pics/meals_list_img/pasta/田園鮮蔬野菇.jpg',
        meal_name: "田園鮮蔬野菇義大利麵",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '190元',
    },
    {
        meal_type: "義大利麵",
        meal_img: '../pics/meals_list_img/pasta/清炒塔香蒜片.jpg',
        meal_name: "清炒塔香蒜片培根義大利麵",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '210元',
    },
    {
        meal_type: "義大利麵",
        meal_img: '../pics/meals_list_img/pasta/松露起司奶油雞肉.jpg',
        meal_name: "松露起司奶油雞肉義大利麵",
        meal_ex: '',
        meal_ex2: '',
        meal_price: '230元',
    },
   
]
// breakfast_list.forEach(function (element, index) {
//     console.log(element.meal_name);
// });

   // 引入box-inner的div
   var Meals_project = document.querySelector('.box-inner');
   // 引入project的div
   var project = document.querySelector('.project');
   // 淨空
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
       `;
   //由project的div印出breakfast_list陣列資料
   all_list.forEach(function (element) {
       project.innerHTML += `
                   <div class="project-card">
                       <div class="project-name">${element.meal_type}</div>
                           <div class="img-box">
                               <img src="${element.meal_img}" alt="..." width="100%">
                           </div>
                           <div class="project-body">
                               <p class="project-title">${element.meal_name}</p>
                               <p class="project-text">${element.meal_ex}</p>
                               <p class="project-text">${element.meal_ex2}</p>
                               <p class="project-price">${element.meal_price}</p>
                           </div>
                       
                   </div>
               `;
   });




//全部餐點
function all_Meals() {
    // 引入box-inner的div
    var Meals_project = document.querySelector('.box-inner');
    // 引入project的div
    var project = document.querySelector('.project');
    // 淨空
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
        `;
    //由project的div印出breakfast_list陣列資料
    all_list.forEach(function (element) {
        project.innerHTML += `
                    <div class="project-card">
                            <div class="project-name">${element.meal_type}</div>
                            <div class="img-box">
                                <img src="${element.meal_img}" alt="..." width="100%">
                            </div>
                            <div class="project-body">
                                <p class="project-title">${element.meal_name}</p>
                                <p class="project-text">${element.meal_ex}</p>
                                <p class="project-text">${element.meal_ex2}</p>
                                <p class="project-price">${element.meal_price}</p>
                            </div>
                        
                    </div>
                `;
    });
}
//早餐
function breakfast() {
    // 引入box-inner的div
    var Meals_project = document.querySelector('.box-inner');
    // 引入project的div
    var project = document.querySelector('.project');
    // 淨空
    Meals_project.innerHTML = "";
    project.innerHTML = "";
    // 由box-inner的div印出附加的餐飲訊息
    Meals_project.innerHTML = `
        <div class="Remark">
            <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～10：30</div>
        </div>
    `;
    //由project的div印出breakfast_list陣列資料
    breakfast_list.forEach(function (element) {
        project.innerHTML += `
                    <div class="project-card">
                        
                            <div class="img-box">
                                <img src="${element.meal_img}" alt="..." width="100%">
                            </div>
                            <div class="project-body">
                                <p class="project-title">${element.meal_name}</p>
                                <p class="project-text">${element.meal_ex}</p>
                                <p class="project-text">${element.meal_ex2}</p>
                                <p class="project-price">${element.meal_price}</p>
                            </div>
                        
                    </div>
                `;
    });
}
//沙拉
function salad() {
    // 引入box-inner的div
    var Meals_project = document.querySelector('.box-inner');
    // 引入project的div
    var project = document.querySelector('.project');
    // 淨空
    Meals_project.innerHTML = "";
    project.innerHTML = "";
    // 由box-inner的div印出附加的餐飲訊息
    Meals_project.innerHTML = `
        <div class="Remark">
            <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～19：30</div>
        </div>
    `;
    //由project的div印出breakfast_list陣列資料
    salad_list.forEach(function (element) {
        project.innerHTML += `
                    <div class="project-card">
                        
                            <div class="img-box">
                                <img src="${element.meal_img}" alt="..." width="100%">
                            </div>
                            <div class="project-body">
                                <p class="project-title">${element.meal_name}</p>
                                <p class="project-text">${element.meal_ex}</p>
                                <p class="project-text">${element.meal_ex2}</p>
                                <p class="project-price">${element.meal_price}</p>
                            </div>
                        
                    </div>
                `;
    });

}
//點心
function dessert() {
    // 引入box-inner的div
    var Meals_project = document.querySelector('.box-inner');
    // 引入project的div
    var project = document.querySelector('.project');
    // 淨空
    Meals_project.innerHTML = "";
    project.innerHTML = "";
    // 由box-inner的div印出附加的餐飲訊息
    Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～19：30</div>
            </div>
    `;
    //由project的div印出breakfast_list陣列資料
    dessert_list.forEach(function (element) {
        project.innerHTML += `
                    <div class="project-card">
                        
                            <div class="img-box">
                                <img src="${element.meal_img}" alt="..." width="100%">
                            </div>
                            <div class="project-body">
                                <p class="project-title">${element.meal_name}</p>
                                <p class="project-text">${element.meal_ex}</p>
                                <p class="project-text">${element.meal_ex2}</p>
                                <p class="project-price">${element.meal_price}</p>
                            </div>
                        
                    </div>
                `;
    });
}
//精選下午茶
function afternoon_tea() {
    // 引入box-inner的div
    var Meals_project = document.querySelector('.box-inner');
    // 引入project的div
    var project = document.querySelector('.project');
    // 淨空
    Meals_project.innerHTML = "";
    project.innerHTML = "";
    // 由box-inner的div印出附加的餐飲訊息
    Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間14：00～16：30</div>
            </div>
    `;
    //由project的div印出breakfast_list陣列資料
    afternoon_tea_list.forEach(function (element) {
        project.innerHTML += `
                    <div class="project-card">
                        
                            <div class="img-box">
                                <img src="${element.meal_img}" alt="..." width="100%">
                            </div>
                            <div class="project-body">
                                <p class="project-title">${element.meal_name}</p>
                                <p class="project-text">${element.meal_ex}</p>
                                <p class="project-text">${element.meal_ex2}</p>
                                <p class="project-price">${element.meal_price}</p>
                            </div>
                        
                    </div>
                `;
    });
}
//中興大學學生特餐
function nchu_student() {
    // 引入box-inner的div
    var Meals_project = document.querySelector('.box-inner');
    // 引入project的div
    var project = document.querySelector('.project');
    // 淨空
    Meals_project.innerHTML = "";
    project.innerHTML = "";
    // 由box-inner的div印出附加的餐飲訊息
    Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px;">※限興大學生憑學生證選用<br>一證一套。</div>
            </div>
    `;
    //由project的div印出breakfast_list陣列資料
    nchu_student_list.forEach(function (element) {
        project.innerHTML += `
                    <div class="project-card">
                        
                            <div class="img-box">
                                <img src="${element.meal_img}" alt="..." width="100%">
                            </div>
                            <div class="project-body">
                                <p class="project-title">${element.meal_name}</p>
                                <p class="project-text">${element.meal_ex}</p>
                                <p class="project-text">${element.meal_ex2}</p>
                                <p class="project-price">${element.meal_price}</p>
                            </div>
                        
                    </div>
                `;
    });
}

//日式咖哩
function curry_jp() {
    // 引入box-inner的div
    var Meals_project = document.querySelector('.box-inner');
    // 引入project的div
    var project = document.querySelector('.project');
    // 淨空
    Meals_project.innerHTML = "";
    project.innerHTML = "";
    // 由box-inner的div印出附加的餐飲訊息
    Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
    `;
    //由project的div印出breakfast_list陣列資料
    curry_jp_list.forEach(function (element) {
        project.innerHTML += `
                    <div class="project-card">
                        
                            <div class="img-box">
                                <img src="${element.meal_img}" alt="..." width="100%">
                            </div>
                            <div class="project-body">
                                <p class="project-title">${element.meal_name}</p>
                                <p class="project-text">${element.meal_ex}</p>
                                <p class="project-text">${element.meal_ex2}</p>
                                <p class="project-price">${element.meal_price}</p>
                            </div>
                        
                    </div>
                `;
    });
}
//異國米飯
function exotic_rice() {
    // 引入box-inner的div
    var Meals_project = document.querySelector('.box-inner');
    // 引入project的div
    var project = document.querySelector('.project');
    // 淨空
    Meals_project.innerHTML = "";
    project.innerHTML = "";
    // 由box-inner的div印出附加的餐飲訊息
    Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
    `;
    //由project的div印出breakfast_list陣列資料
    exotic_rice_list.forEach(function (element) {
        project.innerHTML += `
                    <div class="project-card">
                        
                            <div class="img-box">
                                <img src="${element.meal_img}" alt="..." width="100%">
                            </div>
                            <div class="project-body">
                                <p class="project-title">${element.meal_name}</p>
                                <p class="project-text">${element.meal_ex}</p>
                                <p class="project-text">${element.meal_ex2}</p>
                                <p class="project-price">${element.meal_price}</p>
                            </div>
                        
                    </div>
                `;
    });
}
//義大利麵
function pasta() {
    // 引入box-inner的div
    var Meals_project = document.querySelector('.box-inner');
    // 引入project的div
    var project = document.querySelector('.project');
    // 淨空
    Meals_project.innerHTML = "";
    project.innerHTML = "";
    // 由box-inner的div印出附加的餐飲訊息
    Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
    `;
    //由project的div印出breakfast_list陣列資料
    pasta_list.forEach(function (element) {
        project.innerHTML += `
                    <div class="project-card">
                        
                            <div class="img-box">
                                <img src="${element.meal_img}" alt="..." width="100%">
                            </div>
                            <div class="project-body">
                                <p class="project-title">${element.meal_name}</p>
                                <p class="project-text">${element.meal_ex}</p>
                                <p class="project-text">${element.meal_ex2}</p>
                                <p class="project-price">${element.meal_price}</p>
                            </div>
                        
                    </div>
                `;
    });
}
// RWD出現的餐點選擇列表
function meal() {
    var Meals = document.querySelector('#meals').value;
    var Meals_project = document.querySelector('.box-inner');
    var project = document.querySelector('.project');
    // Meals_project.innerHTML = "";
    project.innerHTML = "";
    if (Meals == "1") {
        // 全部餐點
        // 淨空
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        // 由box-inner的div印出附加的餐飲訊息
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
        //由project的div印出breakfast_list陣列資料
        all_list.forEach(function (element) {
            project.innerHTML += `
                        <div class="project-card">
                            
                                <div class="img-box">
                                    <img src="${element.meal_img}" alt="..." width="100%">
                                </div>
                                <div class="project-body">
                                    <p class="project-title">${element.meal_name}</p>
                                    <p class="project-text">${element.meal_ex}</p>
                                    <p class="project-text">${element.meal_ex2}</p>
                                    <p class="project-price">${element.meal_price}</p>
                                </div>
                            
                        </div>
                    `;
        });
    } else if (Meals == "2") {
        //早餐
        // 淨空
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        // 由box-inner的div印出附加的餐飲訊息
        Meals_project.innerHTML = `
        <div class="Remark">
            <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～10：30</div>
        </div>
        `;
        //由project的div印出breakfast_list陣列資料
        breakfast_list.forEach(function (element) {
            project.innerHTML += `
                        <div class="project-card">
                            
                                <div class="img-box">
                                    <img src="${element.meal_img}" alt="..." width="100%">
                                </div>
                                <div class="project-body">
                                    <p class="project-title">${element.meal_name}</p>
                                    <p class="project-text">${element.meal_ex}</p>
                                    <p class="project-text">${element.meal_ex2}</p>
                                    <p class="project-price">${element.meal_price}</p>
                                </div>
                            
                        </div>
                    `;
        });
    } else if (Meals == "3") {
        // 沙拉
        // 淨空
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        // 由box-inner的div印出附加的餐飲訊息
        Meals_project.innerHTML = `
        <div class="Remark">
            <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～19：30</div>
        </div>
        `;
        //由project的div印出breakfast_list陣列資料
        salad_list.forEach(function (element) {
            project.innerHTML += `
                        <div class="project-card">
                            
                                <div class="img-box">
                                    <img src="${element.meal_img}" alt="..." width="100%">
                                </div>
                                <div class="project-body">
                                    <p class="project-title">${element.meal_name}</p>
                                    <p class="project-text">${element.meal_ex}</p>
                                    <p class="project-text">${element.meal_ex2}</p>
                                    <p class="project-price">${element.meal_price}</p>
                                </div>
                            
                        </div>
                    `;
        });
    } else if (Meals == "4") {
        // 點心
        // 淨空
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        // 由box-inner的div印出附加的餐飲訊息
        Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間08：00～19：30</div>
            </div>
        `;
        //由project的div印出breakfast_list陣列資料
        dessert_list.forEach(function (element) {
            project.innerHTML += `
                        <div class="project-card">
                            
                                <div class="img-box">
                                    <img src="${element.meal_img}" alt="..." width="100%">
                                </div>
                                <div class="project-body">
                                    <p class="project-title">${element.meal_name}</p>
                                    <p class="project-text">${element.meal_ex}</p>
                                    <p class="project-text">${element.meal_ex2}</p>
                                    <p class="project-price">${element.meal_price}</p>
                                </div>
                            
                        </div>
                    `;
        });
    } else if (Meals == "5") {
        // 精選下午茶
        // 淨空
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        // 由box-inner的div印出附加的餐飲訊息
        Meals_project.innerHTML = `
        <div class="Remark">
            <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間14：00～16：30</div>
        </div>
        `;
        //由project的div印出breakfast_list陣列資料
        afternoon_tea_list.forEach(function (element) {
            project.innerHTML += `
                        <div class="project-card">
                            
                                <div class="img-box">
                                    <img src="${element.meal_img}" alt="..." width="100%">
                                </div>
                                <div class="project-body">
                                    <p class="project-title">${element.meal_name}</p>
                                    <p class="project-text">${element.meal_ex}</p>
                                    <p class="project-text">${element.meal_ex2}</p>
                                    <p class="project-price">${element.meal_price}</p>
                                </div>
                            
                        </div>
                    `;
        });
    } else if (Meals == "6") {
        // 中興大學學生特餐
        // 淨空
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        // 由box-inner的div印出附加的餐飲訊息
        Meals_project.innerHTML = `
        <div class="Remark">
            <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
            <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※限興大學生憑學生證選用<br>一證一套。</div>
        </div>
        `;
        //由project的div印出breakfast_list陣列資料
        nchu_student_list.forEach(function (element) {
            project.innerHTML += `
                        <div class="project-card">
                            
                                <div class="img-box">
                                    <img src="${element.meal_img}" alt="..." width="100%">
                                </div>
                                <div class="project-body">
                                    <p class="project-title">${element.meal_name}</p>
                                    <p class="project-text">${element.meal_ex}</p>
                                    <p class="project-text">${element.meal_ex2}</p>
                                    <p class="project-price">${element.meal_price}</p>
                                </div>
                            
                        </div>
                    `;
        });
    } else if (Meals == "7") {
        // 日式咖哩
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        // 由box-inner的div印出附加的餐飲訊息
        Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
        `;
        //由project的div印出breakfast_list陣列資料
        curry_jp_list.forEach(function (element) {
            project.innerHTML += `
                        <div class="project-card">
                            
                                <div class="img-box">
                                    <img src="${element.meal_img}" alt="..." width="100%">
                                </div>
                                <div class="project-body">
                                    <p class="project-title">${element.meal_name}</p>
                                    <p class="project-text">${element.meal_ex}</p>
                                    <p class="project-text">${element.meal_ex2}</p>
                                    <p class="project-price">${element.meal_price}</p>
                                </div>
                            
                        </div>
                    `;
        });
    } else if (Meals == "8") {
        // 異國米飯
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        // 由box-inner的div印出附加的餐飲訊息
        Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
        `;
        //由project的div印出breakfast_list陣列資料
        exotic_rice_list.forEach(function (element) {
            project.innerHTML += `
                        <div class="project-card">
                            
                                <div class="img-box">
                                    <img src="${element.meal_img}" alt="..." width="100%">
                                </div>
                                <div class="project-body">
                                    <p class="project-title">${element.meal_name}</p>
                                    <p class="project-text">${element.meal_ex}</p>
                                    <p class="project-text">${element.meal_ex2}</p>
                                    <p class="project-price">${element.meal_price}</p>
                                </div>
                            
                        </div>
                    `;
        });
    } else if (Meals == "9") {
        // 義大利麵
        Meals_project.innerHTML = "";
        project.innerHTML = "";
        // 由box-inner的div印出附加的餐飲訊息
        Meals_project.innerHTML = `
            <div class="Remark">
                <div style="color:#f95223; font-size: 30px;font-weight: 600;">※供餐時間11：00～19：30</div>
                <div style="color:#f95223; font-size: 30px;font-weight: 600;padding-top:30px ;">※升級套餐可享有濃湯與手工麵包一份</div>
            </div>
        `;
        //由project的div印出breakfast_list陣列資料
        pasta_list.forEach(function (element) {
            project.innerHTML += `
                        <div class="project-card">
                            
                                <div class="img-box">
                                    <img src="${element.meal_img}" alt="..." width="100%">
                                </div>
                                <div class="project-body">
                                    <p class="project-title">${element.meal_name}</p>
                                    <p class="project-text">${element.meal_ex}</p>
                                    <p class="project-text">${element.meal_ex2}</p>
                                    <p class="project-price">${element.meal_price}</p>
                                </div>
                            
                        </div>
                    `;
        });
    }
}
