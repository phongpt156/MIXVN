<?php

namespace App\BLL\Front;
use App\DAL\FeatureDefaultValueDAL;

class FeatureDefaultValueBLL
{
	public static function GetFeatureDefaultValues($feature_id) {
		return FeatureDefaultValueDAL::GetFeatureDefaultValues($feature_id);
	}

}
