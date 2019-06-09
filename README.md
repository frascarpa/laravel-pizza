config a db connection in 
> config/database.php

for seeding the db
> php artisan db:seed


serve the project with  (dev)
> php artisan serve

# specifiche

## Base di dati
> Tipi di pizze, ogni pizza con gli ingredienti e il prezzo.

> Magazzino: disponibilità degli
ingredienti (quantità). Utenti con nome e cognome, indirizzo, telefono, login e password.

> Ordini in corso: utente, tipo e numero di pizze, giorno di consegna, ora di consegna preferita,
indirizzo di consegna.

## Accesso senza login:
Catalogo delle pizze, visualizzazione e ricerca. Registrazione di un utente.
## Accesso con login:
Ordinazione di pizze.
Cancellazione di un'ordinazione.
## Accesso con login di amministratore:
Inserimento e modifica dei dati, degli utenti e degli ordini.
