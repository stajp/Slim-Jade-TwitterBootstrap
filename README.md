Welcome to Slim-Jade-Twitter Bootstrap
===

What?
---

This is a boilerplate made from Slim-Jade, upgrading it, and putting Twitter bootstrap in it. Ready to start in no time.

[Slim Framework](http://www.slimframework.com/) combined with upgraded [jade.php] (originally https://github.com/everzet/jade.php 
but as it wasn't updated in long time, in this project we use a complete jade.php rewrite made by hackaugusto, sisoftrg and lately lukegb
(https://github.com/lukegb/jade.php)). 

And then, Slim routes made out of jade converted Bootstrap pages:
* Fluid layout


Why?
---

I need a small and fast framework, and I like Jade. I work as a teacher at a polytechnic and for demonstrations to students how MVC and 
templating works I need a tool like this.

It wasn't used in any (small or big) production. Yet.


How?
---

1. git clone git://github.com/stajp/Slim-Jade-TwitterBootstrap.git
2. cd Slim-Jade-TwitterBootstrap/vendor
3. git clone https://github.com/lukegb/jade.php.git
4. git clone https://github.com/codeguy/Slim.git

any Twitter Bootstrap updates you should make by hand :(

Important files:

- bootstrap.php : All the app configuration happens here
- index.php : All your routes live here
