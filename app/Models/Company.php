<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'company_id';
    protected $fillable = array('name','status','pic','email','phone','phone2','address',
        'address2','country','province','city','area','sub_area','village','postal_code'
    );
    public $timestamps = true; 
	 

}
