<?
//Configure the cart component (default values are shown):

return [
    //...
    'components' => [
        //...
        'cart' => [
            'class' => 'devanych\cart\Cart',
            'storageClass' => 'devanych\cart\storage\SessionStorage',
            'calculatorClass' => 'devanych\cart\calculators\SimpleCalculator',
            'params' => [
                'key' => 'cart',
                'expire' => 604800,
                'productClass' => 'app\model\Product',
                'productFieldId' => 'id',
                'productFieldPrice' => 'price',
            ],
        ],
    ]
    //...
];

// In addition to devanych\cart\storage\SessionStorage, there is also devanych\cart\storage\CookieStorage and devanych\cart\storage\DbSessionStorage. It is possible to create your own storage, you need to implement the interface devanych\cart\storage\StorageInterface.

// DbSessionStorage uses SessionStorage for unauthorized users and database for authorized.

//     If you use the devanych\cart\storage\DbSessionStorage as storageClass then you need to apply the following migration:

// php yii migrate --migrationPath=@vendor/devanych/yii2-cart/migrations

// devanych\cart\calculators\SimpleCalculator produces the usual calculation of the total cost and total quantity of items in the cart. If you need to make a calculation with discounts or something else, you can create your own calculator by implementing the interface devanych\cart\calculators\CalculatorInterface.

// Setting up the params array:

//     key - For Session and Cookie.

//     expire - Cookie life time.

//     productClass - Product class is an ActiveRecord model.

//     productFieldId - Name of the product model id field.

//     productFieldPrice - Name of the product model price field.

//Supporting multiple shopping carts to same website:

//...
'cart' => [
    'class' => 'devanych\cart\Cart',
    'storageClass' => 'devanych\cart\storage\SessionStorage',
    'calculatorClass' => 'devanych\cart\calculators\SimpleCalculator',
    'params' => [
        'key' => 'cart',
        'expire' => 604800,
        'productClass' => 'app\model\Product',
        'productFieldId' => 'id',
        'productFieldPrice' => 'price',
    ],
],
'favorite' => [
    'class' => 'devanych\cart\Cart',
    'storageClass' => 'devanych\cart\storage\DbSessionStorage',
    'calculatorClass' => 'devanych\cart\calculators\SimpleCalculator',
    'params' => [
        'key' => 'favorite',
        'expire' => 604800,
        'productClass' => 'app\models\Product',
        'productFieldId' => 'id',
        'productFieldPrice' => 'price',
    ],
],
//...
//usage

// Product is an AR model
$product = Product::findOne(1);

// Get component of the cart
$cart = \Yii::$app->cart;

// Add an item to the cart
$cart->add($product, $quantity);

// Adding item quantity in the cart
$cart->plus($product->id, $quantity);

// Change item quantity in the cart
$cart->change($product->id, $quantity);

// Removes an items from the cart
$cart->remove($product->id);

// Removes all items from the cart
$cart->clear();

// Get all items from the cart
$cart->getItems();

// Get an item from the cart
$cart->getItem($product->id);

// Get ids array all items from the cart
$cart->getItemIds();

// Get total cost all items from the cart
$cart->getTotalCost();

// Get total count all items from the cart
$cart->getTotalCount();

//Using cart items:
// Product is an AR model
$product = Product::findOne(1);

// Get component of the cart
$cart = \Yii::$app->cart;

// Get an item from the cart
$item = $cart->getItem($product->id);

// Get the id of the item
$item->getId();

// Get the price of the item
$item->getPrice();

// Get the product, AR model
$item->getProduct();

// Get the cost of the item
$item->getCost();

// Get the quantity of the item
$item->getQuantity();

// Set the quantity of the item
$item->setQuantity($quantity);

//By using method getProduct(), you have access to all the properties and methods of the product.
$product = $item->getProduct();

echo $product->name;
?>