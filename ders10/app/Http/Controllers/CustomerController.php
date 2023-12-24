<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Price;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{

    public function createOrder()
    {
        $customer_id = 10;
        $title = "Cep Telefonu";
        $description = "Xiaomi Mi 10";
        $customer = Customer::findOrFail($customer_id);
        $order = new Order([
           'customer_id' => $customer_id,
           'title' => $title,
           'description' => $description
        ]);
        $customer->order()->save($order);
        return "Order eklendi.";
    }

    public function createPrice(){
        $customer_id = 10;
        $title = "Cep Telefonu";
        $description = "Xiaomi Mi 10";
        $total = 17850;

        $price = new Price([
            'customer_id' => $customer_id,
            'title' => $title,
            'description' => $description,
            'total' => $total
        ]);

        $customer = Customer::findOrFail($customer_id);
        $customer->price()->save($price);
        return "Price eklendi.";
    }
    public function updateCustomer(){
        $id = 1;
        $title = 'yeni başlık';
        $description = 'yeni acıklama';

        Order::where('id', $id)->update([
            'title' => $title,
            'description' => $description
        ]);

        return "Order güncellendi.";
    }

    public function read(){
        $customer_id = 10;

        $customer = Customer::findOrFail($customer_id);
        return $customer->order->title;
    }

    public function delete(){
        $customer_id = 3;
        Order::where('id', $customer_id)->delete();
        return "Order silindi.";
    }
}
