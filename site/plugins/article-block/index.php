<?php

Kirby::plugin('cookbook/article-block', [
  'blueprints' => [
    'blocks/article' => __DIR__ . '/blueprints/blocks/article.yml',
    // 'files/audio'  => __DIR__ . '/blueprints/files/audio.yml',
    // 'files/poster' => __DIR__ . '/blueprints/files/poster.yml',
  ],
  'snippets' => [
    // 'blocks/audio' => __DIR__ . '/snippets/blocks/audio.php',
  ],
]);