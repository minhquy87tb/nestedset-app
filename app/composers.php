<?php

View::composer('layouts.master', function ($view)
{
    if (!isset($view->title)) $view->title = 'Nested Set App';
});

View::composer(['layouts.content', 'layouts.backend'], function ($view)
{
    if (!isset($view->content)) $view->content = '';
});

View::composer('home.page', function ($view)
{
    $page = $view->page;

    $view->contents = make_nav($page->getContents(), $page->getKey());
    $view->next = $page->getNext();
    $view->prev = $page->getPrev();
});