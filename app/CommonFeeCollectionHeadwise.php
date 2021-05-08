<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommonFeeCollectionHeadwise extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'common_fee_collection_headwise';

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
    protected $fillable = ['receiptId','headId','headName','brId','amount'];
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
