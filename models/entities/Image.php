<?php

class Image
{
    public function __construct(
        private int $id,
        private string $title,
        private int $product_id
    ) {
    }
}
