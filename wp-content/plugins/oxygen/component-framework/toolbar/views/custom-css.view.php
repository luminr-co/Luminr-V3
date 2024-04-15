<div class="oxygen-sidebar-code-editor-wrap">
  <div class="fake-code-mirror cm-s-default">
  	<pre class="CodeMirror-line"><span ng-show="iframeScope.isEditing('id')" style="padding-right: 0.1px;"><span class="cm-builtin">#{{iframeScope.component.options[iframeScope.component.active.id]['selector']}}{{iframeScope.currentState !== "original" ? ":"+iframeScope.currentState : ""}}</span>{</span><span ng-show="iframeScope.isEditing('custom-selector')" style="padding-right: 0.1px;"><span class="cm-builtin">{{iframeScope.selectorToEdit}}{{iframeScope.currentState !== "original" ? ":"+iframeScope.currentState : ""}}</span>{</span></pre>
  </div>
  <br>
<b>Fatal error</b>:  Uncaught Error: Call to a member function codemirror6_script() on null in /Users/soyprayatna/Local Sites/luminr/app/public/wp-content/plugins/oxygen/component-framework/toolbar/views/custom-css.view.php:7
Stack trace:
#0 {main}
  thrown in <b>/Users/soyprayatna/Local Sites/luminr/app/public/wp-content/plugins/oxygen/component-framework/toolbar/views/custom-css.view.php</b> on line <b>7</b><br>
</div>