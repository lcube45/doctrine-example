# Doctrine starter kit

- Associations examples based on annotations
- Behavior implementation example
- Fixtures with faker example

## Doctrine commands
- orm:schema-tool:create
- orm:schema-tool:drop --force
- orm:schema-tool:update --force --dump-sql
- orm:generate-entities ./src

## Resources
- http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/
- https://github.com/nelmio/alice
- https://github.com/fzaninotto/Faker

## Fixtures file
```yml
User:
  user{1..30}:
    firstname: '<firstname()>'
    lastname: '<lastname()>'

Team:
  team{1..10}:
    label: '<company()>'
    users: '<numberBetween(2, 5)>x @user*'

Category:
  category{1..10}:
    label: '<sentence($nbWords = 1, $variableNbWords = true)>'
    parent: '@category*'

Project:
  project{1..100}:
    code (unique): '<ean8()>'
    label: '<domainName()>'
    category: '@category*'
    team: '@team*'
    created: <dateTimeThisYear($max = 'now')>
    updated: <dateTimeThisYear($max = 'now')>
```
