<?php

$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PlainTextHandler());
$whoops->register();
