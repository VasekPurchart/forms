<?php
/**
 * This file is part of the Nella Framework.
 *
 * Copyright (c) 2006, 2012 Patrik Votoček (http://patrik.votocek.cz)
 *
 * For the full copyright and license information, please view the file LICENSE.txt that was distributed with this source code.
 */

namespace Nella\NetteAddons\Media\Model;

/**
 * Image dao
 *
 * @author	Patrik Votoček
 */
class ImageDao extends \Nette\Object implements IImageDao
{
	/**
	 * @param string
	 * @return \Nella\NetteAddons\Media\Image|NULL
	 */
	public function findOneByFullSlug($slug)
	{
		if (($pos = strrpos($slug, '_')) === FALSE) {
			return NULL;
		}

		$path = substr_replace($slug, '.', $pos, 1);

		try {
			return new Image($path);
		} catch (\Nette\InvalidArgumentException $e) {
			return NULL;
		}
	}
}
