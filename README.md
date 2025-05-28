# Sito Amichiamoci
Qui si trova il codice del sito web www.amichiamoci.it

Il branch principale (master) contiene il codice attuale che si trova sulla root del sito (non è l'unico codice che si trova sul sito, vi sono altre cartelle che questa repository non controlla)
Un push su questo branch avvierà un trigger che modificherà tramite ftp i file anche sul sito effettivo, mentre un push/pull sul branch test modificherà la copia del sito che si trova a
<https://www.amichiamoci.it/test>

Non è consigliato testare cambiamenti direttamente sul server, il branch test esiste per fare prove di feature prima di rilasciarle ufficialmente, non per vedere l'output di codice appena scritto.

## Raccomandazioni
Non immettere credenziali di alcun genere nella repo!
Le credenziali saranno uploadate dai trigger da delle variabili segrete di sistema o si troveranno già sul server

## Ringraziamenti
[<img alt="Deployed with FTP Deploy Action" src="https://img.shields.io/badge/Deployed With-FTP DEPLOY ACTION-%3CCOLOR%3E?style=for-the-badge&color=0077b6">](https://github.com/SamKirkland/FTP-Deploy-Action)
