<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelModels
{
    public static function get_all() //menampilkan artikel pada tabel home
    {
        $art = DB::table('artikel')->get();
        return $art;
    }

    public static function save($data) //menyimpan artikel baru
    {
        //proses pengurangan data token
        unset($data["_token"]);



        $new_art = DB::table('artikel')->insert($data);


        return $new_art;
    }
    public static function find_by_id($a) //pencarian data artikel, bisa buat memuncullkan deskripsi
    {
        $art = DB::table('artikel')->find($a);

        //$idtny = $a;
        return $art;
    }
    public static function update($a, $request) //menyimpan update artikel
    {
        $artem = DB::table('artikel')
            ->where('id', $a)->update([
                'judul' => $request["judul"],
                'isi' => $request["isi"],
                'slug' => Str::slug($request["judul"]),
                'tag' => $request["tag"],
            ]);
        return $artem;
    }
    public static function deleteat($a) //delete artikel
    {
        $deleteat = DB::table('artikel')->where('id', $a)->delete();
        return $deleteat;
    }
}
