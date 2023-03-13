<?php

class CheckoutController
{
    public static function prepare_variables(array $params): array
    {
        $pdo = connection();
        $auth = new Auth($pdo);
        $user = $auth->user_exists();

        if (isset($_POST['action']) == 'submit_order') {
            $session_id = session_id();

            $cart = unserialize($_SESSION['cart']);
            $db_cart = new DatabaseCart($pdo);
            $db_cart->add_cart($cart);

            $user_id = ($user) ? $user->get_id() : null;

            $order = new Order(
                $_POST['first_name'],
                $_POST['last_name'],
                $_POST['phone'],
                $_POST['email'],
                $_POST['address'],
                $user_id,
                $session_id
            );
            $db_order = new DatabaseOrder($pdo);
            $db_order->add_order($order);

            unset($_SESSION['cart']);
            session_regenerate_id();
            header('Location: /checkout/?status=ok');
            die();
        }

        $params['status'] = $_GET['status'] ?? '';
        $params['title'] = 'Checkout';
        $params['user'] = $user;

        return $params;
    }
}
