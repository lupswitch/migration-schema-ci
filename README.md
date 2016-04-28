# migration-schema-ci
migration-schema-ci for CodeIgniter Framework

![Preview before migration](https://raw.githubusercontent.com/yonineitor/migration-schema-ci/master/img_02.png)
![Preview YML](https://raw.githubusercontent.com/yonineitor/migration-schema-ci/master/img_01.png)
![Preview help](https://raw.githubusercontent.com/yonineitor/migration-schema-ci/master/img_03.png)

Migration from skeleton or schema **YML**

###Install
+ Download project
+ Add next code at end file config/routes.php
```php
$schema_migration_routes = function(){
	return [
		'app-admin/schema' => 'Schema/index/',
		'app-admin/schema/dashboard' => 'Schema/dashboard/',
		'app-admin/schema/index' => 'Schema/index/',
		'app-admin/schema/login' => 'Schema/login/',
		'app-admin/schema/logout' => 'Schema/logout/',
		'app-admin/schema/runmigration' => 'Schema/runmigration/',
	];
};
$route = array_merge( $route, $schema_migration_routes() );
unset($schema_migration_routes);
```
+ Access to url: local/app-admin/schema and use user(admin) and password(secret) [config = schema_session_users]
+ Create file table_name.yml [config = schema_path] and use next format yml:
```yml
table_name:                                     #required
  column_name:                                  #required
    type: smallint|int|text|varchar|decimal     #required
    primary: true|false                         #default = false
    null: true|false                            #default = false
    unsigned: true|false                        #default = false
    auto_increment: true|false                  #default = false
    _createindex: true|false                    #default = false
    default: 'string|number'                    #default = null
    constraint: 'number'                        #default = null (you can prevent constraint if use type = varchar(100) )
```
+ After save file go to dashboard and press run migration

__You can use several tables on 1 file yml but i do not suggest.__

Enjoi it!
