---
title: Components
extends: _layouts.master
section: body
---

<h1 class="text-5xl font-bold mb-10">Components</h1>
<div class="-mx-3 flex flex-wrap">
  @foreach($categories as $category)
    @include('_partials.category', ['category' => $category])
  @endforeach
</div>
