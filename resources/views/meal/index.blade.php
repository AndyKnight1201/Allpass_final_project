<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    {{-- 網頁小圖標icon --}}
    <link href="{{asset('/pics/logo.png')}}" rel="shortcut icon" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    <link href="{{asset('/css/backend/meal_index.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="flew-grow-1">
        <nav>
            <!-- 先上左 padding ，之後變板將 左邊的padding取消掉，變色則使用js 或hover -->
            <a href="/dashboard">
                <div class="logoBox d-flex">
                    <div class="iconBox"><img class="icon" src="{{ asset('/img/allpass.jpg') }}" alt="" width="100%"></div>
                    <div class="allpassTitle d-flex align-items-center ps-2">歐巴斯</div>
                </div>
            </a>
            <div class="pt-5 navBox">
                <a href="/dashboard">
                    <div class="navList my-1 py-3 ps-4">
                        <i class="fa-solid fa-house"></i>
                        <span class="navList_span">管理介面</span>
                    </div>
                </a>
                <a href="/account" class="adminLink">
                    <div class="navList my-1 py-3 ps-4 adminBox">
                        <i class="fa-solid fa-user" title="管理者"></i>
                        <span class="navList_span">管理者</span>
                    </div>
                </a>
                <div class="burgerLinkBox">
                    <label class="burgerLinkLabel" for="switch"><i class="fa-solid fa-bars"></i></label>
                    <!--漢堡按鈕圖示-->
                    <input class="checkbox " type="checkbox" id="switch">
                    <!--選單開關-->
                    <ul class="menu">
                        <!--選單內容-->
                        <li><a href="/dashboard"><i class="fa-solid fa-house"></i></a></li>
                        <li><a href="/account" class="adminLink"> <i class="fa-solid fa-user"></i></a></li>
                        <li><a href="/" target="_blank">前往前台</a></li>
                        <li>
                            <a href="" onclick="event.preventDefault(); document.querySelector('#logoutForm').submit()">登出</a>
                            <form method="POST" action="{{ route('logout') }}" hidden id="logoutForm">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <main>
        <div class='main_hander d-flex justify-content-between'>
            <span class="title d-flex align-items-center">菜單管理</span>
            <div class='d-flex align-items-center'>
                <button type="button" class="loginOutBtn py-2 mx-3 my-2 px-4" onclick="event.preventDefault(); document.querySelector('#logout_form').submit()">登出</button>
                <form method="POST" action="{{ route('logout') }}" hidden id="logout_form">
                        @csrf
                    </form>
                <button type="button" class="goFrontEndBtn mx-3 my-2 px-4 py-2" onclick="window.open('/','_blank')">前往前台</button>
                <div class="ms-3 avatarBox">
                    <div class="avatar rounded-circle"><img class="rounded-circle" alt="Avatar" id="avatar" title="{{ Auth::user()->name}} &#10 {{ Auth::user()->email}}" data-user_name="{{ Auth::user()->name}}" data-user_power="{{ Auth::user()->power}}"></div>
                    <ul>
                        <li>
                            <ul>
                                <a href="/personal_edit/{{ Auth::user()->id }}">設定</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{---------------------------------------------------------- 餐點列表 --------------------------------------------------}}
        <div class="container-fluid">
            <div class="list-detail">
                <div id="section1" class="container-xxl mb-5">
                    <!-- 標題 -->
                    <div class="shop-car d-flex justify-content-between mb-2">
                        {{-- 新增餐點 --}}
                        <a href="/meal/create" class="btn btn-success">新增餐點</a>
                    </div>

                    <table class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" id="information">
                        <thead>
                            <tr>
                                <th class="text-center">餐點類別</th>
                                <th class="text-center">名稱</th>
                                <th class="text-center">備註</th>
                                <th class="text-center">價格</th>
                                <th class="text-center">圖片</th>
                                <th class="text-center">功能</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            @foreach($meals as $index =>$item)
                            <tr class="item{{$item->id}}">
                                <td>{{$item->tag}}</td>
                                <td>{{$item->meal_name}}</td>
                                <td>
                                    (1){{$item->note}}
                                    (2){{$item->second_note}}
                                </td>
                                <td>{{$item->price}}元</td>
                                <td>
                                    <img src="{{$item->img_path}}" alt="" style="max-width: 35%; min-width: 35%;">
                                    <div class='data' data-meal_id="{{ $item->id }}" data-meals="{{ $meals }}" hidden></div>
                                </td>
                                <td>
                                    {{-- modal 編輯餐點 --}}
                                    <button id="editBtn{{ $item->id }}" data-meal_id="{{ $item->id }}" type="button" class="btn btn-success editBtn" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $index }}">編輯</button>

                                    <div class="modal fade" id="exampleModal{{ $index }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">編輯餐點</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div id='modalBox' class="modal-body">

                                            <form id='updateMealForm{{ $index }}' method='POST' enctype='multipart/form-data'>
                                                @csrf
                                                <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">餐點名稱:</label>
                                                <input type="text" name='mealName' class="form-control meal_name" value="{{$item->meal_name}}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">餐點類別:</label>
                                                    <input type="text" name='mealTag' class="form-control meal_tag" value="{{$item->tag}}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">餐點價格:</label>
                                                    <input type="number" name='mealPrice' class="form-control meal_price" value="{{$item->price}}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">餐點備註:</label>
                                                    <input type="text" name='mealNote' class="form-control meal_note" value="{{$item->note}}" placeholder="備註1">
                                                    <input type="text" name='mealSecondNote' class="form-control meal_secondNote" value="{{$item->second_note}}" placeholder="備註2">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">餐點圖片:</label>
                                                    <br>
                                                    {{-- 瀏覽舊圖片 --}}
                                                    <img class='w-100 meal_old_img' src="{{ $item->img_path }}" alt="" >
                                                    {{-- 新圖片上傳 --}}
                                                    <input type="file" class='newImgInput' name="newMealImg">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                                                    <button v-on:click="reLoadDataTable" type="submit" class="btn btn-primary update_meal">編輯完成</button>
                                                </div>

                                            </form>

                                            </div>

                                        </div>
                                        </div>
                                    </div>
                        {{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

                                    <button class="btn btn-danger" onclick="document.querySelector('#deleteForm{{$item->id}}').submit();">刪除</button>
                                    <form action="/meal/delete/{{$item->id}}" method="post" hidden id="deleteForm{{$item->id}}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1b22cb82e7.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


    <script>
        // ---------------------------------------- 資料表 ------------------------------------------------------- //
        $(document).ready( function () {
            $('#product_list').DataTable();

            $('#information').DataTable({
                responsive: true,
                columns:[
                {responsivePriority: 1},
                {responsivePriority: 3},
                {responsivePriority: 4},
                {responsivePriority: 5},
                {responsivePriority: 6},
                {responsivePriority: 2}
                ],
                language: {
                    "lengthMenu": "顯示 _MENU_ 筆資料",
                    "sProcessing": "處理中...",
                    "sZeroRecords": "没有匹配结果",
                    "sInfo": "目前有 _MAX_ 筆資料",
                    "sInfoEmpty": "目前共有 0 筆紀錄",
                    "sInfoFiltered": " ",
                    "sInfoPostFix": "",
                    "sSearch": "搜尋:",
                    "sUrl": "",
                    "sEmptyTable": "尚未有資料紀錄存在",
                    "sLoadingRecords": "載入資料中...",
                    "sInfoThousands": ",",
                    "oPaginate": {
                        "sFirst": "首頁",
                        "sPrevious": "上一頁",
                        "sNext": "下一頁",
                        "sLast": "末頁"
                    },
                    "order": [[0, "desc"]],
                    "oAria": {
                        "sSortAscending": ": 以升序排列此列",
                        "sSortDescending": ": 以降序排列此列"
                    },
                },
            })

        })

        // ---------------------------------- 使用者頭像 --------------------------------------------------------
        function generateAvatar(
            text,
            foregroundColor = "white",
            backgroundColor = "black"
            ) {
            const canvas = document.createElement("canvas");
            const context = canvas.getContext("2d");

            canvas.width = 60;
            canvas.height = 60;

            // Draw background
            context.fillStyle = backgroundColor;
            context.fillRect(0, 0, canvas.width, canvas.height);

            // Draw text
            context.font = "bold 30px Assistant";
            context.fillStyle = foregroundColor;
            context.textAlign = "center";
            context.textBaseline = "middle";
            context.fillText(text, canvas.width / 2, canvas.height / 2);

            return canvas.toDataURL("image/png");
        }

        // 使用者名稱 取字首
        let userName = document.getElementById("avatar").dataset.user_name;
        let prefixName = userName.substr(0, 1);

        document.getElementById("avatar").src = generateAvatar(
            `${prefixName}`,
            "white",
            "#009578"
        );
    </script>

    <script>
    // ----------------------------------- 編輯餐點 --------------------------------------------------- //
        // ajax 只用來編輯文字上傳
        // csrf
        $.ajaxSetup({
             headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        for(let i = 0; i<$('.data').length; i++){

            // 取得 餐點id
            let mealId = $('.data')[i].dataset.meal_id;
            let meals = $('.data')[0].dataset.meals;

            // 傳送表單
            $(document).on('submit', `#updateMealForm${i}`, function(e){
                e.preventDefault();
                // 建立資料表
                let formData = new FormData($(`#updateMealForm${i}`)[0]);

                // 將表單傳送至後端
                $.ajax({
                    type: 'POST',
                    url: `/meal/${mealId}`,
                    data: formData,
                    contentType: false,
                    processData: false,

                    error:function(error){
                        // sweetAlert
                        Swal.fire({
                            title: '傳送失敗，請重新嘗試',
                            icon: 'error',
                            confirmButtonText: '是',
                        })
                    },
                    success: function(response) {

                        if(response.result == 'error'){
                            // sweetAlert
                            Swal.fire({
                                title: response.message,
                                icon: 'warning',
                                confirmButtonText: '是',
                            })
                        }
                        // alert(response.message)
                        if(response.result == 'success'){
                            // 彈出視窗隱藏
                            $(`#exampleModal${i}`).modal('hide');

                            // sweetAlert
                            Swal.fire({
                                title: '編輯完成',
                                icon: 'success',
                                confirmButtonText: '是',
                            }).then(function(){
                                window.location.reload();
                            })
                        }
                    },
                })
            })

        }

        // filepond 用來編輯新圖片上傳
        const newImgInput = document.querySelectorAll('.newImgInput');
        const mealId = document.querySelectorAll('.data');
        const editBtn = document.querySelectorAll('.editBtn');

        // 上傳圖片預覽、限制檔案類型 插件
        FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginFileValidateType);

        newImgInput.forEach( (element)=> {

            // 產生 filePond 的上傳效果
            const pond = FilePond.create(element, {
                // 自訂filpond的提示文字
                labelIdle: 	'拖曳或 <span class="filepond--label-action"> 點擊 </span> 上傳新圖片',
                // 限制檔案數
                maxFiles: 1,
                // 限制只有圖檔
                acceptedFileTypes: ['image/*'],
            });
        });

        // 每次點擊編輯按鈕，會對應到不同餐點 的 (Filepond的server)
        editBtn.forEach( e => {
            e.onclick = function(){
                let index = e.dataset.meal_id;
                configFilePond(index);
            }
        })

        // 設定 filepond serve
        function configFilePond(index){
            FilePond.setOptions({
                server: {
                    url: `/upload/meal_img/${index}`,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }
            });
        }

        // 沒有最高權限沒辦法進入管理者頁面
        const adminLink = document.querySelectorAll('.adminLink');
            let userPower = document.getElementById("avatar").dataset.user_power;
            if(userPower == 2){

                adminLink.forEach(element=>{
                    element.addEventListener('click', e=>{
                        e.preventDefault();
                        // sweetAlert
                        Swal.fire({
                            title: '最高權限才能訪問此連結',
                            icon: 'warning',
                            confirmButtonText: '是',
                        })
                    })
                })
            }
    </script>

</body>

</html>
