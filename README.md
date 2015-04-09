# EnkelKode

Om du ikke vet hvordan du bruker GIT, så last ned på denne måten
1. Trykk på knappen "Downloade Zip".
2. Åpne zip filen og klikk deg innover til du kommer til filene.
3. Fjern .gitattributes, .gitignore (om du ser dem, ellers ikke bry deg om dem) og nbproject mappen
4. Putt resten av filene og mappene inn i et nytt prosjekt, eller putt det i en mappe rett inn i webserveren.


Gjøre klar databasen:
For å bruke dette programmet må du lage en database. Du lager denne ved å gå inn i phpMyadmin (google det om du ikke finner fram). 
Der skal du opprette en database som heter "enkelkode". Inne i databasen skal du så lage et table med 3 plassholdere; id, title
og content. Id skal være primary med A_I og ha lengde 11, title skal være varchar med lengde 255, og content skal være text 
(trenger ikke å indikere lengde).
 
Du må også gå inn i php mappen og så inn i filen connection.php. Her skal du endre brukernavnet og passordet til din database
slik at du kan koble deg på databasen din.

Etter dette er det bare å kjøre en av html filene, og legge til et par posts via nettsiden. Les gjennom den godt dokumenterte
koden. Ikke glem å lese gjennom de relevante php filene i php mappen. Håper du forstår koden! Send meg en melding på face om 
du ikke forstår eller ikke får det til.

Mattis
