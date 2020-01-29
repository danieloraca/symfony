
### Download & install symfony 
`$ curl -sS https://get.symfony.com/cli/installer | bash`

### Install the application 
`$ composer install`

### Run symfony
`$ symfony server:start`
or
`php bin/console server:start`
`php bin/console server:run`

## API urls:

#### create new entry
`http://127.0.0.1:8000/api`

#### filter by author
`http://127.0.0.1:8000/api/author/{name}`

#### filter by category
`http://127.0.0.1:8000/api/category/{name}`

#### list categories available
`http://127.0.0.1:8000/api/categories`

#### filter by author name and category name
`http://127.0.0.1:8000/api/{author_name}/{category_name}`

### Run tests:
`./vendor/bin/phpunit --bootstrap vendor/autoload.php src/Engine/ApiBundle/Tests/`
or
`make unit`

### clear cache
`php bin/console c:c`

#### Files
    Bundle files are located inside `src/Engine/ApiBundle directory`
