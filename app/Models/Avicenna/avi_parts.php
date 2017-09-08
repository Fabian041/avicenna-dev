<?php

namespace App\Models\Avicenna;

use Illuminate\Database\Eloquent\Model;

class avi_parts extends Model
{
    //
     protected $fillable = [
        'customer_id', 'supplier_id', 'back_number', 'part_number', 
        'part_number_customer', 'part_name', 'product_group', 'product_line', 
        'quantity_box', 'min_stock', 'max_stock'
    ];

    public static function getQuantity($part_number){

    	return self::whereRaw('CONCAT(REPLACE(part_number_customer, "-", ""), "000") LIKE "%'.$part_number.'%"')->first();
    
    }
}
