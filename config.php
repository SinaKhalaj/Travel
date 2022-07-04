<?php

foreach(glob('lib/*.php') as $lib_file) {
    include_once($lib_file);
}
//create_user_table();
create_post_table();