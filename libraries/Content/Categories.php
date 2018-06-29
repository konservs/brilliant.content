<?php
namespace Brilliant\Content;

/**
 * Basic class to control Content Categories
 *
 * @method \Brilliant\Content\Category itemGet(integer $id)
 * @method \Brilliant\Content\Category[] itemsGet(integer[] $ids)
 * @method \Brilliant\Content\Category[] itemsFilter($params)
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Categories extends \Brilliant\Items\BItemsTree{
	use \Brilliant\BSingleton;
	protected $tableName='content_categories';
	protected $itemClassName='\Brilliant\Content\Category';
	}
