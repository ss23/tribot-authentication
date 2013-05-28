A simple fake authentication server.

![Battle on](MgLZD7D.jpg)

disclaimer
==========
Nothing here is affiliated with the official Tribot stuff at all. Use it all at your own risk -- don't blame me if you use it and get hacked.


todo
====
* ~~add some install instrunctions for the client (requires the HTTPS cert to be added) and DNS stuff~~ [Completed in wiki](https://github.com/ss23/tribot-authentication/wiki/Install-For-Users)
* add some customizability for only authenticating some users
* ~~VIP support (should be simple enough)~~ Completed 2013-04-22
* bypass other kinds of auth (premium script auth etc)
* (long future) add automated tests to verify the authentication API hasn't broken / auto updating stuff
* (long future) a local version a client can run that will run a local webserver that does the auth (dns -> localhost, with fowarding to real tribot)
* add a way to keep accessing the real tribot (probably can url rewrite non auth stuff to a page that does an <iframe> (will break ssl, but *shrug*)

Contributing
============

Main thing is going to be implmenting those features.
Feel free to send a pull rqeuest for anything you find interesting

