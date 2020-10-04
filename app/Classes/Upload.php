<?php

namespace App\Classes;

use Storage;

class Upload {
    public static function uploadGambar($request, String $location, String $name)
    {
        $foto = $request->file($name);
        $ext = $foto->getClientOriginalExtension();

        if ($request->file($name)->isValid()) {
            $fotoName = date('YmdHis'). ".$ext";
            $request->file($name)->storeAs($location, $fotoName, 'img');
            return $fotoName;
        }

        return false;
    }

    public static function hapusGambar($model, String $location, String $name)
    {
        $exist = Storage::disk('img')->exists($location.'/'.$model->$name);

        if (isset($model->$name) && $exist) {
            $delete = Storage::disk('img')->delete($location.'/'.$model->$name);
            if ($delete) {
                return true;
            }
            return false;
        }
    }
}