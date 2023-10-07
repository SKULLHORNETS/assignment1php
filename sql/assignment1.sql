CREATE TABLE pizzaOrders (
  id INT PRIMARY KEY AUTO_INCREMENT,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  pizza VARCHAR(255) NOT NULL,
  toppings VARCHAR(255) NOT NULL,
  size VARCHAR(255) NOT NULL,
  message TEXT,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO pizzaOrders (first_name, last_name, email, address, phone, pizza, toppings, size, message)
VALUES 
('John', 'Doe', 'john.doe@example.com', '123 Main St', '555-1234', 'Pepperoni', 'Mushrooms, Olives', 'Large', 'Please deliver to the back door.');
