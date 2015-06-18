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
	public function changeItemStatus()
	{
		$present_status=$this->publish;
		$wish_status=$req;
		if($present_status==1 && $wish_status==2)
		{
			$item->publish = 2;
		}
		if($present_status==2)
		{
			if($wish_status==1)
			{
				$item->publish = 1;
			}
			if($wish_status==3)
			{
				$item->publish = 3;
			}
			if($wish_status==4)
			{
				$item->publish = 4;
			}
		}
		if($present_status==3 && $wish_status==5)
		{
			$item->publish = 5;
		}
		if($present_status==4 && $wish_status==2)
		{
			$item->publish = 2;
		}
		if($present_status==5 && $wish_status==6)
		{
			$item->publish = 6;
		}
		if($present_status==6 && $wish_status==5)
		{	
			$item->publish = 5;
		}

		return $this;	 

	}
	
}
