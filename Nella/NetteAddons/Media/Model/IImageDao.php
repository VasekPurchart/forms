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
 * File dao interface
 *
 * @author	Patrik Votoček
 */
interface IImageDao
{
	/**
	 * @param string
	 * @return \Nella\NetteAddons\Media\IImage|NULL
	 */
	public function findOneByFullSlug($slug);
}
