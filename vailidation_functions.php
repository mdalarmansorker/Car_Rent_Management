<?php
$errors = array();
function has_presence($value)
{
    return isset($value) && !empty($value);
}
function has_min_lenth($value, $min)
{
    return strlen($value) > $min;
}

function form_errors($errors)
{
    $output = "";
    if (!empty($errors)) {
        $output .= "<div>";
        $output .= "Please fix these following errors";
        $output .= "<ul>";
        foreach ($errors as $key => $error) {
            $output .= "<li>" . $error . "</li>";
        }
        $output .= "<ul>";
        $output .= "</div>";
        return $output;
    }
}
?>
