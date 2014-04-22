<div class="scene">
	<h1>Form</h1>



<code>&lt;form action=&quot;&quot; method=&quot;&quot; class=&quot;i:standardForm labelstyle:inject&quot;&gt;
	
	&lt;fieldset&gt;
		&amp;lt;div class=&amp;quot;field string&amp;quot;&amp;gt;&amp;lt;/div&amp;gt;
	&lt;/fieldset&gt;

&lt;/form&gt;</code>


<h2>String</h2>
	
<code>&lt;div class=&quot;field string required&quot;&gt;

	&lt;label for=&quot;input_string_required&quot;&gt;String required&lt;/label&gt;
	&lt;input type=&quot;text&quot; name=&quot;string_required&quot; id=&quot;input_string_required&quot; /&gt;
	
	&lt;div class=&quot;help&quot;&gt;
		&lt;div class=&quot;hint&quot;&gt;hint message&lt;/div&gt;
		&lt;div class=&quot;error&quot;&gt;error message&lt;/div&gt;
	&lt;/div&gt;

&lt;/div&gt;</code>
			
<h2>Input text field</h2>

<code>&lt;div class=&quot;field text&quot;&gt;
	&lt;label for=&quot;input_text&quot;&gt;Test&lt;/label&gt;
	&lt;textarea name=&quot;text&quot; id=&quot;input_text&quot;&gt;&lt;/textarea&gt;
	&lt;div class=&quot;help&quot;&gt;
		&lt;div class=&quot;hint&quot;&gt;hint message&lt;/div&gt;
		&lt;div class=&quot;error&quot;&gt;error message&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code>

<h2>Text field required</h2>

<code>&lt;div class=&quot;field text required&quot;&gt;
	&lt;label for=&quot;input_text_required&quot;&gt;Test required&lt;/label&gt;
	&lt;textarea name=&quot;text_required&quot; id=&quot;input_text_required&quot;&gt;&lt;/textarea&gt;
	&lt;div class=&quot;help&quot;&gt;
		&lt;div class=&quot;hint&quot;&gt;hint message&lt;/div&gt;
		&lt;div class=&quot;error&quot;&gt;error message&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code>

<h2>Actions</h2>

<ul class="actions">
	<li class="save"><input type="submit" value="Submit" class="button primary" /></li>
	<li class="cancel"><a href="#" class="button">Cancel</a></li>
</ul>

<div class="field select">
	<label for="input_select">Select</label>
	<select name="select" id="input_select">
		<option value="0" selected="selected">test</option>

	</select>
	<div class="help">
		<div class="hint">hint message</div>
		<div class="error">error message</div>
	</div>
</div>			

<div class="field select required">
	<label for="input_select_required">Select required</label>
	<select name="select_required" id="input_select_required">
		<option value="0" selected="selected">test</option>
	</select>
	<div class="help">
		<div class="hint">hint message</div>
		<div class="error">error message</div>
	</div>
</div>

<div class="field checkbox">
	<input type="hidden" name="checkbox" value="0" />
	<input type="checkbox" name="checkbox" id="input_checkbox" />
	<label for="input_checkbox">Checkbox</label>

	<div class="help">
		<div class="hint">hint message</div>
		<div class="error">error message</div>
	</div>
</div>			

<div class="field checkbox required">
	<input type="hidden" name="checkbox_required" value="0" />
	<input type="checkbox" name="checkbox_required" id="input_checkbox_required" />
	<label for="input_checkbox_required">Checkbox required</label>
	<div class="help">
		<div class="hint">hint message</div>
		<div class="error">error message</div>
	</div>
</div>

<ul class="actions">
	<li class="save"><input type="submit" value="Submit" class="button primary" /></li>
	<li class="cancel"><a href="#" class="button">Cancel</a></li>
</ul>

<fieldset>
	<h3>TODO: radiobuttons</h3>
</fieldset>

<ul class="actions">
	<li class="save"><input type="submit" value="Submit" class="button primary" /></li>
	<li class="cancel"><a href="#" class="button">Cancel</a></li>
</ul>


</div>
