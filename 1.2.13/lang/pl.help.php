<?php
/**
* English (en) help translation file.
* This also serves as the base translation file from which to derive
*  all other translations.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Arkadiusz Lipiec <arkadiusz.lipiec@gmail.com>
* @version 05-11-09
* @package Languages
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/
///////////////////////////////////////////////////////////
// INSTRUCTIONS
///////////////////////////////////////////////////////////
// This file contains all the help file for phpScheduleit.  Please save the translated
//  file as '2 letter language code'.help.php.  For example, en.help.php.
// 
// To make phpScheduleIt help available in another language, simply translate this
//  file into your language.  If there is no direct translation, please provide the
//  closest translation.
//
// This will be included in the body of the help file.
//
// Please keep the HTML formatting unless you need to change it.  Also, please try
//  to keep the HTML XHTML 1.0 Transitional complaint.
///////////////////////////////////////////////////////////
?>
<div align="center"> 
  <h3><a name="top" id="top"></a>Wprowadzenie do phpScheduleIt</h3>
  <p><a href="http://phpscheduleit.sourceforge.net" target="_blank">http://phpscheduleit.sourceforge.net</a></p>
  <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border: solid #CCCCCC 1px">
    <tr> 
      <td bgcolor="#FAFAFA"> 
        <ul>
          <li><b><a href="#getting_started">Wprowadzenie</a></b></li>
          <ul>
            <li><a href="#registering">Rejestracja</a></li>
            <li><a href="#logging_in">Logowanie</a></li>
            <li><a href="#language">Wybór jêzyka</a></li>
            <li><a href="#manage_profile">Zmiana has³a lub informacji o u¿ytkowniku</a></li>
            <li><a href="#resetting_password">Zerowanie zapomnianego has³a</a></li>
            <li><a href="#getting_support">Pomoc</a></li>
          </ul>
          <li><a href="#my_control_panel"><b>Panel sterowania</b></a></li>
          <ul>
            <li><a href="#quick_links">Odnoœniki</a></li>
			<li><a href="#my_announcements">Moje powiadomienia</a></li>
            <li><a href="#my_reservations">Moje rezerwacje</a></li>
            <li><a href="#my_training">Moje uprawnienia</a></li>
			<li><a href="#my_invitations">Moje zaproszenia</a></li>
			<li><a href="#my_participation">Mój udzia³ w rezerwacjach</a></li>         
          </ul>
          <li><a href="#using_the_scheduler"><b>U¿ywanie terminarza</b></a></li>
          <ul>
			<li><a href="#read_only">Wersja tylko do odczytu</a></li>
            <li><a href="#making_a_reservation">Tworzenie rezerwacji</a></li>
            <li><a href="#modifying_deleting_a_reservation">Zmiana/usuwanie rezerwacji</a></li>
            <li><a href="#navigating">Nawigowanie po terminarzu</a></li>
          </ul>
        </ul>
		<hr width="95%" size="1" noshade="noshade" />
        <h4><a name="getting_started" id="getting_started"></a>Wprowadzenie</h4>
        <p>Aby u¿ywaæ systemu rezerwacji phpSheduleIt, nale¿y siê najpierw zalogowaæ. 
          Jeœli posiadasz ju¿ konto, zalogowanie siê pozwoli na korzystanie funkcji systemu.
		  Na górze ka¿dej strony (z wyj¹tkiem rejestracji i logowania do stron) ujrzysz
		  komunikat powitalny, dzisiejsz¹ datê oraz kilka odnoœników
          -- odnoœnik &quot;Wyloguj&quot; oraz odnoœnik &quot;Panel sterowania&quot; poni¿ej
		  komunikatu oraz &quot;Pomoc&quot poni¿ej daty.</p>
          <p>Jeœli poprzednio zalogowany u¿ytkownik jest wyœwietlany w komunikacie powitalnym, 
		  kliknij &quot;Wyloguj&quot; aby wyczyœciæ wszystkie pliki cookie u¿ywane przez niego 
		  oraz <a href="#logging_in">zaloguj siê</a> do systemu. 
		  Klikniêcie na odnoœnik &quot;Panel sterowania&quot; zabierze Ciê do <a href="#my_control_panel">Panelu sterowania</a>, Twojej &quot;strony domowej&quot; terminarza.
          Klikniêcie opcji &quot;Pomoc&quot; spowoduje otwarcie okna pomocy. Klikniêcie &quot;Wyœlij maila administratorowi&quot; spowoduje otwarcie nowej wiadomoœci email adresowanej do administratora systemu.</p>
          <p><font color="#FF0000">Ostrze¿enie:</font> W przypadku u¿ywania 
		    Norton Personal Firewall w trakcie korzystania z systemu phpScheduleIt, mo¿esz napotkaæ problemy.
            Przed skorzystaniem z niego nale¿y wy³¹czyæ firewall, a po zakoñczeniu pracy w³¹czyæ go ponownie.</p>
          <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="registering" id="registering"></a>Rejestracja</h5>
        <p>Aby siê zarejestrowaæ, najpierw nale¿y otworzyæ stronê rejestracji. Mo¿na tego
		dokonaæ poprzez odnoœnik na g³ównej stronie logowania. Nale¿y wype³niæ wszystkie pola.
          Zarejestrowany adres email stanie siê Twoim loginem. Wprowadzone informacje mog¹
		  byæ usuniête w dowolnym czasie poprzez opcjê <a href="#quick_links">zmiany swojego profilu</a>. Wybranie opcji &quot;Utrzymuj sesjê&quot; spowoduje u¿ycie plików cookie przegl¹darki (tzw. ciasteczek)
		  przy identyfikacji za ka¿dym razem po powrocie z terminarza, dziêki czemu u¿ytkownik 
		  bêdzie logowany automatycznie podczas ka¿dej wizyty.
          <i>Tej opcji nale¿y u¿ywaæ jedynie w przypadku gdy jesteœ jedyn¹ osob¹ korzystaj¹c¹ z komputera.</i> 
          Po zarejestrowaniu, u¿ytkownik zostanie przekierowany do <a href="#my_control_panel">Panelu sterowania</a>.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="logging_in" id="logging_in"></a>Logowanie</h5>
        <p>Logowanie polega na wprowadzaniu adresu email i has³a.
		 Nale¿y <a href="#registering">zarejestrowaæ siê</a> zanim bêdzie mo¿na siê zalgoowaæ. 
          Mo¿na tego dokonaæ poprzez wybranie odnoœnika rejestracji na stronie logowania.
		  Wybór opcji &quot;Utrzymuj sesjê&quot; spowoduje u¿ycie plików cookie w celu
		  identyfikacji za ka¿dym razem przy powrocie do terminarza, pomijaj¹c koniecznoœæ
		  logowania siê do systemu za ka¿dym razem. <i>Tej opcji nale¿y u¿ywaæ jedynie
		  gdy nikt poza u¿ytkownikiem nie korzysta z tego komputera.</i> Po zalogowaniu siê
		  u¿ytkownik zostanie przekierowany do <a href="#my_control_panel">Panelu sterowania</a>.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="language" id="language"></a>Wybór jêzyka</h5>
        <p>Na stronie logowania, wyœwietlone zostanie menu rozwijane ze wszystkimi
		dostêpnymi t³umaczeniami jakie s¹ dostêpne w systemie <a href="#my_control_panel"></a>.
          Wybierz jêzyk, który preferujesz a wszystkie napisy systemu phpScheduleIt zostan¹ przet³umaczone. 
		  Ten wybór nie spowoduje jednak przet³umaczenia ¿adnego tekstu wprowadzonego przez
		  g³ównego administratora lub innych u¿ytkowników, przet³umaczone zostan¹ jedynie teksty
		  wyœwietlane w aplikacji. Aby zmieniæ jêzyk nale¿y siê przelogowaæ.</p>
        <p align="right"><a href="#top">W górê</a></p>        
        <h5><a name="manage_profile" id="manage_profile"></a>Edycja profilu</h5>
        <p>Aby zmieniæ informacje na temat swojego profilu (nazwa, adres email, itd.) lub swoje
		has³o, nale¿y najpierw zalogowaæ siê do systemu.
        Na stronie <a href="#my_control_panel">Panel Sterowania</a>, w menu <a href="#quick_links">Odnoœniki</a>, kliknij opcjê &quot;Edycja profilu&quot;. Zostanie wyœwietlony formularz, z wype³nionymi polami
		informacyjnymi. Mo¿na je zmodyfikowaæ zgodnie ze swoim ¿yczeniem.
		Ka¿de pole pozostawione pustym nie zostanie zamienione. Jeœli chcesz zmieniæ has³o, nale¿y wprowadziæ
		je dwukrotnie. Po zakoñczeniu edycji, nale¿y klikn¹æ przycisk &quot;Eycja profilu&quot; 
          i zmiany dokonane przez u¿ytkownika zostan¹ zapisane do bazy danych. System nastêpnie wróci do 
		  strony g³ównej panelu sterowania.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="resetting_password" id="resetting_password"></a>Resetowanie zapomnianego has³a</h5>
        <p>W przypadku gdyby u¿ytkownik zapomnia³ has³a, mo¿e ono zostaæ wygenerowane na nowo i przes³ane 
		za poœrednictwem poczty internetowej. Aby to uczyniæ, nale¿y przejœæ do strony logowania i 
		klikn¹æ odnoœnik &quot;Zapomnia³em has³a&quot; znajduj¹cy siê pod formularzem logowania.
		System przekieruje u¿ytkownika na now¹ stronê i poprosi o wprowadzenie adresu email.
		Po klikniêciu &quot;Zmiana has³a&quot;, nowe, losowo wygenerowane has³o zostanie utworzone. 
		To nowe has³o zostanie ustawione w bazie danych i przes³ane poczt¹ internetow¹. 
		Po otrzymaniu maila, nalezy je skopiowaæ i wkleiæ jako nowe has³o na ekranie, 
          <a href="#logging_in">logowania</a>, a nastêpnie <a href="#manage_profile">zmieniæ has³o</a>.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="getting_support" id="getting_support"></a>Pomoc</h5>
        <p>Jeœli nie posiadasz uprawnieñ do u¿ywania zasobu, masz jakiekolwiek pytania dotycz¹ce
		zasobu, rezerwacji lub swojego konta u¿ytkownika, skorzystaj z odnoœnika 
		 &quot;Email do administratora&quot; 
          umieszczonego w menu <a href="#quick_links">Odnoœniki.</a></p>
        <p align="right"><a href="#top">W górê</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="my_control_panel" id="my_control_panel"></a>Panel sterowania</h4>
        <p>Panel sterowania to &quot;strona pocz¹tkowa&quot; systemu rezerwacji. 
		Za jego pomoc¹ mo¿na przegl¹daæ, modyfikowaæ lub usuwaæ swoje rezerwacje.
		Panel sterowania posiada tak¿e odnoœnik do <a href="#using_the_scheduler">Terminarza</a>, 
          do <a href="#quick_links">Edycji profilu</a> oraz opcjê do wylogowania siê z systemu.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="quick_links" id="quick_links"></a>Odnoœniki</h5>
        <p>Tabela odnoœników dostarcza u¿ytkownikowi dostêp do podstawowych funkcji aplikacji.
		Po pierwsze, &quot;Rezerwacje&quot;. U¿ycie odnoœnika spowoduje przeniesienie do domyœlnego
		 terminarza. Mo¿na tu wyœwietliæ wszystkie rezerwacje zasobów, zarezerwowaæ je lub
		 zmodyfikowaæ aktualne rezerwacje.</p>
        <p>&quot;Mój kalendarz&quot; spodowuje przeniesienie do widoku kalendarza
		rezerwacji, które zosta³y zaplanowane lub u¿ytkownik bierze udzia³ w innej rezerwacji. 
		Mo¿na je obejrzeæ w zestawieniu dziennym, tygodniowym lub miesiêcznym.</p>
        <p>&quot;Kalendarz terminów&quot; spowoduje przeniesienie u¿ytkownika do widoku kalendarza
		rezerwacji dla wybranego zasoby lub dla wszystkich zasobów wybranego terminu. 
		Po wybraniu widoku dziennego okreœlonego zasobu, bêdzie mo¿na wydrukowaæ 
		widok &quot;Arkusza rejestracji&quot; poprzez klikniêcie ikony obok menu rozwijanego wybranego zasobu.</p>
        <p>&quot;Edycja profilu &quot; przeniesienie u¿ytkownika na stronê, która pozwala
		  na edycjê informacji osobistych takich jak adres email, nazwa, numer telefonu i has³o.
		  Wszystkie wprowadzone ju¿ infromacje bêd¹ umieszczone w okreœlonych polach.
		  Puste lub niezmienione wartoœci nie zostan¹ podmienione w systemie.</p>
        <p>&quot;Ustawienia email&quot; przeniesie do strony, gdzie mo¿na wybraæ w jaki sposób i kiedy 
		u¿ytkownik bêdzie informowany o zdarzeniach maj¹cych zwi¹zek z terminarzem.
		Domyœlnie u¿ytkownik otrzymuje powiadomienie w momencie dodania, modyfikacji lub usuniêcia
		rezerwacji.</p>
        <p>Ostatni odnoœnik, &quot;Wyloguj&quot; spowoduje wylogowanie u¿ytkownika,
		zamkniêcie aktualnej sesji oraz powrót do ekranu logowania.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="my_announcements" id="my_announcements"></a>Moje powiadomienia</h5>
        <p>Ta tabela wyœwietli wszystkie powiadomienia jakie administrator systemu uzna³ za wa¿ne.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="my_reservations" id="my_reservations"></a>Moje rezerwacje</h5>
        <p>Tabela z rezerwacjami wyœwietla wszystkie przysz³e rezerwacje rozpoczynaj¹c
		od dnia dzisiejszego (domyœlnie). Ta tabela zawiera ka¿d¹ datê rezerwacji,
		zasób, dzieñ/czas jej utworzenia, dzieñ/czas jej ostatniej modyfikacji, czas rozpoczêcia
		oraz czas zakoñczenia. Z poziomu tej tabeli mo¿na zmodyfikowaæ lub usun¹æ rezerwacjê poprzez 
		klikniêcie opcji &quot;Edytuj&quot; lub &quot;Usuñ&quot; 
        na koñcu ka¿dego wiersza przegl¹du rezerwacji. Obydwie opcje uruchamiaj¹ wyskakuj¹ce
		okienko gdzie mo¿na potwierdziæ zmiany zwi¹zane z rezerwacj¹. Klikniêcie daty rezerwacji przenosi
		u¿ytkownika do nowego okna gdzie mo¿na przejrzeæ szczegó³y dotycz¹ce rezerwacji.</p>
        <p>Aby uporz¹dkowaæ rezerwacje wed³ug okreœlonej kolumny, nale¿y klikn¹æ na 
		 &#150; 
          lub odnoœnik + znajduj¹cy siê u góry kolumny. Znak minus uporz¹dkuje rezerwacje
		  w kolejnoœci malej¹cej, znak plus w kolejnoœci rosn¹cej wed³ug parametru okreœlonego przez nazwê kolumny.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="my_training" id="my_training"></a>Moje uprawnienia</h5>
        <p>Tabela Moje uprawnienia wyœwietla wszystkie zasoby, do których u¿ytkownik posiada dostêp.
		Zawiera nazwê zasobu, jego lokalizacjê oraz numer telefonu, który mo¿e pos³u¿yæ do skontaktowania
		siê z jego administratorem.</p>
        <p>Od razu po zakoñczeniu rejestracji, u¿ytkownik nie posiada uprawnieñ do u¿ycia ¿adnego z zasobów,
		chyba ¿e administrator zdecyduje na automatyczne nadawanie uprawnieñ. Administrator jest jedyn¹
		osob¹, która mo¿e nadaæ u¿ytkownikowi uprawnienia do danego zasobu. Nie mo¿na rezerwowaæ terminu
		u¿ycia zasobu zanim nie otrzyma siê uprawnieñ, lecz bêdzie i tak mo¿na przejrzeæ kalendarz i aktualne
		rezerwacje.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="my_invitations" id="my_invitations"></a>My zaproszenia</h5>
        <p>Tabela Moje zaproszenia wyœwietla wszystkei rezerwacje, do których u¿ytkownik
		zosta³ zaproszony i pozwala na zaakceptowanie lub odrzucenie wspó³udzia³u w tej
		rezerwacji. Po zaakceptowaniu, u¿ytkownik wci¹¿ ma mo¿liwoœæ do zakoñczenia
		partycypacji w czasie póŸniejszym. Po odrzuceniu zaproszenia, zniknie ona i nie bêdzie
		mo¿na jej zaakceptowaæ, chyba ¿e autor rezerwacji ponownie przeœle zaproszenie.</p>
        <p align="right"><a href="#top">W górê</a></p>        
        <h5><a name="my_participation" id="my_participation"></a>Mój udzia³ w rezerwacjach</h5>
        <p>Tabela Mój udzia³ w rezerwacjach wyœwietla wszystkie rezerwacje, w których
		u¿ytkownik ma wspó³udzia³. Ta opcja nie jest wyœwietlana jeœli u¿ytkownik jest 
		autorem danej rezerwacji. Z poziomu tej tabeli mo¿na zakoñczyæ udzia³ w danej wspó³rezerwacji.
		Po zakoñczeniu, nie mo¿na braæ wiêcej udzia³u w tej konkretnej rezerwacji, chyba ¿e jej autor
		ponownie wyœwle zaproszenie.</p>
        <p align="right"><a href="#top">W górê</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="using_the_scheduler" id="using_the_scheduler"></a>U¿ycie terminarza</h4>
        <p>Terminarz to miejsce, w którym mo¿na korzystaæ z funkcji planowania rezerwacji.
		Wyœwietlany tydzieñ rozpoczyna siê aktualnego tygodnia i rozci¹ga siê na 7 (domyœlna wartoœæ)
		dni.
		Tutaj mo¿na przejrzeæ zaplanowane terminy, zarezerwowaæ zasoby oraz zmodyfikowaæ aktualne rezerwacje.
		Rezerwacje s¹ oznaczane ró¿nymi kolorami, ka¿da z nich jest wyœwietlana, jednak tylko
        <i>Twoje</i> rezerwacje udostêpniaj¹ odnoœnik do modyfikacji ich parametrów. Wszystkie inne
		rezerwacje udostêpniaj¹ jedynie mo¿liwoœæ ich podejrzenia.</p>
        <p>Mo¿na zmieniæ zaplanowane terminy (jeœli istnieje wiêcej ni¿ jeden) przy u¿yciu rozwijanego
		menu u góry terminarza.</p>
        <p>Administrator systemu mo¿e okreœliæ tereminy &quot;niedostêpnoœci&quot;,
          lub okreœliæ, które zasoby s¹ niedostêpne. Rezerwacje nie zostan¹ umieszczone, jeœli
		  koliduj¹ z czasem niedostêpnoœci.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="read_only" id="read_only"></a>Wersja tylko do odczytu</h5>
        <p>Jeœli jeszcze nie masz konta lub nie uda³o Ci siê zalogowaæ, mo¿na zobaczyæ wersjê
		tylko do odczytu poprzez klikniêcie odnoœnika
		 &quot;Zobacz terminarz&quot; znajduj¹cego siê na stronie logowania. 
		 Ta wersja terminarza wyœwietli wszystkie zasoby i rezerwacje, lecz nie bêdzie mo¿liwoœci
		 zobaczenia szczegó³ów na ich temat ani zrobienia nowej rezerwacji.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="making_a_reservation" id="making_a_reservation"></a>Tworzenie rezerwacji</h5>
        <p>Aby zarezerwowaæ zasób, najpier nale¿y przejœæ do tabeli reprezentuj¹cej dzieñ
		na jaki ma byæ rezerwacja. Po zlokalizowaniu dnia, nale¿y klikn¹æ na nazwê zasobu.
		Czynnoœæ ta spowoduje wyœwietlenie wyskakuj¹cego okienka gdzie nale¿y dokonaæ wyboru
		daty rozpoczêcia i zakoñczenia (o ile dozwolone) oraz czasu na jaki dany zasób ma zostaæ
		zarezerwowany.</p>
        <p>Poni¿ej zostanie wyœwietlony komunikat informuj¹cy u¿ytkownika na jak d³ugo 
		mo¿na zarezerwowaæ zasób. Jeœli rezerwacja jest d³u¿sza lub krótsza ni¿ dozwolona,
		nie zostanie ona zaakceptowana.</p>
        <p>Mo¿na tak¿e wybraæ czy chcesz powtórzyæ t¹ rezerwacjê. Aby powtórzyæ rezerwacjê nale¿y
		wybraæ dni, w których ma zostaæ ona powtórzona, a nastêpnie wybraæ co ile czasu ta rezerwacja
		ma byæ powielana.
		Rezerwacja bêdzie utworzona dla aktualnie wybranego dnia, plus wszystkie dni
		wybrane jako dni powtórzeñ. Wszystkie terminy, które nie bêd¹ mog³y zostaæ zarezerwowane 
		z powodu konfliktu zostan¹ wyœwietlone. Podczas tworzenia rezerwacji obejmuj¹cej wiêcej
		ni¿ jeden dzieñ, opcje powtórzeñ nie bêd¹ dostêpne.</p>
        <p>Mo¿na dodawaæ uwagi na temat rezerwacji, poprzez wype³nienie odpowiedniego pola tekstowego. 
		Ten tekst bêdzie widoczny dla innych u¿ytkowników.</p>        
        <p>Po ustawieniu poprawnej daty/czasu rozpoczêcia i zakoñczenia rezerwacji i wybrania
		czy ma zostaæ ona powtarzana, nale¿y nacisn¹æ przycisk 
		 &quot;Zapisz&quot;.
           Pojawi siê komunikat czy rezerwacja siê powiod³a, informuj¹c u¿ytkownika o dacie (datach)
		   dokonanych rezerwacji. W przypadku niepowodzenia, nale¿y cofn¹æ siê i zmodyfikowaæ termin,
		   który nie bêdzie kolidowa³ z inn¹ ju¿ dokonan¹ rezerwacj¹.
		   Po pomyœlnym zarezerwowaniu terminu, terminarz zostanie automatycznie odœwie¿ony. Jest
		   to czynnoœæ niezbêdna do prze³adowania wszystkich informacji o rezerwacjach z bazy danych.</p>
        <p>Nie mo¿na zarezerwowaæ terminu dla dat przesz³ych, dla zasobu, do którego u¿ytkownik nie posiada
		uprawnieñ lub dla zasobu, który aktualnie nie jest aktywny. Te zasoby bêd¹ wyszarzone i nie bêd¹
		udostêpnia³y odnoœnika umo¿liwiaj¹cego dokonanie rezerwacji.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="modifying_deleting_a_reservation" id="modifying_deleting_a_reservation"></a>Zmiana/usuwanie rezerwacji</h5>
        <p>Istnieje kilka sposobów na modyfikacjê lub usuniêcie rezerwacji.
		Jednym z nich jest otwarcie <a href="#my_control_panel">Panelu sterowania</a> jak to ju¿ zosta³o opisane.
		Inny sposób to skorzystanie z terminarza internetowego. Zosta³ opisany w poprzednim akapicie,
		tylko u¿ytkownik, który dokona³ rezerwacjê mo¿e j¹ modyfikowaæ (oprócz administratora).
		Wszystkie inne rezerwacje bêd¹ widoczne, lecz nie bêd¹ zawiera³y odnoœnika pozwalaj¹cego
		na ich modyfikacjê.</p>
        <p>Aby zmodyfikowaæ rezerwacjê z u¿yciem terminarza, nale¿y po prostu klikn¹æ
		na odpowiedni¹ rezerwacjê. Wyœwietlone zostanie okno dialogowe bardzo podobne do okna rezerwacji.
		U¿ytkownik ma 2 mo¿liwoœci: mo¿e zmodyfikowaæ terminy rozpoczêcia i zakoñczenia rezerwacji,
		lub te¿ zaznaczyæ opcjê &quot;Usun¹æ&quot;.
           Po zakoñczeniu modyfikacji, naciœnij przycisk &quot;Zapisz&quot; na dole formularza.
		  Twoje nowe opcje bêd¹ okreœlane w zale¿noœci od aktualnych rezerwacji zaœ na dole pojawi siê
		  komunikat o aktualnym stanie modyfikacji. Jeœli u¿ytkownik chce dokonaæ zmiany terminu,
		  nale¿y wróciæ do okna modyfikacji i wybraæ nowe terminy, które nie koliduj¹ z innymi rezerwacjami.
		  Po pomyœlnym zakoñczeniu modyfikacji, terminarz zostanie automatycznie odœwie¿ony. Jest to
		  czynnoœæ niezbêdna do prze³adowania informacji o rezerwacji w bazie danych.</p>
        <p>Aby zmodyfikowaæ grupê powtarzaj¹cych siê rezerwacji, nale¿y zaznaczyæ opcjê opisan¹
		To modify a group of recurring reservations, check the box labeled
        &quot;Uaktualniæ grupê powtarzaj¹cych siê rezerwacji?&quot;. Wszystkie koliduj¹ce
		daty zostan¹ wypisane na ekranie.</p>
        <p>Nie mo¿na zmodyfikowaæ rezerwacji dla daty, która ju¿ minê³a.</p>
        <p align="right"><a href="#top">W górê</a></p>
        <h5><a name="navigating" id="navigating"></a>Nawigowanie po terminarzu</h5>
        <p>Istnieje wiele sposobów na korzystanie z przegl¹darki dat w terminarzu.</p>
        <p>Poruszanie siê tydzieñ po tygodniu jest mo¿liwe za pomoc¹ odnoœników 
		 &quot;Poprzedni tydz.&quot; oraz &quot;Nastêpny tydz.&quot; 
          znajduj¹cych siê w dolnej czêœci terminarza.</p>
        <p>Skok do dowolnej daty jest mo¿liwy po wprowadzeniu jej do formularza w dole terminarza.</p>
        <p>Otwarcie kalendarza nawigacyjnego mo¿na dokonaæ poprzez klikniêcie odnoœnika
		 &quot;Obejrzyj miesiêczny kalendarz&quot; Wybierz ¿¹dan¹ datê i kliknij na ni¹ aby przejœæ za pomoc¹
		 terminarza do tej daty.</p>
        <p align="right"><a href="#top">W górê</a></p>
      </td>
    </tr>
  </table>
</div>