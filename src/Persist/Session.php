<?php

namespace Cart\Persist;

use WebDevBr\Cart\Contract;
use WebDevBr\Cart\ProductManager;
use Cake\Network\Session as CakeSession;

class Session extends ProductManager implements Contract
{
    private $session;

    public function __construct()
    {
        $this->session = new CakeSession;
    }

    public function add(Array $product)
    {
        $this->products = $this->getSession();
        parent::add($product);
        $this->session->write('store.cart', $this->products);
        return $this->products;
    }
    
    public function delete($id)
    {
        $this->products = $this->getSession();
        parent::delete($id);
        $this->session->write('store.cart', $this->products);
        return $this->products;
    }

    public function all(Array $products = null)
    {
        return parent::all($this->getSession());
    }

    protected function getSession()
    {
        if (!$this->session->check('store.cart')) {
            $this->session->write('store.cart', []);
        }
        return $this->session->read('store.cart');
    }
}