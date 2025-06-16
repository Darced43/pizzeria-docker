<?php

namespace app\src;
use InvalidArgumentException;

class Order
{
    private string $order_id;
    public array $items = [];
    public bool $done = false;

    public function __construct()
    {
        $this->order_id = substr(md5(uniqid()), 0, 15);
    }

    public function getOrderId(): string
    {
        return $this->order_id;
    }

    public function setOrderId(string $order_id): void
    {
        $this->order_id = $order_id;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): void
    {
        foreach ($items as $item){
            if(!is_int($item) || $item < 1 || $item > 5000){
                throw new InvalidArgumentException('Element invalid value');
            }
        }
        $this->items = $items;
    }

    public function isDone(): bool
    {
        return $this->done;
    }

    public function setDone(bool $done): void
    {
        $this->done = $done;
    }
}