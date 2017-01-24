# laravel-archive

This laravel package simplify the archives creation to make it done in one line of code. Compress any folder recursively in a .tar.gz file.

Add the use statement in top of your script:

```php
use Yk\LaravelArchive\Archive;
```

To compress any folder just do:


```php
Archive::create($filename, $source);
```

# Note

The package will select the compression type based on the destination file extension, and for the moment it support only .tar.gz compression. So the destination filename parameter should include .tar.gz extension.

You may miss some folders inside the created archive, you should know that empty folders are not included.

## TODO
1. add support for multiple compression types
2. include Hidden files

## License

### GPLv2

Copyright (c) 2016 Yassine Khachlek <yassine.khachlek@gmail.com>

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

