<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Image;
class Item extends Model {

	protected $fillable = array('user_id');
        const SYNCED=1;
        const PENDING_FOR_PUBLISH=2;
        const ACCEPTED_FOR_PUBLISH=3;
        const REJECTED_FOR_PUBLISH=4;
        const PUBLISHED=5;
        const UNPUBLISHED=6;
	
	
}
