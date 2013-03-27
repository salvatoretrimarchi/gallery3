<?php defined("SYSPATH") or die("No direct script access.") ?>
<ul>
  <? foreach ($tags as $tag): ?>
  <li class="size<?=(int)(($tag->count / $max_count) * 7) ?>">
    <span><?= $tag->count ?> photos are tagged with </span>
    <a href="<?= $tag->url() ?>"><?= HTML::clean($tag->name) ?></a>
  </li>
  <? endforeach ?>
</ul>
