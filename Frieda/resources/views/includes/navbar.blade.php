<header
    class="navbar-nav-scroll navbar-expand-sm w-100  justify-content-between">
    <nav
        class="container d-flex float-none navbar navbar-light bg-light justify-content-between">
        <h1 class="navbar-brand font-weight-bold mr-auto p-2"
            onclick="location.href='http://127.0.0.1:8000/';"
            style="font-size: 80px;">
            <b class="text-danger">蔬</b><b class="text-success">翠</b><b
                class="text-primary">好</b><b class="text-warning">友</b>
        </h1>
        <h4>
            <a class="text-success" data-toggle="modal"
                data-target="#ModalRegister"><b>註冊會員</b></a>
        </h4>
        <h2>&nbsp&nbsp</h2>
        <button class="btn btn-outline-success btn-lg h3 p-2" type="button"
            data-toggle="modal" data-target="#exampleModalCenter"><b>&nbsp&nbsp&nbsp登入&nbsp&nbsp&nbsp</b></button>
        <!--  <button class="btn btn-outline-success btn-lg h3 p-2" type="button"
            data-toggle="modal" data-target="#exampleModalCenter">農民登入</button>-->
    </nav>
    <!--  <nav>
        <ul
            class="nav nav-pills nav-justified container d-flex float-none navbar navbar-light bg-light">
            <li class="nav-item"><a class="h4 nav-link btn-outline-success"
                href="http://127.0.0.1:8000">當月蔬菜TOP5</a></li>
            <li class="nav-item"><a class="h4 nav-link btn-outline-success"
                href="http://127.0.0.1:8000">現在蔬菜多少錢</a></li>
            <li class="nav-item"><a class="h4 nav-link btn-outline-success"
                href="http://127.0.0.1:8000">台灣現在種什麼</a></li>
            <li class="nav-item"><a class="h4 nav-link btn-outline-success"
                href="http://127.0.0.1:8000" tabindex="-1" aria-disabled="true">推薦小農</a></li>
        </ul>
    </nav> -->
    <!-- Modal 登入用 -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1"
        aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 550px">
                <div class="modal-header">
                    <h4 class="modal-title w-100 text-center"
                        id="exampleModalCenterTitle">
                        <b style="font-size: 30px;">蔬翠好友</b>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="false">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table style="text-align: center;">
                        <tr>
                            <td><input type="button" title="農夫登入"
                                style="background-image:
        url(https://dpypda.bl.files.1drv.com/y4mmbpbIApI2VfxvJ-jFJO6_-_icNblIkT7xZ2XMHlujF6jSAdtzkbpWC6jkC5Qg92zMc8WZxw4NWyY3zC0wMP2Lr6u9fwmapnssuSA9Tp1k1Sg17ogexJKkFzkd6NZZmJsRq32AIybdad2eZa6lBi2rNAeX-nMhjr_pbWCRCjc4p1EYYVC_rppg1oe8LP3eSeck4YPWZ1kSnXN0ehdZveRCA?width=256&amp;amp;amp;height=256&amp;amp;amp;cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    width: 256px;
    height: 256px;
    border: none"
                                onclick="location.href='http://127.0.0.1:8000/loginFarmer';"></td>
                            <td><input type="button" title="民眾登入"
                                style="background-image:
        url(https://duypda.bl.files.1drv.com/y4mFOwkaNqesFGNg5jJ7Ulr0ZaMgFnQaeLRr0zaDtQ3_mBlTJUg1mzeXl07qI3xE6fFHziCrH_AE3ZdMmeVIbEdRHU9kuUOzyXRrcpsYoR5sB8_qB-aYncRi44jwbqq7_nwThTnZ_xWbL9DH06U_USRvg3UFitAxW59MB3wraWv7dmyW-5w2em1kgHI7VAsJMvY2TArt3nYv3rkWjp7eoWo0w?width=256&amp;amp;amp;amp;height=256&amp;amp;amp;amp;cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    width: 256px;
    height: 256px;
    border: none"
                                onclick="location.href='http://127.0.0.1:8000/loginPeople';"></td>
                        </tr>
                        <tr>
                            <td><b><font size="5">農夫登入</font></b></td>
                            <td><b><font size="5">民眾登入</font></b></td>
                        </tr>
                    </table>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-success w-100 mx-5"
                            onclick="location.href='http://127.0.0.1:8000/login';">以訪客身分登入</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 註冊用 -->
    <div class="modal fade" id="ModalRegister" tabindex="-1"
        aria-labelledby="ModalRegister" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 550px">
                <div class="modal-header">
                    <h4 class="modal-title w-100 text-center" id="ModalRegister">
                        <b style="font-size: 30px;">帳戶註冊</b>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="false">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table style="text-align: center;">
                        <tr>
                            <td><input type="button" title="農夫註冊"
                                style="background-image:
        url(https://dpypda.bl.files.1drv.com/y4mmbpbIApI2VfxvJ-jFJO6_-_icNblIkT7xZ2XMHlujF6jSAdtzkbpWC6jkC5Qg92zMc8WZxw4NWyY3zC0wMP2Lr6u9fwmapnssuSA9Tp1k1Sg17ogexJKkFzkd6NZZmJsRq32AIybdad2eZa6lBi2rNAeX-nMhjr_pbWCRCjc4p1EYYVC_rppg1oe8LP3eSeck4YPWZ1kSnXN0ehdZveRCA?width=256&amp;amp;amp;height=256&amp;amp;amp;cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    width: 256px;
    height: 256px;
    border: none"
                                onclick="location.href='http://127.0.0.1:8000/registerFarmer';"></td>
                            <td><input type="button" title="民眾註冊"
                                style="background-image:
        url(https://duypda.bl.files.1drv.com/y4mFOwkaNqesFGNg5jJ7Ulr0ZaMgFnQaeLRr0zaDtQ3_mBlTJUg1mzeXl07qI3xE6fFHziCrH_AE3ZdMmeVIbEdRHU9kuUOzyXRrcpsYoR5sB8_qB-aYncRi44jwbqq7_nwThTnZ_xWbL9DH06U_USRvg3UFitAxW59MB3wraWv7dmyW-5w2em1kgHI7VAsJMvY2TArt3nYv3rkWjp7eoWo0w?width=256&amp;amp;amp;amp;height=256&amp;amp;amp;amp;cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    width: 256px;
    height: 256px;
    border: none"
                                onclick="location.href='http://127.0.0.1:8000/registerPeople';"></td>
                        </tr>
                        <tr>
                            <td><b><font size="5">農夫註冊</font></b></td>
                            <td><b><font size="5">民眾註冊</font></b></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</header>
