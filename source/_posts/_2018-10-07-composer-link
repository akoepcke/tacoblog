---
extends: _layouts.post
section: postContent

title: Composer link a local package
author: Taco
date: 2018-10-07
---

When I started working on [Laravel-Spawn](https://github.com/akoepcke/laravel-spawn), I quickly ran into a seriously annoying problem.
I could not for the life of me figure out how to require the package in another project's composer.json.
I did find several solutions that allowed me to symlink the folders, but no matter what I tried, the package commands would not be recognized.
After wasting a lot of time pushing non-functioning commits to Github and pulling those commits into a test-Laravel project, I dove back into Google.
This time, I got lucky.
I stumbled upon a blog entry by Caleb Porzio, describing a bash command to link a local package in a composer.json that would then allow me to composer require this package as usual.
I tweaked the command a little, allowing for the linkage of multiple local packages in one composer.json .
Just add the command to your .bash_profile, cd into your project and call ‘composer-link /path/to/package package‘ and you are good to go.
All that is left is to run ‘composer require‘, or ‘composer require --dev‘
