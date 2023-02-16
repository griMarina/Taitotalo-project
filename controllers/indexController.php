<?php

class IndexController
{
    public static function prepare_variables(array $params): array
    {
        $pdo = connection();

        $params['title'] = 'Home';
        $product = new DatabaseProduct($pdo);
        $params['products'] = $product->get_products(9);

        return $params;
    }
}
