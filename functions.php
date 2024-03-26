<?php
function add_class_to_content_tags($content) {
    $content = preg_replace('/<p>/', '<p class="text-gray-800 text-sm lg:text-15 pb-4 leading-relaxed">', $content);
    $content = preg_replace('/<h2>/', '<h2 class="font-bold py-2">', $content);
    return $content;
}
add_filter('the_content', 'add_class_to_content_tags');
?>