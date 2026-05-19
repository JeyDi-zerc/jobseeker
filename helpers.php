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

function loadView($name, $data = [])
{
    $viewPath = basePath("views/{$name}.view.php");

    if (file_exists($viewPath)) {
        extract($data);
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

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function formatSalary($amount)
{
    return '$' . number_format(floatval($amount));
}
