<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasPermissions;


class Role extends Model
{
    use HasFactory;
    use HasPermissions;
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
