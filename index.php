<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-google-faq</title>

    <link rel="stylesheet" href="css/style.css">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous"
    />
    

</head>
<body>
    
    <?php 
        $faqs = [
            [
                'question' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",

                'answer' => "La recente <a href=\"#\">decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.<br><p>
                Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente 
                per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola 
                richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati 
                personali ed il diritto di tutti di conoscere e distribuire le informazioni. 
                </p>
                <br>
                <p>
                    Per presentare una richiesta di rimozione, compila questo <a href=\"#\">modulo web</a>. Riceverai una risposta automatica che conferma 
                    la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di 
                    tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati 
                    includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a 
                    che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, 
                    negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non 
                    eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione 
                    giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese.
                </p>
                <br>
                <p>
                    Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per 
                    perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di 
                    ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione 
                    della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
                </p>
                <br>
                <p>
                    Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati 
                    modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei 
                    quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.
                </p>"
            ],
            [
                'question' =>"Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
                'answer' =>"Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.
                </p>
                <br>
                <p>
                    Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google 
                    ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.
                </p>
                <br>
                <p>
                    Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href=\"#\">Centro Google per la sicurezza online</a>.
                </p>
                <br>
                <p>
                    <a href=\"#\">Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
            ],
            [
                'question' => "Perché il mio account è associato a un paese?",
                'answer' => "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:
                    </p>
                    <br>
                    <ol>
                        <li>
                            La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto 
                            delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una 
                            delle due società seguenti:
                            <ol type=\"a\">
                                <li>
                                    Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi 
                                    dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.
                                </li>
                                <li>
                                    Google LLC, con sede negli Stati Uniti, per il resto del mondo.
                                </li>
                            </ol>
                        </li>
                        <li>
                            La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.
                        </li>
                    </ol>
                    <br>
                    <p>
                        Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.
                    </p>
                    <br>
                    <h5>Stabilire il paese associato al tuo account</h5>
                    <p>
                        Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda 
                        gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i 
                        servizi in cui hai trascorso più tempo nell'ultimo anno.
                    </p>
                    <br>
                    <p>
                        I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro 
                        paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.
                    </p>
                    <br>
                    <p>
                        Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la 
                        differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale 
                        (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a href=\"#\">Contattaci</a> se 
                        ritieni che il paese associato al tuo account sia sbagliato."
            ],
            [
                'question' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
                'answer' => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili 
                sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti 
                web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i 
                contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href=\"#\">contattare il 
                webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una 
                modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, 
                desideri richiedere la rimozione di determinate informazioni su di te visualizzate 
                nei risultati di ricerca di Google, <a href=\"#\">fai clic qui</a>. Una volta che i contenuti saranno 
                stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non 
                verranno più visualizzate nei risultati di ricerca di Google. In caso di una 
                richiesta di rimozione urgente, è inoltre possibile <a href=\"#\">visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>."
            ],
            [
                'question' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca 
                vengono inviate ai siti web?",
                'answer' => " In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo 
                browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo 
                Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href=\"#\">URL referrer</a>. 
                Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di 
                ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata 
                di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati 
                come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad 
                esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca 
                SSL sono disponibili <a href=\"#\">qui</a>. Le query di ricerca o le informazioni contenute nell'URL 
                referrer potrebbero essere disponibili mediante Google Analytics o un'API 
                (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere 
                informazioni relative all' esatte parole chiave che hanno determinato il clic su un 
                annuncio."
            ]
            
        ];
    ?>

<header class="fixed-top">

<div class="top-header d-flex flex-row justify-content-between">
    <div class="left-header d-flex flex-row">
        <div class="logo-container">
            <img src="img/logo.png" alt="Google Logo">
        </div>
        <div class="privacy">
            <h5><a href="#">Privacy e termini</a></h5>
        </div>
    </div>

    <div class="right-header d-flex flex-row">
        <div class="grid-icon">
            <img src="img/button.ico" alt="menu">
        </div>
        <div class="user-img">
            <img src="img/unnamed.jpg" alt="User Image">
        </div>
    </div>
</div>

<div class="header-bottom">
    <ul class="header-menu d-flex flex-row m-0">
        <li>
            <a href="#">Introduzione</a>
        </li>
        <li>
            <a href="#">Norme sulla Privacy</a>
        </li>
        <li>
            <a href="#">Termini di servizio</a>
        </li>
        <li>
            <a href="#">Tecnologie</a>
        </li>
        <li class="selected">
            <a href="#">Domande frequenti</a>
        </li>
    </ul>
</div>

</header>

<main>
    <div class="container main-cont w-50">      
    
        <?php foreach($faqs as $faq){ ?> 
            <span>
                <h4><?php echo $faq['question']; ?></h4>
                <p><?php echo $faq['answer']; ?></p>
            </span>
        <?php }?>
    </div>  
</main>

<footer>
    <div class="container w-50  d-flex flex-row justify-content-between">
            <div class="footer-menu d-flex">
                <ul class="footer-left d-flex">
                    <li>
                        <a href="#">Google</a>
                    </li>
                    <li>
                        <a href="#">Tutto su Google</a>
                    </li>
                    <li>
                        <a href="#">Privacy</a>
                    </li>
                    <li>
                        <a href="#">Termini</a>
                    </li> 
                </ul>
            </div>
            <div class="footer-right">
                <form action="">
                    <select name="lingua" id="language">
                        <option value="af">Afrikaans</option>
                        <option value="bi">Bahasa Indonesia</option>
                        <option value="ms">Bahasa Melayu</option>
                        <option value="ca">Català</option>
                        <option value="cs">Čeština</option>
                        <option value="da">Dansk</option>
                        <option value="de">Deutsch</option>
                        <option value="et">Eesti</option>
                        <option value="en">English</option>
                        <option value="en-GB">English (United Kingdom)</option>
                        <option value="es">Español</option>
                        <option value="es-419">Español (Latinoamérica)</option>
                        <option value="eu">Euskara</option>
                        <option value="fil">Filipino</option>
                        <option value="fr">Français</option>
                        <option value="fr-CA">Français (Canada)</option>
                        <option value="gl">Galego</option>
                        <option value="hr">Hrvatski</option>
                        <option value="zu">Isizulu</option>
                        <option value="is">Íslenska</option>
                        <option selected="" value="it">Italiano</option>
                        <option value="sw">Kiswahili</option>
                        <option value="lv">Latviešu</option>
                        <option value="lt">Lietuvių</option>
                        <option value="hu">Magyar</option>
                        <option value="nl">Nederlands</option>
                        <option value="no">Norsk</option>
                        <option value="pl">Polski</option>
                        <option value="pt-BR">Português (Brasil)</option>
                        <option value="pt-PT">Português (Portugal)</option>
                        <option value="ro">Română</option>
                        <option value="sk">Slovenčina</option>
                        <option value="sl">Slovenščina</option>
                        <option value="sr-Latn">Srpski</option>
                        <option value="fi">Suomi</option>
                        <option value="sv">Svenska</option>
                        <option value="vi">Tiếng Việt</option>
                        <option value="tr">Türkçe</option>
                        <option value="el">Ελληνικά</option>
                        <option value="bg">Български</option>
                        <option value="ru">Русский</option>
                        <option value="sr">Српски</option>
                        <option value="uk">Українська</option>
                        <option value="iw">‫עברית‬</option>
                        <option value="ur">‫اردو‬</option>
                        <option value="ar">‫العربية‬</option>
                        <option value="fa">‫فارسی‬</option>
                        <option value="am">አማርኛ</option>
                        <option value="mr">मराठी</option>
                        <option value="hi">हिन्दी</option>
                        <option value="bn">বাংলা</option>
                        <option value="gu">ગુજરાતી</option>
                        <option value="ta">தமிழ்</option>
                        <option value="te">తెలుగు</option>
                        <option value="kn">ಕನ್ನಡ</option>
                        <option value="ml">മലയാളം</option>
                        <option value="th">ไทย</option>
                        <option value="ko">한국어</option>
                        <option value="zh-HK">中文 (香港)</option>
                        <option value="zh-CN">中文（简体中文）</option>
                        <option value="zh-TW">中文（繁體中文）</option>
                        <option value="ja">日本語</option>
                    </select>
                </form>
            </div>
        </div>
</footer>

    
</body>
</html>