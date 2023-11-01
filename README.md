# Migration and Seeders

### Create folder and install laravel

<p>First of all create a new laravel folder by going into the terminal and by typing the following command:</p>

```
laravel new name_of_your_folder --git
```


<p>While installing it will ask some things and the answers are the following</p>

```
none <br/> 1 <br/> mysql
```


<p>Then enter the folder by typing:</p>

>cd name_of_your_folder

<p>After that run this composer command:</p>

```
composer require pacificdev/laravel_9_preset
```


<p>ADD BS SASS & Vite Preset</p>

```
php artisan preset:ui bootstrap
```


<p>for compatibility notes go at this site:</p>

<a>https://packagist.org/packages/pacificdev/laravel_9_preset</a>

<p>Then</p>

```
npm i && npm run dev
```


<p>and on the other terminal page</p>

```
php artisan serve
```


###### To save everything on github

1.
```
git status
```
 to see what has been modified
2.
```
git add .
```
 to add and stage all the changes
3.
```
git commit -m"Your commit message here"
```
 to commit and push the changes

<p>Go to github.com and create a new repository, then copy the command to import an existing folder and run it in the terminal</p>
