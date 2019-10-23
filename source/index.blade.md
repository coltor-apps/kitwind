---
title: Components
extends: _layouts.master
section: body
---

@foreach ($categories as $category)
  <a href="{{ $category->getUrl() }}">{{ $category->filename }}</a>
@endforeach
