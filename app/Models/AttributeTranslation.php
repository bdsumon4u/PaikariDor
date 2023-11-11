<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeTranslation extends Model
{
  /**
   * The connection name for the model.
   *
   * @var string|null
   */
  protected $connection = 'oninda';

  protected $fillable = ['name', 'lang', 'attribute_id'];

  public function attribute(){
    return $this->belongsTo(Attribute::class);
  }

}
