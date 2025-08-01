<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    // The index function only returns the view
    public function index()
    {
        return view('pages.dashboards.index', $this->todayReport(), $this->overAll());
    }

    public function todayReport()
    {
        return [
            'todaySales' => DB::table('orders')
                ->whereDate('order_date', today())
                ->sum('grand_total'),

            'todayOrders' => DB::table('orders')
                ->whereDate('order_date', today())
                ->count(),

            'orderedProductQuantity' => DB::table('order_items')
                ->join('orders', 'orders.id', '=', 'order_items.order_id')
                ->whereDate('orders.order_date', today())
                ->sum('order_items.quantity'),


            'totalVisitors' => DB::table('visitors')
                ->whereDate('created_at', today())
                ->count(),
        ];
    }

    public function overAll()
    {
        return [
            'user' => DB::table('users')
                ->where('isAdmin', 2)
                ->count(),

            'order' => DB::table('orders')->count(),
            'visitor' => DB::table('visitors')->count(),

            'totalSales' => DB::table('orders')
                ->sum('grand_total'),

        ];
    }

    public function allNotification()
    {
        return view('pages.dashboards.all-notification');
    }


}
