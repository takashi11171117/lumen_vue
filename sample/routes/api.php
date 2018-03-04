<?php
$app->get('api/comment', 'CommentController@getAll');
$app->post('api/comment', 'CommentController@post');
