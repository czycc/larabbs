<?php
/**
 * @return mixed
 * 用于根据路由更换css class
 */
function route_class() {
    return str_replace('.', '-', Route::currentRouteName());
}

/**
 * @param $value
 * @param int $length
 * @return string
 *
 * 摘录的方法实现
 */
function make_excerpt($value, $length=200) {
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}