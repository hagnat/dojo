<?php

set_include_path(implode(PATH_SEPARATOR, array(
    dirname(__FILE__) . '/../src',
    get_include_path()
)));

require_once dirname(__FILE__) . '/../vendor/autoload.php';
