<h1 align="center"><!-- NAME_START -->Stencil<!-- NAME_END --></h1>

<p align="center">
    <strong>A PHP Micro-Library, for stupidly simple string Templates.</strong>
</p>


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
