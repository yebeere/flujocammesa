<?php
return [
  'sourcePath' => '@app',
  'messagePath' => 'messages',
  'languages' => [
    'es-CR',
  ],
  'translator' => 'Yii::t',
  'sort' => true,
  'overwrite' => true,
  'removeUnused' => true,
  'markUnused' => true,
  'except' => [
    '.svn',
    '.git',
    '.gitignore',
    '.gitkeep',
    '.hgignore',
    '.hgkeep',
    '/messages',
    '/BaseYii.php',
  ],
  'only' => [
    '*.php',
  ],
  'format' => 'php',
];

