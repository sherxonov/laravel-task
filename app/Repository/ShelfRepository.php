<?php

namespace App\Repository;

use App\Models\Shelf;

class ShelfRepository implements \App\Interfaces\RepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function getAll()
    {
        $items = Shelf::all();

        return $items;
    }

    /**
     * @inheritdoc
     */
    public function findByAttribute($attibute, $value, $type = '=')
    {
        $item = Shelf::where($attibute, $type, $value)->get();

        return $item;
    }

    /**
     * @inheritdoc
     */
    public function findById($id)
    {
        return shelf::find($id);
    }
}
