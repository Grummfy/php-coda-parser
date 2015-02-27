<?php

namespace Codelicious\Coda\Data;

/**
 * @package Codelicious\Coda
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class AccountTransactions
{
	public $identification;
	public $original_situation;
	public $transactions = array();
	public $new_situation;
	public $messages = array();
	public $summary;
}
