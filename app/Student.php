<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CommonFeeCollection;
class Student extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'students';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['admno','roll_no','name','status','program'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get the fee collection associated with the student.
     */
    public function commonfeecollection()
    {
        return $this->hasMany(CommonFeeCollection::class);
    }
    /**
     * get report of fee collection headwise
     * @param  array $data
     * @return array
     */
    public function getHeadWiseReport($data)
    {
       $currentPage = $data['page'];
       $feeDetails = Student::with(['commonfeecollection'])->take(10);
       $reportDeatils = [];
    }
}
