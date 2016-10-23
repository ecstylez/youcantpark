<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

	public $breadcrumbs = array();

	/**
	 * method return breadcrumbs for current page
	 * @return $breadcrumbs
	 */
	public function buildBreadCrumbs($params = "")
	{

		if (empty($params)) {
			return;
		}

		if(!is_array($params)) {
			$crumbs = array(
				'/' . $params => ucwords(str_replace("-", " ", $params)),
			);

			$this->breadcrumbs = $crumbs;
		}

		return $this->breadcrumbs;
	}


}
