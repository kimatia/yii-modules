<?
// and run composer update. After installation add the following inside your view (change to suit your needs):

<?= \bizley\ajaxdropdown\AjaxDropdown::widget([
  'model' => $model,
  'attribute' => 'attribute',
  'source' => \yii\helpers\Url::to(['source']),
]); ?>

<!-- This is just a basic widget configuration. You can find all the options described in the AjaxDropDown.php and docs files.
Full widget structure with possible options -->

<div id="[WIDGET_ID]" class="ajaxDropDownWidget {mainClass}" {style="{mainStyle}"}>
    <div class="ajaxDropDown {groupClass}" {style="{groupStyle}"}>
        <input {type="text" name="ajaxDropDownInput" value="" class="{inputClass}" {style="{inputStyle}"} inputOptions}>
        <input type="hidden" value="[SELECTED_ID]" name="[ATTRIBUTE_NAME]" class="singleResult">
        <div class="{buttonsClass}" {style="{buttonsStyle}"}>
            {<button type="button" {extraButtonOptions}>{extraButtonLabel}</button>}
            <button data-page="[DATA_PAGE]" data-toggle="dropdown" type="button" class="ajaxDropDownToggle {buttonClass}" {style="{buttonStyle}"}>
                {buttonLabel}
            </button>
            <button type="button" class="ajaxDropDownSingleRemove {removeSingleClass}" {style="{removeSingleStyle}"}>
                {removeSingleLabel}
            </button>
            <ul role="menu" class="ajaxDropDownMenu {resultsClass}" {style="{resultsStyle}"}>
                <li class="dropdown-header {headerClass}" {style="{headerStyle}"}>
                    {pagerBegin}
                        <span class="ajaxDropDownPageNumber">[CURRENT_PAGE_NUMBER]</span>/<span class="ajaxDropDownTotalPages">[TOTAL_PAGES_NUMBER]</span>
                    {pagerEnd}{local.allRecords|local.recordsContaining}
                </li>
                <li class="divider"></li>
                <li class="ajaxDropDownLoading {loadingClass}" {style="{loadingStyle}"}>{progressBar}</li>
                <li class="dropdown-header {errorClass}" {style="{errorStyle}"}>{local.error}</li>
                <li class="dropdown-header {noRecordsClass}" {style="{noRecordsStyle}"}>{local.noRecords}</li>
                <li class="ajaxDropDownPages ajaxDropDownPage[PAGE_NUMBER] ajaxDropDownRecord[RECORD_ID] {recordClass}" {style="{recordStyle}"}>
                    <a data-id="[RECORD_ID]" class="ajaxDropDownResult" href="#">{markBegin}[RECORD_VALUE]{markEnd}</a>
                </li>
                <li class="divider ajaxDropDownInfo"></li>
                <li class="ajaxDropDownInfo {switchClass}" {style="{switchStyle}"}>
                    <a class="ajaxDropDownPrev {previousClass}" {style="{previousStyle}"} href="#">
                        {previousBegin}{local.previous}{previousEnd}
                    </a>
                    <a class="ajaxDropDownNext {nextClass}" {style="{nextStyle}"} href="#">
                        {nextBegin}{local.next}{nextEnd}
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <ul class="ajaxDropDownResults {selectedClass}" {style="{selectedStyle}"}>
        <li class="ajaxDropDownSelected[SELECTED_ID] {resultClass}" {style="{resultStyle}"}>
            <a class="ajaxDropDownRemove {removeClass}" {style="{removeStyle}"} href="#" data-id="[SELECTED_ID]">
                {removeLabel}
            </a>{additionalCode}{markBegin}[SELECTED_VALUE]{markEnd}<input type="hidden" value="[SELECTED_ID]" name="[ATTRIBUTE_NAME]">
        </li>
    </ul>
</div>

<!-- Names in curly brackets are options and can be set as widget parameters. Names in square brackets are automatically set widget data.
AJAX data source -->

<!-- Below is the structure required by this widget:
 -->
 <?
[
  'data' => [
    [
      'id' => RECORD_ID,
      'mark' => RECORD_EMPHASIS,
      'value' => RECORD_VALUE
    ],
    // ...
  ],
  'page' => CURRENT_PAGE_NUMBER,
  'total' => TOTAL_PAGES_NUMBER
]

// Preselected and post-validate data with PHP.

// In case you want to display some records as already selected or simply just want to keep the selected data after validation you need to prepare the 'data' parameter which is the array almost identical to the source one.

[
  [
    'id' => RECORD_ID,
    'mark' => RECORD_EMPHASIS,
    'value' => RECORD_VALUE
  ],
  // ...
]
