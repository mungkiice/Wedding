<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function destroy($photoID)
    {
        $photo = Photo::find($photoID);
        if ($photo != null) {
            $photo->delete();
        }
        return redirect()->back();
    }
}
