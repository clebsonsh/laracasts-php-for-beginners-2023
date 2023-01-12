<?php

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->findOrFail();

authorized($note->user_id === $currentUserId);

view('notes/show', [
    'heading' => 'Note',
    'note' => $note,
]);
