@extends("layouts.master") @section("content")
<div class="mx-auto">
    <br />
    <form style="width: 100%" action="" method="post">
        <table class="border border-success text-center table-hover"
            style="width: 100%">
            <tbody>
                <tr class="border border-success text-center">
                    <td colspan="2" class="h4 border border-success">農夫登入</td>
                </tr>
                <tr class="border border-success text-center">
                    <td class="h4 border border-success"  width="250" style="table-layout: fixed">&nbsp&nbsp輸入電子郵件位址&nbsp&nbsp</td>
                    <td class="border border-success"  width="350"><input
                        class="form-control" type="text" name="login_name"
                        required="required" style="width: 100%" /></td>
                </tr>
                <tr class="border border-success text-center">
                    <td class="h4 border border-success" width=auto>輸入密碼</td>
                    <td class="border border-success" width=auto><input
                        class="form-control" type="password" name="login_name"
                        required="required" style="width: 100%" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input
                        class="border border-success text-center btn btn-success btn-lg btn-block"
                        type="submit" value="登入"></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection
