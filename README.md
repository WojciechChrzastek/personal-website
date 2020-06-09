# Personal website

The code of my personal website created from scratch using [HTML5](https://www.w3schools.com/html/), [CSS3](https://www.w3schools.com/css/) and [Bootstrap](https://getbootstrap.com/) library (version 4.4.1). The project also uses a pinch of [JavaScript](https://www.w3schools.com/js/) and [PHP](https://www.php.net/) code for some visual effects and to provide interactivity with user.

You can view it live under [chrzastek.net](http://chrzastek.net/) domain registered on [aftermarket.pl](https://www.aftermarket.pl/) name registrar. The website is hosted on my private hosting provided by [cyber_Folks](https://cyberfolks.pl/) operator.

## Design and optimization

The website was created to be mobile friendly and it's fully responsive. Website complies the latest HTML standards and was succesfully tested on the following validators:

- [W3C Unified Validator](https://validator.w3.org/unicorn/check?ucn_uri=chrzastek.net&ucn_task=conformance#)
- [W3C Link Checker](https://validator.w3.org/checklink?uri=chrzastek.net&hide_type=all&depth=&check=Check)
- [W3C Internationalization Checker](https://validator.w3.org/i18n-checker/check?uri=http%3A%2F%2Fwww.chrzastek.net#validate-by-uri+)
- [Google Search Console Mobile-Friendly Test Tool](https://search.google.com/test/mobile-friendly?id=7pScDghWz9bYhT5_tCEfSw)
- [Validator.nu (X)HTML5 Validator](https://html5.validator.nu/?doc=http%3A%2F%2Fchrzastek.net%2F)

The site and it's content have been optimized for fast load times in order to provide decent user experience and to get highest achivable score on [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/?hl=pl&url=http%3A%2F%2Fchrzastek.net%2F) and [GTMetrix](https://gtmetrix.com/reports/chrzastek.net/2IZjXicy). Optimization included use of minified resources and CDN where possible as well as working on image size, format and compression.

## Contact form

Email sending by contact form is managed by [PHPMailer](https://github.com/PHPMailer/PHPMailer) code library (version 6.1.5) distributed under the LGPL 2.1 [license](http://www.gnu.org/licenses/lgpl-2.1.html). Form fields validation is done by [jQuery Validation](https://jqueryvalidation.org/) plugin (version 1.19.1) working under 3.5.1. version of [jQuery](https://jquery.com/) library. Custom server and client side validation is provided as well.

## Visual effects

Website mainly uses features provided by the Bootstrap library. Some effects are realized by the use of CSS transition property and simple JavaScript scripts.

- Implementation of animated hamburger menu navbar is based on a [solution](https://jsfiddle.net/Beaniie/s8rm1f0q/5/) published on jsfiddle.net by ["Beaniie"](https://jsfiddle.net/user/Beaniie/fiddles/).
- Implementation of on-scroll navbar shrinking is based on a [solution](https://www.codeply.com/p/U6Us8AMnnM) published on codeply.com by ["skelly"](https://www.codeply.com/u/skelly).
- Website uses some icons from Font Awesome 5 icon library and custom "Codewars" icon made by [Jake Hoffner](https://github.com/FortAwesome/Font-Awesome/issues/4809#issuecomment-255845386) and implemented as font using [IcoMoon App](https://icomoon.io/app/#/select).
