{include file='..\tpl\Email\emailheader.tpl'}
	en_gb version
	You have successfully created a new reservation.
	<br/>
	<br/>
	
	Starting: {formatdate date=$StartDate key=reservation_email}<br/>
	Ending: {formatdate date=$EndDate key=reservation_email}<br/>
	Title: {$Title}<br/>
	Description: {$Description}<br/>
	
	{if count($RepeatDates) gt 0}
		<br/>
		Your reservation was repeated on the following dates:
		<br/>
	{/if}
	
	{foreach from=$RepeatDates item=date name=dates}
		{formatdate date=$date}<br/>
	{/foreach}
	
	<br/>
	<a href="{$ScriptUrl}{$ReservationUrl}">View this reservation</a> | <a href="{$ScriptUrl}">Log in to phpScheduleIt</a>
	
{include file='..\tpl\Email\emailfooter.tpl'}