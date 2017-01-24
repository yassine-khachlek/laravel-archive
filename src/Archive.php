<?php

namespace Yk\LaravelArchive;

class Archive {

    public static function create($destination, $source)
    {
		switch ($destination) {
		    
		    case ends_with($destination, '.tar.gz'):

		    	\File::makeDirectory(pathinfo($destination)['dirname'], 0775, true, true);

		    	$archive = new \PharData(substr($destination, 0, strlen($destination)-strlen('.gz')));

		    	foreach (\File::allFiles($source) as $file) {
		    		$archive->addFile($file, substr($file, strlen($source), strlen($file)));
		    	}

		    	$archive->compress(\Phar::GZ);

		    	unlink(substr($destination, 0, strlen($destination)-strlen('.gz')));

		        break;
		        
		    default:
		        return false;
		}

		return true;
    }

}