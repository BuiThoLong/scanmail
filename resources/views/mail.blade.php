
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td align="center">
                    <div style="max-width:500px;margin:0 auto">
                        <div
                            style="vertical-align:top;text-align:left;font-family:tahoma;font-size:14px;font-weight:400;color:#091e42;line-height:20px">
                            {{-- <div style="padding-top:30px;padding-bottom:10px;vertical-align:top;text-align:center">
                                <a href="#" target="_blank">
                                    <img src="" width="30%" alt="HAPPYDAY" style="border:0" class="CToWUd">
                                </a>
                            </div> --}}
                            <hr style="margin-top:24px;margin-bottom:24px;border:0;border-bottom:1px solid #c1c7d0">
                            <div style="padding:0 16px">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td align="center">
                                                <div style="max-width:470px;margin:0 auto">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                                        align="left" style="margin:16px 0">
                                                        <tbody>
                                                            <tr>
                                                                <td valign="top" align="left" rowspan="1" colspan="1">
                                                                    <p>Dear {{ $name }} !</p>
                                                                    <p
                                                                        style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:16px;font-weight:500;color:#172b4d;line-height:20px;margin-top:20px;padding:0">
                                                                        Chúng tôi vừa nhận được thông báo bạn đã đặt
                                                                        resort của chúng tôi. Anh/Chị vui lòng xem lại
                                                                        resort của mình có trùng khớp với thông tin
                                                                        trước đó hay không. Xác nhận nếu đủ điều kiện
                                                                        đăng sản phẩm và từ chối nếu không đủ điều kiện.
                                                                    </p>
                                                                    <hr>
                                                                    <b>Thông tin resort:</b>
                                                                    <p>Tên resort: <b>{{ $resortName }}</b></p>
                                                                    <p>Người đặt: <b>{{ $name }}</b></p>
                                                                    <p>Địa chỉ: <b>{{ $address }}</b></p>
                                                                    <p>Số điện thoại: <b>{{ $numberPhone }}</b></p>
                                                                    <p>Email: <b>{{ $email }}</b></p>
                                                                    <p>Tổng tiền: <b>{{ $totalPrice }}</b></p>
                                                                    <div
                                                                        style="margin-top:24px; display: flex; justify-content: center;">
                                                                        <a href="{{ $url_preview }}"
                                                                            style="box-sizing:border-box;border-radius:3px;border-width:0;border:none;display:inline-flex;font-style:normal;font-size:inherit;height:2.28571429em;line-height:2.28571429em;margin:0;outline:none;padding:0 12px;text-align:center;vertical-align:middle;white-space:nowrap;text-decoration:none;background:rgb(42, 134, 42);color:#ffffff"
                                                                            target="_blank">
                                                                            Xem resort
                                                                        </a>
                                                                    </div>
                                                                    <p style="text-align: end;">Trân trọng cảm ơn !</p>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>

                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr style="margin-top:24px;margin-bottom:24px;border:0;border-bottom:1px solid #c1c7d0">
                            <div style="text-align:center;margin-bottom:16px">
                                <div
                                    style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:14px;font-weight:normal;color:#172b4d;line-height:20px;margin:16px 0">
                                    Tin nhắn này đã được gửi cho Anh/Chị bởi HAPPYDAY
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>