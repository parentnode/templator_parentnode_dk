<div class="scene">
	<h1>WTF Markup</h1>



<form action="" method="" class="i:standardForm labelstyle:inject">

		<h3>Form elements</h3>
		<p>Some description to what the form does.</p>
		<fieldset>
			<div class="field string">
				<label for="input_string">String</label>
				<input type="text" name="string" id="input_string" />
				<div class="help">
					<div class="hint">hint message</div>
					<div class="error">error message</div>
				</div>
			</div>
			
			<div class="field string required"><label for="input_string_required">String required</label><input type="text" name="string_required" id="input_string_required" /><div class="help"><div class="hint">hint message</div><div class="error">error message</div></div></div>
			<div class="field text"><label for="input_text">Test</label><textarea name="text" id="input_text"></textarea><div class="help"><div class="hint">hint message</div><div class="error">error message</div></div></div>			<div class="field text required"><label for="input_text_required">Test required</label><textarea name="text_required" id="input_text_required"></textarea><div class="help"><div class="hint">hint message</div><div class="error">error message</div></div></div>		</fieldset>

		<ul class="actions">
			<li class="save"><input type="submit" value="Submit" class="button primary" /></li>
			<li class="cancel"><a href="#" class="button">Cancel</a></li>
		</ul>

		<fieldset>
			<div class="field select"><label for="input_select">Select</label><select name="select" id="input_select"><option value="0" selected="selected">test</option></select><div class="help"><div class="hint">hint message</div><div class="error">error message</div></div></div>			<div class="field select required"><label for="input_select_required">Select required</label><select name="select_required" id="input_select_required"><option value="0" selected="selected">test</option></select><div class="help"><div class="hint">hint message</div><div class="error">error message</div></div></div>
			<div class="field checkbox"><input type="hidden" name="checkbox" value="0" /><input type="checkbox" name="checkbox" id="input_checkbox" /><label for="input_checkbox">Checkbox</label><div class="help"><div class="hint">hint message</div><div class="error">error message</div></div></div>			<div class="field checkbox required"><input type="hidden" name="checkbox_required" value="0" /><input type="checkbox" name="checkbox_required" id="input_checkbox_required" /><label for="input_checkbox_required">Checkbox required</label><div class="help"><div class="hint">hint message</div><div class="error">error message</div></div></div>		</fieldset>

		<ul class="actions">
			<li class="save"><input type="submit" value="Submit" class="button primary" /></li>
			<li class="cancel"><a href="#" class="button">Cancel</a></li>
		</ul>

		<fieldset>
			<h3>TODO: radiobuttons
								</fieldset>

		<ul class="actions">
			<li class="save"><input type="submit" value="Submit" class="button primary" /></li>
			<li class="cancel"><a href="#" class="button">Cancel</a></li>
		</ul>

	</form>


	<code>
	&lt;form name=&quot;test_form&quot; action=&quot;action&quot; method=&quot;get&quot;&gt;
		&lt;fieldset&gt;

			&lt;div class=&quot;field string required&quot;&gt;
				&lt;label for=&quot;input_id&quot;&gt;String, required&lt;/label&gt;
				&lt;input type=&quot;text&quot; name=&quot;string_required&quot; id=&quot;input_id&quot; /&gt;
			&lt;/div&gt;

		&lt;/fieldset&gt;

		&lt;ul class=&quot;actions&quot;&gt;
			&lt;li&gt;&lt;input type=&quot;submit&quot; value=&quot;submit, name&quot; name=&quot;submit_name&quot; class=&quot;button&quot; /&gt;&lt;/li&gt;
		&lt;/ul&gt;

	&lt;/form&gt;
	</code>

</div>
