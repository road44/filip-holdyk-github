# WORKFLOW.md - Opis krok po kroku

## Początek

1. Należy pobrać aplikację **Git**
2. Należy pobrać również **Visual Studio Code**

## TWORZENIE BRANCH'y

1. Wchodzimy w zakładkę _Source Control_ _(zrzut nr.1)_
2. Wybieramy odpowiednie repozytorium
3. Klikamy na te trzy kreski _(zrzut nr.2)_
4. Najrzdżamy kursorem na zakładkę **Branch** i wybieramy z listy **Create Branch** _(zrzut nr.3)_
5. Po wykonaniu commitowania należy kliknąć orzycisk **Publish Branch**

## Commitowanie

1. Należy dodać lub zmodyfikować istnięjące pliki
2. Kliknąc przycisk **commit** _(zrzut nr.2)_
3. Następnie należy uzupełnić wiadomość commitu _(zrzut nr.5)_

## Pushowanie

1. Po wykonaniu commitu należy kliknąć przycisk **Sync Changes** _(zrzut nr.6)_

## Otwieranie Pull Request (PR)

1. Należy pobrać odpowiednią wtyczke w zależności od tego na jakiej platformie ma się repozytorium _(**GitHub** zrzut nr.7 gh)_ _(**BitBucket** zrzut nr.7 bb)_
2. w zakładce **Source Control** _(zrzut nr.1)_ klikamy **Create Pull Request** _(zrzut nr.8)_
3. Wybieramy brancha w którym chcemy utworzyć **PR** i uzupełniamy opis _(zrzut nr.9)_
4. Klikamy przycisk **Create** _(zrzut nr.9)_
5. Pojawi nam się okno ze wszystkimi commitami i pushami które wykonaliśmy _(zrzut nr.10)_

## Mergowanie

1. Jak już otworzyliśmy **PR** i chcemy go zmergować klikamy **Create Merge Commit** _(zrzut nr.11)_
2. Zapyta się nas dwa razy czy jesteśmy pewni tego co robimy i tyle

## Robienie Review kodu

Proces ten różni się nieco od siebie między tymi dwoma platformami

### Review kodu - GitHub

1. Wchodzimy w zakładkę **Pull Requests** _(zrzut nr.12)_
2. Wybieramy z listy ten **PR** któremu chcemy zrobic review _(zrzut nr.13)_
3. Wchodzimy w zakładkę **Files changed** _(zrzut nr.14)_
4. Klikamy zielony przycisk **Review changes** i wpisujemy nasz komentarz _(zrzut nr.15)_

### Review Kodu - BitBucket

1. Wchodzimy z zakładkę **PR** a później w zakładkę **Files changes** _(zrzut nr.16)_
2. Możemy dodać komentarz do konkretnej linijki poprzez kliknięcie plusika przy linijce _(zrzut nr.17)_ i kliknięciu **Start review**
3. Możemy też dodać komentarz ogólny w sekcji **Overview** _(zrzut nr.18)_

## Konfigurowanie uprawnień i protection rules GitHub

### Ustawianie _Rulesetes_

1. Wchodzimy w zakłdakę **Settings** _(zrzut nr.12)_
2. wchodzimy w **Rules -> Rulesets**
3. Pojawi się zielony przycisk. Po jego kliknięciu możemy wybrać czy chcemy ustawić zestaw zabezpieczeń dla **tag'y** albo dla **branchu** _(zrzut nr.19)_
4.
