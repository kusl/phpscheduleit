{*
Copyright 2012 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*}

{include file='globalheader.tpl' Title='phpScheduleIt v2.0 Migration'}

<h1>Migrate phpScheduleIt v1.2 to v2.x (MySQL only)</h1>

<div id="migratingSchedules" class="hidden">Migrating schedules {html_image src="admin-ajax-indicator.gif"}</div>
<div id="migratedSchedules" class="hidden">
	<span class="migratedCount">-</span> out of <span class="legacyCount">-</span>
	<span class="percentComplete">-</span>%</div>
<div>
	{if $ShowResults}
		Migrated {$SchedulesMigratedCount} Schedules
		<br/>
		Migrated {$ResourcesMigratedCount} Resources
		<br/>
		Migrated {$AccessoriesMigratedCount} Accessories
		<br/>
		Migrated {$GroupsMigratedCount} Groups
		<br/>
		Migrated {$UsersMigratedCount} Users
		<br/>
		Migrated {$ReservationsMigratedCount} Reservations
		<br/>
	{elseif $StartMigration}
		<script type="text/javascript">
			function Migration()
			{
//				function poll()
//				{
//					setTimeout(function ()
//					{
//						$.ajax({
//							url: "migrate.php?check=schedules",
//							type: "GET",
//							success: function (data)
//							{
//								console.log(data);
//							},
//							dataType: "json",
//							complete: poll,
//							timeout: 2000
//						})
//					}, 5000);
//				}

				var migratingSchedules = $('#migratingSchedules');
				var migratedSchedules = $('#migratedSchedules');
				var startSchedules = function ()
				{
					migratingSchedules.show();
					$.ajax({
						url: "migrate.php?start=schedules",
						type: "GET",
						success: function (data)
						{
							migratedSchedules.find('.migratedCount').text(data.MigratedCount);
							migratedSchedules.find('.legacyCount').text(data.LegacyCount);
							migratedSchedules.find('.percentComplete').text(data.PercentComplete);
							migratedSchedules.show();
							console.log(data);
							if (data.RemainingCount > 0)
							{
								startSchedules();
							}
							else
							{
								migratingSchedules.hide();
								//startResources();
							}
						},
						dataType: "json"
					});
				};

				this.run = function ()
				{
					startSchedules();
					console.log('starting migration');
				}
			}

			var migration = new Migration();
			migration.run();
		</script>
	{else}
		<h3>This will copy all data from your phpScheduleIt v1.2 installation into 2.x. Due to changes in 2.x, this
			process will
			not be perfect. This process only migrates data which exists in your 1.2 installation but not in your 2.x
			installation.
			Running this multiple times will not insert duplicate data. This will not affect your 1.2 installation.</h3>
		<br/>
		<h3>There is no automated way to undo this process. Please check all migrated data for accuracy after the import
			completes.</h3>
		<div class="error">
			<h3>Known Issues</h3>
			<ul style="margin-left: 30px;">
				<li>Recurring reservations will appear as single instances</li>
				<li>Application admin designations will not be migrated, only the user accounts</li>
				<li>Group admin designations will not be migrated, only the user accounts</li>
				<li>Open reservation invitations will be removed</li>
				<li>User timezones will all be set to the server's timezone</li>
				<li>At the time of writing, phpScheduleIt 2 is not available in all of the same languages that 1.2 was.
					User language preferences will be migrated but may have no immediate effect
				</li>
				<li>User email preferences will not be migrated</li>
			</ul>
		</div>
		<form class="register" method="post" action="{$smarty.server.SCRIPT_NAME}">
			{if $LegacyConnectionFailed}
				<div class="error">
					Could not connect to 1.2 database. Please confirm the settings below and try again.
				</div>
			{/if}

			{if $InstallPasswordFailed}
				<div class="error">
					Your installation password was incorrect. Please confirm this config setting in
					$conf['settings']['install.password']
				</div>
			{/if}

			<h3>phpScheduleIt 1.2 database settings</h3>
			<br/>

			<ul style="list-style: none;">
				<li>Install Password: <input type="password" class="textbox" name="installPassword"/> (found in 2.x
					config.php)
				</li>
				<li>User: <input type="text" class="textbox" name="legacyUser"/></li>
				<li>Password: <input type="password" class="textbox" name="legacyPassword"/></li>
				<li>Hostspec: <input type="text" class="textbox" name="legacyHostSpec"/></li>
				<li>Database Name: <input type="text" class="textbox" name="legacyDatabaseName"/></li>
			</ul>
			<br/>
			<input type="submit" name="run" value="Run Migration" class="button"/>
		</form>
	{/if}
</div>

{include file='globalfooter.tpl'}