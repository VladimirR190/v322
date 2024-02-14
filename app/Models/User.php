<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'UserID';

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class, 'UserID');
    }

    // Добавьте другие связи и методы, если необходимо
}
