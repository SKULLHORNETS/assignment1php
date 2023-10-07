<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HTML document for order page of Assignment 2 where we order pizza">
    <link rel="stylesheet" href="style.css">
    <title>Amine's Amazing Pizzas!</title>
    <meta name="robots" content="noindex, nofollow">
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- linking CSS -->
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
<header>
        <a href="index.html"><img src="./img/logo.png" alt="header logo"></a>
    <nav>
        <menu>
            <li><a href="index.html">Home</a></li>
            <li><a href="order.php">Order</a></li>
        </menu>
    </nav>
</header>
<h1>
    Make your order to us below!
</h1>
    <div>
    <!-- The ordering form -->
    <form>
        <br>
        <label for="first_name">First Name:</label>
        <input id="first_name" type="text" name="first_name" placeholder="Hugh">
        <br>
        <br>
        <label for="last_name">Last Name:</label>
        <input id="last_name" type="text" name="last_name" placeholder="Mungus">
        <br>
        <br>
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" placeholder="foo@bar.com">
        <br>
        <br>
        <label for="address">Address:</label>
        <input id="address" type="text" name="address" placeholder="123 Main Street">
        <br>
        <br>
        <label for="phone">Phone:</label>
        <input id="phone" type="tel" name="phone" pattern ="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="705-123-4567">
        <br>
        <br>
        <label>
        Pizza Type:
        </label>
        <input type="radio" name="pizza" value="cheese"> Cheese <input type="radio" name="pizza" value="veggie"> Veggie <input type="radio" name="pizza" value="Pepperoni"> Pepperoni
        <br>
        <br>
        <label>
        Toppings:
        </label>
        <input type="checkbox" name="topping" value="pepperoni"> Pepperoni <input type="checkbox" name="topping" value="mushrooms"> Mushrooms <input type="checkbox" name="topping" value="olives"> Olives
        <br>
        <br>
        <label>
         Pizza Size:
        </label>
                <select name="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
        <br>
        <br>
        <textarea name="message" placeholder="Delivery instructions:"></textarea>
        <br>
        <br>
        <button>
            Order Now!
        </button>
    </form>
    </div>
    <div>
    <!-- php to communicate order info -->
        <?php
        require ('database.php');
        if(isset($_POST) & !empty($_POST)){
            $first_name = $database->sanitize($_POST['first_name']);
            $last_name = $database->sanitize($_POST['last_name']);
            $email = $database->sanitize($_POST['email']);
            $address = $database->sanitize($_POST['address']);
            $phone = $database->sanitize($_POST['phone']);
            $pizza = $database->sanitize($_POST['pizza']);
            $topping = $database->sanitize($_POST['topping']);
            $size = $database->sanitize($_POST['size']);
            $message = $database->sanitize($_POST['message']);
            $res   = $database->create($first_name, $last_name, $email, $address, $phone, $pizza, $topping, $size, $message);
            if($res){
                echo "<p>Order received!</p>";
            }else{
                echo "<p>Could not receive your order.</p>";
            }
        }
        ?>
    </div>
    <footer>
        <h5>
            Amine's Amazing Pizzas! 2023.
        </h5>
    </footer>
    </body>
</html>