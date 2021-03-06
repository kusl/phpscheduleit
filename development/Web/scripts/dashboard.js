function Dashboard(opts)
{
	var options = opts;

	Dashboard.prototype.init = function ()
	{
		function setIcon(dash, targetIcon)
		{
			var iconSpan = dash.find('.dashboardHeader>a>span');
			iconSpan.removeClass('glyphicon-chevron-up');
			iconSpan.removeClass('glyphicon-chevron-down');
			iconSpan.addClass(targetIcon);
		}

		$(".dashboard").each(function (i, v)
		{
			var dash = $(v);
			var id = dash.attr('id');
			var visibility = readCookie(id);
			if (visibility == '0')
			{
				dash.find('.dashboardContents').hide();
				setIcon(dash, 'glyphicon-chevron-down');
			}
			else
			{
				setIcon(dash, 'glyphicon-chevron-up');
			}

			dash.find('.dashboardHeader a').click(function (e)
			{
				e.preventDefault();
				var dashboard = dash.find('.dashboardContents');
				var id = dashboard.parent().attr('id');
				if (dashboard.css('display') == 'none')
				{
					createCookie(id, '1', 30);
					dashboard.show();
					setIcon(dash, 'glyphicon-chevron-up');
				}
				else
				{
					createCookie(id, '0', 30);
					dashboard.hide();
					setIcon(dash, 'glyphicon-chevron-down');
				}
			});
		});


		var reservations = $(".reservation");

		reservations.qtip({
			position: {
				my: 'bottom left',
				at: 'top left',
				effect: false
			},

			content: {
				text: function (event, api)
				{
					var refNum = $(this).attr('id');
					$.ajax({ url: options.summaryPopupUrl, data: { id: refNum } })
							.done(function (html)
							{
								api.set('content.text', html)
							})
							.fail(function (xhr, status, error)
							{
								api.set('content.text', status + ': ' + error)
							});

					return 'Loading...';
				}
			},

			show: {
				delay: 700,
				effect: false
			},

			hide: {
				fixed: true,
				delay: 500
			},

			style: {
				classes: 'qtip-light qtip-bootstrap'
			}
		});

		reservations.hover(
				function ()
				{
					$(this).addClass('hover');
				},
				function ()
				{
					$(this).removeClass('hover');
				}
		);

		reservations.mousedown(function ()
		{
			$(this).addClass('clicked');
		});

		reservations.mouseup(function ()
		{
			$(this).removeClass('clicked');
		});

		reservations.click(function ()
		{
			var refNum = $(this).attr('id');
			window.location = options.reservationUrl + refNum;
		});

//		$(".reservation").each(function(i, v) {
//			var refNum = $(this).attr('id');
//
//			$(v).qtip({
//				position:
//				{
//				      my: 'bottom left',
//				      at: 'top left',
//				      target: $(v)
//				},
//
//				content:
//				{
//					text: 'Loading...',
//					ajax:
//					{
//				         url: options.summaryPopupUrl,
//				         type: 'GET',
//				         data: { id: refNum },
//				         dataType: 'html'
//			      	}
//				},
//
//				show:
//				{
//					delay: 700,
//					effect: false
//				},
//				style: {
//			        classes: 'qtip-light qtip-bootstrap'
//			    }
//			});
//
//			$(this).hover(
//				 function () {
//				    $(this).addClass('hover');
//				  },
//				  function () {
//				    $(this).removeClass('hover');
//				  }
//			);
//
//			$(this).mousedown(function() {
//				$(this).addClass('clicked');
//			});
//
//		    $(this).mouseup(function() {
//				$(this).removeClass('clicked');
//			});
//
//		    $(this).click(function() {
//		    	window.location = options.reservationUrl + refNum;
//		    });
//		})
	}
}