<?php

/**
 * Get the path
 * @param string $path
 * return string
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}
/**
 * Load view
 * @param string $name / $partials
 * return void
 */

function LoadView($name)
{
    $viewPath = basePath("views/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View '{$name}' not found";
    }
}

function LoadPartial($name)
{
    $partialPath = basePath("views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial '{$name}' not found";
    }
}
