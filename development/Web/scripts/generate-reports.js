function GenerateReports(reportOptions)
{
	var opts = reportOptions;

	var elements = {
		invitationAction: $('.participationAction'),
		referenceNumber: $("#referenceNumber"),
		indicator: $('#indicator')
	};

	GenerateReports.prototype.init = function()
	{
		$('#selectDiv input').click(function()
		{
			$('div.select-toggle').hide();

			if ($(this).attr('id') == 'results_list')
			{
				$('#listOfDiv').show();
			}
			else
			{
				$('#aggregateDiv').show();
			}
		});

		$("#user_filter").userAutoComplete(opts.userAutocompleteUrl, function (ui) {
			$('#user_id').val(ui.item.value);
		});

		$("#group_filter").userAutoComplete(opts.groupAutocompleteUrl);

		$('.dateinput').click(function () {
			$('#range_within').attr('checked', 'checked');
		});
	}

}