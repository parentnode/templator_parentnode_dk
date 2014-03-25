<? $page_title = "Markup Documentation" ?>
<? $body_class = "markup" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene">
	<h1>WTF Markup</h1>




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

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>
