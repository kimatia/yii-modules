<?php

use alcea\yii2PrismSyntaxHighlighter\PrismSyntaxHighlighter;
 
PrismSyntaxHighlighter::widget([
    'theme' => PrismSyntaxHighlighter::THEME_DEFAULT,
    'languages' => ['php', 'php-extras', 'css'],
    'plugins' => ['copy-to-clipboard']
]);

$md = <<<MD_FILE
'''js
$(document).on('focusout', 'input[name="test"]', function(event) {
	event.preventDefault();
	// do ...
});
'''
MD_FILE;

echo Markdown::process($md, 'gfm-comment');