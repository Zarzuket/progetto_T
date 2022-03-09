<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // REAL SEED
        // 2 = ricerca
        // 1 = scoperta
        $posts = [
            [
                "id" => 1,
                "category_id" => 2,
                "title" => "Anemia nei bambini, dai sintomi a come si cura",
                "description" => "Per i bambini con anemia serve una dieta specifica? Andiamo con ordine.
                La cura per l’anemia nei bambini richiede trattamenti diversi e specifici. Ci soffermeremo di seguito su quelli utilizzati per le forme più frequenti (talassemia e anemia da carenza di ferro).
                Nel caso di Dario non occorrerà nessun trattamento, in quanto la sua è una forma lieve di anemia ereditata dalla linea paterna, che non dovrebbe creargli particolari problemi di salute nemmeno con il passare del tempo. 
                
                Se parliamo di anemia legata a carenza di ferro, invece, occorrerà integrare questo elemento sia con specifici integratori, sia mediante un’adeguata alimentazione per bambini anemici. È bene ricordare che l’assunzione dell’integrazione di ferro prescritta dal pediatra deve avvenire lontano dai pasti e contestualmente all’assunzione di vitamina C (ad esempio succo di arancia o limone), che ne favorisce l’assorbimento intestinale. Al contrario, cibi contenenti calcio (latte e derivati) e tannini (tè e cioccolato) ne riducono l’assorbimento.
                
                Per ridurre il rischio di anemia nei bambini, cosa mangiare? Un’alimentazione corretta, varia e bilanciata può essere un efficace strumento per prevenire questa condizione. La scelta ricadrà ovviamente su cibi ricchi di ferro, ovvero:
                
                carni rosse (fegato e frattaglie soprattutto);
                carni magre come il tacchino;
                pesce azzurro;
                legumi;
                funghi secchi;
                frutta secca;
                cereali integrali (ad esempio il riso);
                farina di soia;
                verdure a foglia verde scuro (ad esempio il crescione e il cavolo riccio).
                Associare al pasto una spremuta di agrumi può incrementare l’assorbimento di ferro attraverso la vitamina C.I regimi dietetici particolari come quelli vegetariani o vegani necessitano di attente integrazioni per bilanciare l’acquisizione di micronutrienti, tra cui appunto il ferro, che rischiano di essere assunti in misura inferiore.",
                "preview" => "Per i bambini con anemia serve una dieta specifica? Andiamo con ordine..."
            ],
            [
                "id" => 1,
                "category_id" => 2,
                "title" => "La prevenzione dell’obesità in età pediatrica",
                "description" => "Sempre più spesso, in tutto il mondo, sentiamo levarsi grida d’allarme su un fenomeno preoccupante: quello dell’obesità infantile.

                Nonostante l’attenzione e le risorse messe a disposizione per la prevenzione, ci scontriamo sempre di più con le difficoltà legate alla complessità delle problematiche che ruotano intorno a questo fenomeno e rendono spesso vane le azioni intraprese.
                
                L’obesità infantile, oggi, ha un grande impatto sociale.
                
                È infatti uno dei principali fattori di rischio per lo sviluppo futuro di molte malattie croniche. In Italia, circa 3 bambini su 10 presentano un eccesso ponderale e in 1/3 di essi si configura uno stato di obesità. Diversamente da quanto creduto, l’obesità raramente ha un’eziologia puramente genetica o endocrina: sono di grande importanza i fattori ambientali, come gli errori alimentari e lo stile di vita sedentario, oltre ai fattori psicologici individuali e familiari. Troppo frequentemente i genitori, e non solo, sottovalutano o riconoscono tardivamente la loro importanza come concausa dell’eccesso ponderale del bambino.
                
                Per esempio, spesso si ritiene che, con la crescita, il bambino possa riequilibrare il rapporto tra peso e altezza spontaneamente, dimostrando una scarsa consapevolezza delle complicanze associate comunemente a questo fenomeno. Considerato che non esistono farmaci idonei a trattare il bambino con obesità, la prevenzione riveste un’importanza primaria, attraverso l’educazione a corretti stili di vita diretti in gran parte al contrasto della sedentarietà e all’implementazione dell’attività motoria e fisica, oltre che all’acquisizione di corrette abitudini alimentari.
                
                Per il raggiungimento dell’obiettivo, quindi, è indispensabile coinvolgere l’intera famiglia. Qualora, nonostante la prevenzione, si instauri un eccesso ponderale, è fondamentale intervenire tempestivamente per combattere la progressione e la comparsa di complicanze.
                
                Con l’istituzione dell’Ambulatorio multidisciplinare per la diagnosi e la cura dell’obesità dell’Azienda Ospedaliero-Universitaria Meyer di Firenze, giunto al secondo anno di attività, è stato avviato un programma di contrasto di questo fenomeno, mirato alla presa in carico globale del paziente affetto da obesità grave.
                
                Il progetto è nato e portato avanti grazie all’impegno di tutto il gruppo di lavoro: il pediatra Franco Ricci, la psicologa Alessandra Bettini, la dietista Maria Amina Sammarco, che hanno espresso così tanta passione nel far capire la complessità del problema e la necessità di una 'visione a 360 gradi'.",
                "preview" => "Nonostante l’attenzione e le risorse messe a disposizione per la prevenzione, ci scontriamo sempre di più con le difficoltà legate alla complessità delle problematiche che ruotano intorno a questo fenomeno e rendono spesso vane le azioni..."
            ],
            [
                "id" => 2,
                "category_id" => 2,
                "title" => "Pace Maker",
                "description" => "Il Pace Maker è un dispositivo di dimensioni ridotte che eroga piccoli impulsi elettrici. Questi impulsi elettrici viaggiano all’interno di elettrocateteri per raggiungere il cuore e stimolarlo quando questo batte troppo lentamente.

                A cosa serve?
                
                L’indicazione più frequente al posizionamento del pace maker è la bradicardia. Il cuore cioè batte troppo lentamente e questo può comportare affaticamento o, in alcuni casi, svenimento. In questi casi il pace maker impedisce al cuore di rallentare troppo, mantenendo una frequenza cardiaca normale.
                
                In cosa consiste l’intervento?
                
                Il Cardiologo Elettrofisiologo posiziona gli elettrocateri all’interno del cuore mediante una puntura indolore nella regione della clavicola sinistra. Dopodiché, attraverso una piccola incisione sulla cute, posiziona il Pace Maker sotto la pelle. Infine chiude la ferita con dei punti di sutura.
                
                Quanto dura l’intervento?
                
                La durata dell’ intervento varia a seconda del tipo di Pacemaker. Solitamente l’intervento richiede da 30 a 60 minuti.
                
                È doloroso?
                
                No. L’ operazione si svolge sempre in anestesia locale per cui non si avverte dolore nella sede di intervento.
                
                Dopo l’intervento posso riprendere una vita normale?
                
                Si. Il giorno stesso dell’ intervento è preferibile limitare i movimenti del braccio sinistro. Nel mese successivo all’intervento è preferibile evitare eccessivi movimenti di rotazione della spalla sinistra. Chiedi consiglio al tuo Cardiologo per ulteriori chiarimenti. 
                
                Quanto dura la batteria?
                
                La durata della batteria varia in base al tipo di Pacemaker. Mediamente dura da 5 a più di 10 anni. Quando la batteria si esaurisce si può sostituire con un semplicissimo intervento.
                
                L'informazione presente nel sito deve servire a migliorare, e non a sostituire, il rapporto medico-paziente. In caso di disturbi e/o malattie rivolgiti al tuo medico di base o ad uno specialista.",
                "preview" => "L’indicazione più frequente al posizionamento del pace maker è..."
            ],
            [
                "id" => 3,
                "category_id" => 2,
                "title" => "Infarto Miocardico",
                "description" => "L’ infarto è la prima causa di mortalità nel mondo Occidentale. Vediamo insieme perché molte persone soffrono di infarto e come è possibile diagnosticare, curare e prevenire questa malattia.

 

                Cos’è l’infarto?
                Le malattie delle arterie coronarie fanno parte delle cosiddette “patologie cardiovascolari”, che rappresentano purtroppo la principale causa di morte nei paesi occidentali. Le malattie delle arterie coronarie si sviluppano quando le arterie coronarie, i principali vasi sanguigni che forniscono sangue al cuore, sono danneggiati o malati e il cuore non riceve un sufficiente apporto di sangue.
                
                Cosa causa l’infarto?
                La principale causa delle malattie delle arterie coronarie è l’arteriosclerosi, ovvero il restringimento delle arterie a causa dell’accumulo di placche di colesterolo. Come conseguenza di ciò il sangue fatica a scorrere nelle arterie e a raggiungere il cuore. I tessuti cardiaci che non sono sufficientemente irrorati dalla coronaria malata sviluppano sofferenza. Se tale sofferenza persiste e non si provvede a ripristinare il corretto flusso sanguigno, la zona di tessuto cardiaco andrà incontro a morte o 'infarto'.
                
                Quali sono i fattori di rischio?
                Il fumo, l’ ipertensione arteriosa, il sovrappeso, l’ obesità, il diabete, il colesterolo elevato nel sangue rappresentano i principali fattori di rischio modificabili che possono portare ad infarto. Il fattore di rischio non modificabile è la familiarità per infarto. L’ infarto dunque è una malattia che si può prevenire, eliminando quelle abitudini di vita sbagliate, frutto della sedentarietà e dello stress.
                
                Quali sono i sintomi?
                Il dolore al petto è solitamente il sintomo tipico dell’ infarto. Qualche volta il dolore può interessare anche il braccio sinistro, la mandibola. raramente può far mal il braccio destro. Raramente l’ infarto può manifestarsi con sintomatologia particolare, come sensazione di indigestione o bruciore allo stomaco. Talvolta puo anche non dare sintomi ne dolore, il cosiddetto 'infarto silente'.
                
                Come si fa la diagnosi?
                La diagnosi di infarto richiede una valutazione cardiologica completa. Il cardiologo, attraverso il racconto del paziente, può sospettare la presenza di infarto o di predisposizione ad infarto. L’ elettrocardiogramma permette di capire se c’ è un infarto in atto. L’ ecografia cardiaca permette al Cardiologo di vedere il funzionamento del cuore e del muscolo cardiaco che può essere danneggiato in caso di infarto. Altri approfondimenti, tra cui il test da sforzo al cicloergometro, permettono di quantificare la probabilità di sviluppare un infarto. Attraverso un prelievo di sangue con la ricerca delle Troponine, si può confermare la diagnosi di infarto. 
                
                Come si cura?
                La Coronarografia è l’ intervento che permette al Cardiologo di visualizzare le arterie coronarie e di pulirle dalle ostruzioni responsabili dell’ infarto. Questa operazione si chiama angioplastica. Una volta pulita la coronaria malata, si posiziona solitamente uno stent che serve a tenere aperto il vaso sanguigno ed impedire che si chiuda nuovamente.  Raramente, se le coronarie sono molto malate, si deve ricorrere alla cardiochirurgia ed al posizionamento di bypass.
                
                L'informazione presente nel sito deve servire a migliorare, e non a sostituire, il rapporto medico-paziente. In caso di disturbi e/o malattie rivolgiti al tuo medico di base o ad uno specialista.",
                "preview" => "Le malattie delle arterie coronarie fanno parte delle cosiddette “patologie cardiovascolari”, che rappresentano..."
            ],
            [
                "id" => 1,
                "category_id" => 1,
                "title" => "La risposta all’immunoterapia si può leggere nel sangue",
                "description" => "In futuro, un semplice esame del sangue potrebbe essere sufficiente per sapere in anticipo se l’immunoterapia contro il melanoma ha probabilità di successo o se è preferibile scegliere da subito un altro trattamento. Enrico Lugli, dell’IRCCS Istituto Clinico Humanitas, e Andrea Cossarizza, dell’Università di Modena e Reggio Emilia, hanno infatti scoperto, con i loro gruppi di ricerca, che i livelli misurati nel sangue di una popolazione di cellule immunitarie chiamate MAIT possono aiutare a prevedere le probabilità di risposta all’immunoterapia nei pazienti con melanoma in stadio avanzato. MAIT è l’acronimo dell’inglese: mucosal-associated invariant T. I risultati della ricerca sono stati pubblicati di recente sulla rivista Nature Communications.

                L’avvento dei cosiddetti inibitori dei checkpoint immunitari, farmaci immunoterapici capaci di rimuovere i blocchi che impediscono al sistema immunitario di combattere il cancro, ha consentito grandi progressi nella lotta a diverse neoplasie, in particolare contro il melanoma. Tuttavia non tutti i pazienti rispondono ai trattamenti allo stesso modo: in alcuni si osserva un’efficacia elevatissima, in altri la risposta è molto debole. I ricercatori in tutto il mondo stanno cercando di comprendere da cosa possano derivare queste differenze.
                
                “Nel nostro caso abbiamo studiato 28 pazienti con melanoma avanzato che erano stati trattati con inibitori dei checkpoint immunitari, cercando le differenze tra quelli che avevano risposto in modo migliore e più duraturo al trattamento e quelli in cui i farmaci mostravano una minore efficacia” spiega Enrico Lugli, a capo del laboratorio di immunologia traslazionale di Humanitas. “Abbiamo scoperto che i pazienti che rispondevano meglio al trattamento avevano livelli più alti di linfociti T di tipo MAIT”.
                
                Le cellule MAIT sono una particolare famiglia di cellule T e devono il nome al fatto di essere state individuate inizialmente nei tessuti delle mucose, come quelli del tratto intestinale e dei polmoni. In realtà sono presenti anche nel sangue e in diversi tessuti e organi, come il fegato. Agiscono come prima linea di difesa contro le infezioni, ma possono anche contribuire a malattie autoimmuni e altre sempre mediate dal sistema immunitario.
                
                “Analizzando i nostri dati, e combinandoli con i risultati di altri studi pubblicati, a disposizione dalla comunità scientifica, abbiamo scoperto che le differenze nei livelli di MAIT erano precedenti all’inizio del trattamento. Questo ci fa pensare che siano efficaci come biomarcatori per sapere in anticipo chi con maggiore probabilità risponderà positivamente alla terapia” aggiunge Lugli.
                
                Al momento, spiega il ricercatore, non è chiaro in che modo le cellule MAIT condizionino la risposta all’immunoterapia. Potrebbero svolgere un ruolo diretto nel contrastare il tumore, agire in modo sinergico con i farmaci o essere coinvolti in altri meccanismi ancora ignoti. Occorreranno ulteriori ricerche per capire questo aspetto e anche per raccogliere maggiori informazioni sul loro ruolo come marcatori di risposta al trattamento. Se questa capacità fosse confermata, sarebbe possibile disporre di un test semplice per scegliere per ciascun malato il trattamento con maggiori probabilità di successo. Questo approccio, inoltre, potrebbe rivelarsi valido anche per altre neoplasie, oltre al melanoma, che oggi prevedono l’impiego dei farmaci immunoterapici.",
                "preview" => "In futuro, un semplice esame del sangue potrebbe essere sufficiente per sapere in anticipo se l’immunoterapia contro il melanoma ha probabilità di successo o se è preferibile scegliere da subito un altro trattamento. Enrico Lugli, dell’IRCCS Istituto Clinico Humanitas..."
            ],
            [
                "id" => 3,
                "category_id" => 1,
                "title" => "Cachessia tumorale: individuato un possibile bersaglio molecolare per recuperare massa e forza muscolari",
                "description" => "Chiarire i meccanismi molecolari del deperimento muscolare associato a cachessia, una sorta di “esaurimento” del muscolo e del tessuto adiposo al quale vanno incontro molti pazienti con cancro, è uno degli obiettivi del gruppo di ricerca guidato da Bert Blaauw dell’Università di Padova presso l’Istituto veneto di medicina molecolare. Il gruppo ha appena descritto sul Journal of Cachexia, Sarcopenia and Muscle l’identificazione di un possibile bersaglio molecolare sul quale lavorare per aiutare i pazienti a recuperare massa e forza muscolari durante la cachessia tumorale. I risultati sono stati ottenuti grazie al fondamentale sostegno di Fondazione AIRC.

                “Siamo partiti da una via di comunicazione cellulare già nota per il suo ruolo nel mantenimento dell’equilibrio funzionale del muscolo, chiamata via Akt-mTOR” spiega Blaauw. “Si tratta di una via che, quando attivata, promuove la crescita delle fibre muscolari. Allo stesso tempo, però, è noto che questa via è attivata anche in vari tumori, motivo per il quale è usata come bersaglio di molti farmaci antitumorali, che hanno come effetto collaterale un aumento del deperimento muscolare. Obiettivo della nostra ricerca è capire meglio che cosa succede sia quando si inibisce la via Akt-mTOR nel muscolo scheletrico in una situazione di cachessia tumorale, sia quando la si riattiva”.
                
                In topi di laboratorio, Blaauw e colleghi hanno anzitutto confermato che negli animali con tumore che mostrano deperimento muscolare la via Akt-mTOR è meno attiva del normale. La sua ulteriore riduzione o il suo spegnimento, però, non sembrano aumentare la perdita di massa muscolare. Viceversa, la riattivazione della via tramite modifiche genetiche ha portato a un recupero quasi completo non solo della massa muscolare, ma anche della forza. “In più, abbiamo osservato che le cellule muscolari recuperano una serie di caratteristiche molecolari che si erano alterate nel corso del deperimento.” 
                
                Come potrebbero beneficiare i pazienti di queste osservazioni? Sappiamo che l’esercizio fisico può attivare la via Akt-mTOR, ma resta da capire quali tipi di esercizi siano più efficaci a questo scopo e per quanto tempo debbano essere praticati per ottenere un risultato. “Avere questa informazione permetterebbe di costruire piani mirati di attività fisica per i pazienti colpiti da cachessia, in modo che debbano fare solo quanto è strettamente necessario per avere un beneficio muscolare” spiega Blaauw. Un’altra opzione potrebbe essere farmacologica. “Ci sono gruppi di ricerca nel mondo che stanno lavorando a tecniche per veicolare farmaci in maniera precisa in un determinato tessuto. In futuro queste tecniche potrebbero, per esempio, permettere l’attivazione di Akt-mTOR solo nel muscolo scheletrico durante la cachessia tumorale.”",
                "preview" => "Chiarire i meccanismi molecolari del deperimento muscolare associato a cachessia, una sorta di “esaurimento”..."
            ],
            [
                "id" => 5,
                "category_id" => 2,
                "title" => "L'irsutismo",
                "description" => "'Donna barbuta è sempre piaciuta'.

                Mai proverbio ha avuto un più chiaro intento consolatorio e ha goduto di minore credibilità. Tanto meno ai giorni nostri in cui le immagini-simbolo che rimbalzano dai settimanali femminili e  di opinione sono quelle di splendide fanciulle liscie e levigate, senza l'ombra di un pelo.
                Per adeguarsi a tali glabri modelli moltissime donne, <novelle Sisifo>, si sottopongono alle più estenuanti fatiche: si radono (con rasoi a mano o elettrici), si depilano (con cerette calde, fredde, alle alghe, al miele), si affidano a mani esperte per un'elettrolisi o per un’elettrocoagulazione <definitiva>; ma loro, i peli, irrimediabilmente ricrescono.
                È una lotta continua, di cui spesso fanno le spese anche i peli innocenti, quelli normali, quelli che avrebbero tutto il diritto di stare nelle zone fisiologicamente loro assegnate.    
                
                Il problema diventa ancora più stressante quando esiste un reale eccesso di peluria, una iperpelosità, che viene definita ipertricosi quando conserva una distribuzione tipicamente femminile (ascelle, pube, avambracci e gambe), irsutismo quando invece interessa zone che nella donna dovrebbero essere esenti da peli (volto, addome, solco intermammario, zone periareolari della mammella, dorso delle mani, coscie, braccia).
                
                Molte volte questa iperpelosità è espressione di una caratteristica costituzionale (è molto diffusa fra le donne del bacino mediterraneo), perciò detta idiopatica: a livello di follicolo pilifero vi sarebbe un eccesso di un enzima, la 5-alfa-reduttasi, che trasforma il testosterone in un ormone ancora più potente, il diidro-testosterone, proprio come per l’acne.
                Ma non è raro, invece, che l'eccesso di peluria sia la parte emergente, la più evidente, di una disfunzione ormonale che determina una iper-produzione di androgeni, per la quale è consigliabile che il terapeuta sia l'endocrinologo e non l'estetista.
                
                La endocrinopatia può essere a partenza ovarica o surrenalica. La patologia di gran lunga più comune alla base di un irsutismo è la policistosi ovarica. Il rischio di incorrere in questa patologia è maggiore se la paziente è in soprappeso perché l’iperinsulinismo associato a questa condizione stimola la la produzione ovarica di androgeni.",
                "preview" => "Mai proverbio ha avuto un più chiaro intento consolatorio e ha goduto di minore credibilità. Tanto meno ai giorni nostri..."
            ],
            [
                "id" => 1,
                "category_id" => 1,
                "title" => "Una nuova tecnica per studiare i meccanismi di resistenza dei tumori alle terapie (e non solo)",
                "description" => "Ormai è sempre più chiaro che la capacità dei tumori di resistere alle terapie dipende anche da modifiche epigenetiche, cioè da modifiche del modo in cui le cellule leggono e utilizzano il DNA. In passato si pensava che i problemi di resistenza ai farmaci fossero dovuti solo a mutazioni genetiche insorte nelle cellule tumorali, ovvero da variazioni nella sequenza del DNA. Studiare queste modifiche epigenetiche non è semplice, ma è quello che sono riusciti a fare i ricercatori del Centro di scienze omiche dell’IRCCS Ospedale San Raffaele di Milano, guidato da Giovanni Tonon. Il merito è di una nuova tecnica che hanno sviluppato e pubblicato sulla rivista Nature Biotechnology.

                La tecnica lavora su singole cellule, analizzando in ciascuna lo stato della cromatina. Di questa sostanza sono fatti i cromosomi, lunghe molecole di DNA strettamente avvolte attorno a proteine, garantendo così il compattamento necessario a far stare tutto il materiale genetico nel piccolo nucleo della cellula. Se una sequenza di DNA si trova in una zona molto compatta (cromatina chiusa), la sua trascrizione e conseguente traduzione nella proteina corrispondente è molto difficile. Al contrario, se si trova in una zona poco avvolta (cromatina aperta) viene più facilmente trascritta e tradotta. Lo stato di compattamento della cromatina varia a seconda del tipo cellulare e del momento della vita della cellula, e sono proprio le modifiche epigenetiche a far variare questo stato. Per questo è così importante analizzarlo in modo dinamico.
                
                'Per mettere a punto la tecnica siamo partiti da una proteina capace di riconoscere le regioni di cromatina aperta e l’abbiamo combinata a una seconda proteina che riconosce invece la cromatina chiusa' spiegano Francesca Giannese e Dejan Lazarevic, coordinatori dell’Innovation Lab del Centro di scienze omiche, e Davide Cittaro, bioinformatico del laboratorio. 'Grazie a questa proteina ibrida è possibile riconoscere e quantificare le due forme di cromatina presenti in un determinato momento in una cellula'. Secondo i ricercatori, il rapporto relativo tra le due forme di cromatina permette di predire il comportamento delle cellule, cioè prevedere quali geni stiano per trascrivere e quali programmi cellulari stiano per avviare. 'Sono informazioni molto importanti per studiare processi dinamici come lo sviluppo embrionale, la trasformazione tumorale o lo sviluppo di resistenza ai farmaci da parte delle cellule tumorali' commenta Tonon. 'Abbiamo già cominciato a identificare nuove vie metaboliche, coinvolte nell’insorgenza delle resistenze, che sono regolate proprio a livello epigenetico'.
                
                Lo studio è stato reso possibile dal contributo di Fondazione AIRC per diversi tipi di grant, tra cui Investigator Grant, Programmi '5 per mille' e un Accelerator Award sostenuto da AIRC e Cancer Research UK (CRUK). “Non solo AIRC ci ha dato le risorse per lavorare” sottolinea Tonon 'ma il tipo di finanziamento che ha sostenuto questo studio ci ha anche dato il tempo necessario (cinque anni) per portarlo avanti lavorando anche con altri gruppi nazionali e internazionali'.",
                "preview" => "Ormai è sempre più chiaro che la capacità dei tumori di resistere alle terapie dipende anche da modifiche epigenetiche..."
            ],
        ];
        foreach ($posts as $post){
            $newPost = new Post();
            $newPost->user_id = $post["id"];
            $newPost->category_id = $post["category_id"];
            $newPost->title = $post["title"];
            $newPost->preview = $post['preview'];
            $newPost->slug = Str::of($post["title"])->slug('-');
            $newPost->description = $post["description"];
            $newPost->save();
        }
    }
}