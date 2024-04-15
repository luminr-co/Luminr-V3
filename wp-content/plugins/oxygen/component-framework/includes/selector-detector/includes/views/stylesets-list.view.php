<script type="text/ng-template" id="styleSetMenu">
	<span class="ct-icon ct-delete-icon"
		ng-if="set.key !== 'Uncategorized Custom Selectors'"
		ng-click="$parent.deleteStyleSet(set.key)">
	<\/span>

</script>

<script type="text/ng-template" id="styleSelectorMenu">
	<span class="ct-icon ct-visible-icon"
	ng-click="iframeScope.highlightSelector(true,selector.key,$event)"
	title="<br />
<b>Fatal error:  Uncaught Error: Call to undefined function _e() in /Users/soyprayatna/Local Sites/luminr/app/public/wp-content/plugins/oxygen/component-framework/includes/selector-detector/includes/views/stylesets-list.view.php:12
Stack trace:
#0 {main}
  thrown in <b>/Users/soyprayatna/Local Sites/luminr/app/public/wp-content/plugins/oxygen/component-framework/includes/selector-detector/includes/views/stylesets-list.view.php on line <b>12<br />
</script>