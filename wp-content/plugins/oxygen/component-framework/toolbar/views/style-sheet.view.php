<div class="oxygen-sidebar-code-editor-wrap oxygen-sidebar-stylesheet-editor-wrap">
  <script>if (typeof($scope)!=="undefined") {
		window.currentCMWrap = new window.OxyCM.Compartment()
		window.currentCMTheme = new window.OxyCM.Compartment()
		window.currentCMEditor = new OxyCM.EditorView({
			state: OxyCM.EditorState.create({
				extensions: [
					OxyCM.basicSetup,
          			OxyCM.modules.keymap.of([OxyCM.modules.indentWithTab]),
					OxyCM.modules.css(),
					window.currentCMWrap.of($scope.iframeScope.globalCodeMirrorWrap === "true" ? [OxyCM.EditorView.lineWrapping, OxyCM.modules.search()] : OxyCM.modules.search()),
          			window.currentCMTheme.of(OxyCM.modules[$scope.iframeScope.globalCodeMirrorTheme]),
				],
				doc: $scope.iframeScope.stylesheetToEdit['css']
			}),
			parent: document.getElementById("oxy-style-sheets-cm6")
		})
		window.currentCMEditor.contentDOM.addEventListener('blur', function(){
			$scope.iframeScope.updateStylesheetCSS(window.currentCMEditor.state.doc.toString());
		})
	}</script>
  <div id="oxy-style-sheets-cm6" class="oxy-code-cm6"></div>
  <div class="oxygen-code-error-container"></div>
</div>

<div class="oxygen-control-row oxygen-control-row-bottom-bar oxygen-control-row-bottom-bar-code-editor">
  <br>
<b>Fatal error</b>:  Uncaught Error: Call to a member function codemirror_theme_chooser() on null in /Users/soyprayatna/Local Sites/luminr/app/public/wp-content/plugins/oxygen/component-framework/toolbar/views/style-sheet.view.php:30
Stack trace:
#0 {main}
  thrown in <b>/Users/soyprayatna/Local Sites/luminr/app/public/wp-content/plugins/oxygen/component-framework/toolbar/views/style-sheet.view.php</b> on line <b>30</b><br>
</div>