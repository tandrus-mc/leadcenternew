<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadList extends Model
{
    use SoftDeletes;

    protected $table = 'lead_lists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'list_name',
        'internal_list_name',
        'user_id',
        'provider_name',
        'good_tags',
        'bad_tags'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [ 'deleted_at' ];

    public static function addLeadList(){

    }

    public function user()
    {
        return $this->belongsTo( 'App\User' );
    }

    public function leads()
    {
        return $this->hasMany( 'App\Lead' );
    }
}
