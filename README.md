# Wordpress Starter

An opinionated boilerplate theme for modern WordPress developers.

- Bootstrap 4
- Parcel
- TypeScript (easy opt out)

## Getting Started

1. `> npm run setup` to set up docker images and front end dependencies (this may take a while)
2. `> npm start` to start up a local dev server
3. Open localhost:3000 or your designated port to set up the initial wordpress install (username / pass / etc.)
4.

## ACF Pro

### Installing

1. `docker-compose exec wordmove bash`
2. `wp plugin install "http://connect.advancedcustomfields.com/index.php?p=pro&a=download&k=<YOUR_KEY>" --allow-root --activate`

- Should we move to mu-plugins or somewhere else? hows git flow?

### Adding ACF Blocks

1. Create a file in `/template-parts/blocks`
2. Add the `name` of that and details in `/inc/advanced-ustom-fields.php` `my_acf_init()`

## TODO:

- Add env files to movefile
- Add auto rename files for template theme
- Add auto acf
- Add default theme?
- Add Screenshot
- Automate theme.php to match scss
- Add process to update bootstrap nav walker
- Fix SSH password
- How to load bootstrap js from bundle
- Finish npm publish commands
- Comments template
- PHPMyAdmin
- Composer
- FTP
- MariaDB
- Find lightest / best wordpress image
- Hide non theme / plugin files and just mount those folders
- Figure out why WP won't auto update images
- Add customizer files
- Add woocommerce
