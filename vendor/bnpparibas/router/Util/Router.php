<?php
/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 29/11/16
 * Time: 23:08
 */

namespace Bnpparibas\Router\Util;


class Router
{
    const TYPE_FILE = 'file';
    const TYPE_ROUTE = 'route';

    private $files = [];

    private $routes = [];

    public function __construct()
    {
        $this->getRoutingFiles();
    }

    public function getRoutingFiles($files = null)
    {
        if ($files === null) {
            $files = parse_ini_file("app/config/routing.ini", true);
        }

        foreach ($files as $type => $value) {
            if ($type == self::TYPE_FILE) {
                $this->parseRoutingFile($value);
            }

            if ($type === self::TYPE_ROUTE) {
                $this->addRoute($value);
            }
        }
    }

    private function parseRoutingFile($file)
    {
        if (is_array($file)) {
            foreach ($file as $path) {
                if (!file_exists($path)) continue;

                $this->processFileContent(parse_ini_file($path, true));

                $this->addFiles($path);
            }
        }

    }

    private function processFileContent($fileContent)
    {
        if (is_array($fileContent) && !empty($fileContent)) {
            foreach ($fileContent as $type => $content) {
                if ($type === self::TYPE_ROUTE) {
                    $this->addRoute($content);
                }

                if ($type === self::TYPE_FILE) {
                    $this->getRoutingFiles([$type => $content]);
                }
            }
        }
    }

    private function addFiles($file)
    {
        $this->files[] = $file;

        return $this;
    }

    public function getFiles()
    {
        return $this->files;
    }

    private function addRoute($route)
    {
        foreach ($route as $name => $path) {
            $this->routes[$name] = $path;
        }

        return $this;
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}