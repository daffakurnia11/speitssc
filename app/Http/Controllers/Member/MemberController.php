<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function getpoints()
    {
        $data_point = DB::table('point')->orderByDesc('point.point')
            ->join('users', 'point.user_id', '=', 'users.id')
            ->take(10)->get();

        foreach ($data_point as $item) {
            $datas[]=[
                "nama" => $item-> nama,
                "point" => $item->point
            ];
        }
        return view('iniview.blade.php', $datas);
    }
}