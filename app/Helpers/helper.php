<?php
/**
 * @return mixed
 * 用于根据路由更换css class
 */
function route_class() {
    return str_replace('.', '-', Route::currentRouteName());
}