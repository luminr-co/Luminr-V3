<div ng-repeat="set in iframeScope.objectToArrayObject(iframeScope.styleSets) | filter : { parent: <br />
<b>Warning</b>:  Undefined variable $parent in <b>/Users/soyprayatna/Local Sites/luminr/app/public/wp-content/plugins/oxygen/component-framework/includes/selector-detector/includes/views/uncategorized-list.view.php</b> on line <b>1</b><br />
'!' } track by set.key">

		<div class="ct-css-node-header ct-node-options-active ct-style-set-node ct-css-node-stylesheet " ng-dblclick="expandedStyleSets[set.key]=!expandedStyleSets[set.key]" ng-click="iframeScope.currentClass = false; iframeScope.setStyleSetActive(); iframeScope.stylesheetToEdit = false; iframeScope.selectedStyleSet = set.key; iframeScope.populateSelectorFolderDropdown();" ng-class="{'ct-css-node-hilite': iframeScope.selectedNodeType == 'styleset' && iframeScope.selectedStyleSet == set.key, 'ct-active-style-set':selectorToEdit==selector,'ct-style-set-expanded':iframeScope.expandedStyleSets[set.key], 'ct-css-node-folder-menu': iframeScope.selectorFolderMenuOpen === 'set '+set.key}">
			<span class="ct-icon ct-dom-parent-icon"></span>
			{{set.key}}
			<div class="ct-node-options">
				<ng-include src="'styleSetMenu'"></ng-include>
			</div>
			<div class="ct-expand-butt" ng-show="(iframeScope.objectToArrayObject(iframeScope.customSelectors) | filter: {set_name: set.key}).length > 0" ng-click="iframeScope.expandedStyleSets[set.key]=!iframeScope.expandedStyleSets[set.key]"><span class="ct-icon"></span></div>
		</div>
		<div class="ct-style-set-child-selector" ng-show="iframeScope.expandedStyleSets[set.key]">
			<div class="ct-css-node-header ct-node-options-active" ng-repeat="selector in iframeScope.objectToArrayObject(iframeScope.customSelectors) | filter: {set_name: set.key} track by selector.key" ng-click="iframeScope.setCustomSelectorToEdit(selector.key);disableSelectorDetectorMode();iframeScope.selectedStyleSet = set.key" ng-class="{'ct-css-node-hilite': iframeScope.selectedNodeType == 'selector' && iframeScope.selectorToEdit == selector.key, 'ct-active-selector':selectorToEdit==selector.key, 'ct-css-node-folder-menu': iframeScope.selectorFolderMenuOpen === 'selector '+selector.key}">
				{{iframeScope.customSelectors[selector.key]['friendly_name'] || selector.key || 'Empty selector'}}
				<div class="ct-node-options">
					<ng-include src="'styleSelectorMenu'"></ng-include>
				</div>
			</div>
		</div>
	</div>