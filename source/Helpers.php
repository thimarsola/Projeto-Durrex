<?php

/**
 * Undocumented function
 *
 * @param string|null $param
 * @return string
 */
function site(string $param = null): string
{
    if ($param && !empty(SITE[$param])) {
        return SITE[$param];
    }

    return SITE["root"];
}

/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
   if($uri){
      return SITE["root"] . "/{$uri}";
   }
   
   return SITE["root"];
}

/**
 * @param string $param
 * @return string
 */
function social(string $param): string
{
    return SOCIAL[$param];
}

/**
 * @param string $imageUrl
 * @return string
 */
function routeImage(string $imageUrl): string
{
    return "https://via.placeholder.com/1200x628/0984e3/FFFFFF?text={$imageUrl}";
}

/**
 *
 * @param string $path
 * @param bool $time
 * @return string
 */
function asset(string $path, $time = true): string
{
   $file = SITE["root"] . "/public/{$path}";
   $fileOnDir = dirname(__DIR__, 1) . "/public/{$path}";

   if ($time && file_exists($fileOnDir)) {
      $file .= "?time=" . filemtime($fileOnDir);
   }
   return $file;
}

/**
 * Undocumented function
 *
 * @param string|null $type
 * @param string|null $message
 * @return string|null
 */
function flash(string $type = null, string $message = null): ?string
{
    if ($type && $message) {
        $_SESSION["flash"] = [
            "type" => $type,
            "message" => $message
        ];

        return null;
    }

    if (!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]) {
        unset($_SESSION["flash"]);
        return "<div class=\"message {$flash["type"]}\">{$flash["message"]}</div>";
    }

    return null;
}

/**
 * @param string $phone
 * @return string
 */
function formatPhone(string $phone): string
{
    return str_replace([' ', '(', ')', '-'], '', $phone);
}

/**
 * @param string $file
 * @return string
 */
function image(string $file): string
{
    return site('root') . '/public/images/' . $file;
}

/**
 * Function for create a picture tag for images
 * @param string $name
 * @param string $alt
 * @param string $extension
 * @return string
 */
function picture(string $name, string $alt, string $class = null, string $extension = 'jpg'): string
{
    return '
        <picture>
            <source srcset="'. image($name) . '.webp" type="image/webp">
            <img class="' . $class . '" src="'. image($name) . '.' . $extension . '" alt="' . $alt .'" title="' . $alt
        .'" loading="lazy">
        </picture>
        ';
}


/**
 * Function for create a whatsapp anchor message
 * @param string $phone
 * @param string $message
 * @param string|null $text
 * @param string|null $class
 * @param string $title
 * @return string
 */
function whatsapp(string $phone, string $message, string $text = NULL, string $class = NULL, string $title = 'Vamos conversar?'): string{

    if($class == NULL){
        $dataClass = null;
    }else{
        $dataClass = 'class="' . $class . '"';
    }

    $whatsapp = '<a rel="nofollow noreferrer noopener" ' . $dataClass . ' href="https://api.whatsapp.com/send?phone=55' . $phone . '&text=' . urlencode($message) . '" target="_blank" title="' . $title . '">' . $text . '</a>';

    return $whatsapp;
}