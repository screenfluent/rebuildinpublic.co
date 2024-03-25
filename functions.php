function add_class_to_content_p_tags($content) {
    $content = preg_replace('/<p>/', '<p class="text-gray-500 text-15">', $content);
    return $content;
}
add_filter('the_content', 'add_class_to_content_p_tags');