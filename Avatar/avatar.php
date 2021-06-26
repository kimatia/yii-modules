<?
//Add to common/config/main.php or config/web.php

'components' => [
    ...
    'avatar' => [
        'class' => \zertex\avatar_generator\AvatarGenerator::class,
        'images_folder' => 'path_to_image_files',
        'images_url' => 'url_to_image_files',
        'size_width' => 300,            // default: 300
        'font' => 'path_to_ttf_font',   // default: Play-Bold // may use aliases
        'font_size' => 200,             // default: 200
        'salt' => 'random_salt',        // salt for image file names
        'texture' => ['sun', 'rain'],   // texture name
        'text_over_image' => true,      // draw text over image (for avatar from file)
        'texture_over_image' => true,   // draw texture over image (for avatar from file)
    ],
],


//functions

    // images_folder - required Folder for images
    // images_url - required Url to folder with images
    // size_width - Origin image side width. Default: 300
    // font - Path to TTF font file. Yii2 aliases ready. Default: Play-Bold.ttf
    // font_size - Font size. Default: 300
    // salt - Random garbage for images file name
    // texture - Texture name: sun, rain. Default: empty
    // text_over_image - Draw text over image. For avatar created from file. Default: true
    // texture_over_image - Draw texture over image. For avatar created from file. Default: true

//using

Yii::$app->avatar->show('username', [width], [file or url], [new_file_name]);

//Simple use with default image resolution
Yii::$app->avatar->show('John Smith');
//Image with 150 px sides
Yii::$app->avatar->show('John Smith', 150);
//Image for existing file with default image resolution
Yii::$app->avatar->show('John Smith', null, '/path/JM_Avatar.jpg')
?>