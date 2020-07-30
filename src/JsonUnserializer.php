<?php

namespace Zaioll\ActiveResource;

use yii\helpers\Json;

/**
 * Class JsonUnserializer
 * 
 * @package Zaioll\ActiveResource
 */
class JsonUnserializer extends Unserializer {

	/**
	 * @param string $data
	 * @param bool $asArray
	 * @return mixed
	 */
	public function unserialize($data, $asArray = true) {

		return Json::decode($data, $asArray);
	}
}