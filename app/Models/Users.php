<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public static function deleteOldPhoto($id)
    {
        $user = Users::find($id);
        $image = $user->photo;
        
        if($image != NULL)
        {
            $user->photo = '';
            File::delete($image);
            
        }
        $user->save();
        return $user;
    }
}
