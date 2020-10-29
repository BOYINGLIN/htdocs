@extends("layouts.master") @section("content")
<!-- CSS 可以修改出 滑鼠指標轉為手指指標。
也可以修掉 <a> 的底線。
也可以做出選取到時產生出選取的漸變特效。
-->
<!-- onclick="location.href='http://127.0.0.1:8000/';" -->
<style>
#mask {
    background: rgba(112, 123, 124, 0.6);
}
</style>
<div class="w-100 display-1 font-weight-bold"
    style="font-family: 'Noto Serif TC', serif;">
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://bl3302files.storage.live.com/y4m_d7ZDHzfHOfhUeG5unv6_UFLgDcKd0Sd8HkGGnUXc6H7MnseF8lQo6DQ0Mv63kvSVQolRNPSUmo043YSBgEJ8K8sBT8rzu6whYc-569T-KgMTROdrAhF1Kx8RXucJGbp1bOAO15tLUB47nXmqkmTX50_dYJN_liEGjGYyUzL2f_Ot5Ls65UYz-FD74jDOVU2?width=1124&height=455&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;"
        onclick="location.href='http://127.0.0.1:8000/farmerContent';">
        <br />
        <div id="mask" class="text-center"
            style="font-size: 100px;
    -webkit-text-stroke: 1.5px white;
    text-align: center;">推薦小農</div>
        <br />
    </div>
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://2hd1ua.bl.files.1drv.com/y4mjJzFp0Xwy5Z5shcW5XQ8k5v_mHPFrCCLCj8u6fLM1o24q26B4uu0G0x8TsVGlDZeHDYoQUO8JRH8Wy7kyi0yQ2yHSrhMTGHTkUALe6W1JKaN7yGak4tJ-ukSXheZKZPr7zdBYGBRDV3Mcc1iuD-HNYjosKW88DSxB6o5s3z4K0F5WnpPsL5XrRx6FIbrHtFx-yToVwm1u7i1vf_tN24_BA?width=5207&height=1197&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;"
        onclick="location.href='http://127.0.0.1:8000/sponsors';">
        <br />
        <div id="mask" class="text-center"
            style="font-size: 100px;
    -webkit-text-stroke: 1.5px white;
    text-align: center;">贊助小農</div>
        <br />
    </div>
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://3nd1ua.bl.files.1drv.com/y4mDr3z7RVWqVui862_Ie_WDCvnwBJaJXTnZvbZ0WspBrkdjS6S52EZS2zbYaYPEf4qmGubPni3eawmiqQJC7xXUAhwrISR6HnIZ3y0lP_2cx-WQDd1T14lzb3BRcqUbaMYF5Ehxs4FYinPiVQuZCOv6Df2wmf9RO-nviCx-OmIOWEkFL3pwhc8B7tJnsqPUz3AKa381x8DlUU4PQXTgelicQ?width=2975&height=545&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;"
        onclick="location.href='http://127.0.0.1:8000/vegPrice';">
        <br />
        <div id="mask"
            style="font-size: 100px;
    -webkit-text-stroke: 1.5px white;
    text-align: center;">現在蔬菜多少錢</div>
        <br />
    </div>
    <!--
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://3nd1ua.bl.files.1drv.com/y4mDr3z7RVWqVui862_Ie_WDCvnwBJaJXTnZvbZ0WspBrkdjS6S52EZS2zbYaYPEf4qmGubPni3eawmiqQJC7xXUAhwrISR6HnIZ3y0lP_2cx-WQDd1T14lzb3BRcqUbaMYF5Ehxs4FYinPiVQuZCOv6Df2wmf9RO-nviCx-OmIOWEkFL3pwhc8B7tJnsqPUz3AKa381x8DlUU4PQXTgelicQ?width=2975&height=545&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;"
        onclick="location.href='http://127.0.0.1:8000/';">
        <br />
        <div class="bg-light text-center"
            style="font-size: 100px;
    -webkit-text-stroke: 1.5px white;">台灣現在種什麼</div>
        <br />
    </div> 
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://3xd1ua.bl.files.1drv.com/y4mWKHmvYLD9t7rRfMAOSanPhKiPquPc3s8Gn5jeS6xK6iBmanKnLKptEJJAi_aL_fPRhmi4OapVJgd2to1JPwWCCe6fcg8HA3vz9ewr7qIJ3LjtwD0F1vGyu9lcIJZxHUCO_Q-lDngZRnViTdMgLaA8zGhpF7BCjr-KBQv_6JSE1p6C46Gy5ltGBlo6ONO1MFcBqnjSxRZfHnIhuJwV2kkPQ?width=5951&height=1228&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;"
        onclick="location.href='http://127.0.0.1:8000/';">
        <br />
        <div id="mask" class="text-center"
            style="font-size: 100px;
    -webkit-text-stroke: 1.5px white;
    text-align: center;">推薦小農</div>
        <br />
    </div>-->
</div>
@endsection
