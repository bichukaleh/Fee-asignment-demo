<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialTransDetail extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'financial_tran_details';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['financial_tran_id','amount','head_id','head_name'];
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
