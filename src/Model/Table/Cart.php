<?php

namespace Cart\Model\Table;

use WebDevBr\Cart\Cart as C;
use Cart\Persist\Session;

class Cart
{
	public static function factory()
	{
		return new C(new Session);
	}
}
