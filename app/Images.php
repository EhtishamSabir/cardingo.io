<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Images extends Model

{

  protected $primarykey='id';

  protected $table='images';

  protected $fillable=[

    'url','image_name','price','attr_1','attr_2','attr_3','attr_4','attr_5','json_data'

  ];

  public function payment()

  {

      return $this->hasOne(Payments::class);

  }

}

