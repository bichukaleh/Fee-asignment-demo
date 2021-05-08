<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\CommonFeeCollectionHeadwise;

class CommonFeeCollection extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'common_fee_collection';

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
    protected $fillable = ['admno','roll_no','amount','brid','acadamicYear'];
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get the student that submit the fee.
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'foreign_key', 'admno');
    }
    /**
     * Get the fee collection associated with the student headwise.
     */
    public function commonfeecollectionheadwise()
    {
        return $this->hasMany(CommonFeeCollectionHeadwise::class);
    }
}
