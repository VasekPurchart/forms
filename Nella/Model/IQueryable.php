<?php
/**
 * This file is part of the Nella Framework.
 *
 * Copyright (c) 2006, 2012 Patrik Votoček (http://patrik.votocek.cz)
 *
 * For the full copyright and license information, please view the file LICENSE.txt that was distributed with this source code.
 */

namespace Nella\Model;

/**
 * Queryable interface
 *
 * @author	Patrik Votoček
 */
interface IQueryable
{
	/**
	 * @param string|NULL
	 * @return \Doctrine\ORM\QueryBuilder|\Doctrine\CouchDB\View\AbstractQuery
	 */
	public function createQueryBuilder($alias);
}