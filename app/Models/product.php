<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
   // protected $table= 'product';
    protected $fillable =[
        'name',
        'description',
        'quantity',
        'purchase_price',
        'sales_price',
        'image',
        'status',
        'quantity_sold'
    ];
}