  //vue新物件建立
  const viewmodel = Vue.createApp({
    data() {
      return {
        // 推薦飲品
        teaname:'',
        EngName:'',
        price:'',
        hot:'',
        ice:'',
        recommended_drink_show:true,
        // 推薦結果
        predicted_button:true,
        predicted_question:false,
        predicted_result:false,
        predicted_result_show:false,
        predicted_result_text:'恭喜您，您可以前往歐巴斯購買想要的飲品，祝您一天順心，心想事成',
        item_to_be_delete:'',
        // 頁面顯示
        tempMenu: [],
        // 推薦飲品顯示清單
        recommended_menu:[],
        allMenu: [
            {
              teaname: "阿薩姆紅茶",
              EngName: "Assam Black Tea",
              price: "60",
              hot: true,
              ice: true,
            },
            {
              teaname: "茉香綠茶",
              EngName: "Green Tea",
              price: "60",
              hot: true,
              ice: true,
            },
            {
              teaname: "芒果綠茶",
              EngName: "Mango Green Tea",
              price: "80",
              hot: false,
              ice: true,
            },
            {
              teaname: "葡萄柚綠茶",
              EngName: "Grapefruit green Tea",
              price: "80",
              hot: false,
              ice: true,
            },
            {
              teaname: "蔓越莓綠茶",
              EngName: "Cranberry Green Tea",
              price: "80",
              hot: false,
              ice: true,
            },
            {
              teaname: "蜂蜜檸檬綠茶",
              EngName: "Lemon Honey Green Tea",
              price: "90",
              hot: false,
              ice: true,
            },
            {
              teaname: "奶茶",
              EngName: "Milk Tea",
              price: "80",
              hot: true,
              ice: true,
            },
            {
              teaname: "香草奶茶",
              EngName: "Vanilla Milk Tea",
              price: "80",
              hot: true,
              ice: true,
            },
            {
              teaname: "榛果奶茶",
              EngName: "Hazelnut Milk Tea",
              price: "90",
              hot: true,
              ice: true,
            },
            {
              teaname: "焦糖奶茶",
              EngName: "Caramel Milk Tea",
              price: "90",
              hot: true,
              ice: true,
            },
            {
              teaname: "太妃糖奶茶",
              EngName: "Toffee Milk Tea",
              price: "90",
              hot: true,
              ice: true,
            },
            {
              teaname: "鮮榨檸檬汁",
              EngName: "Lemon Juice",
              price: "100",
              hot: false,
              ice: true,
            },
            {
              teaname: "鮮榨柳橙汁",
              EngName: "Orange Juice",
              price: "100",
              hot: false,
              ice: true,
            },
            {
              teaname: "鮮榨葡萄柚汁",
              EngName: "Grapefruit Juice",
              price: "100",
              hot: false,
              ice: true,
            },
            {
              teaname: "鮮榨奇異果汁",
              EngName: "Kiwi Juice",
              price: "100",
              hot: false,
              ice: true,
            },
            {
              teaname: "當季水果牛奶",
              EngName: "Fruit Milk",
              price: "100",
              hot: false,
              ice: true,
            },
            {
              teaname: "鮮榨鮮榨蔬果汁",
              EngName: "Seasonal Fruit and Vegetable Juice",
              price: "100",
              hot: false,
              ice: true,
            },
            {
              teaname: "皇家伯爵茶",
              EngName: "Earl Grey Tea",
              price: "120",
              hot: true,
              ice: false,
            },
            {
              teaname: "有機洋甘菊茶",
              EngName: "Organic Chamomile Tisane",
              price: "120",
              hot: true,
              ice: false,
            },
            {
              teaname: "百箱花樣水果茶",
              EngName: "Gerry Tea Pasionfruit Natural",
              price: "120",
              hot: true,
              ice: false,
            },
            {
              teaname: "萊茵野莓水果茶",
              EngName: "Strawberry Popcorn Mild Fruit ",
              price: "150",
              hot: true,
              ice: false,
            },
            {
              teaname: "原味鮮奶",
              EngName: "Original Milk",
              price: "80",
              hot: true,
              ice: true,
            },
            {
              teaname: "香草鮮奶",
              EngName: "Vanilla Flavor Milk",
              price: "90",
              hot: true,
              ice: true,
            },
            {
              teaname: "榛果鮮奶",
              EngName: "Hazelnut Flavor Milk",
              price: "90",
              hot: true,
              ice: true,
            },
            {
              teaname: "焦糖鮮奶",
              EngName: "Caramel Flavor Milk",
              price: "90",
              hot: true,
              ice: true,
            },
            {
              teaname: "太妃糖鮮奶",
              EngName: "Toffee Flavor Milk",
              price: "90",
              hot: true,
              ice: true,
            },
            {
              teaname: "阿薩姆紅茶牛奶",
              EngName: "Assam Black Tea Latte",
              price: "100",
              hot: true,
              ice: true,
            },
            {
              teaname: "宇治抹茶牛奶",
              EngName: "Matcha",
              price: "120",
              hot: true,
              ice: true,
            },
            {
              teaname: "巧克力歐蕾",
              EngName: "Original Chocolate Milk",
              price: "120",
              hot: true,
              ice: true,
            },
            {
              teaname: "美式黑咖啡",
              EngName: "American Coffee",
              price: "60",
              hot: true,
              ice: true,
            },
            {
              teaname: "原味拿鐵",
              EngName: "Original Latte",
              price: "80",
              hot: true,
              ice: true,
            },
            {
              teaname: "香草拿鐵",
              EngName: "Vanilla Flavor Latte",
              price: "100",
              hot: true,
              ice: true,
            },
            {
              teaname: "榛果拿鐵",
              EngName: "Hazelnut Flavor Latte",
              price: "100",
              hot: true,
              ice: true,
            },
            {
              teaname: "焦糖拿鐵",
              EngName: "Caramel Flavor Latte",
              price: "100",
              hot: true,
              ice: true,
            },
            {
              teaname: "太妃糖拿鐵",
              EngName: "Toffee Flavor Latte",
              price: "100",
              hot: true,
              ice: true,
            },
            {
              teaname: "摩卡咖啡",
              EngName: "Mocha",
              price: "100",
              hot: true,
              ice: true,
            },
            {
              teaname: "卡布奇諾咖啡",
              EngName: "Cappuccino",
              price: "100",
              hot: true,
              ice: true,
            },
            {
              teaname: "焦糖瑪奇朵咖啡",
              EngName: "Caramel Macchiato",
              price: "100",
              hot: true,
              ice: true,
            },
            {
              teaname: "宇治抹茶拿鐵咖啡",
              EngName: "Coffee Matcha Latte",
              price: "120",
              hot: true,
              ice: true,
            },
          ],
        // 調茶飲
        FreshTea: [
          {
            teaname: "阿薩姆紅茶",
            EngName: "Assam Black Tea",
            price: "60",
            hot: true,
            ice: true,
          },
          {
            teaname: "茉香綠茶",
            EngName: "Green Tea",
            price: "60",
            hot: true,
            ice: true,
          },
          {
            teaname: "芒果綠茶",
            EngName: "Mango Green Tea",
            price: "80",
            hot: true,
            ice: false,
          },
          {
            teaname: "葡萄柚綠茶",
            EngName: "Grapefruit green Tea",
            price: "80",
            hot: true,
            ice: false,
          },
          {
            teaname: "蔓越莓綠茶",
            EngName: "Cranberry Green Tea",
            price: "80",
            hot: true,
            ice: false,
          },
          {
            teaname: "蜂蜜檸檬綠茶",
            EngName: "Lemon Honey Green Tea",
            price: "90",
            hot: true,
            ice: false,
          },
          {
            teaname: "奶茶",
            EngName: "Milk Tea",
            price: "80",
            hot: true,
            ice: true,
          },
          {
            teaname: "香草奶茶",
            EngName: "Vanilla Milk Tea",
            price: "80",
            hot: true,
            ice: true,
          },
          {
            teaname: "榛果奶茶",
            EngName: "Hazelnut Milk Tea",
            price: "90",
            hot: true,
            ice: true,
          },
          {
            teaname: "焦糖奶茶",
            EngName: "Caramel Milk Tea",
            price: "90",
            hot: true,
            ice: true,
          },
          {
            teaname: "太妃糖奶茶",
            EngName: "Toffee Milk Tea",
            price: "90",
            hot: true,
            ice: true,
          },
        ],
        // 手選茶飲
        HandPick_Tea: [
          {
            teaname: "皇家伯爵茶",
            EngName: "Earl Grey Tea",
            price: "120",
            hot: true,
            ice: false,
          },
          {
            teaname: "有機洋甘菊茶",
            EngName: "Organic Chamomile Tisane",
            price: "120",
            hot: true,
            ice: false,
          },
          {
            teaname: "百箱花樣水果茶",
            EngName: "Gerry Tea Pasionfruit Natural",
            price: "120",
            hot: true,
            ice: false,
          },
          {
            teaname: "萊茵野莓水果茶",
            EngName: "Strawberry Popcorn Mild Fruit",
            price: "150",
            hot: true,
            ice: false,
          },
        ],
        // 牛奶跟果汁
        Milk_and_Juice: [
          {
            teaname: "原味鮮奶",
            EngName: "Original Milk",
            price: "80",
            hot: true,
            ice: true,
          },
          {
            teaname: "香草鮮奶",
            EngName: "Vanilla Flavor Milk",
            price: "90",
            hot: true,
            ice: true,
          },
          {
            teaname: "榛果鮮奶",
            EngName: "Hazelnut Flavor Milk",
            price: "90",
            hot: true,
            ice: true,
          },
          {
            teaname: "焦糖鮮奶",
            EngName: "Caramel Flavor Milk",
            price: "90",
            hot: true,
            ice: true,
          },
          {
            teaname: "太妃糖鮮奶",
            EngName: "Toffee Flavor Milk",
            price: "90",
            hot: true,
            ice: true,
          },
          {
            teaname: "鮮榨檸檬汁",
            EngName: "Lemon Juice",
            price: "100",
            hot: false,
            ice: true,
          },
          {
            teaname: "鮮榨柳橙汁",
            EngName: "Orange Juice",
            price: "100",
            hot: false,
            ice: true,
          },
          {
            teaname: "鮮榨葡萄柚汁",
            EngName: "Grapefruit Juice",
            price: "100",
            hot: false,
            ice: true,
          },
          {
            teaname: "鮮榨奇異果汁",
            EngName: "Kiwi Juice",
            price: "100",
            hot: false,
            ice: true,
          },
          {
            teaname: "當季水果牛奶",
            EngName: "Fruit Milk",
            price: "100",
            hot: false,
            ice: true,
          },
          {
            teaname: "鮮榨鮮榨蔬果汁",
            EngName: "Seasonal Fruit and Vegetable Juice",
            price: "100",
            hot: false,
            ice: true,
          },
        ],
        // 茶拿鐵
        TeaLatte: [
          {
            teaname: "阿薩姆紅茶牛奶",
            EngName: "Assam Black Tea Latte",
            price: "100",
            hot: true,
            ice: true,
          },
          {
            teaname: "宇治抹茶牛奶",
            EngName: "Matcha",
            price: "120",
            hot: true,
            ice: true,
          },
          {
            teaname: "巧克力歐蕾",
            EngName: "Original Chocolate Milk",
            price: "120",
            hot: true,
            ice: true,
          },
        ],
        // 咖啡跟拿鐵
        Coffee_and_Latte: [
          {
            teaname: "美式黑咖啡",
            EngName: "American Coffee",
            price: "60",
            hot: true,
            ice: true,
          },
          {
            teaname: "原味拿鐵",
            EngName: "Original Latte",
            price: "80",
            hot: true,
            ice: true,
          },
          {
            teaname: "香草拿鐵",
            EngName: "Vanilla Flavor Latte",
            price: "100",
            hot: true,
            ice: true,
          },
          {
            teaname: "榛果拿鐵",
            EngName: "Hazelnut Flavor Latte",
            price: "100",
            hot: true,
            ice: true,
          },
          {
            teaname: "焦糖拿鐵",
            EngName: "Caramel Flavor Latte",
            price: "100",
            hot: true,
            ice: true,
          },
          {
            teaname: "太妃糖拿鐵",
            EngName: "Toffee Flavor Latte",
            price: "100",
            hot: true,
            ice: true,
          },
          {
            teaname: "摩卡咖啡",
            EngName: "Mocha",
            price: "100",
            hot: true,
            ice: true,
          },
          {
            teaname: "卡布奇諾咖啡",
            EngName: "Cappuccino",
            price: "100",
            hot: true,
            ice: true,
          },
          {
            teaname: "焦糖瑪奇朵咖啡",
            EngName: "Caramel Macchiato",
            price: "100",
            hot: true,
            ice: true,
          },
          {
            teaname: "宇治抹茶拿鐵咖啡",
            EngName: "Coffee Matcha Latte",
            price: "120",
            hot: true,
            ice: true,
          },
        ],
        // 按鈕上的品項數量 
        all_length:0,
        fresh_length:0,
        HandPick_Tea_length:0,
        Milk_and_Juice_length:0,
        TeaLatte_length:0,
        Coffee_and_Latte_length:0, 
        cold_length:0,
        hot_length:0,
        cold_and_hot_length:0,    
      };
    },
    methods: {
      // 飲品種類選擇器
      showAllMenu: function () {
        this.tempMenu = this.allMenu;
      },
      showFreshTea: function () {
        this.tempMenu = this.FreshTea;
      },
      showHandPick_Tea: function () {
        this.tempMenu = this.HandPick_Tea;
      },
      showMilk_and_Juice: function () {
        this.tempMenu = this.Milk_and_Juice;
      },
      showTeaLatte: function () {
        this.tempMenu = this.TeaLatte;
      },
      showCoffee_and_Latte: function () {
        this.tempMenu = this.Coffee_and_Latte;
      },
      // 冷熱飲選擇器
      showColdDrink:function(){
        // 從所有菜單中把冷飲過濾出來
        var coldDrink=this.allMenu.filter(
          drink=>(drink.ice==true && drink.hot==false)
        )
        // 頁面上顯示
        this.tempMenu=coldDrink;
        // 在按鈕上顯示冷飲的總數量
        this.cold_length=coldDrink.length
      },
      showHotDrink:function(){
        // 從所有菜單中把熱飲過濾出來
        var HotDrink=this.allMenu.filter(
          drink=>(drink.ice==false && drink.hot==true)
        )
        // 頁面上顯示
        this.tempMenu=HotDrink;
        // 熱飲按鈕上顯示數量
        this.hot_length=HotDrink.length;
      },
      show_cold_and_Hot_Drink:function(){
         // 從所有菜單中把冷熱飲過濾出來
        var cold_and_Hot_Drink=this.allMenu.filter(
          drink=>(drink.ice==true && drink.hot==true)
        )
        // 頁面上顯示
        this.tempMenu=cold_and_Hot_Drink;
        // 冷熱飲按鈕上顯示數量
        this.cold_and_hot_length=cold_and_Hot_Drink.length
      },
      // 取得與顯示推薦飲品
      get_recommended_drink:function(){
        // 複製資料
        let recommended_arr=Object.assign([],this.recommended_menu);
        // 隨機取得全部菜單中的一筆資料
        let rand = Math.floor(Math.random()*recommended_arr.length);
        let random_drink=Object.assign({},recommended_arr[rand]);
        // 設推薦飲品
        this.teaname=random_drink.teaname;
        this.EngName=random_drink.EngName;
        this.price=random_drink.price;
        this.hot=random_drink.hot;
        this.ice=random_drink.ice;
        this.recommended_arr=recommended_arr
      },
      show_recommended_drink:function(){
        // 取得推薦飲品
        this.get_recommended_drink();
        // 將推薦結果文字清空
        this.predicted_result_text='';
        // 重新顯示預測問題
        this.predicted_question=true;
      },
      // 預測結果
      // 結果是準確的
      result_is_accurate:function(){
        this.hot=false;
        this.ice=false;
        this.predicted_result_show=true;
        this. predicted_result_text='恭喜您，您可以立即前往歐巴斯購買飲品，祝您一天順心，事事都能All PASS';
        this.predicted_result=true;
        this.predicted_question=false;
        this.predicted_button=false;
      },
      // 結果並不是準確的
      result_is_not_accurate:function(){
        this.hot=false;
        this.ice=false;
        this.predicted_result_show=true;
        this.predicted_question=false;
        this.predicted_button=true;
        this.predicted_result_text='請點選推薦按鈕讓我們為您推薦';
        // 將推薦項目移至待刪除品項
        this.item_to_be_delete=this.teaname;
        // 檢查推薦清單是否為空
        this.check_recommend_menu_zero();
        // 觸發將不準確項目從清單中移除的函式
        this.delete_wrong_item_in_recommend_array();
      },
      // 將不準確的結果從推薦清單中移除
      delete_wrong_item_in_recommend_array:function(){
      var item_to_be_delete_teaname=this.teaname;
      var arr=this.recommended_menu;
      // 遍歷整個清單篩選掉該筆資料
      arr.forEach(function(item,index){
        if(item.teaname==item_to_be_delete_teaname){
          arr.splice(index,1);
        }
      });
      this.recommended_menu=arr;
      },
      // 檢查推薦清單是否為空
      check_recommend_menu_zero:function(){
        var left_recommended_items=this.recommended_menu.length;
        // 當推薦清單內數量為0
        if(left_recommended_items==1){
          // 將推薦功能隱藏，引導訪客前往餐點頁面
          this.predicted_button=false;
          this.predicted_question=false;
          this.recommended_drink_show=false;
          this.predicted_result=true;
          this.recommended_drink_show=true;
          this.predicted_result_text="目前沒有更多飲品可以推薦囉!要不要前往歐巴斯的餐點區瀏覽美味的菜品呢"
        }
      }
    },
    //當vue物件綁定時要執行
    mounted() {
      // 回傳菜單上品項數量到按鈕旁邊
      this.all_length=this.allMenu.length;
      this.fresh_length=this.FreshTea.length;
      this.HandPick_Tea_length=this.HandPick_Tea.length;
      this.Milk_and_Juice_length=this.Milk_and_Juice.length;
      this.TeaLatte_length=this. TeaLatte.length;
      this.Coffee_and_Latte_length=this.Coffee_and_Latte.length;
      // 從全部菜單中過濾出冷、熱、冷熱飲的品項數量
      this.showColdDrink();
      this.showHotDrink();
      this.show_cold_and_Hot_Drink();
      // 確保第一次載入時是顯示全部的菜單
      this.showAllMenu();
      this.get_recommended_drink();
      // 將全部菜單載入待推薦清單
      this.recommended_menu=[...this.allMenu];
    },
  });
  //掛載vue物件
  viewmodel.mount("#vue_menu");

  