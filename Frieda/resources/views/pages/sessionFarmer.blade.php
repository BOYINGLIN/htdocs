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
        url(https://bl3302files.storage.live.com/y4mOZDw6ZVSaIhrniyWC1CSyQpGmrXYgvkiRMDGfuUiPyVKYT0qouoHmvHNt4vMMGGFnYG-WiHarIvq7uNVUFb8ogYmyoB_yhfMwhf7HcPZIMCzjIoOWtNPPOKSdt33kKL-lu9RD3Z4Ql_-ZgGGiwzmkd5MJ6yxBsqttzOooztQUhrCaERV_Oftd2jKfVrLdG4x?width=1124&height=400&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;
    cursor: pointer;"
        onclick="location.href='http://127.0.0.1:8000/garden/{fid}/';">
        <br />
        <div id="mask" class="text-center"
            style="font-size: 100px;
    -webkit-text-stroke: 1.5px white;
    text-align: center;">我的菜園</div>
        <br />
    </div>
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://bl3302files.storage.live.com/y4m41NTxOEtuJAfoL9_G4RnMueWOlxD5O7I12je-D8lyPqFJ7SQn-uz6SOBDA7GlCq4vC_gHLoy0JNcmOLrPmT6uPWy8bMB_SAbXXMpl1C9SmVnPLAtJPBACKjWmrlKMwiNXqwRdrI61QqnfDM7WalrmwmGLoEymimaEUb2oxY9ApUfb_RKDN-borvtDqmrGaAL?width=1599&height=454&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;
    cursor: pointer;"
        onclick="location.href='http://127.0.0.1:8000/';">
        <br />
        <div id="mask" class="text-center"
            style="font-size: 100px;
    -webkit-text-stroke: 1.5px white;
    text-align: center;">我的契作合約</div>
        <br />
    </div>
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://bl3302files.storage.live.com/y4mXJflaLxy85hvCVnWwjclZC6ZnVDM4OrbKVGHkjqzgS36yUjkJ3D0r7gY0ZJNM7oVdnq6y413d5Ps_p3g4hZF8CN-4peYEScrTRUQW9ModjpRug57EgiN4FN3MdkYd0LZxmIZWFP3NMCShVwCGRTxk-wuE8z7yKntcwoOyHBsTWFj8l-_GlPG-7o74Kpg3eZh?width=2975&height=545&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;
    cursor: pointer;"
        onclick="location.href='http://127.0.0.1:8000/';">
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
    </div> -->
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://bl3302files.storage.live.com/y4mkkv2G5DI_lgeHU3-wq1o-QuPiQfgKbWwQZf1RQjc2ZtReGljPv8dcoUVSnCybrKs_5j8cbDotUktx-JxG7O0sqV1A1KpYMS7AipSq9UWI4yK1lXkqQk1mb1ocRYY5nxM8m5nTF4V2rVQJ9Ih-CC4nlHvLiPaLrnPD95IKOVRtoLl1J0LO1nZImgnlQ5pAiY8?width=5207&height=1197&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;
    cursor: pointer;"
        onclick="location.href='http://127.0.0.1:8000/';">
        <br />
        <div id="mask" class="text-center"
            style="font-size: 100px;
    -webkit-text-stroke: 1.5px white;
    text-align: center;">逛逛其他菜園</div>
        <br />
    </div>
</div>
@endsection
