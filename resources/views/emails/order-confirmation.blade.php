<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin đơn hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 600px;
            background-color: #ffffff;
            margin: 40px auto;
        }

        .logo {
            text-align: left;
            border-bottom: 4px solid #8B4513;
        }

        .logo img {
            width: 120px;
            height: auto;
        }

        .thank-order-info {
            padding: 20px;
        }

        .thank-order-info p {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin: 0;
        }

        .thank-order-info p.content {
            font-size: 10px;
            margin: 5px 0;
            color: #D3D3D3;
            line-height: 1.5;
        }

        .thank-order-info a {
            color: blue;
            text-decoration: underline;
        }

        .thank-order-info a.link {
            color: #005eff;
            text-decoration: underline;
        }

        .order-info {
            font-size: 14px;
            color: #8B4513;
            font-weight: bold;
            border-bottom: 1px solid #D3D3D3;
            margin: 5px 20px;
            padding-bottom: 8px;
        }

        .order-info a {
            color: #CBCBCB;
            font-size: 12px;
        }

        .customer-info {
            display: flex;
            justify-content: space-between;
            margin: 0px 20px;
            margin-top: 5px;
            font-size: 12px;
            line-height: 1.8;
        }

        .customer-info div {
            flex: 1;
        }

        .payment-method {
            margin: 20px 20px;
            font-size: 13px;
        }

        .order-notes {
            margin: 20px 20px;
            font-size: 13px;
        }

        .order-detail {
            font-size: 14px;
            color: #8B0000;
            font-weight: bold;
            border-bottom: 1px solid #D3D3D3;
            margin: 5px 20px;
            padding-bottom: 8px;
        }

        .order-table {
            width: 93%;
            border-collapse: collapse;
            margin: 10px 20px;
        }

        .order-table th {
            background-color: #8B0000;
            color: white;
            padding: 5px 10px;
            text-align: left;
            font-weight: bold;
            font-size: 13px;
        }

        .order-table th.right {
            text-align: right;
            padding-left: 30px;
        }

        .order-table th.center {
            text-align: center;
            padding: 0 20px;
        }

        .order-table td {
            border-bottom: 1px solid #ddd;
            margin-left: 5px;
            text-align: center;

        }

        .order-table .product-name {
            font-weight: bold;
            font-size: 13px;
        }

        .order-table .price {
            text-align: right;
            color: #d32f2f;
            font-weight: bold;
        }

        .order-table .price-black {
            text-align: right;
            color: black;
        }

        .order-table .price-center {
            text-align: center;
            color: #d32f2f;
            font-weight: bold;
        }

        .total-row {
            background-color: #f9f9f9;
            font-weight: bold;
        }

        .final-total {
            background-color: #D3D3D3;
            color: black;
            font-weight: bold;
            font-size: 14px;
        }

        .checkout-button {
            text-align: center;
            margin: 20px 0;
        }

        .checkout-button a {
            background-color: #8B0000;
            color: white;
            padding: 5px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .contact-info {
            border: 2px dashed #8B4513;
            padding: 15px 20px;
            margin: 20px 20px;
            font-size: 13px;
        }

        .footer {
            margin-top: 30px;
            color: #666;
            font-size: 14px;
        }

        .footer p {
            text-align: left;
            margin-left: 20px;
        }

        .company-name {
            color: #8B4513;
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
            text-align: right;
            margin-right: 15px;
            margin-bottom: 10px;
        }

        .conttent-out {
            max-width: 600px;
            margin: 20px auto;
            font-size: 13px;
            line-height: 1.4;
            color: #87CEFA;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="https://www.congnghetsmart.com/thumbs/100x100x1/upload/photo/logo-2966.jpg">
        </div>

        <div class="thank-order-info">
            <p>Cảm ơn quý khách đã đặt hàng tại <a>www.congnghetsmart.com</a></p>
            <p class="content">Chúng tôi rất vui thông báo đơn hàng #FPP3FO của quý khách đã được tiếp nhận và đang trong
                quá trình xử lý.
                <a class="link"> www.congnghetsmart.com </a> sẽ thông báo đến quý khách ngay khi hàng chuẩn bị được
                giao.
            </p>
        </div>

        <div class="order-info">
            THÔNG TIN ĐƠN HÀNG #{{ $order['code'] }} <a>(Ngày {{ $order['created_at'] }})</a>
        </div>

        <div class="customer-info">
            <div>
                <strong>Thông tin thanh toán</strong><br>
                <span style="display:block; margin-bottom:5px;">{{ $customer['name'] }}</span>
                <span style="display:block; margin-bottom:5px;">
                    <a href="mailto:{{ $customer['email'] }}">{{ $customer['email'] }}</a>
                </span>
                <span style="display:block;">{{ $customer['phone'] }}</span>

            </div>
            <div>
                <strong>Địa chỉ giao hàng</strong><br>
                 <span style="display:block; margin-bottom:5px;">
                {{ $customer['name'] }}<br>
                <a href="mailto:{{ $customer['email'] }}">{{ $customer['email'] }}</a><br>
                {{ $customer['address'] }}<br>
                Tel: {{ $customer['phone'] }}
                 </span>
            </div>
        </div>

        <div class="payment-method">
            <strong>Hình thức thanh toán:</strong> {{ $order['payment_method'] }}
        </div>

        <div class="order-notes">
            <strong>Yêu cầu khác:</strong> {{ $order['notes'] ?? 'Không có' }}
        </div>

        <div class="order-detail">
            CHI TIẾT ĐƠN HÀNG
        </div>

        <table class="order-table">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th class="center">Đơn giá</th>
                    <th class="center">Số lượng</th>
                    <th class="right">Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderItems as $item)
                    <tr>
                        <td class="product-name">{{ $item['name'] }}</td>
                        <td class="price-center">{{ number_format($item['price'], 0, ',', '.') }}đ</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td class="price">{{ number_format($item['total'], 0, ',', '.') }}đ</td>
                    </tr>
                @endforeach

                <tr class="total-row">
                    <td colspan="3" style="text-align: right;"><strong>Tạm tính</strong></td>
                    <td class="price-black">{{ number_format($order['subtotal'], 0, ',', '.') }}đ</td>
                </tr>

                @if ($order['shipping_fee'] > 0)
                    <tr class="total-row">
                        <td colspan="3" style="text-align: right;"><strong>Phí vận chuyển</strong></td>
                        <td class="price">{{ number_format($order['shipping_fee'], 0, ',', '.') }}đ</td>
                    </tr>
                @endif

                <tr class="final-total">
                    <td colspan="3" style="text-align: right;"><strong>Tổng giá trị đơn hàng</strong></td>
                    <td class="price-black"><strong>{{ number_format($order['total'], 0, ',', '.') }}đ</strong></td>
                </tr>
            </tbody>
        </table>

        <div class="checkout-button">
            <a href="https://www.congnghetsmart.com/">Chi tiết đơn hàng tại {{ config('app.url') }}</a>
        </div>

        <div class="contact-info">
            <strong>Bạn cần được hỗ trợ ngay?</strong> Ghi chú gửi mail về
            <strong>{{ config('mail.from.address') }}</strong> - hotline
            <strong>{{ config('app.phone', '0123456789') }}</strong> (8:21h và T7,CN). <a
                href="{{ config('app.url') }}" class="website-link">{{ config('app.url') }}</a> luôn sẵn sàng hỗ trợ
            bạn để bạn có trải nghiệm tốt nhất.
        </div>

        <div class="footer">
            <p>Một lần nữa <a href="{{ config('app.url') }}" class="website-link">{{ config('app.url') }}</a> cảm ơn
                quý khách.</p>

            <div class="company-name">
                {{ config('app.company_name', 'Thiết Bị Công Nghệ T-SMART') }}
            </div>
        </div>
    </div>
    <div class="conttent-out">
        <div>
            <p>Quý khách nhận được email này vì đã mua hàng tại <a href="{{ config('app.url') }}"
                    class="website-link">{{ config('app.url') }}</a></p>
            <p>Để đảm bảo luôn nhận được email thông báo, xin nhật hàng tại <a href="{{ config('app.url') }}"
                    class="website-link">{{ config('app.url') }}</a>, quý khách vui lòng thêm email
                <strong>{{ config('mail.from.address') }}</strong> vào địa chỉ (Address Book, Contacts) của hộp email.
            </p>
            <p>Địa chỉ:
                {{ config('app.address', 'Số 10 Phạm Gia Phong, phường Thể Thành, quận Tân Phú, Tp Hồ Chí Minh') }}</p>
        </div>

    </div>
</body>

</html>
