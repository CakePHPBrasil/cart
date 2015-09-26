# Cart plugin para CakePHP 3

## Instalação

Você pode instalar este plugin na sua aplicação CakePHP 3 usando o [composer](http://getcomposer.org).

O caminho recomentado para instalar é:

```
composer require "webdevbr/cart:dev-master"
```

## Carregando o plugin

Adicione esta linha no fim do seu arquivo:

```
Plugin::load('Cart', ['routes'=>true]);
```