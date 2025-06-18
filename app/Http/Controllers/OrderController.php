<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderConfirmationMail;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function sendOrderConfirmation()
    {
        $order = [
            'code' => 'FPP3FO',
            'created_at' => '18 tháng 06 năm 2025 07:47:30',
            'payment_method' => 'Thanh toán trực tiếp tại công ty',
            'notes' => '1',
            'subtotal' => 550000,
            'shipping_fee' => 0,
            'total' => 550000
        ];

        $customer = [
            'name' => 'Thành Mã',
            'email' => 'makienthanh1512@gmail.com',
            'phone' => '0123654987',
            'address' => '2/15 Nguyễn Trọng Tuyển, Phường 5, Quận Gò Vấp, TP.HCM'
        ];

        $orderItems = [
            [
                'name' => 'CAMERA KHÔNG DÂY SIÊU NHỎ',
                'price' => 550000,
                'quantity' => 1,
                'total' => 550000
            ]
        ];

        try {
            Mail::to($customer['email'])->send(new OrderConfirmationMail($order, $customer, $orderItems));

            return response()->json([
                'success' => true,
                'message' => 'Email đã được gửi thành công!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra khi gửi email: ' . $e->getMessage()
            ]);
        }
    }

    public function testEmail()
    {
        $order = [
            'code' => 'FPP3FO',
            'created_at' => '18 tháng 06 năm 2025 07:47:30',
            'payment_method' => 'Thanh toán trực tiếp tại công ty',
            'notes' => '1',
            'subtotal' => 550000,
            'shipping_fee' => 0,
            'total' => 550000
        ];

        $customer = [
            'name' => 'Thành Mã',
            'email' => 'makienthanh1512@gmail.com',
            'phone' => '0123456789',
            'address' => '2/15 Nguyễn Trọng Tuyển, Phường 5, Quận Gò Vấp, TP.HCM'
        ];

        $orderItems = [
            [
                'name' => 'CAMERA KHÔNG DÂY SIÊU NHỎ',
                'price' => 550000,
                'quantity' => 1,
                'total' => 550000
            ]
        ];

        return view('emails.order-confirmation', compact('order', 'customer', 'orderItems'));
    }
}
