<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      id="viewport"
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}" />
  </head>
  <body class="px-1">
    <div id="app">
      <class-replacer>
        {!! $page->getContent() !!}
      </class-replacer>
    </div>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
  </body>
</html>
