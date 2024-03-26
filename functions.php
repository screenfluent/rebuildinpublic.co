<?php
function add_class_to_content_p_tags($content) {
    $content = preg_replace('/<p>/', '<p class="text-gray-800 text-sm lg:text-15 py-4 leading-relaxed">', $content);
    return $content;
}
add_filter('the_content', 'add_class_to_content_p_tags');
?>
