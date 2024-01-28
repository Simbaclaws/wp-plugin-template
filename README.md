# wp-plugin-template

This plugin template is heavily inspired and based off of:
https://wppb.me/

and Ryan Welcher's tutorial:
https://www.youtube.com/watch?v=kPXoT-GOusY

This should become a boilerplate for creating multi-block plugins.

Most functionality hasn't been tested yet, and I'm still trying to figure out how to get the translations for the blocks to work.


## Installation

- Install PHP, NodeJS, Composer, Wordpress etc.

- clone the repository into your wp-content/plugins folder

- Run npm install and composer install inside the wp-plugin-template folder.

- Run npm start in the same folder.


## Folder Structure

- The includes folder has all of the php files in php classes to do the things you want the plugin to do. Such as registering blocks, block categories, translations, REST endpoints(WIP) etc.

- The source folder is meant for PHP that the plugin might need that you can build out yourself. This is for when you want to build custom functionality outside of what is currently done with includes.

- The public folder contains publically enqueued scripts and css that exists outside of blocks and need to be enqueued globally for the entire site.

- The admin folder does the same as the public folder, but for the admin specific scripts and styles.

- The languages folder is the folder for the plugin's translations obviously.

- The blocks folder contains blocks that can be generated with:

```cd blocks && npx @wordpress/create-block block-name --variant=dynamic --no-plugin```

And compiled with:

```npm run start```


I welcome any pull-requests that are useful to this boilerplate plugin template. Currently I'm trying to organize this a bit neatly.
