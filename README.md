# Web
Just a Normal Setup for front-end projects.

1. Basic HTML 
2. PHP with HTML Component based

Resources used for Web Application development

- [SASS](http://sass-lang.com/) - Preprocessing. *sass --watch css:css*

Reset and Normalize is Present as Imports.

As per your project design add all your important color code as Variables in _variables.scss file

As default Roboto font is attched in _vaiables.scss file at the bottom.
You can change it as per your needs.

All the default mixins is available at _mixins.scss file.

Responsive mixins is very easy to use for example refer below.

Max-width:
@include max(767px) {

font-size: 14px

}

Min-width:
@include min(768px) {

font-size: 14px

}

If you want add styles from 768px to 991px :

@include mq(768px, 991px) {

font-size: 14px;

}

> SourceCode path " /... "

*Plugin used*

> 1] *- [Bootstrap 4.1](https://getbootstrap.com/)*

> 2] *- [fontawesome-free-4.7](https://fontawesome.com/v4.7.0/)* 
Using older version since most of the fonts are availble free.

> 3] *- [Swiper-4.5](https://idangero.us/swiper/)*

> 4] *- [animate.min](https://daneden.github.io/animate.css/)*

> 5] *- [OwlCarousel2](https://owlcarousel2.github.io/OwlCarousel2/)*

> 6] *- [Counter-Up](https://github.com/bfintal/Counter-Up)*

> 7] *- [Wow](https://github.com/matthieua/WOW)*


All the above Plugins reside at lib folder...
You can remove whichever is not needed for your project :)












-------


-------

-------
