<?php
/**
 * This file is part of the Nella Framework.
 *
 * Copyright (c) 2006, 2011 Patrik Votoček (http://patrik.votocek.cz)
 *
 * This source file is subject to the GNU Lesser General Public License. For more information please see http://nella-project.org
 */

namespace Nella\Model;

/**
 * Query Executor interface
 *
 * @author	Patrik Votoček
 */
interface IQueryExecutor
{
	/**
	 * @param IQueryObject
	 * @return int
	 */
	public function count(IQueryObject $queryObject);
	
	/**
	 * @param IQueryObject
	 * @return array
	 */
	public function fetch(IQueryObject $queryObject);
	
	/**
	 * @param IQueryObject
	 * @return object|NULL
	 */
	public function fetchOne(IQueryObject $queryObject);
}