<?php

namespace App\Classes;

class Cart
{
    public $items = NULL;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
      if($oldCart){
        $this->items = $oldCart->items;
        $this->totalQty = $oldCart->totalQty;
        $this->totalPrice = $oldCart->totalPrice;
      }
    }
    public function add($item, $id){
      $storedItem = [
        'qty' => 0,
        'id' => $item->id,
        'prod_url' => $item->url,
        'code_cat' => $item->category->code,
        'url_cat' => $item->category->url,
        'name' => $item->name,
        'cost' => $item->price,
        'price' => $item->price,
        'img' => $item->cardImage->path
      ];
      if($this->items){
        if(array_key_exists($id, $this->items)){
          $storedItem = $this->items[$id];
        }
      }
        $storedItem['qty']++;
        $storedItem['cost'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function increase($id){
      $this->items[$id]['qty']++;
      $this->items[$id]['cost'] += $this->items[$id]['price'];
      $this->totalQty++;
      $this->totalPrice += $this->items[$id]['price'];
    }

    public function reduse($id){
      $this->items[$id]['name'];
      $this->items[$id]['qty']--;
      $this->items[$id]['cost'] -= $this->items[$id]['price'];
      $this->totalQty--;
      $this->totalPrice -= $this->items[$id]['price'];

      if($this->items[$id]['qty'] <= 0){
        unset($this->items[$id]);
      }
    }

    public function delete($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['cost'];
        unset($this->items[$id]);
    }
}
