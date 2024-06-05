<?php

namespace Saifkamal\ApiFirstCrudPackage;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider{
    
    public function boot(){
        //Load Package API Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        if (file_exists(base_path('routes/api.php'))) {
            //Read the Contents from the packahge API route file
            $apiRoutes          = file_get_contents(__DIR__.'/../routes/api.php');
            //Remove PHP Tags and use statements
            $strippedRoutes     = $this->stripPhpTagsAndUseStatements($apiRoutes);
            // Clean previous appended routes from the application's routes/api.php file
            $appApiFile         = base_path('routes/api.php');
            $this->cleanAppApiRoutes($appApiFile);
            //Append File Contents
            file_put_contents($appApiFile, PHP_EOL . $strippedRoutes, FILE_APPEND); 
        }
        //Load Package Database Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        //Load Package Views
        $this->loadViewsFrom(__DIR__.'/../views','api-first-crud-package');
    }

    protected function stripPhpTagsAndUseStatements($content){
        //Remove <?php tag
        $content = preg_replace('/^<\?php\s*/','',$content);
        //Remoce use Statements
        $content = preg_replace('/^use\s+[^\;]+\;\s*/m','',$content);
        // Trim any leading or trailing whitespace
        return trim($content);
    }

    protected function cleanAppApiRoutes($filePath)
    {
        $content = file_get_contents($filePath);
        // Preserve the <?php tag if it exists
        $phpTag = '<?php';
        if (strpos($content, $phpTag) !== false) {
            //Temporarily Removes the PHP Tag
            $content = str_replace($phpTag, '', $content);
        }
        // Remove any previously appended routes (customize this regex according to the routes you're appending)
        $content = preg_replace('/Route::middleware\([\'"]api[\'"]\)->prefix\([\'"]api[\'"]\)->group\(function\(\)\{.*?\}\);\s*/s', '', $content);
        // Trim any leading or trailing whitespace
        $content = trim($content);
        //Add the necessary use statement
        $useStatement = 'use Saifkamal\\ApiFirstCrudPackage\\Http\\Controllers\\CRUDResourceController;';
        // Add the PHP tag and use statement back at the beginning of the content
        if (strpos($content, $useStatement) === false) {
            $content = $phpTag . PHP_EOL . $useStatement. PHP_EOL . $content;
        } else {
            $content = $phpTag . PHP_EOL . $content;
        }
        // Write the cleaned content back to the file
        file_put_contents($filePath, $content);
    }

    public function register(){

    }
}