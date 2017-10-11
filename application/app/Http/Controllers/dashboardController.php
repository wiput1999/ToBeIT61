<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Carbon;

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

    public function doCheckSaturday($id) {
        $data = Register::find($id);

        if ($data->saturday == null) {
            $data->saturday = Carbon\Carbon::now();
            $data->save();
            return redirect('/backend/list/'. $data['round']);
        }
        $data->saturday = null;
        $data->save();
        return redirect('/backend/list/'. $data['round']);
    }

    public function doCheckSunday($id) {
        $data = Register::find($id);

        if ($data->sunday == null) {
            $data->sunday = Carbon\Carbon::now();
            $data->save();
            return redirect('/backend/list/'. $data['round']);
        }
        $data->sunday = null;
        $data->save();
        return redirect('/backend/list/'. $data['round']);
    }

    public function getProfile($id) {
        $data = Register::find($id);

        return $data;
    }
}
