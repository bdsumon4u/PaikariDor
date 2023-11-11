<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQuery extends Model
{
    use HasFactory;

    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'oninda';

    public function product(){
        return  $this->belongsTo(Product::class);
      }
  
      public function user(){
         return $this->belongsTo(User::class,'customer_id');
      }
}
