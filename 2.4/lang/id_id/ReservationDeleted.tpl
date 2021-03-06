{*
Copyright 2011-2013 Nick Korbel

File ini adalah bagian dari phpShceduleIt.

phpScheduleIt adalah perangkat lunak gratis: Anda bisa 
mendistribusikannya dan/atau memodifikasikannya di bawah ketentuan 
GNU General Public License seperti yang diterbitkan oleh
Free Software Foundation, baik versi 3 dari Lisensi, atau
(dengan pilihan) versi apapun setelahnya.

phpScheduleIt didistribusikan dengan harapan akan berguna,
tapi TANPA JAMINAN; tanpa
phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; bahkan tanpa jaminan dari
PERDAGANGAN atau PENYESUAIAN UNTUK TUJUAN TERTENTU.
Lihat GNU General Public License untuk rincian lebih lanjut.

Anda seharusnya mendapatkan salinan dari GNU General Public License
bersamaan dengan phpScheduleIt. Jika tidak, lihat 
<http://www.gnu.org/licenses/>.

*}
{include file='..\..\tpl\Email\emailheader.tpl'}
	
	Rincian Reservasi:
	<br/>
	<br/>

	Nama Pengguna: {$UserName}
	Mulai: {formatdate date=$StartDate key=reservation_email}<br/>
	Akhir: {formatdate date=$EndDate key=reservation_email}<br/>
	{if $ResourceNames|count > 1}
		Resources:<br/>
		{foreach from=$ResourceNames item=resourceName}
			{$resourceName}<br/>
		{/foreach}
		{else}
		Resource: {$ResourceName}<br/>
	{/if}
	Judul: {$Title}<br/>
	Penjeasan: {$Description|nl2br}<br/>
	
	{if count($RepeatDates) gt 0}
		<br/>
		Tanggal-tanggal berikut telah dihapus:
		<br/>
	{/if}
	
	{foreach from=$RepeatDates item=date name=dates}
		{formatdate date=$date}<br/>
	{/foreach}

	{if $Accessories|count > 0}
		<br/>Akesoris:<br/>
		{foreach from=$Accessories item=accessory}
			({$accessory->QuantityReserved}) {$accessory->Name}<br/>
		{/foreach}
	{/if}

	<a href="{$ScriptUrl}">Masuk phpScheduleIt</a>
	
{include file='..\..\tpl\Email\emailfooter.tpl'}