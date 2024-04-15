<div class="ct-css-node-header ct-node-options-active ct-style-set-selector" ng-repeat="selector in iframeScope.objectToArrayObject(iframeScope.customSelectors) | filter:{parent: '!'} track by selector.key" ng-show="!iframeScope.customSelectors[selector.key]['set_name']" ng-click="iframeScope.setCustomSelectorToEdit(selector.key);disableSelectorDetectorMode(); iframeScope.selectedStyleSet=null" ng-class="{'ct-active-selector':selectorToEdit==selector.key}">
	{{iframeScope.customSelectors[selector.key]['friendly_name'] || selector.key}}
	<div class="ct-node-options">
		<span class="ct-icon ct-visible-icon" ng-click="iframeScope.highlightSelector(true,selector.key,$event)" title="<br />
<b>Fatal error</b>:  Uncaught Error: Call to undefined function _e() in /Users/soyprayatna/Local Sites/luminr/app/public/wp-content/plugins/oxygen/component-framework/includes/selector-detector/includes/views/selectors-list.view.php:10
Stack trace:
#0 {main}
  thrown in <b>/Users/soyprayatna/Local Sites/luminr/app/public/wp-content/plugins/oxygen/component-framework/includes/selector-detector/includes/views/selectors-list.view.php</b> on line <b>10</b><br />
"></span>
</div>
</div>