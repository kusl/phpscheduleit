{include file='header.tpl'}

<select name="type_id">
    {object_html_options options=$Schedules key="GetId" label="GetName"}
</select>

<table>
{section loop=$Resources name=test}
	<tr>
		<td>{$Resources[test]->GetName()}</td>
	</tr>
{/section}

{foreach from=$DisplayDates item=date name=date_loop}
	<tr>
		<td>{$date->Format('Y-m-d H:i:s')}</td>
	</tr>
	{foreach from=$Resources item=resource name=resource_loop}
		<tr>
			<td>{$resource->GetName()}</td>
		</tr>
	{/foreach}
{/foreach}

<table>

{include file='footer.tpl'}