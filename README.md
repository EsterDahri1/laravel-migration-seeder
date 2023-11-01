# Migration and Seeders

### Create folder and install laravel

<p>First of all create a new laravel folder by going into the terminal and by typing the following command:</p>

<code>laravel new name_of_your_folder --git</code>

<p>While installing it will ask some things and the answers are the following</p>

<code>none <br/> 1 <br/> mysql</code>

<p>Then enter the folder by typing:</p>

>cd name_of_your_folder

<p>After that run this composer command:</p>

<code>composer require pacificdev/laravel_9_preset</code>

<p>ADD BS SASS & Vite Preset</p>

<code>php artisan preset:ui bootstrap</code>

<p>for compatibility notes go at this site:</p>

<a>https://packagist.org/packages/pacificdev/laravel_9_preset</a>

<p>Then</p>

<code>npm i && npm run dev</code>

<p>and on the other terminal page</p>

<code>php artisan serve</code>

###### To save everything on github

1. <code>git status</code> to see what has been modified
2. <code>git add .</code> to add and stage all the changes
3. <code>git commit -m"Your commit message here"</code> to commit and push the changes

<p>Go to github.com and create a new repository, then copy the command to import an existing folder and run it in the terminal</p>
