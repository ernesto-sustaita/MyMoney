<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $foreignKeys = [
        'account' => 'account_id'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class, $this->foreignKeys['account'], 'id');
    }
     
    public function getForeignKeys(){
        return array_values($this->foreignKeys);
    }

    protected $fillable = [
        'type',
        'quantity'
      ];
}
