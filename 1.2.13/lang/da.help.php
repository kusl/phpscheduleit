<?php
/**
* Danish (da) help translation file.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Christian Clausen <christian@clausen.person.dk>
* @version 01-08-05
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
  <h3><a name="top" id="top"></a>Introduktion til phpScheduleIt</h3>
  <p><a href="http://phpscheduleit.sourceforge.net" target="_blank">http://phpscheduleit.sourceforge.net</a></p>
  <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border: solid #CCCCCC 1px">
    <tr> 
      <td bgcolor="#FAFAFA"> 
        <ul>
          <li><b><a href="#getting_started">Kom Igang</a></b></li>
          <ul>
            <li><a href="#registering">Registrering</a></li>
            <li><a href="#logging_in">Log Ind</a></li>
            <li><a href="#language">Vælg Sprog</a></li>
            <li><a href="#manage_profile">Ændr Profil Information Eller Kodeord</a></li>
            <li><a href="#resetting_password">Nulstil Glemt Kodeord</a></li>
            <li><a href="#getting_support">Få Hjælp</a></li>
          </ul>
          <li><a href="#my_control_panel"><b>Mit Kontrolpanel</b></a></li>
          <ul>
            <li><a href="#quick_links">Mine Genveje</a></li>
			<li><a href="#my_announcements">Mine Meddelelser</a></li>
            <li><a href="#my_reservations">Mine Reservationer</a></li>
            <li><a href="#my_training">Mine Tilladelser</a></li>
			<li><a href="#my_invitations">Mine Invitationer</a></li>
			<li><a href="#my_participation">Mine Reservations Deltagelser</a></li>         
          </ul>
          <li><a href="#using_the_scheduler"><b>Brug af Planlæggeren</b></a></li>
          <ul>
			<li><a href="#read_only">Ikke-skrivbar Version</a></li>
            <li><a href="#making_a_reservation">Lav en Reservation</a></li>
            <li><a href="#modifying_deleting_a_reservation">Rette eller Slette en Reservation</a></li>
            <li><a href="#navigating">Finde Rundt i Planlæggeren</a></li>
          </ul>
        </ul>
		<hr width="95%" size="1" noshade="noshade" />
        <h4><a name="getting_started" id="getting_started"></a>Kom igang</h4>
        <p>For at bruge phpScheduleIt, er du først nødt til at registrere dig.
	  Hvis du allerrede er registreret, er du nødt til at logge ind før du
	  kan bruge systemet. I toppen af hver side (undtage registrerings og
	  logind siderne) finder du en velkomstmeddelelse, dagens dato, og nogle
	  få henvisninger -- &quot;Log Ud&quot; og en &quot;Mit Kontrolpanel&quot;
	  under velkomstmeddelelsen, og &quot;Hjælp Mig&quot under
	  datoen.</p>
          <p>Hvis en tidligere bruger vises i velkomstmeddelelsen, klik &quot;Log Ud&quot;
	  for at rydde op i eventuelle cookies de har brugt og <a href="#logging_in">log 
          ind</a> som dig selv. Hvis du klikker på &quot;Mit Kontrolpanel&quot;
	  kommer du til <a href="#my_control_panel">Mit Kontrolpanel</a>, din
	  &quot;hjemmeside&quot; i planlæggeren. Klikker du &quot;Hjælp Mig&quot;
	  kommer hjælpevinduet frem. Klikker du &quot;Email Admin&quot; åbnes en
	  ny email rettet mod systemadministratoren.</p>
          <p><font color="#FF0000">Advarsel:</font> Hvis du har Norton Personal
            Firewall kørende mens du bruger phpScheduleIt, kan du opleve problemer.
            Afbryd venligst Norton Personal Firewall mens du bruger phpScheduleIt
            og aktiver den igen når du er færdig.</p>
          <p align="right"><a href="#top">Top</a></p>
        <h5><a name="registering" id="registering"></a>Registrering</h5>
        <p>For at registrere, naviger først til registreringssde. Den kan nås fra
	  den oprindelige logind side. Først skal du udfylde alle felter.
	  Email adressen som du registrerer vil være dit logind navn. Informationen
	  kan ændres senere ved at <a href="#quick_links">ændre din profil</a>.
	  Vælger du &quot;Forbliv logget ind&quot; muligheden, vil cookies blive
	  brugt til at identificere dig hver gang du vender tilbage til rservationsssystemet
	  så du ikke behøver at logge ind hver gang. <i>Du bør kun bruge denne mulighed
	  hvis du er den enester der bruger din computer.</i> 
          Efter registrering blier ledt videre til <a href="#my_control_panel">Mit 
          Kontrolpanel</a>.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="logging_in" id="logging_in"></a>At Logge Ind</h5>
        <p>At logge ind er så simpelt som at indtaste sin email adresse og kodeord. 
          Du er nødt <a href="#registering">registrere</a> dig før du kan logge ind. 
          Dette kan gøres ved at følge registrerings linket på log ind siden.
	  Vælger du &quot;Husk Mig&quot; muligheden vil der blive brugt cookies
	  til at identificere dig hver gang du vender tilbage til reservationssystemet,
	  og overflødiggøre behovet for at logge ind hver gang.
	  <i>Du skal kun bruge denne mulighed hvis du er den eneste der bruger din
	  computer.</i> Efter du har logget ind vil du blive omdirigeret til
	  <a href="#my_control_panel">Mit Kontrolpanel</a>.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="language" id="language"></a>Vælg Sprog</h5>
        <p>På logind siden, vil der være en rullemenu med alle de tilgængelige sprog.
          Vælg venligst de sprog du foretrækker og al phpScheduleIt tekst
	  vil blive vist i det sprog. Tekst indtastet af administratoren eller
	  andre brugere vil ikke blive oversat, kun tekst defineret i systemet.
	  Du bliver nødt til at logge ud for at vælge et andet sprog.</p>
        <p align="right"><a href="#top">Top</a></p>        
        <h5><a name="manage_profile" id="manage_profile"></a>Ændre Profile Information
	  eller Kodeord</h5>
        <p>For at ændre din profile information (navn, email, o.s.v.) eller kodeord, 
          log ind på systemet. I <a href="#my_control_panel">Mit Kontrolpanel</a>,
	  i <a href="#quick_links">Mine Genveje</a>, klick &quot;Ret Profil&quot;.
	  Det vil vise dit en fromular med dine informationer udfyldt. Ret de oplysinger
	  du ønsker. Blanke felter vil ikke blive ændret. Hvis du vil ændre dit kodeord,
	  indtast det to gange. Efter du har rettet dine informationer, klik &quot;Ret
	  Profil&quot; og dine ændringer vil blive gemt. Derefter vil du blive omdirigeret
	  til Mit Kontrolpanel.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="resetting_password" id="resetting_password"></a>Få Nulstillet Dit Glemte Kodeord</h5>
        <p>Hvis du har glemt dit kodeord, kan du få det nulstillet og få et nyt sendt
	  per email. For at gøre dette gå til log ind siden og klik &quot;Jeg Har Glemt
	  Mit Kodeord&quot; under log ind formularen. 
          Du vil blive ført til en ny side og spurgt om din email adresse. 
          Efter du har klikket &quot;Send&quot;, vil et nyt, tilfældigt genreret
	  kodeord blive send til dig. Når du har modtaget dit nye kodeord,  
          <a href="#logging_in">log ind</a> med det,
	  <a href="#manage_profile">ændr dit kodord</a> omgående.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="getting_support" id="getting_support"></a>Få Hjælp</h5>
        <p>Hvis du ikke har rettigheder til at bruge en ressource,
	  har spørgsmål om en ressource, reservation eller brugerkonto,
	  brug venligst &quot;Email Admin&quot; linket i
	  <a href="#quick_links">Mine Genveje.</a></p>
        <p align="right"><a href="#top">Top</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="my_control_panel" id="my_control_panel"></a>Mit Kontrolpanel</h4>
        <p>Kontrolpanelet er din &quot;hjemmeside&quot; i resevationssystemet.
	  Her kan du se, rette eller slette dine reservationer. Mit Kontrolpanel
	  indeholder også et link til <a href="#using_the_scheduler">Planlæggeren</a>, 
          et link til <a href="#quick_links">Ret Profil</a> og en mulighed for at
	  Logge Ud af Reservationssystemet.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="quick_links" id="quick_links"></a>Mine Genveje</h5>
        <p>Genvejstabellen vil give dig de mest almindelige links i applikationen.
          Det første, &quot;Reservationer&quot; vil føre dig til standard skemaet.
	  Her kan du se ressouce skemaer, reservere ressoucer, og rette dine nuværende
	  reservationer.</p>
        <p>&quot;Se Min Kalender&quot; vil vise dig en kalender med de reservationer
          du har laveet eller deltager i. Dette kan ses per dag, uge eller måned.</p>
        <p>&quot;Se Skema &amp; Ressource  Kalender&quot; vil vise dig en kalender med
	  reservationer for en valgt ressourde eller alle ressourcer i et bestemt skema.
	  Hvis du har valgt dagsvisning for en specifik ressource, vil du også have
	  mulighed for at udskrive et &quot;Tilmeldingsskema&quot; ved at klikke
	  på notesblok ikonet ved siden af ressource rullemenuen.</p>
        <p>&quot;Ret Profil &quot; vil vise en side hvor du kan rette dine
	  personlige oplysninger, som email addresse, navn, telefonnumer og kodeord.
	  Alle dine nuværende informationer vil være udfyldt for dig i forvejen.
	  Blanke eller uændrede værdier vil ikke blive ændret.</p>
        <p>&quot;Email Preferencer&quot; lader dig vælge hvornår og hvordan
	  du vil blive kontaktet angående in brug af reservationssystemet.
	  Som standard vil du modtage HTML emails når du tilføjer, retter eller
	  sletter en reservation.</p>
        <p>Slutteligt, &quot;Log ud&quot; vil afslutte din brug af systemet og
	  vende tilbage til log ind skærmen.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="my_announcements" id="my_announcements"></a>Mine Meddelelser</h5>
        <p>Vil vise en liste med meddelelser fra systemadministratoren.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="my_reservations" id="my_reservations"></a>Mine Reservationer</h5>
        <p>Listen med Mine Reservationer viser alle dine komende reservationer, startende
	  fra idag (som standard). Denne liste viser hver reservations Dato, Ressource,
	  Oprettelsestidspunkt, Seneste ændringstidspunkt, Starttid, Sluttid.
	  Fra denne liste kan du også komme til at rette en reservation eller slette den,
	  simpelthen ved at klikke på &quot;Ret&quot; or &quot;Slet&quot; 
          linket i slutnigen af reservationens række. Begge disse muligheder vil åbne
	  et pop-up vindue hvor du kan bekræfte dine ændringer.
	  Hvis du klikker på reservationens dato, kommer du til et nyt vindue, hvor du kan
	  se reservationens detaljer.</p>
        <p>For at sortere dine reservationer efter en specifik kolonne, klik &#150; 
          eller + i toppen af kolonnen. Minustegnet sorterer reservationerne i
	  faldende orden, plustegnet sorteter i stigende orden.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="my_training" id="my_training"></a>Mine Tilladelser</h5>
        <p>Listen, Mine Tilladelser viser alle de ressourcer du har tilladelse til at bruge.
	  Den viser navnet på ressourcerne, deres placering og et telefonnummer du kan
	  bruge til at kontakte deres administratorere.</p>
        <p>Efter registrerin vil du ikke haverettigheder til at bruge nogen ressourcer,4
	  med mindre administratoren har valgt at give rettighederne automatisk.
	  Administratoren er den eneste der kan give dig rettigheder til at bruge
	  en ressource. Du vil ikke få lov til at reservere en ressource som du ikke
	  har rettighed til, men du vil være i stand til at se dens skema og nuværende
	  reservationer.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="my_invitations" id="my_invitations"></a>Mine Invitationer</h5>
        <p>Listen, Mine Invitationer viser alle de reservationer du er blevet inviteret
	  til og giver dig lov til enten at Acceptere eller Afvise invitationer.
	  Hvis du accepterer vil du stadig have mulighed for at springe fra senere
	  hvis du afviser vil du ikke få mulighed for at deltage med mindre du
	  bliver inviteret igen.</p>
        <p align="right"><a href="#top">Top</a></p>        
        <h5><a name="my_participation" id="my_participation"></a>Mine Deltagelser</h5>
        <p>Mine Deltagerlser listen viser alle de reservationer du deltager i.
	  Den vi ikke vise reservationer du selv har oprettet. Fra denne liste kan
	  du vælge at afslutte din deltagelse. Hvis du afsluter din deltagelse
	  vil du ikke få mulighed for at deltage med mindre du bliver inviteret
	  igen.</p>
        <p align="right"><a href="#top">Top</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="using_the_scheduler" id="using_the_scheduler"></a>Brug af Reserationssystemet</h4>
        <p>Reservationssystemet er hvor du kan foretage aller ressouced reservations
	  funktioner. Den uge der vises begynder med dagen i dag og rækker 7 dage
	  frem (som standard).
	  Her kan du se ressource skemaer, reservere ressourcer og rette dine
	  nuværende reservationer. Reservationerne vil være farvekodet og alle
	  vil blive vist, men kun <i>dine</i> reservationer vil have et link der
	  giver dig mulighed for at rette reservationen. Alle andre reservationer
	  vil kun indholde et link der giver mulighed for at se dem.</p>
        <p>Du kan rette skemaer (hvis mere end et eksistere) ved at bruge rullemenuen
	  i toppen af hvert skema.</p>
        <p>System administratoren kan specificere tidsrum der er &quot;Lukket&quot;,
          eller valgt som utilgængelige af administratoren. Reservationer vil ikke
	  blive lavet hvis de er i konflikt med en lukket tid.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="read_only" id="read_only"></a>Læsbar Version</h5>
        <p>Hvis du ikke er registreret eller logget ind, kan kun se læsbare versioner
	  af skemaet ved at klikke &quot;Online Reservationssystem [Kun Læsbar]&quot;
	  på login siden. Denne version af skemaet vil vise dig alle ressoucer og
	  reservationer, men du vil ikke være i stand til at se detaljer om dem eller
	  lave reservationer.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="making_a_reservation" id="making_a_reservation"></a>Lave en Reservation</h5>
        <p>For at reservere en ressource, skal du først navigere til den dag på
	  ressourcen skal reserveres. Når du har fundet den ønskede dag, klik
	  på ressourcens navn. Det vil åbne et pop-op vindue hvor du kan vælge
	  start og slut dage (hvis tilladt) og tidsrummet i hvilket du ønsker
	  at reservere ressourcen.</p>
        <p>Der vil være en besked under den valgte tid hvor du kan se hvor lang
	  en reservation for denne ressource kan være. Hvis din reservation er
	  længere eller kortere end den tilladte tid, vil den ikke blive accepteret.</p>
        <p>Du kan også vælge hvis ud ønsker at gentage reservationen. For at gentage
	  en reservation, vælg de dage hvor du ønsker den skal gentages, vælg så
	  hvor længe den skal gentages. Reservationen vil blive lavet for den
	  valgte dag samt alle de dage du har valgt som gentagelser. Alle datoer
	  som ikke kunne blive reserveret fordi de var konflikt med en eksisterende
	  reservation vil blive oplistet. Hvis du laver en flerdages reservation,
	  vil gentagelses funktionen ikke være tilgængelig.</p>
        <p>Du kan tilføje et resumé af denne reservation ved at udfylde resumé
	  tekstfeltet. Dette resumé vil derefter være tilgængelig for alle andre
	  brugere.</p>        
        <p>Efter at have sat korrekte start og slut datoer og tidspunkter for
	   reservationen og valgt om reservationen skal gentages, tryk på 
	   &quot;Gem&quot; Knappen.
	   En besked vil blive vist hvis reservationen ikke lykkedes, med
	   informationer om hvilke dato(er) der ikke lykkedes. Hvis det ikke
	   lykkedes, gå tilbage og ret de ønskede tider så de ikke falder
	   sammen med eksisterende reservationer. Når din reservation er
	   lykkedes, vil skemaet automatisk blive opdateret.</p>
        <p>Du kan ikke lave en reservation til bage i tiden, for en ressource
	   du ikke har fået tilladelse til at bruge eller til en ressource
	   der i øjeblikket er inaktive. Disse ressourcer vil være grå og
	   ikke tilbyde et link til reservationssiden.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="modifying_deleting_a_reservation" id="modifying_deleting_a_reservation">
	</a>Rette/Slette en Reservation</h5>
        <p>Der er flere måder at rette eller slette en reservation. En måde er
	  fra <a href="#my_control_panel">Mit Kontrolpanel</a> som beskrevet ovenfor.
	  Den er er gennem online reservationssystemet. Som tidligere beskrevet,
	  vil du kun være i stand til at rette dine egne reservationer.
	  Alle andre reservationer blive vist, men vil ikke være mulighed
	  for at rette dem.</p>
        <p>For at rette en reservation gennem planlægningssystemet, klik blot på
	  den reservation du vil ændre. Det til åbne et pop-op vindue meget lig
	  reservationsvinduet. Du har to valgmuligheder; Du kan enten rette start eller
	  slut tidspunktet for reservationen, eller du kan markere &quot;Slet&quot;
	  feltet. Efter du har lavet dine ændringer, tryk på &quot;Ret&quot; 
          knappe i bunden af formularen. Dine nye valg vil blive checket mod
	  eksisterende reservationer og du vil få besked om status på din ændring.
	  Hvis du er nødt til at ændre tider, gå tilbage til redigerings vinduet
	  og vælg nye tider der ikke overlapper andre reservationer.
	  Når din reservation er blevet rettet vil skemaet automatisk blive opdatret.</p>
        <p>For at rette en gruppe af gentagne reservationer, marker feltet
          &quot;Opdater alle gentagne poster i gruppen?&quot;. Eventuelle konflikter
	  vil blive vist.</p>
        <p>Du kan ikke rette en reservation der har fundet sted.</p>
        <p align="right"><a href="#top">Top</a></p>
        <h5><a name="navigating" id="navigating"></a>Navigere Reservationssystemet</h5>
        <p>Der er mange måder at navigere til datoer i reservationssystemet.</p>
        <p>Ryk uge for uge ved at bruge &quot;Foregående Uge&quot; og &quot;Næste Uge&quot;
	  i bunden af reservationssystemet.</p>
        <p>Spring til en dato ved at taste det i formularen i bunden af reservationssystemet.</p>
        <p>Brug en navigationskalender ved at klikke &quot;Åben en navigationskalender&quot;
	  i bunden af reservationssystemet. Find den dato du ønsker og klik på den
	  for at gå til den dato.</p>
        <p align="right"><a href="#top">Top</a></p>
      </td>
    </tr>
  </table>
</div>