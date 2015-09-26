<?php

namespace Cart\Controller;

use Cart\Controller\AppController;
use Cart\Model\Table\Cart;

class CartController extends AppController
{

    protected $simula_banco = [
        1=>[
            'id'=>1,
            'title'=>'Celular MotoG 3',
            'qtd'=>1,
            'value'=>799.99
        ],
        2=>[
            'id'=>2,
            'title'=>'Game Playstation 5',
            'qtd'=>1,
            'value'=>4599.99
        ],
        3=>[
            'id'=>3,
            'title'=>'Notebook Lenovo G400s',
            'qtd'=>1,
            'value'=>1499.99
        ]
    ];

    public function index()
    {
        debug(Cart::factory()->all());

        foreach ($this->simula_banco as $v){
            echo '<a href="/carrinho/add/'.$v['id'].'">Adicionar '.$v['title'].'</a> - ';
            echo '<a href="/carrinho/delete/'.$v['id'].'">remover '.$v['title'].'</a>';
            echo '<hr>';
        }
        exit;
    }

    public function add($id = null)
    {
        if (!isset($this->simula_banco[$id]))
            throw new NotFoundException("Produto não encontrado");
        Cart::factory()->add($this->simula_banco[$id]);
        return $this->redirect(['action'=>'index']);
    }

    public function delete($id = null)
    {
        if (!isset($this->simula_banco[$id]))
            throw new NotFoundException("Produto não encontrado");
        Cart::factory()->delete($id);
        return $this->redirect(['action'=>'index']);
    }
}