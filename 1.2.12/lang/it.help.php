<?php
/**
* English (en) help translation file.
* This also serves as the base translation file from which to derive
*  all other translations.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Diego Pierotto <ita.translations@tiscali.it>
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
  <h3><a name="top" id="top"></a>Introduzione a phpScheduleIt</h3>
  <p><a href="http://phpscheduleit.sourceforge.net" target="_blank">http://phpscheduleit.sourceforge.net</a></p>
  <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border: solid #CCCCCC 1px">
    <tr> 
      <td bgcolor="#FAFAFA"> 
        <ul>
          <li><b><a href="#getting_started">Avvio veloce</a></b></li>
          <ul>
            <li><a href="#registering">Registrazione</a></li>
            <li><a href="#logging_in">Accesso</a></li>
            <li><a href="#language">Selezione lingua</a></li>
            <li><a href="#manage_profile">Modifica info Profilo o Password</a></li>
            <li><a href="#resetting_password">Reimpostare la password dimenticata</a></li>
            <li><a href="#getting_support">Ottenere supporto</a></li>
          </ul>
          <li><a href="#my_control_panel"><b>Pannello di Controllo</b></a></li>
          <ul>
            <li><a href="#quick_links">I Miei Link</a></li>
			<li><a href="#my_announcements">I Miei Annunci</a></li>
            <li><a href="#my_reservations">Le Mie Prenotazioni</a></li>
            <li><a href="#my_training">I Miei Permessi</a></li>
			<li><a href="#my_invitations">I Miei Inviti</a></li>
			<li><a href="#my_participation">Mie Partecipazioni alle Prenotazioni</a></li>         
          </ul>
          <li><a href="#using_the_scheduler"><b>Utilizzo sistema prenotazioni</b></a></li>
          <ul>
			<li><a href="#read_only">Versione a sola lettura</a></li>
            <li><a href="#making_a_reservation">Effettuare una Prenotazione</a></li>
            <li><a href="#modifying_deleting_a_reservation">Modifica/Eliminazione di una Prenotazione</a></li>
            <li><a href="#navigating">Navigazione tra le Prenotazioni</a></li>
          </ul>
        </ul>
		<hr width="95%" size="1" noshade="noshade" />
        <h4><a name="getting_started" id="getting_started"></a>Avvio veloce</h4>
        <p>Per usare phpScheduleIt, devi prima essere registrato. 
          Se ti sei già registrato, devi loggarti prima nel sistema.
          All'inizio di ogni pagina (ad eccezione delle pagine di registrazione e accesso)
          vedrai un messaggio di benvenuto, la data odierna, e alcuni collegamenti
          -- un collegamento &quot;Esci&quot; ed un collegamento &quot;Pannello di Controllo&quot;
          sotto il messaggio di benvenuto, e un collegamento &quot;Aiuto&quot sotto la data.</p>
          <p>Se un utente precedente viene visualizzato nel messaggio di benvenuto, fai click su &quot;Esci 
          &quot; per eliminare ogni cookie in uso ed <a href="#logging_in">accedere</a>
          come te stesso. Cliccando il collegamento &quot;Pannello di Controllo&quot; ti verrà mostrato
          il <a href="#my_control_panel">Pannello di Controllo</a>, la &quot;pagina principale&quot; delle
          prenotazioni.
          Facendo click sul collegamento &quot;Aiuto&quot; si aprirà una nuova finestra di aiuto. Cliccando sul
          collegamento &quot;Spedisci Email all'Amministratore&quot; si aprirà un nuovo messaggio di posta indirizzato
          all'amministratore di sistema.</p>
          <p><font color="#FF0000">Attenzione:</font> Se utilizzi Norton Personal
            Firewall durante l'uso di phpScheduleIt, puoi avere dei problemi.
            Per favore disabilita Norton Personal Firewall mentre usi phpScheduleIt
            e riabilitato dopo che hai terminato la sessione.</p>
          <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="registering" id="registering"></a>Registrazione</h5>
        <p>Per registrarsi, apri prima la pagina di registrazione. Questa può essere raggiunta
          tramite un collegamento nella pagina iniziale di accesso. Devi compilare ogni campo. 
          L'indirizzo email che registri sarà usato come accesso. Le informazioni
          che inserisci possono essere modificate in ogni momento tramite il collegamento <a href="#quick_links">
          Cambia il Mio Profilo</a>. Seleziona l'opzione &quot;Mantenere la connessione (richiede l'abilitazione dei cookie)&quot; 
          che userà i cookie per identificarti ogni volta che ritorni a fare una prenotazione, 
          evitando di dover accedere ogni volta. <i>Dovresti usare questa opzione solo se
          sei l'unica persona che utilizza le prenotazioni sul computer.</i> 
          Dopo la registrazione, sarai reindirizzato al <a href="#my_control_panel">Pannello 
          di Controllo</a>.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="logging_in" id="logging_in"></a>Accesso</h5>
        <p>L'accesso è tanto semplice quanto inserito l'indirizzo email e la password. 
          Devi <a href="#registering">registrarti</a> prima di loggarti. 
          Questo può essere effettuato seguendo il collegamento della registrazione nella pagina
          di accesso. Seleziona l'opzione &quot;Mantenere la connessione (richiede l'abilitazione dei cookie)&quot; 
          che userà i cookie per identificarti ogni volta che ritorni a fare una prenotazione, 
          evitando di dover accedere ogni volta. <i>Dovresti usare questa opzione solo se
          sei l'unica persona che utilizza le prenotazioni sul computer.</i> 
          Dopo la registrazione, sarai reindirizzato al <a href="#my_control_panel">Pannello 
          di Controllo</a>.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="language" id="language"></a>Selezione lingua</h5>
        <p>Nella pagina di accesso, esiste una casella di riepilogo con tutte le lingue
          di traduzione disponibili che l'amministratore ha incluso<a href="#my_control_panel"></a>.
          Per favore seleziona la lingua che preferisci e tutti i testi di phpScheduleIt
          saranno tradotti. Questo non tradurrà ogni testo inserito dall'amministratore
          o dagli utenti; tradurrà solo i testi dell'applicazione. Dovrai uscire e selezionare una lingua diversa.</p>
        <p align="right"><a href="#top">In alto</a></p>        
        <h5><a name="manage_profile" id="manage_profile"></a>Modifica info Profilo o Password</h5>
        <p>Per cambiare le informazioni del profilo (nome, email, etc.) oppure la password, 
          devi prima accedere nel sistema. Nel <a href="#my_control_panel">Pannello di Controllo</a>,
          <a href="#quick_links">I Miei Collegamenti</a>, fai click su&quot;Cambia il Mio Profilo&quot;.
          Questo ti mostrerà una pagina con i campi delle vari informazioni già inserite. Modifica ogni informazione
          che desideri. Ogni campo lasciato vuoto non sarà modificato. Se desideri modificare la password, 
          inseriscila due volte. Dopo aver modificato le informazioni, fai click su &quot;Modifica Profilo&quot; 
          e le modifiche saranno salvate nel database. A questo punto il sistema ti riporterà sul Pannello di Controllo.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="resetting_password" id="resetting_password"></a>Reimpostare la password dimenticata</h5>
        <p>Se hai dimenticato la password, puoi reimpostarla e ottenere una nuova che ti verrà inviata
          tramite email. Per fare questo, spostati nella pagina di accesso e clicca sul collegamento
          &quot;Ho dimenticato la Mia Password&quot; sotto la casella di accesso. 
          Sarai reindirizzato ad una nuova pagina e ti verrà chiesto di inserire l'indirizzo email.
          Dopo avere cliccato su &quot;Conferma&quot;, verrà creata una nuova password generata casualmente.
          Questa nuova password verrà impostata nel database ed inviata a te tramite email.
          Dopo aver ricevuto questa email, copia e incolla la nuova password, 
          <a href="#logging_in">entra</a> nel sistema, e <a href="#manage_profile">cambia immediatamente la password</a>.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="getting_support" id="getting_support"></a>Ottenere supporto</h5>
        <p>Se non hai i permessi per utilizzare una risorsa, hai domande su una risorsa,
         una prenotazione oppure il tuo profilo, usa il collegamento &quot;Spedisci Email all'Amministratore&quot;
         posizionato in <a href="#quick_links">I Miei Collegamenti.</a></p>
        <p align="right"><a href="#top">In alto</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="my_control_panel" id="my_control_panel"></a>Pannello di Controllo</h4>
        <p>Il Pannello di Controllo è la tua &quot;pagina principale&quot; per il sistema di prenotazioni.
          Qui puoi controllare, modificare oppure eliminare le tue prenotazioni. Il Pannello di Controllo 
          include anche un collegamento alla <a href="#using_the_scheduler">Programmazione</a>, 
          un collegamento a <a href="#quick_links">Cambia il Mio Profilo</a> e una opzione
          per uscire dal sistema di Prenotazione.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="quick_links" id="quick_links"></a>I Miei Link</h5>
        <p>La sezione I Miei Link ti fornirà l'elenco dei collegamenti alle applicazioni più comuni.
          Il primo, &quot;Prenotazioni&quot; mostrerà le prenotazioni predefinite.
          Qui puoi vedere la prenotazione delle risorse, riservare risorse,
          e modificare le prenotazioni attuali.</p>
        <p>&quot;Visualizza il Mio Calendario&quot; ti mostrerà un calendario con le prenotazioni che hai
         programmato o alle quali devi partecipare. Questo può essere mostrato per giorno, settimana o mese.</p>
        <p>&quot;Vedi Programmazione &amp; Calendario Risorse&quot; ti mostrerà un
          calendario delle prenotazioni delle risorse selezionate o di tutte le risorse
          di una programmazione selezionata. Se hai selezionato la visione giornaliera di una determinata
          risorsa, sarai anche in grado di stampare un &quot;Elenco registrazioni&quot; cliccando
          sull'icona a forma di portatile vicina al menu di selezione della risorsa.</p>
        <p>&quot;Cambia il Mio Profilo &quot; ti porterà su una pagina che ti permetterà di modificare
          le tue informazioni personali, come l'indirizzo email di accesso,
          nome, numero di telefono e password. Tutte le informazioni
          saranno riempite per te. I valori vuoti e non aggiornati non saranno modificati.</p>
        <p>&quot;Preferenze Mia Email&quot; ti mostrerà una pagina dove
          puoi scegliere come e quando vuoi essere contattato in caso di
          utilizzo del sistema di prenotazioni. In modo predefinito, riceverai email HTML con allarmi
          in qualunque momento aggiungi, modifichi oppure elimini una prenotazione.</p>
        <p>L'ultimo collegamento, &quot;Esci&quot; terminerà la sessione attuale e ti riporterà alla pagina di accesso.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="my_announcements" id="my_announcements"></a>I Miei Annunci</h5>
        <p>Questa tabella elencherà ogni prenotazione che l'amministratore di sistema ritiene importante.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="my_reservations" id="my_reservations"></a>Le Mie Prenotazioni</h5>
        <p>La tabella Le Mie Prenotazioni mostra tutte le prenotazioni future a cominciare dalla data odierna
          (in modo predefinito). Questa tabella elencherà la data di ciascuna prenotazione, 
          Risorsa, Data/Ora di creazione, Data/Ora della sua ultima modifica, 
          Orario Inizio e Orario Fine. Da questa tabella puoi anche modificare una prenotazione
          oppure eliminarla, semplicemente cliccando sul collegamento &quot;Modifica&quot; oppure &quot;Elimina&quot; 
          alla fine della riga di ogni prenotazione. Entrambe le ozpioni
          apriranno una nuova finestra dove potrai confermare le tue modifiche. 
          Facendo click sulla data di una prenotazione si aprirà una nuova finestra dove potrai vedere i dettagli
          della prenotazione.</p>
        <p>Per ordinare le prenotazioni in base ad una colonna specifica, fai click sul collegamento &#150; 
          o + all'inizio della colonna. Il segno meno ordinerà le prenotazioni in modo descrescente
          per quel nome colonna, il segno più ordinerà le prenotazioni in modo crescente per quel nome di colonna.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="my_training" id="my_training"></a>I Miei Permessi</h5>
        <p>La tabella I Miei Permessi mostra tutte le risorse per le quali disponi dei permesi
        di accesso.
		  Contiene il nome risorsa, la sua posizione e un numero di telefono al quale
          puoi chiamare per contattare il suo amministratore.</p>
        <p>Una volta registrato, non disporrai di alcun tipo di permesso per le diverse risorse
          a meno che l'amministratore non abbia deciso di assegnare agli utenti i permessi in modo automatico.
          L'amministratore è la sola persona che può assegnare i permessi per usare una risorsa.
          Non sarai abilitato a prenotare una risorsa per la quale non sei stato autorizzato,
          ma sarai in grado di vedere la sua programmazione e le prenotazioni attuali.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="my_invitations" id="my_invitations"></a>I Miei Inviti</h5>
        <p>La tabella I Miei Inviti mostra tutte le prenotazioni alle quali sei
          stato invitato e ti permette di accettare o rifiutare la partecipazione
          alle prenotazioni. Se accetti, avrai ancora la possibilità di
          completare la partecipazione in un secondo momento. Se rifiuti, non sarai in grado
          di accettare in futuro a meno che il creatore della prenotazione non ti inviti nuovamente.</p>
        <p align="right"><a href="#top">In alto</a></p>        
        <h5><a name="my_participation" id="my_participation"></a>Mie Partecipazioni alle Prenotazioni</h5>
        <p>La tabella Mie Partecipazioni alle Prenotazioni mostra tutte le prenotazioni
          alle quali devi partecipare. Questo non ti mostrerà le prenotazioni
          che tu hai creato. Da questa tabella, puoi scegliere di togliere la
          participazione ad una prenotazione selezionata. Se togli la partecipazione,
          non sarai in grado di partecipare a meno che il creatore della prenotazione non ti inviti nuovamente.</p>
        <p align="right"><a href="#top">Top</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="using_the_scheduler" id="using_the_scheduler"></a>Utilizzo sistema prenotazioni</h4>
        <p>Il pianificatore è dove puoi eseguire tutte le funzioni di prenotazione.
          La settimana visualizzata inizia con la settimana attuale e si estende per altri 7 giorni (in modo predefinito).
          Qui puoi vedere la prenotazione delle risorse, prenotare risorse, e
          modificare la prenotazioni attuali. Le prenotazioni saranno colorate di diverso tipo e saranno mostrate tutte,
          ma solo le <i>tue</i> prenotazioni avranno un collegamento per modificarle.
          Tutte le altre prenotazioni avranno soltanto un collegamento per mostrale.</p>
        <p>Puoi modificare le prenotazioni (se esiste più di una) utilizzando il menu a tendina che si trova
          all'inizio di ogni prenotazione.</p>
        <p>L'amministratore di sistema può specificare gli orari che sono &quot;fuori servizio&quot;,
          oppure determinare se non sono disponibili per l'amministratore. Le prenotazioni non saranno
          effettuate se sono in conflitto con un orario di fuori servizio.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="read_only" id="read_only"></a>Versione a sola lettura</h5>
        <p>Se non sei ancora registrato oppure non hai fatto l'accesso, puoi vedere
          una versione a sola lettura delle prenotazioni facendo click sul collegamento &quot;Vedi Programmazione&quot;
          sulla pagina di accesso. Questa versione delle prenotazioni mostrerà tutte le risorse
          e prenotazioni, ma non sarai in grado di vedere i loro dettagli e neanche di fare delle prenotazioni.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="making_a_reservation" id="making_a_reservation"></a>Effettuare una Prenotazione</h5>
        <p>Per prenotare una risorsa, prima devi andare nella tabella del giorno in cui desideri fare la
          prenotazione. Una volta che ti sei posizionato nella tabella del giorno interessato,
          fai click sul nome della risorsa. A questo punto si aprirà una finestra dove puoi selezionare i giorni di inizio
          e fine (se permesso) e gli orari in cui desideri prenotare la risorsa selezionata.</p>
        <p>Comparirà un messaggio sotto all'ora di selezione che ti informa
          quanto può essere lunga la prenotazione di questa risorsa. Se la tua prenotazione
          è maggiore o minore del tempo permesso, non sarà accettata.</p>
        <p>Puoi anche selezionare se vuoi ripetere questa prenotazione. Per ripetere
          una prenotazione, seleziona i giorni che vuoi venga ripetuta, poi seleziona
          la durata che vuoi avere per la ripetizione della prenotazione. La prenotazione
          sarà fatta per il giorno inizialmente selezionato, più tutti i giorni
          selezionati come ripetizione. Tutte le date che non potranno essere riservate perchè in
          conflitto saranno mostrate a video. Se stai creando una prenotazione con più giorni,
          le opzioni di ripetizione non saranno disponibili.</p>
        <p>Puoi aggiungere un riepilogo di questa prenotazione riempiendo la casella di testo sommario.
          Questo sommario sarà poi disponibile in lettura per tutti gli altri utenti.</p>        
        <p>Dopo avere impostato correttamente i giorni/orari di inizio e fine prenotazione
          e aver selezionato se vuoi una prenotazione ripetuta, premi il pulsante &quot;Salva&quot;.
           Un messeggio indicherà se la prenotazione non è stata effettuata correttamente, avvisandoti
           della/e data/e che non sono valide. Se la prenotazione non va a buon fine, torna indietro
           e modifica gli orari richiesti in modo che non si sovrappongano con altre prenotazioni attuali.
           Dopo che la prenotazione è stata effettuata correttamente, la programmazione
           sarà aggiornata automaticamente. Questo è necessario per ricaricare tutte le informazioni
           delle prenotazioni presenti nel database.</p>
        <p>Non puoi prenotare una risorsa per una data scaduta, per una risorsa
           che non hai il permesso di usare oppure per una risorsa che al momento è inattiva.
           Queste risorse saranno oscurate e non avranno un collegamento di prenotazione.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="modifying_deleting_a_reservation" id="modifying_deleting_a_reservation"></a>Modifica/Eliminazione di una Prenotazione</h5>
        <p>Esistono diversi modi per modificare o eliminare una prenotazione. Uno di questi è
          dal <a href="#my_control_panel">Pannello di Controllo</a> come descritto sopra.
          L'altro è attraverso la programmazione in linea. Come fatto notare precedentemente,
          sarai in grado di modificare solo le tue prenotazioni.
          Tutte le altre prenotazioni saranno mostrate a video, ma non avranno un collegamento per modificarle.</p>
        <p>Per modificare una prenotazione attraverso la programmazione, semplicemente fai click sulla prenotazione
          che desideri modificare. Questo aprirà una nuova finestra molto simile alla finestra Prenotazione. Hai due scelte;
          puoi modificare gli orari di inizio e fine della prenotazione,
          oppure puoi fare click sulla casella di spunta &quot;Elimina&quot;.
          Dopo avere effettuato le modifiche, premi il tasto &quot;Modifica&quot; 
          in fondo alla schermata. Le nuove opzioni saranno confrontate con le prenotazioni attuali e comparirà un messaggio
          che ti fa sapere lo stato della modifica. Se devi cambiare gli orari, torna indietro alla finestra di modifica
          e seleziona i nuovi orari che non sono in conflitto con le altre prenotazioni.
          Dopo che le tue prenotazioni sono state modificate con successo, la programmazione
          si aggiornerà automaticamente. Questo è necessario per ricaricare tutte le informazioni di prenotazione
          presenti nel database.</p>
        <p>Per modificare un gruppo di prenotazioni ricorrenti, verifica la casella chiamata
        &quot;Aggiornare tutti i record ricorrenti nel gruppo?&quot;. Qualsiasi data in conflitto sarà elencata.</p>
        <p>Non puoi modificare una prenotazione per una data scaduta.</p>
        <p align="right"><a href="#top">In alto</a></p>
        <h5><a name="navigating" id="navigating"></a>Navigazione tra le Prenotazioni</h5>
        <p>Esistono diversi modi per navigare tra le date della programmazione.</p>
        <p>Spostandosi tra le varie settimane usando i collegamenti &quot;Settimana Precedente&quot; e &quot;Settimana Seguente&quot;
         che si trovano in basso alla programmazione.</p>
        <p>Andare a qualsiasi data inserendola nella casella in fondo alla programmazione.</p>
        <p>Aprendo il calendario di navigazione facendo click sul collegamento  &quot;Visualizza Calendario Mensile&quot;
          in fondo alla programmazione. Trovare la data desiderata e fare click su di essa per
          spostarsi all'interno della programmazione alla data interessata.</p>
        <p align="right"><a href="#top">In alto</a></p>
      </td>
    </tr>
  </table>
</div>
