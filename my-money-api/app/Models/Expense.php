<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $foreignKeys = [
        'account' => 'account_id', 
        'budget' => 'budget_id'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class, $this->foreignKeys['account'], 'id');
    }

    public function budget()
    {
        return $this->belongsTo(Budget::class, $this->foreignKeys['budget'], 'id');
    }
     
    public function getForeignKeys(){
        return array_values($this->foreignKeys);
    }

    protected $fillable = [
        'quantity'
      ];
}
