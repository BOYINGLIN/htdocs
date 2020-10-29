@extends("layouts.master") @section("content")
<h1>農夫註冊</h1>
<form style="width: 100%" action="" method="post">
    <table class="border border-success text-center table-hover"
        style="width: 100%">
        <thead>
            <tr>
                <th colspan="2" style="font-size: 30px;">註冊資料</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border border-success text-center">
                <td class="h4 border border-success">欄位</td>
                <td class="h4 border border-success">內容</td>
            </tr>
            <tr class="border border-success text-center">
                <td class="h4 border border-success">姓名</td>
                <td class="border border-success"><input class="form-control"
                    type="text" name="login_name" required="required"
                    style="width: 100%" /></td>
            </tr>
            <tr class="border border-success text-center">
                <td class="h4 border border-success">身分證字號</td>
                <td class="border border-success"><input class="form-control"
                    type="text" name="login_name" required="required"
                    style="width: 100%" /></td>
            </tr>
            <tr class="border border-success text-center">
                <td class="h4 border border-success">有機或產銷履歷證明</td>
                <td class="border border-success"><input class="form-control"
                    type="text" name="login_name" required="required"
                    style="width: 100%" /></td>
            </tr>
            <tr class="border border-success text-center">
                <td class="h4 border border-success">電子郵件位址</td>
                <td class="border border-success"><input class="form-control"
                    type="text" name="login_name" required="required"
                    style="width: 100%" /></td>
            </tr>
            <tr class="border border-success text-center">
                <td class="h4 border border-success">密碼</td>
                <td class="border border-success"><input class="form-control"
                    type="password" name="login_name" required="required"
                    style="width: 100%" /></td>
            </tr>
            <tr>
                <td colspan="2"><input
                    class="border border-success text-center btn btn-success btn-lg btn-block"
                    type="submit" value="送出註冊資料"></td>
            </tr>
        </tbody>
    </table>
</form>
@endsection
