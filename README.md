# stencil
<h1 align="center"><!-- NAME_START -->Stencil<!-- NAME_END --></h1>

<!-- BADGES_START -->
<p align="center">
    <strong>A PHP Micro-Library, for stupidly simple string Templates.</strong>
</p>

<!-- <p align="center">
    <a href="https://github.com/ramsey/php-library-starter-kit"><img src="http://img.shields.io/badge/source-ramsey/php--library--starter--kit-blue.svg?style=flat-square" alt="Source Code"></a>
    <a href="https://packagist.org/packages/ramsey/php-library-starter-kit"><img src="https://img.shields.io/packagist/v/ramsey/php-library-starter-kit.svg?style=flat-square&label=release" alt="Download Package"></a>
    <a href="https://php.net"><img src="https://img.shields.io/packagist/php-v/ramsey/php-library-starter-kit.svg?style=flat-square&colorB=%238892BF" alt="PHP Programming Language"></a>
    <a href="https://github.com/ramsey/php-library-starter-kit/blob/main/LICENSE"><img src="https://img.shields.io/packagist/l/ramsey/php-library-starter-kit.svg?style=flat-square&colorB=darkcyan" alt="Read License"></a>
    <a href="https://github.com/ramsey/php-library-starter-kit/actions/workflows/continuous-integration.yml"><img src="https://img.shields.io/github/workflow/status/ramsey/php-library-starter-kit/build/main?style=flat-square&logo=github" alt="Build Status"></a>
    <a href="https://codecov.io/gh/ramsey/php-library-starter-kit"><img src="https://img.shields.io/codecov/c/gh/ramsey/php-library-starter-kit?label=codecov&logo=codecov&style=flat-square" alt="Codecov Code Coverage"></a>
    <a href="https://shepherd.dev/github/ramsey/php-library-starter-kit"><img src="https://img.shields.io/endpoint?style=flat-square&url=https%3A%2F%2Fshepherd.dev%2Fgithub%2Framsey%2Fphp-library-starter-kit%2Fcoverage" alt="Psalm Type Coverage"></a>
</p> -->
<!-- BADGES_END -->

<!-- USAGE_START -->
## Usage

``` bash
composer require happycode/stencil
```

then, wherever..
``` php
  echo (new Stencil())->parse(
              "Whats up {{ name }}, it's {{ date:d-m-Y H:i }}", 
              ['name' => 'Doc']
  );
```

will give you what you might imagine.

nice!
<!-- USAGE_END -->


<!-- COPYRIGHT_START -->
## Copyright and License

The happycode/stencil library is copyright © [Paul Rooney](Happy Coder)
and licensed for use under the terms of the
MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
<!-- COPYRIGHT_END -->
