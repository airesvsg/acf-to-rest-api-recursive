ACF to REST API Recursive
====
Get ACF Fields Recursively

- [Installation](#installation)
- [Filters](#filters)

Installation
====
1. Copy the `acf-to-rest-api-recursive` folder into your `wp-content/plugins` folder
2. Activate the `ACF to REST API Recursive` plugin via the plugin admin page

Filters
====
| Filter    | Argument(s) |
|-----------|-----------|
| acf/rest_api/recursive/types | array $types |

How to use:
```PHP
add_filter( 'acf/rest_api/recursive/types', function( $types ) {
	if ( isset( $types['post'] ) ) {
		unset( $types['post'] );
	}

	return $types;
} );
```
