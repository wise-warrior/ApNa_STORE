<?php
    // session_destroy() erases all items of the cart so 
    // do session_destroy() and refresh : cart is empty
    // then again erase session_destroy() and refresh : cart is ready to ADD :)
    session_start(); 
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (isset($_POST['add_cart']))
        {
            if (isset($_SESSION['cart']))
            {
                $items = array_column($_SESSION['cart'] , 'name');
                if (in_array($_POST['name'] , $items))
                {
                    echo "<script>
                        alert('Item ALREADY ADDED :)');
                        window.location.href = 'index.php';
                    </script>";

                }
                else
                {
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array('name' => $_POST['name'] , 'price' => $_POST['price'] , 'qty' => 1);
                    echo "<script>
                        alert('Item ADDED :)');
                        window.location.href = 'index.php';
                    </script>";
                }
            }
            else
            {
                $_SESSION['cart'][0] = array('name' => $_POST['name'] , 'price' => $_POST['price'] , 'qty' => 1);
                echo "<script>
                    alert('Item ADDED :)');
                    window.location.href = 'index.php';
                </script>";
            }
        }
        if (isset($_POST['remove']))
        {
            foreach ($_SESSION['cart'] as $key => $value)
            {
                if ($value['name'] == $_POST['name'])
                {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    echo "<script>
                        alert('Item ReMoved');
                        window.location.href = 'mycart.php';
                    </script>";
                }
            }
        }
        if (isset($_POST['mod_qty']))
        {
            foreach ($_SESSION['cart'] as $key => $value)
            {
                if ($value['name'] == $_POST['name'])
                {
                    $_SESSION['cart'][$key]['qty'] = $_POST['mod_qty'];
                    echo "<script>
                        window.location.href = 'mycart.php';
                    </script>";
                }
            }
        }
    }
?>