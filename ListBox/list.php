<?
Once the extension is installed, simply use it in your code by :

	use edwinhaq\simpleduallistbox\SimpleDualListbox;

	// ... Form definition

	$items = ['1' => 'Item1', '2' => 'Item2', '3' => 'Item3',];

	$options = [];
	$options['size'] = 10;
	$options['style'] = 'width:200px';
	$options['options'] = [];		// If 'title' not defined SimpleDualListbox defines it for each option item

	$clientOptions = [];
	$clientOptions['availableListboxPosition'] = "left"; 	// options: left (default), right
	$clientOptions['availableListSort'] = SimpleDualListbox::$SORT_NUM_ASC;
	$clientOptions['upButtonText'] = "UP";
	$clientOptions['addButtonText'] = "ADD";
	$clientOptions['addAllButtonText'] = "ADDALL";
	$clientOptions['remAllButtonText'] = "REMALL";
	$clientOptions['remButtonText'] = "REM";
	$clientOptions['downButtonText'] =  "DOWN";
	$clientOptions['selectedLabel'] =  "Selected";
	$clientOptions['availableLabel'] = "Available";

	$widgetOptions = [];
	$widgetOptions['label'] = 'InputLabel'; // Ignored when model is used
	$widgetOptions['name'] = 'InputName'; // Ignored when model is used
	$widgetOptions['hint'] = 'Hint'; // Ignored when model is used
	$widgetOptions['selection'] = [1,2]; // Ignored when model is used
	$widgetOptions['id'] = 'Input ID'; // Optional
	$widgetOptions['template'] = '{label}{listbox}{hint}'; // Used to generate element, by default '{label}{listbox}{hint}'
	$widgetOptions['useGroupDiv'] = true; // true by default. Wrap element in a div tag: <div class="form-group"> ... </div>,
	$widgetOptions['items'] = $items;
	$widgetOptions['options'] = $options;
	$widgetOptions['clientOptions'] = $clientOptions;

	/*
	* With model
	*/
	$model->attribute = [1,2];

	$field = $form->field($model, 'attribute')->widget(SimpleDualListbox::className(), $widgetOptions);

	/*
	* Without model
	*/

	echo SimpleDualListbox::widget($widgetOptions);

	// ... End form definition