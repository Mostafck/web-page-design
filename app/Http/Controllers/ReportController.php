<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function highSpenders()
    {
        $users = User::select(
                'users.id',
                'users.name',
                DB::raw('SUM(orders.amount) as total_amount')
            )
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->groupBy('users.id', 'users.name')
            ->having('total_amount', '>', 1000000)
            ->get();

        return response()->json($users);
    }
}


