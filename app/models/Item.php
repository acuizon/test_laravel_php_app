<?php

class Item extends Eloquent {
  protected $fillable = array('name', 'description', 'stock');
}