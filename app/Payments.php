<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Payments extends Model

{

  protected $primarykey='id';

  protected $table='payments';

  protected $fillable=[

    'amount','tx_id','user_id','created_at','updated_at','images_id','minted'

  ];

  public function image()

  {

      return $this->belongsTo(Images::class);

  }

}
?>
