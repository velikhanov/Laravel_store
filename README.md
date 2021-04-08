<p align="center"><p align="center"><a href='https://svgshare.com/s/TKW' ><img src='https://svgshare.com/i/TKW.svg' title='TEST' width="400" height="600"></a></p></p>

## About This Laravel Project

This is my test Laravel project for United Skills.

Note: The emphasis was on the Back End, so I didn't bother too much about the design and the project has not yet been adapted for phones.

## How to install

If you are a beginner, then follow the instructions to install my project:

1)You must have a local server installed. I am using [OpenServer](https://ospanel.io/download/).

2)You must have [Laravel](https://laravel.com/docs/8.x) installed. It is installed using [Composer](https://getcomposer.org/).

3)Next, you can either download my project directly by clicking the green Code button, then clicking Download ZIP, or download using Git. To download via [Git](https://git-scm.com/), you must have it installed.

4)---If you downloaded the file directly, unpack it in the directory of your local server. I have this folder domains:
    `D:\OpenServer\domains`. Then go to step 6.

   ---If you are using git, then change to the same directory using the command line:
     `cd D:\OpenServer\domains`

5)Next, we need to clone the repository. To do this, open the console and write:

`git clone https://github.com/velikhanov/Laravel_store.git` and wait until everything is installed.

6)Next, go to the directory with the newly installed project(GitHub can slightly change the name of the project folder. Make sure it's called: TestWorkUnitedSkills, the case is not important.):

 `cd D:\OpenServer\domains\Laravel_store`

7)Write in console:
`composer install`

8)Go to the root directory and find the `.env.deletethis` file. Delete dot and word `deletethis`. Only `.env` remains. To change the file, open it in the IDE and do it there. Windows may not allow changing the name of this file in Explorer.

9)Then write in the console:
`php artisan storage:link`

10)Then write in the console:
`php artisan key:generate`

11)Then write in the console:
`php artisan db:create comfort`

12)Then write in the console:
`php artisan migrate`

Finally, you can run the project with the command in the console: `php artisan serve` and go to the site at the address specified in the console (usually http://127.0.0.1:8000/).

P.S. To edit categories, you need to have administrator rights, for this open `PhpMyAdmin` and in the `comfort` database in the `users` table, in the `role` column, change `0` to `1` in your account column. With administrator rights, you get more authority.




I hope you will like it!

### Social Networks

- **[VK](https://vk.com/velikhanov99)**
- **[Facebook](https://www.facebook.com/velikhanov99)**
- **[Instagram](https://www.instagram.com/velihanov99/)**
