# MVC

Projekt prezentujący wykorzystanie wzorca projektowego MVC do budowy prostej aplikacji internetowej w języku PHP.

# Jak uruchomić projekt

## Odtworzenie katalogu vendor
	docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v $(pwd):/opt \
        -w /opt \
        laravelsail/php81-composer:latest \
        composer install --ignore-platform-reqs

## Plik konfiguracyjny env.ini w katalogu config
Należy stworzyć plik konfiguracyjny aplikacji o nazwie env.ini w katalogu ./config

    [APP]
    name = 'Aplikacja'

    [DATABASE]
    database = 'mvc'
    hostname = 'db'
    type = 'mysql'
    port = '3306'
    user = 'root'
    password = 'tajne hasło'
    charset = 'utf8'

## Uruchomienie kontenerów
    docker compose up -d        

# Praca z kontenerami

## Uruchomienie kontenerów
    docker compose up -d

### Podgląd listy kontenerów

    docker container ls

### Wykonanie polecenia na uruchomionym  kontenerze
    docker exec [OPTIONS] CONTAINER COMMAND [ARG...]

 Przykładowo: instalacja pakietu z użyciem narzędzia composer 

    docker exec mvc-www-1 composer require kint-php/kint

## Zatrzymanie kontenerów
    docker down
