__DESCRIZIONE__
Proviamo a replicare il layout di un sito basandoci sullo screenshot in allegato!

__SVOLGIMENTO__
Creiamo un nuovo progetto Laravel.

Concentriamoci sul layout: creiamo un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.

Creiamo poi una rotta per visualizzare la lista di tutti i fumetti recuperati dal file comics.php che trovate in allegato,  inserendoli nella cartella config e abbelliamo il tutto sfruttando SASS

__MILESTONE__

# Milestone 1 - Setup iniziale del progetto Laravel√
- Creazione progetto laravel-comics √
- Configurazione ambiente (.env, database se necessario).√
- Avvio del server locale (php artisan serve).√

# Milestone 2 - Creazione del layout principale√
- Creazione file Blade resources/views/layouts/app.blade.php.√
- Inserimento struttura HTML base (doctype, head, body).√
- Includere gli elementi comuni tramite partials:√
    1. resources/views/partials/header.blade.php√
    2. resources/views/partials/footer.blade.php√
- Utilizzo della direttiva @yield('content') per gestire i contenuti dinamici.√

# Milestone 3 - Creazione della rotta principale√
- Aggiunta della rotta nel file routes/web.php per la pagina principale /comics.√
<!-- - Creazione controller (es. ComicController) e metodo index. -->

# Milestone 4 - Recupero dati da config/comics.php√
- Creazione file config/comics.php e inserimento array fornito.√
<!-- - Recupero dati con config('comics') all’interno del controller. -->

# Milestone 5 - Visualizzazione lista fumetti√
- Ciclo @foreach per stampare i fumetti.√
- Strutturazione HTML/CSS base per layout a griglia.√

# Milestone 6 - Integrazione e compilazione SASS√
- Installazione e configurazione Bootstrap.√
- Compilazione con npm run dev.√
- Styling della griglia fumetti, header e footer.√

# Bonus 1 – Pagine istituzionali, creazione di pagine statiche
- Es: About, Contatti, Chi siamo.√
- Creazione rotte dedicate e view Blade che estendono layouts.app.√

# Bonus 2 – Componenti riutilizzabili - creazione componenti Blade
- Es: @component('components.card', ['comic' => $comic])√
- Posizionare il componente in resources/views/components/card.blade.php.√
- Utilizzo del componente nella view principale e, se utile, nelle altre pagine.√

# Facoltativo – UX migliorata
- Animazioni CSS leggere su hover.√
- Responsive design per griglia fumetti.√



