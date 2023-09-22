<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    protected $fillable = [
        'sku',
        'manuifacturer',
        'quantity',
        'cost_price',
        'sell_price',
        'unit_of_measure',
        'attributes',
        'user_id',
        'category_id',
        'vendor_id',
        'location',
        'description',
        'business_id',
        'po_number',
        'minimum_order',
        'platforms_selling_on',
        'last_sold',

    ];


}
