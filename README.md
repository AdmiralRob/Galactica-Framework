#Galactica

A wordpress theme designed with the Foundation Framework. I actually used Steven Loyer's WPBaseFoundation as a base. Check his out here: https://github.com/sloyer/

#Foundation 5

Requirements:

  * Ruby 1.9+
  * [Node.js](http://nodejs.org)
  * [compass](http://compass-style.org/): `gem install compass`
  * [bower](http://bower.io): `npm install bower -g`
  * [bundler](http://bundler.io): `gem install bundler`
  
You'll also need to remember that this version needs you to use:

  bundle exec compass watch
  
instead of just 'compass watch'. But if you forget, it'll throw out a warning and let you know anyway.

## Javascript

All javascript will be found in the 'js' folder or the 'bower'. The 'app.js' file is called in the footer.

## SCSS

According to Zurb's Foundation, compile the SCSS with the command 'bundle exec compass watch'.

## SMACSS

SMACSS is a way of organizing your CSS so that any developer can find everything quickly. I try to follow it's rules, you shoudl too: http://smacss.com

## Extras

Mean Menu - Documentation can be found at - http://www.meanthemes.com/plugins/meanmenu/
Foundation - Documentation can be found at: http://foundation.zurb.com/docs
