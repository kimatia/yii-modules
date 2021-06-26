<?

//Configure the cart component:
return [
    //....
    'components' => [
        'cart' => [
            'class' => 'yii2mod\cart\Cart',
            // you can change default storage class as following:
            'storageClass' => [
                'class' => 'yii2mod\cart\storage\DatabaseStorage',
                // you can also override some properties 
                'deleteIfEmpty' => true
            ]
        ],
    ]
];


//Create the Product Model that implements an CartItemInterface:
class ProductModel extends ActiveRecord implements CartItemInterface
{

    public function getPrice()
    {
        return $this->price;
    }

    public function getLabel()
    {
        return $this->name;
    }

    public function getUniqueId()
    {
        return $this->id;
    }
}
//If you use the yii2mod\cart\storage\DatabaseStorage as storageClass then you need to apply the following migration:

php yii migrate --migrationPath=@vendor/yii2mod/yii2-cart/migrations

//Using the shopping cart
//Operations with the shopping cart are very straightforward when using a models that implement one of the two cart interfaces. The cart object can be accessed under \Yii::$app->cart and can be overridden in configuration if you need to customize it.

// access the cart from "cart" subcomponent
$cart = \Yii::$app->cart;

// Product is an AR model implementing CartProductInterface
$product = Product::findOne(1);

// add an item to the cart
$cart->add($product);

// returns the sum of all 'vat' attributes (or return values of getVat()) from all models in the cart.
$totalVat = $cart->getAttributeTotal('vat');

// clear the cart
$cart->clear();

//View Cart Items
//You can use the CartGrid widget for generate table with cart items as following:
 echo \yii2mod\cart\widgets\CartGrid::widget([
    // Some widget property maybe need to change. 
    'cartColumns' => [
        'id',
        'label',
        'price'
    ]
]); 

//Items in the cart

 //Products/items that are added to the cart are serialized/unserialized when saving and loading data from cart storage. If you are using Active Record models as products/discounts, make sure that you are omitting any unnecessary references from the serialized data to keep it compact.

 // get all items from the cart
$items = $cart->getItems();

// get only products
$items = $cart->getItems(Cart::ITEM_PRODUCT);

// loop through cart items
foreach ($items as $item) {
    // access any attribute/method from the model
    var_dump($item->getAttributes());

    // remove an item from the cart by its ID
    $cart->remove($item->uniqueId)
}

//Get Number of Products in Cart
// get count of all products in cart:
$items = $cart->getCount();

// get count of Specific Item Type:
$items = $cart->getCount(Cart::ITEM_PRODUCT);
?>