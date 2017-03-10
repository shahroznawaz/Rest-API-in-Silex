<?php

namespace Todos\Middleware;

class Logging {

public static function log($request, $app)
{
error_log($request->getMethod() . "--" . $request->getUri());
}




}




?>