<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class dashboardController extends Controller
{
    public function getDashboard() {
        return view('backend.dashboard');
    }

    public function getList(Request $request, $id) {
        $registers = Register::where('round', $id)->get();
        return view('backend.list', [
            'id' => $id,
            'registers' => $registers
        ]);
    }
}
