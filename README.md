# MVC

Projekt prezentujący wykorzystanie wzorca projektowego MVC do obiektowej implementacji prostej aplikacji internetowej w języku PHP.

# Jak uruchomić projekt

## Odtworzenie katalogu vendor
W katalogu projektu należy uruchomić z linii komend skrypt `install_vendor.sh` wykonując polecenie:

    ./install_vendor.sh

## Plik konfiguracyjny env.ini
W pliku `.env` znajdują się parametry konfiguracyjne aplikacji, który w zależności od potrzeb można zmodyfikować.

## Uruchomienie kontenerów

### Uruchamianie VS Code z poziomu kontenera aplikacji
Uruchomienie wymaga zainstalowania rozszerzenia Dev Containers dla VS Code (https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers). Mając otworzony projekt w VS Code z poziomu WSL należy otworzyć paletę poleceń (skrót `Ctrl + Shift + P`) i uruchomić polecenie:

    DevContainers: Reopen in Container

### Uruchamianie VS Code z poziomu WSL
Z katalogu głównego aplikacji (`./`) należy wykonać polecenie:

    docker compose up -d        

Na podstawie pliku konfiguracyjnego `docker-compose.yml` zostaną uruchomione trzy kontenery:

- kontener aplikacji (nasłuchujący na porcie `:80`),
- kontener bazy danych (nasłuchujący na porcie `:3306`),
- kontener aplikacji `phpmyadmin` (nasłuchujący na porcie `:8000`).

## Odtworzenie bazy danych
W celu odtworzenie testowej bazy danych należy uruchomić aplikację `phpmyadmin`, dostępną pod adresem `http:\\localhost:8000`. Zalogować się do aplikacji z użyciem danych dostępowych, skonfigurowanych w pliku `docker-compose.yml` (domyślnie, `użytkownik:  user`, `hasło: 123456`). Wybrać bazę danych aplikacji (domyślnie `mvc`). Przejść do zakładki `SQL`. W pole `Wykonanie zapytania/zapytań SQL do bazy danych mvc:` wkleić zawartość pliku `./www/migrations/categories.sql` i kliknąć `wykonaj`.

## Uruchomienie aplikacji
Aplikacja dostępna jest pod adresem `http://localhost`.

## Praca z kontenerami

### Uruchomienie kontenerów
    docker compose up -d

### Podgląd listy kontenerów

    docker container ls

### Wykonanie polecenia na uruchomionym  kontenerze
    docker exec [OPTIONS] CONTAINER COMMAND [ARG...]

 Przykładowo: instalacja pakietu z użyciem narzędzia composer 

    docker exec mvc-www-1 composer require kint-php/kint

### Zatrzymanie kontenerów
    docker compose down

### Zatrzymanie kontenerów wraz z usunięciem wolumenów
    docker compose down -v

*Spowoduje to usunięcie bazy danych.