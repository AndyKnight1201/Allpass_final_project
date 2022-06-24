<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- 網頁小圖標icon --}}
    <link href="{{asset('/pics/logo.png')}}" rel="shortcut icon" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('/css/backend/main.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="flew-grow-1">
        <nav>
            <!-- 先上左 padding ，之後變板將 左邊的padding取消掉，變色則使用js 或hover -->
            <a href="/dashboard">
                <div class="logoBox d-flex">
                    <div class="iconBox"><img class="icon" src="./img/allpass.jpg" alt="" width="100%"></div>
                    <div class="allpassTitle d-flex align-items-center ps-2">歐巴斯</div>
                </div>
            </a>
            <div class="pt-5 navBox">
                <a href="/dashboard">
                    <div class="navList my-1 py-3 ps-4">
                        <i class="fa-solid fa-house" title="管理介面"></i>
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
            <span class="title d-flex align-items-center">管理介面</span>
            <div class='d-flex align-items-center'>
                <button type="button" class="loginOutBtn mx-3 my-2 px-4 py-2" onclick="event.preventDefault(); document.querySelector('#logout_form').submit()">登出</button>
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
        <!-- 從這開始寫 -->
        <div class="w-100 main_content">
            <div class="featureList w-50 d-flex flex-wrap align-content-center mt-5">
                <div class="bigButton">
                    <a href="/new">
                        <div class="row d-flex justify-content-center h-75 align-content-center">
                            <div class="ball d-flex justify-content-center">
                                <i class="fa-solid fa-images fa-2xl buttonIcon"></i>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="d-flex justify-content-center">
                                <span class="text-center fs-6" style="color:#3f3f3f; line-height: 19px;">最新消息與<br> 主頁橫幅管理</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bigButton">
                    <a href="/meal">
                        <div class="row d-flex justify-content-center h-75 align-content-center">
                            <div class="ball d-flex justify-content-center">
                                <i class="fa-solid fa-utensils fa-2xl buttonIcon"></i>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="d-flex justify-content-center">
                                <span class="fs-6" style="color:#3f3f3f">菜單管理</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bigButton">
                    <a href="/backend/feedback">
                        <div class="row d-flex justify-content-center h-75 align-content-center">
                            <div class="ball d-flex justify-content-center ">
                                <i class="fa-solid fa-comments fa-2xl buttonIcon"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <span class="fs-6" style="color:#3f3f3f">顧客留言管理</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="pt-5 w-50 historyBox">
                <div class="topping py-3 d-flex justify-content-center">
                    編輯歷史
                </div>
                <div class="scrollbar px-3 pb-3 historyContent" style="overflow: scroll;">
                    <div>
                        @foreach ($histories as $index =>$item)
                            <div class="historyList d-flex justify-content-between" style="min-width: 660px;">
                                <span class="middlesize mt-3 d-flex" style="white-space:nowrap;">
                                    <div> {{ $index + 1 }} </div>
                                    {{ $item->change_history }}
                                </span>
                                <div class="d-flex align-items-end">
                                    <span class="middlesize mt-3" style="white-space:nowrap;">{{ substr($item->created_at, 0, 10) }}</span>
                                    <button class="ms-3" type="button" class="btn" onclick="document.querySelector('#deleteForm{{ $item->id }}').submit()"><i class="fa-solid fa-xmark"></i></button>
                                    <form action="/delete_history/{{ $item->id }}" method="POST" id="deleteForm{{ $item->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                            <hr style="min-width: 660px;">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        // 使用者頭像
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

            document.addEventListener('DOMContentLoaded', function() {

                // 拖動xy軸效果
                const ele = document.querySelector('.historyContent');
                ele.style.cursor = 'grab';

                let pos = { top: 0, left: 0, x: 0, y: 0 };

                const mouseDownHandler = function (e) {
                    ele.style.cursor = 'grabbing';
                    ele.style.userSelect = 'none';

                    // 滑鼠點擊後，取得鼠標 xy 位置與內容上方與左方隱藏多少長度
                    pos = {
                        // The current scroll
                        left: ele.scrollLeft,
                        top: ele.scrollTop,
                        // Get the current mouse position
                        x: e.clientX,
                        y: e.clientY,
                    };

                    // 接續執行滑鼠拖動與滑鼠放開
                    document.addEventListener('mousemove', mouseMoveHandler);
                    document.addEventListener('mouseup', mouseUpHandler);
                };

                // 滑鼠移動後，取得滑鼠移動距離，接著取得內容上方與左方應該隱藏多少內容的結果
                const mouseMoveHandler = function (e) {
                    // How far the mouse has been moved
                    const dx = e.clientX - pos.x;
                    const dy = e.clientY - pos.y;

                    // Scroll the element
                    ele.scrollTop = pos.top - dy;
                    ele.scrollLeft = pos.left - dx;
                };

                const mouseUpHandler = function () {
                    document.removeEventListener('mousemove', mouseMoveHandler);
                    document.removeEventListener('mouseup', mouseUpHandler);

                    ele.style.cursor = 'grab';
                    ele.style.removeProperty('user-select');
                };

                // Attach the handler
                ele.addEventListener('mousedown', mouseDownHandler);

            });


    </script>
</body>

</html>
