<?php 


$options['sites'] = array (
  0 => 'cohealthinitiative.org',
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'standard',
  2 => 'testing',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'contextual' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'profile' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'overlay' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'poll' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'file_module_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'file' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'dblog' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.21',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.21',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.21',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'update_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'update' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.21',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'tracker' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'comment' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'system' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7077',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'menu' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'path' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'fpa' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/fpa/fpa.module',
        'basename' => 'fpa.module',
        'name' => 'fpa',
        'info' => 
        array (
          'name' => 'Fast Permissions Administration',
          'description' => 'Fast filtering on permissions administration form.',
          'core' => '7.x',
          'package' => 'Administration',
          'version' => '7.x-2.5',
          'project' => 'fpa',
          'datestamp' => '1398371034',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fpa',
        'version' => '7.x-2.5',
      ),
      'esi_context' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/esi/modules/esi_context/esi_context.module',
        'basename' => 'esi_context.module',
        'name' => 'esi_context',
        'info' => 
        array (
          'name' => 'ESI - Context integration',
          'description' => 'Deliver context-controlled blocks via ESI.',
          'core' => '7.x',
          'package' => 'Caching',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'esi',
            2 => 'esi_block',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'esi',
          'datestamp' => '1333617646',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'esi',
        'version' => '7.x-3.0-alpha1',
      ),
      'esi_panels' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/esi/modules/esi_panels/esi_panels.module',
        'basename' => 'esi_panels.module',
        'name' => 'esi_panels',
        'info' => 
        array (
          'name' => 'ESI - Panels',
          'description' => 'Deliver panel-panes via ESI.',
          'core' => '7.x',
          'package' => 'Caching',
          'dependencies' => 
          array (
            0 => 'panels',
            1 => 'page_manager',
            2 => 'esi',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'esi',
          'datestamp' => '1333617646',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'esi',
        'version' => '7.x-3.0-alpha1',
      ),
      'esi_block_test' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/esi/modules/esi_block/tests/esi_block_test.module',
        'basename' => 'esi_block_test.module',
        'name' => 'esi_block_test',
        'info' => 
        array (
          'name' => 'ESI Block test',
          'description' => 'Provides test blocks to use when testing the ESI Block module.',
          'package' => 'Testing',
          'version' => '7.x-3.0-alpha1',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'esi',
          'datestamp' => '1333617646',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'esi',
        'version' => '7.x-3.0-alpha1',
      ),
      'esi_block' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/esi/modules/esi_block/esi_block.module',
        'basename' => 'esi_block.module',
        'name' => 'esi_block',
        'info' => 
        array (
          'name' => 'ESI - Block',
          'description' => 'Deliver Drupal blocks via ESI.',
          'core' => '7.x',
          'package' => 'Caching',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'esi',
          ),
          'files' => 
          array (
            0 => 'esi_block.test',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'esi',
          'datestamp' => '1333617646',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'esi',
        'version' => '7.x-3.0-alpha1',
      ),
      'esi' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/esi/esi.module',
        'basename' => 'esi.module',
        'name' => 'esi',
        'info' => 
        array (
          'name' => 'ESI - Edge Side Includes',
          'description' => 'Allow Drupal components to be delivered via ESI (Edge-Side Includes).  Requires an ESI-capable proxy.',
          'package' => 'Caching',
          'recommends' => 
          array (
            0 => 'varnish',
          ),
          'core' => '7.x',
          'version' => '7.x-3.0-alpha1',
          'project' => 'esi',
          'datestamp' => '1333617646',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'esi',
        'version' => '7.x-3.0-alpha1',
      ),
      'session_expire' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/session_expire/session_expire.module',
        'basename' => 'session_expire.module',
        'name' => 'session_expire',
        'info' => 
        array (
          'name' => 'Session Expire',
          'description' => 'Expires rows from the session table older than a certain time.',
          'core' => '7.x',
          'configure' => 'admin/config/system/session_expire',
          'files' => 
          array (
            0 => 'session_expire.module',
          ),
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'flood_control' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/flood_control/flood_control.module',
        'basename' => 'flood_control.module',
        'name' => 'flood_control',
        'info' => 
        array (
          'name' => 'Flood control',
          'description' => 'Interface for hidden flood control options.',
          'core' => '7.x',
          'configure' => 'admin/config/system/flood-control',
          'version' => '7.x-1.x-dev',
          'project' => 'flood_control',
          'datestamp' => '1295655601',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flood_control',
        'version' => '7.x-1.x-dev',
      ),
      'robotstxt' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/robotstxt/robotstxt.module',
        'basename' => 'robotstxt.module',
        'name' => 'robotstxt',
        'info' => 
        array (
          'name' => 'robots.txt',
          'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'robotstxt.module',
            1 => 'robotstxt.admin.inc',
            2 => 'robotstxt.install',
          ),
          'configure' => 'admin/config/search/robotstxt',
          'version' => '7.x-1.x-dev',
          'project' => 'robotstxt',
          'datestamp' => '1298620089',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'robotstxt',
        'version' => '7.x-1.x-dev',
      ),
      'textile' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/textile/textile.module',
        'basename' => 'textile.module',
        'name' => 'textile',
        'info' => 
        array (
          'name' => 'Textile',
          'description' => 'Allows content to be submitted using Textile, a simple, plain text syntax that is filtered into valid XHTML.',
          'package' => 'Input filters',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'vars (> 1.0)',
          ),
          'version' => '7.x-2.0-rc11',
          'project' => 'textile',
          'datestamp' => '1319231138',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'textile',
        'version' => '7.x-2.0-rc11',
      ),
      'httprl' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/httprl/httprl.module',
        'basename' => 'httprl.module',
        'name' => 'httprl',
        'info' => 
        array (
          'name' => 'HTTP Parallel Request Library',
          'description' => 'Send http requests out in parallel in a blocking or non-blocking manner.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'version' => '7.x-1.14',
          'project' => 'httprl',
          'datestamp' => '1388542110',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'httprl',
        'version' => '7.x-1.14',
      ),
      'force_password_change' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/force_password_change/force_password_change.module',
        'basename' => 'force_password_change.module',
        'name' => 'force_password_change',
        'info' => 
        array (
          'name' => 'Force Password Change',
          'description' => 'Allows administrators to force users to change their password',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'force_password_change.install',
            1 => 'force_password_change.module',
            2 => 'force_password_change.pages.inc',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'force_password_change',
          'datestamp' => '1296546103',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'force_password_change',
        'version' => '7.x-1.0-rc2',
      ),
      'views_content_cache' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/views_content_cache/views_content_cache.module',
        'basename' => 'views_content_cache.module',
        'name' => 'views_content_cache',
        'info' => 
        array (
          'name' => 'Views Content Cache',
          'description' => 'Provides a views cache plugin based on content type changes.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'plugins/views_content_cache/base.inc',
            1 => 'plugins/views_content_cache/comment.inc',
            2 => 'plugins/views_content_cache/node.inc',
            3 => 'plugins/views_content_cache/node_only.inc',
            4 => 'plugins/views_content_cache/og.inc',
            5 => 'plugins/views_content_cache/votingapi.inc',
            6 => 'views/views_content_cache_plugin_cache.inc',
            7 => 'tests/views_content_cache.test',
          ),
          'version' => '7.x-3.0-alpha3',
          'project' => 'views_content_cache',
          'datestamp' => '1383658110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_content_cache',
        'version' => '7.x-3.0-alpha3',
      ),
      'reroute_email' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/reroute_email/reroute_email.module',
        'basename' => 'reroute_email.module',
        'name' => 'reroute_email',
        'info' => 
        array (
          'name' => 'Reroute emails',
          'description' => 'Reroutes emails send from the site to a predefined email. Useful for test sites.',
          'package' => 'Development',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'reroute_email.module',
            1 => 'reroute_email.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'reroute_email',
          'datestamp' => '1326726350',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'reroute_email',
        'version' => '7.x-1.1',
      ),
      'core_library_ui' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/core_library/modules/core_library_ui/core_library_ui.module',
        'basename' => 'core_library_ui.module',
        'name' => 'core_library_ui',
        'info' => 
        array (
          'name' => 'Core Library Advanced UI',
          'description' => 'Provide configuration screens for the Core Library module. You should enable this module the first time you use it, then disable it once in production.',
          'package' => 'Performance',
          'version' => '7.x-1.0-beta12',
          'core' => '7.x',
          'configure' => 'admin/config/development/library',
          'files' => 
          array (
            0 => 'core_library_ui.module',
            1 => 'core_library_ui.admin.inc',
          ),
          'project' => 'core_library',
          'datestamp' => '1333360860',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'core_library',
        'version' => '7.x-1.0-beta12',
      ),
      'core_library' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/core_library/core_library.module',
        'basename' => 'core_library.module',
        'name' => 'core_library',
        'info' => 
        array (
          'name' => 'Core Library',
          'description' => 'Extends Drupal core and allows you to override other modules\' libraries definition and aggregation rules.',
          'package' => 'Performance',
          'version' => '7.x-1.0-beta12',
          'core' => '7.x',
          'configure' => 'admin/config/development/library',
          'files' => 
          array (
            0 => 'core_library.module',
            1 => 'core_library.admin.inc',
          ),
          'project' => 'core_library',
          'datestamp' => '1333360860',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'core_library',
        'version' => '7.x-1.0-beta12',
      ),
      'admin' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/admin/admin.module',
        'basename' => 'admin.module',
        'name' => 'admin',
        'info' => 
        array (
          'name' => 'Admin',
          'description' => 'UI helpers for Drupal admins and managers.',
          'package' => 'Administration',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'admin.admin.inc',
            1 => 'admin.install',
            2 => 'admin.module',
            3 => 'includes/admin.devel.inc',
            4 => 'includes/admin.theme.inc',
            5 => 'theme/admin-panes.tpl.php',
            6 => 'theme/admin-toolbar.tpl.php',
            7 => 'theme/theme.inc',
          ),
          'version' => '7.x-2.0-beta3',
          'project' => 'admin',
          'datestamp' => '1292541646',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin',
        'version' => '7.x-2.0-beta3',
      ),
      'variable_clean' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/variable_clean/variable_clean.module',
        'basename' => 'variable_clean.module',
        'name' => 'variable_clean',
        'info' => 
        array (
          'name' => 'Variable Cleanup',
          'description' => 'Allows you to remove variables not currently used.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'variable_clean.module',
            1 => 'variable_clean.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'variable_clean',
          'datestamp' => '1298620612',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable_clean',
        'version' => '7.x-1.x-dev',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'backup_migrate.module',
            1 => 'backup_migrate.install',
            2 => 'includes/destinations.inc',
            3 => 'includes/profiles.inc',
            4 => 'includes/schedules.inc',
          ),
          'configure' => 'admin/config/system/backup_migrate',
          'version' => '7.x-2.4',
          'project' => 'backup_migrate',
          'datestamp' => '1338903073',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'backup_migrate',
        'version' => '7.x-2.4',
      ),
      'print_ui' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/print/print_ui/print_ui.module',
        'basename' => 'print_ui.module',
        'name' => 'print_ui',
        'info' => 
        array (
          'name' => 'Printer-friendly pages UI',
          'description' => 'Manages the printer-friendly versions link display conditions. Without this module, those links are not displayed.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'configure' => 'admin/config/user-interface/print/ui',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_pdf_wkhtmltopdf' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_wkhtmltopdf/print_pdf_wkhtmltopdf.module',
        'basename' => 'print_pdf_wkhtmltopdf.module',
        'name' => 'print_pdf_wkhtmltopdf',
        'info' => 
        array (
          'name' => 'wkhtmltopdf library handler',
          'description' => 'PDF generation library using wkhtmltopdf.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print_pdf',
          ),
          'configure' => 'admin/config/user-interface/print/pdf/wkhtmltopdf',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_pdf_tcpdf' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_tcpdf/print_pdf_tcpdf.module',
        'basename' => 'print_pdf_tcpdf.module',
        'name' => 'print_pdf_tcpdf',
        'info' => 
        array (
          'name' => 'TCPDF library handler',
          'description' => 'PDF generation library using TCPDF.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print_pdf',
          ),
          'files' => 
          array (
            0 => 'print_pdf_tcpdf.class.inc',
          ),
          'configure' => 'admin/config/user-interface/print/pdf/tcpdf',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_pdf_mpdf' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_mpdf/print_pdf_mpdf.module',
        'basename' => 'print_pdf_mpdf.module',
        'name' => 'print_pdf_mpdf',
        'info' => 
        array (
          'name' => 'mPDF library handler',
          'description' => 'PDF generation library using mPDF.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print_pdf',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_pdf_dompdf' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_dompdf/print_pdf_dompdf.module',
        'basename' => 'print_pdf_dompdf.module',
        'name' => 'print_pdf_dompdf',
        'info' => 
        array (
          'name' => 'dompdf library handler',
          'description' => 'PDF generation library using dompdf.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print_pdf',
          ),
          'configure' => 'admin/config/user-interface/print/pdf/dompdf',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_pdf' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/print/print_pdf/print_pdf.module',
        'basename' => 'print_pdf.module',
        'name' => 'print_pdf',
        'info' => 
        array (
          'name' => 'PDF version',
          'description' => 'Adds the capability to export pages as PDF. Requires a PDF library and the respective handler module.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'configure' => 'admin/config/user-interface/print/pdf',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'project' => '',
        'version' => NULL,
      ),
      'print_epub_phpepub' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/print/print_epub/lib_handlers/print_epub_phpepub/print_epub_phpepub.module',
        'basename' => 'print_epub_phpepub.module',
        'name' => 'print_epub_phpepub',
        'info' => 
        array (
          'name' => 'PHPePub library handler',
          'description' => 'EPUB generation library using PHPePub.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print_epub',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_epub' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/print/print_epub/print_epub.module',
        'basename' => 'print_epub.module',
        'name' => 'print_epub',
        'info' => 
        array (
          'name' => 'EPUB version',
          'description' => 'Adds the capability to export pages as EPUB. Requires an EPUB library and the respective handler module.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'configure' => 'admin/config/user-interface/print/epub',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => '',
        'version' => NULL,
      ),
      'print_mail' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/print/print_mail/print_mail.module',
        'basename' => 'print_mail.module',
        'name' => 'print_mail',
        'info' => 
        array (
          'name' => 'Send by email',
          'description' => 'Provides the capability to send the web page by email',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'configure' => 'admin/config/user-interface/print/email',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => '',
        'version' => NULL,
      ),
      'print' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/print/print.module',
        'basename' => 'print.module',
        'name' => 'print',
        'info' => 
        array (
          'name' => 'Printer-friendly pages',
          'description' => 'Generates a printer-friendly version of Drupal pages.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'files' => 
          array (
            0 => 'print_join_page_counter.inc',
          ),
          'dependencies' => 
          array (
            0 => 'node',
          ),
          'configure' => 'admin/config/user-interface/print',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => '',
        'version' => NULL,
      ),
      'entitycache' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/entitycache/entitycache.module',
        'basename' => 'entitycache.module',
        'name' => 'entitycache',
        'info' => 
        array (
          'name' => 'Entity cache',
          'description' => 'Provides caching for core entities including nodes and taxonomy terms.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'files' => 
          array (
            0 => 'entitycache.module',
            1 => 'entitycache.comment.inc',
            2 => 'entitycache.taxonomy.inc',
            3 => 'entitycache.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'entitycache',
          'datestamp' => '1383216926',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entitycache',
        'version' => '7.x-1.2',
      ),
      'filefield_nginx_progress' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/filefield_nginx_progress/filefield_nginx_progress.module',
        'basename' => 'filefield_nginx_progress.module',
        'name' => 'filefield_nginx_progress',
        'info' => 
        array (
          'name' => 'FileField Nginx Progress',
          'description' => 'Adds upload progress functionality for Nginx',
          'files' => 
          array (
            0 => 'filefield_nginx_progress.install',
            1 => 'filefield_nginx_progress.module',
          ),
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'php' => '5.2',
          'version' => '7.x-2.3+1-dev',
          'project' => 'filefield_nginx_progress',
          'datestamp' => '1380579093',
        ),
        'schema_version' => '7100',
        'project' => 'filefield_nginx_progress',
        'version' => '7.x-2.3+1-dev',
      ),
      'views_taxonomy_edge' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/taxonomy_edge/views_taxonomy_edge/views_taxonomy_edge.module',
        'basename' => 'views_taxonomy_edge.module',
        'name' => 'views_taxonomy_edge',
        'info' => 
        array (
          'name' => 'Views Taxonomy Edge',
          'description' => 'Views for taxonomies using Taxonomy Edge',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy_edge',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_argument_term_edge_node_tid_depth.inc',
            1 => 'handlers/views_handler_argument_term_edge_node_tid_depth_modifier.inc',
            2 => 'handlers/views_handler_filter_term_edge_node_tid_depth.inc',
            3 => 'handlers/views_join_term_edge.inc',
            4 => 'handlers/views_handler_sort_term_edge_hierarchy.inc',
          ),
          'version' => '7.x-1.8+12-dev',
          'project' => 'taxonomy_edge',
          'datestamp' => '1394207662',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'taxonomy_edge',
        'version' => '7.x-1.8+12-dev',
      ),
      'taxonomy_edge' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/taxonomy_edge/taxonomy_edge.module',
        'basename' => 'taxonomy_edge.module',
        'name' => 'taxonomy_edge',
        'info' => 
        array (
          'name' => 'Taxonomy Edge',
          'description' => 'Edge lists for taxonomies',
          'package' => 'Taxonomy',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'configure' => 'admin/structure/taxonomy/edge',
          'files' => 
          array (
            0 => 'tests/tree.test',
            1 => 'tests/unit.test',
          ),
          'version' => '7.x-1.8+12-dev',
          'project' => 'taxonomy_edge',
          'datestamp' => '1394207662',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'taxonomy_edge',
        'version' => '7.x-1.8+12-dev',
      ),
      'css_emimage' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/css_emimage/css_emimage.module',
        'basename' => 'css_emimage.module',
        'name' => 'css_emimage',
        'info' => 
        array (
          'name' => 'CSS Embedded Images',
          'description' => 'Replaces image URLs in CSS files with embedded images when CSS optimization is enabled.',
          'core' => '7.x',
          'php' => '5',
          'package' => 'Performance and scalability',
          'files' => 
          array (
            0 => 'css_emimage.install',
            1 => 'css_emimage.module',
          ),
          'version' => '7.x-1.2',
          'project' => 'css_emimage',
          'datestamp' => '1305153715',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'project' => 'css_emimage',
        'version' => '7.x-1.2',
      ),
      'vars_extended_test' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/vars/tests/vars_extended_test.module',
        'basename' => 'vars_extended_test.module',
        'name' => 'vars_extended_test',
        'info' => 
        array (
          'name' => 'Variable API extended test module',
          'description' => 'Module for testing the Variables API module with SimpleTest; do not enable it.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'vars',
          ),
          'files' => 
          array (
            0 => 'vars_extended_test.install',
            1 => 'vars_extended_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-alpha10',
          'project' => 'vars',
          'datestamp' => '1318969538',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'vars',
        'version' => '7.x-2.0-alpha10',
      ),
      'vars_test' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/vars/tests/vars_test.module',
        'basename' => 'vars_test.module',
        'name' => 'vars_test',
        'info' => 
        array (
          'name' => 'Variable API test module',
          'description' => 'Module for testing the Variable API module with SimpleTest; do not enable it.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'vars',
          ),
          'files' => 
          array (
            0 => 'vars_test.install',
            1 => 'vars_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-alpha10',
          'project' => 'vars',
          'datestamp' => '1318969538',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'vars',
        'version' => '7.x-2.0-alpha10',
      ),
      'vars' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/vars/vars.module',
        'basename' => 'vars.module',
        'name' => 'vars',
        'info' => 
        array (
          'name' => 'Variable API',
          'description' => 'Implements an API to handle persistent variables.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'vars.classes.inc',
            1 => 'tests/vars.test',
          ),
          'version' => '7.x-2.0-alpha10',
          'project' => 'vars',
          'datestamp' => '1318969538',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'vars',
        'version' => '7.x-2.0-alpha10',
      ),
      'advagg_css_cdn' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/advagg/advagg_css_cdn/advagg_css_cdn.module',
        'basename' => 'advagg_css_cdn.module',
        'name' => 'advagg_css_cdn',
        'info' => 
        array (
          'name' => 'AdvAgg CDN CSS',
          'description' => 'Use a shared CDN for CSS libraries, Google Libraries API currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_css_compress' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/advagg/advagg_css_compress/advagg_css_compress.module',
        'basename' => 'advagg_css_compress.module',
        'name' => 'advagg_css_compress',
        'info' => 
        array (
          'name' => 'AdvAgg Compress CSS',
          'description' => 'Compress CSS with a 3rd party compressor, YUI currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/css-compress',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_js_cdn' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/advagg/advagg_js_cdn/advagg_js_cdn.module',
        'basename' => 'advagg_js_cdn.module',
        'name' => 'advagg_js_cdn',
        'info' => 
        array (
          'name' => 'AdvAgg CDN Javascript',
          'description' => 'Use a shared CDN for javascript libraries, Google Libraries API currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_validator' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/advagg/advagg_validator/advagg_validator.module',
        'basename' => 'advagg_validator.module',
        'name' => 'advagg_validator',
        'info' => 
        array (
          'name' => 'AdvAgg CSS/JS Validator',
          'description' => 'Validate the CSS & JS files used in Aggregation for syntax errors.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/validator',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_mod' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/advagg/advagg_mod/advagg_mod.module',
        'basename' => 'advagg_mod.module',
        'name' => 'advagg_mod',
        'info' => 
        array (
          'name' => 'AdvAgg Modifier',
          'description' => 'Allows one to alter the CSS and JS array.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/mod',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_js_compress' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/advagg/advagg_js_compress/advagg_js_compress.module',
        'basename' => 'advagg_js_compress.module',
        'name' => 'advagg_js_compress',
        'info' => 
        array (
          'name' => 'AdvAgg Compress Javascript',
          'description' => 'Compress Javascript with a 3rd party compressor, JSMin+ currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/js-compress',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_bundler' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/advagg/advagg_bundler/advagg_bundler.module',
        'basename' => 'advagg_bundler.module',
        'name' => 'advagg_bundler',
        'info' => 
        array (
          'name' => 'AdvAgg Bundler',
          'description' => 'Provides intelligent bundling of CSS and JS files by grouping files that belong together.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/bundler',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/advagg/advagg.module',
        'basename' => 'advagg.module',
        'name' => 'advagg',
        'info' => 
        array (
          'name' => 'Advanced CSS/JS Aggregation',
          'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'configure' => 'admin/config/development/performance/advagg',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'js_test' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/js/tests/js_test.module',
        'basename' => 'js_test.module',
        'name' => 'js_test',
        'info' => 
        array (
          'name' => 'JavaScript callback handler tests',
          'description' => 'Tests for the JS module.',
          'package' => 'Performance',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'js_test.test',
          ),
          'version' => '7.x-1.0+5-dev',
          'project' => 'js',
          'datestamp' => '1394174606',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'js',
        'version' => '7.x-1.0+5-dev',
      ),
      'js' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/js/js.module',
        'basename' => 'js.module',
        'name' => 'js',
        'info' => 
        array (
          'name' => 'JavaScript callback handler',
          'description' => 'A high-performance JavaScript callback handler for 3rd party modules.',
          'package' => 'Performance',
          'core' => '7.x',
          'configure' => 'admin/config/system/js',
          'version' => '7.x-1.0+5-dev',
          'project' => 'js',
          'datestamp' => '1394174606',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'js',
        'version' => '7.x-1.0+5-dev',
      ),
      'config_perms' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/config_perms/config_perms.module',
        'basename' => 'config_perms.module',
        'name' => 'config_perms',
        'info' => 
        array (
          'name' => 'Custom Permissions',
          'description' => 'Allows additional permissions to be created and managed through a administration form.',
          'core' => '7.x',
          'package' => 'Permissions',
          'files' => 
          array (
            0 => 'config_perms.admin.inc',
            1 => 'config_perms.install',
            2 => 'config_perms.module',
          ),
          'version' => '7.x-2.x-dev',
          'project' => 'config_perms',
          'datestamp' => '1314792619',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'config_perms',
        'version' => '7.x-2.x-dev',
      ),
      'login_security' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/login_security/login_security.module',
        'basename' => 'login_security.module',
        'name' => 'login_security',
        'info' => 
        array (
          'name' => 'Login Security',
          'description' => 'Enable security options in the login flow of the site.',
          'files' => 
          array (
            0 => 'login_security.module',
            1 => 'login_security.test',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/people/login_security',
          'version' => '7.x-1.x-dev',
          'project' => 'login_security',
          'datestamp' => '1354842751',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'login_security',
        'version' => '7.x-1.x-dev',
      ),
      'views_accelerator' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/views_accelerator/views_accelerator.module',
        'basename' => 'views_accelerator.module',
        'name' => 'views_accelerator',
        'info' => 
        array (
          'name' => 'Views Accelerator',
          'description' => 'Performance boost for views that are receptive to render optimisations.',
          'core' => '7.x',
          'configure' => 'admin/config/system/views-accelerator',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/plugins/views_plugin_cache_none_accelerated.inc',
            1 => 'views/plugins/views_plugin_cache_none_debug.inc',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_accelerator',
          'datestamp' => '1404551329',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_accelerator',
        'version' => '7.x-1.0-alpha2',
      ),
      'purge' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/purge/purge.module',
        'basename' => 'purge.module',
        'name' => 'purge',
        'info' => 
        array (
          'name' => 'Purge',
          'description' => 'Purge clears urls from reverse proxy caches like Varnish and Squid by issuing HTTP PURGE requests.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'expire',
          ),
          'files ' => 
          array (
            0 => 'purge.module',
            1 => 'purge.inc',
          ),
          'configure' => 'admin/config/development/performance/purge',
          'version' => '7.x-1.6',
          'project' => 'purge',
          'datestamp' => '1358998406',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'purge',
        'version' => '7.x-1.6',
      ),
      'readonlymode' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/readonlymode/readonlymode.module',
        'basename' => 'readonlymode.module',
        'name' => 'readonlymode',
        'info' => 
        array (
          'name' => 'Read Only Mode',
          'description' => 'This module will lock your site for any node and/or comment postings.',
          'core' => '7.x',
          'php' => '5.2',
          'version' => '7.x-1.0',
          'project' => 'readonlymode',
          'datestamp' => '1346762903',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '6000',
        'project' => 'readonlymode',
        'version' => '7.x-1.0',
      ),
      'boost_crawler' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/boost/boost_crawler/boost_crawler.module',
        'basename' => 'boost_crawler.module',
        'name' => 'boost_crawler',
        'info' => 
        array (
          'name' => 'Boost Crawler',
          'description' => 'Minimal crawler to regenerate the cache as pages are expired.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'boost_crawler.module',
          ),
          'recommends' => 
          array (
            0 => 'boost',
          ),
          'dependencies' => 
          array (
            0 => 'httprl',
            1 => 'expire',
          ),
          'configure' => 'admin/config/system/boost/crawler',
          'version' => '7.x-1.0',
          'project' => 'boost',
          'datestamp' => '1399056528',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'boost',
        'version' => '7.x-1.0',
      ),
      'boost' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/boost/boost.module',
        'basename' => 'boost.module',
        'name' => 'boost',
        'info' => 
        array (
          'name' => 'Boost',
          'description' => 'Caches generated output as a static file to be served directly from the webserver.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'boost.module',
            1 => 'boost.admin.inc',
            2 => 'boost.blocks.inc',
          ),
          'recommends' => 
          array (
            0 => 'expire',
          ),
          'configure' => 'admin/config/system/boost',
          'version' => '7.x-1.0',
          'project' => 'boost',
          'datestamp' => '1399056528',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'boost',
        'version' => '7.x-1.0',
      ),
      'views_cache_bully' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/views_cache_bully/views_cache_bully.module',
        'basename' => 'views_cache_bully.module',
        'name' => 'views_cache_bully',
        'info' => 
        array (
          'name' => 'Views Cache Bully',
          'description' => 'Forcibily cache all views, come hell or high water.',
          'core' => '7.x',
          'package' => 'views',
          'files' => 
          array (
            0 => 'views_cache_bully.views.inc',
          ),
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '7.x-3.1',
          'project' => 'views_cache_bully',
          'datestamp' => '1389886710',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_cache_bully',
        'version' => '7.x-3.1',
      ),
      'redis' => 
      array (
        'filename' => '/data/all/000/modules/redis/redis.module',
        'basename' => 'redis.module',
        'name' => 'redis',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'speedy' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/speedy/speedy.module',
        'basename' => 'speedy.module',
        'name' => 'speedy',
        'info' => 
        array (
          'name' => 'Speedy',
          'description' => 'Tools to improve the front end performance of your site.',
          'core' => '7.x',
          'configure' => 'admin/config/development/performance',
          'version' => '7.x-1.12',
          'project' => 'speedy',
          'datestamp' => '1407423547',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'speedy',
        'version' => '7.x-1.12',
      ),
      'blockcache_alter' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/blockcache_alter/blockcache_alter.module',
        'basename' => 'blockcache_alter.module',
        'name' => 'blockcache_alter',
        'info' => 
        array (
          'name' => 'Block Cache Alter',
          'description' => 'Alter the cache settings per block.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'version' => '7.x-1.x-dev',
          'project' => 'blockcache_alter',
          'datestamp' => '1325030978',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'blockcache_alter',
        'version' => '7.x-1.x-dev',
      ),
      'site_verify' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/site_verify/site_verify.module',
        'basename' => 'site_verify.module',
        'name' => 'site_verify',
        'info' => 
        array (
          'name' => 'Site Verification',
          'description' => 'Verifies ownership of a site for use with search engines.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'site_verify.module',
            1 => 'site_verify.admin.inc',
            2 => 'site_verify.install',
            3 => 'site_verify.test',
          ),
          'configure' => 'admin/config/search/verifications',
          'version' => '7.x-1.0',
          'project' => 'site_verify',
          'datestamp' => '1298242613',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '3',
        'project' => 'site_verify',
        'version' => '7.x-1.0',
      ),
      'panels_content_cache' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/panels_content_cache/panels_content_cache.module',
        'basename' => 'panels_content_cache.module',
        'name' => 'panels_content_cache',
        'info' => 
        array (
          'name' => 'Panels Content Cache',
          'core' => '7.x',
          'package' => 'Panels',
          'description' => 'A content based caching plugin for panels. Allows panel caches to be expired based on content creation / updates.',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'version' => '7.x-1.0',
          'project' => 'panels_content_cache',
          'datestamp' => '1367328019',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels_content_cache',
        'version' => '7.x-1.0',
      ),
      'nocurrent_pass' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/nocurrent_pass/nocurrent_pass.module',
        'basename' => 'nocurrent_pass.module',
        'name' => 'nocurrent_pass',
        'info' => 
        array (
          'name' => 'No Current Password',
          'description' => 'Make the "current password" requirement on the user edit form optional.',
          'package' => 'Other',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'nocurrent_pass',
          'datestamp' => '1328692247',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nocurrent_pass',
        'version' => '7.x-1.0',
      ),
      'cdn' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/cdn/cdn.module',
        'basename' => 'cdn.module',
        'name' => 'cdn',
        'info' => 
        array (
          'name' => 'CDN',
          'description' => 'Integrates your site with a CDN, through altering file URLs.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'configure' => 'admin/config/development/cdn',
          'files' => 
          array (
            0 => 'cdn.test',
          ),
          'version' => '7.x-2.6+3-dev',
          'project' => 'cdn',
          'datestamp' => '1392895444',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7210',
        'project' => 'cdn',
        'version' => '7.x-2.6+3-dev',
      ),
      'expire' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/expire/expire.module',
        'basename' => 'expire.module',
        'name' => 'expire',
        'info' => 
        array (
          'name' => 'Cache Expiration',
          'description' => 'Logic for expiring cached pages.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'configure' => 'admin/config/system/expire',
          'files' => 
          array (
            0 => 'includes/expire.api.inc',
            1 => 'includes/expire.comment.inc',
            2 => 'includes/expire.domain.inc',
            3 => 'includes/expire.interface.inc',
            4 => 'includes/expire.menu_link.inc',
            5 => 'includes/expire.node.inc',
            6 => 'includes/expire.user.inc',
            7 => 'includes/expire.votingapi.inc',
            8 => 'includes/expire.file.inc',
          ),
          'version' => '7.x-2.0-rc3',
          'project' => 'expire',
          'datestamp' => '1398612528',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'expire',
        'version' => '7.x-2.0-rc3',
      ),
      'display_cache' => 
      array (
        'filename' => '/data/all/010/o_contrib_seven/display_cache/display_cache.module',
        'basename' => 'display_cache.module',
        'name' => 'display_cache',
        'info' => 
        array (
          'name' => 'Display Cache',
          'description' => 'Provides views and panels plugins to display rendered entities from cache.',
          'package' => 'Performance',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.0',
          'project' => 'display_cache',
          'datestamp' => '1399555728',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'display_cache',
        'version' => '7.x-1.0',
      ),
      'forum' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'locale_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.21',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'locale' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'help' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'field_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.21',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'text' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'options' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'number' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'list_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.21',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'list' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'field' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'book' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'statistics' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'node_access_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'node_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'node' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'filter' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'block_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'block' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'openid_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'openid' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.21',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'image_module_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'image' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'search' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'blog' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'trigger_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.21',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'trigger' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'field_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'shortcut' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'toolbar' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.21',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'user_form_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'user' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'translation_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.21',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'translation' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'rdf_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'rdf' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'aggregator' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'contact' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'dashboard' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.21',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'php' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'taxonomy' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'syslog' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'common_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'update_test_1' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.21',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.21',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'file_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'update_test_3' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'ajax_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'path_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '5.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'database_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.21',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'theme_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'filter_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'update_test_2' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'image_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'session_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'module_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'update_script_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'form_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.21',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'batch_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'entity_query_access_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/entity_query_access_test.module',
        'basename' => 'entity_query_access_test.module',
        'name' => 'entity_query_access_test',
        'info' => 
        array (
          'name' => 'Entity query access test',
          'description' => 'Support module for checking entity query results.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'system_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'error_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'menu_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'simpletest' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud_hook_test.test',
            10 => 'tests/entity_query.test',
            11 => 'tests/error.test',
            12 => 'tests/file.test',
            13 => 'tests/filetransfer.test',
            14 => 'tests/form.test',
            15 => 'tests/graph.test',
            16 => 'tests/image.test',
            17 => 'tests/lock.test',
            18 => 'tests/mail.test',
            19 => 'tests/menu.test',
            20 => 'tests/module.test',
            21 => 'tests/pager.test',
            22 => 'tests/password.test',
            23 => 'tests/path.test',
            24 => 'tests/registry.test',
            25 => 'tests/schema.test',
            26 => 'tests/session.test',
            27 => 'tests/tablesort.test',
            28 => 'tests/theme.test',
            29 => 'tests/unicode.test',
            30 => 'tests/update.test',
            31 => 'tests/xmlrpc.test',
            32 => 'tests/upgrade/upgrade.test',
            33 => 'tests/upgrade/upgrade.comment.test',
            34 => 'tests/upgrade/upgrade.filter.test',
            35 => 'tests/upgrade/upgrade.forum.test',
            36 => 'tests/upgrade/upgrade.locale.test',
            37 => 'tests/upgrade/upgrade.menu.test',
            38 => 'tests/upgrade/upgrade.node.test',
            39 => 'tests/upgrade/upgrade.taxonomy.test',
            40 => 'tests/upgrade/upgrade.trigger.test',
            41 => 'tests/upgrade/upgrade.translatable.test',
            42 => 'tests/upgrade/upgrade.upload.test',
            43 => 'tests/upgrade/upgrade.user.test',
            44 => 'tests/upgrade/update.aggregator.test',
            45 => 'tests/upgrade/update.trigger.test',
            46 => 'tests/upgrade/update.field.test',
            47 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'color' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.21',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
        ),
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'stark' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
        ),
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'bartik' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
        ),
        'project' => 'drupal',
        'version' => '7.21',
      ),
      'garland' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.21',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
        ),
        'project' => 'drupal',
        'version' => '7.21',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.21',
        'description' => 'This platform is running Drupal 7.21',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'acquia',
        ),
        'version' => '7.21',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.21',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.21',
      ),
      'testing' => 
      array (
        'name' => 'testing',
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/profiles/testing/testing.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Minimal profile for running tests. Includes absolutely required modules only.',
          'version' => '7.21',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1362616996',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'uberdrupal',
        ),
        'version' => '7.21',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'media_youtube' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/media_youtube/media_youtube.module',
        'basename' => 'media_youtube.module',
        'name' => 'media_youtube',
        'info' => 
        array (
          'name' => 'Media: YouTube',
          'description' => 'Provides YouTube support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_youtube.module',
            1 => 'includes/MediaYouTubeStreamWrapper.inc',
            2 => 'includes/MediaInternetYouTubeHandler.inc',
            3 => 'includes/media_youtube.styles.inc',
            4 => 'includes/MediaYouTubeStyles.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-1.0-alpha5',
          'project' => 'media_youtube',
          'datestamp' => '1306891017',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'media_youtube',
        'version' => '7.x-1.0-alpha5',
      ),
      'context_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.0-beta2',
          'project' => 'context',
          'datestamp' => '1315543301',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'project' => 'context',
        'version' => '7.x-3.0-beta2',
      ),
      'context_layouts' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'version' => '7.x-3.0-beta2',
          'project' => 'context',
          'datestamp' => '1315543301',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context',
        'version' => '7.x-3.0-beta2',
      ),
      'context' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context.test',
            2 => 'tests/context.conditions.test',
            3 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.0-beta2',
          'project' => 'context',
          'datestamp' => '1315543301',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'context',
        'version' => '7.x-3.0-beta2',
      ),
      'hovercalendar' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/custom/hovercalendar/hovercalendar.module',
        'basename' => 'hovercalendar.module',
        'name' => 'hovercalendar',
        'info' => 
        array (
          'core' => '7.x',
          'name' => 'hovercalendar',
          'version' => '7.x-1.0-beta1',
          'dependencies' => 
          array (
            0 => 'qtip',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'views_view' => 
            array (
              0 => 'hovercalendar',
            ),
          ),
          'package' => 'Features',
          'project' => 'hover_calendar',
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'hover_calendar',
        'version' => '7.x-1.0-beta1',
      ),
      'dpm_without_devel' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/custom/dpm_without_devel/dpm_without_devel.module',
        'basename' => 'dpm_without_devel.module',
        'name' => 'dpm_without_devel',
        'info' => 
        array (
          'name' => 'DPM without Devel',
          'description' => 'Allows you to run dpm() commands without devel enabled',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'form_beautifier' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/custom/form_beautifier/form_beautifier.module',
        'basename' => 'form_beautifier.module',
        'name' => 'form_beautifier',
        'info' => 
        array (
          'name' => 'Form Beautifier',
          'description' => 'A Collection of jQuery Scripts that can make your forms look good.',
          'core' => '7.x',
          'package' => 'Other',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'social_block' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/custom/social_block/social_block.module',
        'basename' => 'social_block.module',
        'name' => 'social_block',
        'info' => 
        array (
          'name' => 'Social Networking Block',
          'description' => 'Adds a simple block for a Facebook/Twitter link',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'sharethis',
          ),
          'files' => 
          array (
            0 => 'social_block.module',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'block_hover' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/custom/block_hover/block_hover.module',
        'basename' => 'block_hover.module',
        'name' => 'block_hover',
        'info' => 
        array (
          'name' => 'Block Hover',
          'description' => 'Creates hover behaviors for blocks',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'files' => 
          array (
            0 => 'block_hover.module',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'menu_toolbar_coop' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/custom/menu_toolbar_coop/menu_toolbar_coop.module',
        'basename' => 'menu_toolbar_coop.module',
        'name' => 'menu_toolbar_coop',
        'info' => 
        array (
          'name' => 'Menu Toolbar Coop',
          'description' => 'Makes it so admin_menu and toolbar cooperate',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu_toolbar_coop.module',
            1 => 'menu_toolbar_coop.js',
          ),
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'button_block' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/custom/button_block/button_block.module',
        'basename' => 'button_block.module',
        'name' => 'button_block',
        'info' => 
        array (
          'name' => 'Button Block',
          'description' => 'Adds simple blocks consisting of a button-ized link',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'files' => 
          array (
            0 => 'button_block.module',
            1 => 'button_block.install',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'user_dropdown_menu' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/custom/user_dropdown_menu/user_dropdown_menu.module',
        'basename' => 'user_dropdown_menu.module',
        'name' => 'user_dropdown_menu',
        'info' => 
        array (
          'name' => 'Albatross User Drop-down Menu',
          'description' => 'Creates a drop-down menu with user-related links.',
          'package' => 'Albatross',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
          ),
          '//dependencies' => 
          array (
            0 => 'block_hover',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'file_entity_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/media/file_entity/tests/file_entity_test.module',
        'basename' => 'file_entity_test.module',
        'name' => 'file_entity_test',
        'info' => 
        array (
          'name' => 'File Entity Test',
          'description' => 'Support module for File Entity tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
          ),
          'hidden' => true,
          'version' => '7.x-1.0-rc2',
          'project' => 'media',
          'datestamp' => '1318450906',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-1.0-rc2',
      ),
      'file_entity' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/media/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'media',
          'datestamp' => '1318450906',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'media',
        'version' => '7.x-1.0-rc2',
      ),
      'media_internet' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'media_internet.module',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'media',
          'datestamp' => '1318450906',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-1.0-rc2',
      ),
      'media' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'test/media.types.test',
            2 => 'test/media.entity.test',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'media',
          'datestamp' => '1318450906',
          'php' => '5.2.4',
        ),
        'schema_version' => '7020',
        'project' => 'media',
        'version' => '7.x-1.0-rc2',
      ),
      'albatross_permissions' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/features/albatross_permissions/albatross_permissions.module',
        'basename' => 'albatross_permissions.module',
        'name' => 'albatross_permissions',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
            1 => 'clone',
            2 => 'contextual',
            3 => 'dashboard',
            4 => 'date',
            5 => 'draggableviews',
            6 => 'features',
            7 => 'googleanalytics',
            8 => 'media_internet',
            9 => 'menu',
            10 => 'overlay',
            11 => 'page_title',
            12 => 'pathauto',
            13 => 'redirect',
            14 => 'search',
            15 => 'shortcut',
            16 => 'styles_ui',
            17 => 'stylizer',
            18 => 'taxonomy',
            19 => 'toolbar',
            20 => 'webform',
          ),
          'description' => '"Creates the "stripped down" administrator role for Albatross Digital sites."',
          'features' => 
          array (
            'user_permission' => 
            array (
              0 => 'Allow Reordering',
              1 => 'access administration menu',
              2 => 'access all views',
              3 => 'access all webform results',
              4 => 'access content',
              5 => 'access content overview',
              6 => 'access contextual links',
              7 => 'access dashboard',
              8 => 'access overlay',
              9 => 'access own webform results',
              10 => 'access own webform submissions',
              11 => 'access toolbar',
              12 => 'access user profiles',
              13 => 'add media from remote sources',
              14 => 'administer content types',
              15 => 'administer exclude node title',
              16 => 'administer google analytics',
              17 => 'administer image styles',
              18 => 'administer media',
              19 => 'administer menu',
              20 => 'administer modules',
              21 => 'administer nodes',
              22 => 'administer page titles',
              23 => 'administer pathauto',
              24 => 'administer permissions',
              25 => 'administer redirects',
              26 => 'administer search',
              27 => 'administer shortcuts',
              28 => 'administer site configuration',
              29 => 'administer styles ui',
              30 => 'administer stylizer',
              31 => 'administer taxonomy',
              32 => 'administer themes',
              33 => 'administer url aliases',
              34 => 'administer users',
              35 => 'administer views',
              36 => 'block IP addresses',
              37 => 'bypass node access',
              38 => 'cancel account',
              39 => 'change own username',
              40 => 'clone node',
              41 => 'clone own nodes',
              42 => 'create url aliases',
              43 => 'customize shortcut links',
              44 => 'delete all webform submissions',
              45 => 'delete own webform submissions',
              46 => 'delete revisions',
              47 => 'edit all webform submissions',
              48 => 'edit media',
              49 => 'edit own webform submissions',
              50 => 'exclude any node title',
              51 => 'exclude own node title',
              52 => 'import media',
              53 => 'notify of path changes',
              54 => 'opt-in or out of tracking',
              55 => 'revert revisions',
              56 => 'search content',
              57 => 'select account cancellation method',
              58 => 'set page title',
              59 => 'switch shortcut sets',
              60 => 'use advanced search',
              61 => 'use exclude node title',
              62 => 'use text format filtered_html',
              63 => 'use text format full_html',
              64 => 'view date repeats',
              65 => 'view media',
              66 => 'view own unpublished content',
              67 => 'view revisions',
              68 => 'view the administration theme',
            ),
            'user_role' => 
            array (
              0 => 'administrator',
            ),
          ),
          'name' => 'Albatross Permissions',
          'package' => 'Features',
          'php' => '5.2.4',
          'project' => 'albatross_permissions',
          'project status url' => 'http://code.albatrossdigital.com/fserver',
          'version' => '7.x-1.0-beta1',
        ),
        'schema_version' => 0,
        'project' => 'albatross_permissions',
        'version' => '7.x-1.0-beta1',
      ),
      'albatross_date_formats' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/features/albatross_date_formats/albatross_date_formats.module',
        'basename' => 'albatross_date_formats.module',
        'name' => 'albatross_date_formats',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'strongarm',
          ),
          'description' => 'Creates and sets Date Formats and Date Types to typical North American defaults.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'variable' => 
            array (
              0 => 'date_format_long',
              1 => 'date_format_long_date',
              2 => 'date_format_medium',
              3 => 'date_format_medium_date',
              4 => 'date_format_short',
              5 => 'date_format_short_date',
              6 => 'date_format_time',
            ),
          ),
          'name' => 'Albatross Date Formats',
          'package' => 'Features',
          'php' => '5.2.4',
          'project' => 'albatross_date_formats',
          'version' => '7.x-1.0-beta1',
        ),
        'schema_version' => 0,
        'project' => 'albatross_date_formats',
        'version' => '7.x-1.0-beta1',
      ),
      'albatross_page' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/features/albatross_page/albatross_page.module',
        'basename' => 'albatross_page.module',
        'name' => 'albatross_page',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'field_group',
            2 => 'file',
            3 => 'strongarm',
          ),
          'description' => 'A simple page content type',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'field_group:field_group:1',
              1 => 'strongarm:strongarm:1',
            ),
            'field' => 
            array (
              0 => 'node-page-body',
              1 => 'node-page-field_attachment',
              2 => 'node-page-field_subtitle',
            ),
            'field_group' => 
            array (
              0 => 'group_attachments|node|page|form',
            ),
            'node' => 
            array (
              0 => 'page',
            ),
            'variable' => 
            array (
              0 => 'node_options_page',
              1 => 'pathauto_node_page_pattern',
            ),
          ),
          'name' => 'Albatross Page',
          'package' => 'Features',
          'php' => '5.2.4',
          'project' => 'albatross_page',
          'version' => '7.x-1.0-beta1',
        ),
        'schema_version' => 0,
        'project' => 'albatross_page',
        'version' => '7.x-1.0-beta1',
      ),
      'albatross_slideshow' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/features/albatross_slideshow/albatross_slideshow.module',
        'basename' => 'albatross_slideshow.module',
        'name' => 'albatross_slideshow',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'link',
            2 => 'media',
            3 => 'strongarm',
            4 => 'views',
            5 => 'views_slideshow',
            6 => 'views_slideshow_cycle',
          ),
          'description' => 'A views slideshow with a nice back-end interface.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-slide-field_description',
              1 => 'node-slide-field_image',
              2 => 'node-slide-field_slide_link',
            ),
            'node' => 
            array (
              0 => 'slide',
            ),
            'user_permission' => 
            array (
              0 => 'create slide content',
              1 => 'delete any slide content',
              2 => 'delete own slide content',
              3 => 'edit any slide content',
              4 => 'edit own slide content',
            ),
            'variable' => 
            array (
              0 => 'node_options_slide',
              1 => 'pathauto_node_slide_pattern',
            ),
            'views_view' => 
            array (
              0 => 'slideshow',
            ),
          ),
          'name' => 'Albatross Slideshow',
          'package' => 'Features',
          'project' => 'albatross_slideshow',
          'version' => '7.x-1.0-beta1',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'albatross_slideshow',
        'version' => '7.x-1.0-beta1',
      ),
      'albatross_events' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/features/albatross_events/albatross_events.module',
        'basename' => 'albatross_events.module',
        'name' => 'albatross_events',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'addressfield',
            1 => 'date',
            2 => 'date_api',
            3 => 'date_popup',
            4 => 'date_views',
            5 => 'features',
            6 => 'field_group',
            7 => 'file',
            8 => 'strongarm',
            9 => 'views',
          ),
          'description' => 'Events with locations and a nice list with AJAX calendar',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'field_group:field_group:1',
              1 => 'strongarm:strongarm:1',
              2 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-event-body',
              1 => 'node-event-field_attachment',
              2 => 'node-event-field_date',
              3 => 'node-event-field_location',
              4 => 'node-event-field_subtitle',
            ),
            'field_group' => 
            array (
              0 => 'group_attachments|node|article|form',
            ),
            'node' => 
            array (
              0 => 'event',
            ),
            'user_permission' => 
            array (
              0 => 'create event content',
              1 => 'delete any event content',
              2 => 'delete own event content',
              3 => 'edit any event content',
              4 => 'edit own event content',
            ),
            'variable' => 
            array (
              0 => 'node_options_event',
              1 => 'pathauto_node_event_pattern',
            ),
            'views_view' => 
            array (
              0 => 'events',
            ),
          ),
          'name' => 'Albatross Events',
          'package' => 'Features',
          'php' => '5.2.4',
          'project' => 'albatross_events',
          'version' => '7.x-1.0-beta1',
        ),
        'schema_version' => 0,
        'project' => 'albatross_events',
        'version' => '7.x-1.0-beta1',
      ),
      'albatross_input_formats' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/features/albatross_input_formats/albatross_input_formats.module',
        'basename' => 'albatross_input_formats.module',
        'name' => 'albatross_input_formats',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fe_wysiwyg',
            1 => 'features',
            2 => 'media',
            3 => 'strongarm',
            4 => 'wysiwyg',
          ),
          'description' => 'Sets up the standard Albatross Digital input formats and WYSIWYG profile',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'filter' => 
            array (
              0 => 'filtered_html',
              1 => 'full_html',
              2 => 'plain_text',
            ),
            'variable' => 
            array (
              0 => 'pathauto_node_pattern',
            ),
            'wysiwyg' => 
            array (
              0 => 'filtered_html',
              1 => 'full_html',
            ),
          ),
          'name' => 'Albatross Input Formats',
          'package' => 'Features',
          'php' => '5.2.4',
          'project' => 'albatross_input_formats',
          'version' => '7.x-1.0-beta1',
        ),
        'schema_version' => 0,
        'project' => 'albatross_input_formats',
        'version' => '7.x-1.0-beta1',
      ),
      'albatross_webform' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/features/albatross_webform/albatross_webform.module',
        'basename' => 'albatross_webform.module',
        'name' => 'albatross_webform',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'field_group',
            2 => 'file',
            3 => 'strongarm',
          ),
          'description' => 'Sets some additional settings for the webform content type',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'field_group:field_group:1',
              1 => 'strongarm:strongarm:1',
            ),
            'field' => 
            array (
              0 => 'node-webform-body',
              1 => 'node-webform-field_attachment',
              2 => 'node-webform-field_subtitle',
            ),
            'field_group' => 
            array (
              0 => 'group_attachments|node|webform|form',
            ),
            'node' => 
            array (
              0 => 'webform',
            ),
            'user_permission' => 
            array (
              0 => 'create webform content',
              1 => 'delete any webform content',
              2 => 'delete own webform content',
              3 => 'edit any webform content',
              4 => 'edit own webform content',
            ),
            'variable' => 
            array (
              0 => 'comment_webform',
              1 => 'node_options_webform',
              2 => 'pathauto_node_webform_pattern',
            ),
          ),
          'name' => 'Albatross Webform',
          'package' => 'Features',
          'php' => '5.2.4',
          'project' => 'albatross_webform',
          'version' => '7.x-1.0-beta1',
        ),
        'schema_version' => 0,
        'project' => 'albatross_webform',
        'version' => '7.x-1.0-beta1',
      ),
      'opencampaign_content' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/features/opencampaign_content/opencampaign_content.module',
        'basename' => 'opencampaign_content.module',
        'name' => 'opencampaign_content',
        'info' => 
        array (
          'core' => '7.x',
          'description' => 'Content that is used on most campaign sites (ie Webforms)',
          'features' => 
          array (
            'content' => 
            array (
              0 => 'volunteer',
            ),
          ),
          'name' => 'OpenCampaign Content',
          'package' => 'Features',
          'project' => 'opencampaign_content',
          'version' => '7.x-1.0-beta1',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'opencampaign_content',
        'version' => '7.x-1.0-beta1',
      ),
      'albatross_articles' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/features/albatross_articles/albatross_articles.module',
        'basename' => 'albatross_articles.module',
        'name' => 'albatross_articles',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'field_group',
            2 => 'file',
            3 => 'link',
            4 => 'strongarm',
            5 => 'taxonomy',
          ),
          'description' => 'Creates and Article content type that is great for excerpts of articles from other publications.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'field_group:field_group:1',
              1 => 'strongarm:strongarm:1',
            ),
            'field' => 
            array (
              0 => 'node-article-body',
              1 => 'node-article-field_attachment',
              2 => 'node-article-field_byline',
              3 => 'node-article-field_link',
              4 => 'node-article-field_subtitle',
              5 => 'node-article-field_tags',
            ),
            'field_group' => 
            array (
              0 => 'group_attachments|node|article|form',
            ),
            'node' => 
            array (
              0 => 'article',
            ),
            'user_permission' => 
            array (
              0 => 'create article content',
              1 => 'delete any article content',
              2 => 'delete own article content',
              3 => 'edit any article content',
              4 => 'edit own article content',
            ),
            'variable' => 
            array (
              0 => 'node_options_article',
              1 => 'pathauto_node_article_pattern',
            ),
          ),
          'name' => 'Albatross Articles',
          'package' => 'Features',
          'php' => '5.2.4',
          'project' => 'albatross_articles',
          'version' => '7.x-1.0-beta1',
        ),
        'schema_version' => 0,
        'project' => 'albatross_articles',
        'version' => '7.x-1.0-beta1',
      ),
      'albatross_news' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/features/albatross_news/albatross_news.module',
        'basename' => 'albatross_news.module',
        'name' => 'albatross_news',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'field_group',
            2 => 'file',
            3 => 'strongarm',
            4 => 'taxonomy',
            5 => 'views',
          ),
          'description' => 'Story content type and News view',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'field_group:field_group:1',
              1 => 'strongarm:strongarm:1',
              2 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-story-body',
              1 => 'node-story-field_attachment',
              2 => 'node-story-field_subtitle',
              3 => 'node-story-field_tags',
            ),
            'field_group' => 
            array (
              0 => 'group_attachments|node|story|form',
            ),
            'node' => 
            array (
              0 => 'story',
            ),
            'user_permission' => 
            array (
              0 => 'create story content',
              1 => 'delete any story content',
              2 => 'delete own story content',
              3 => 'delete terms in 1',
              4 => 'edit any story content',
              5 => 'edit own story content',
              6 => 'edit terms in 1',
            ),
            'variable' => 
            array (
              0 => 'node_options_story',
              1 => 'pathauto_node_story_pattern',
            ),
            'views_view' => 
            array (
              0 => 'news',
            ),
          ),
          'name' => 'Albatross News',
          'package' => 'Features',
          'php' => '5.2.4',
          'project' => 'albatross_news',
          'version' => '7.x-1.0-beta1',
        ),
        'schema_version' => 0,
        'project' => 'albatross_news',
        'version' => '7.x-1.0-beta1',
      ),
      'forward' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/forward/forward.module',
        'basename' => 'forward.module',
        'name' => 'forward',
        'info' => 
        array (
          'name' => 'Forward',
          'description' => 'Forward this page module',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forward.install',
            1 => 'forward.module',
            2 => 'forward.tpl.php',
            3 => 'forward.views.inc',
            4 => 'forward.views_default.inc',
          ),
          'configure' => 'admin/config/user-interface/forward',
          'version' => '7.x-1.0-rc4',
          'project' => 'forward',
          'datestamp' => '1307413015',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6',
        'project' => 'forward',
        'version' => '7.x-1.0-rc4',
      ),
      'entity_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/entity/tests/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'entity_test',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'version' => '7.x-1.0-beta11',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_test.module',
            1 => 'entity_test.install',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1319558131',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0-beta11',
      ),
      'entity_feature' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/entity/tests/entity_feature.module',
        'basename' => 'entity_feature.module',
        'name' => 'entity_feature',
        'info' => 
        array (
          'name' => 'Entity feature module',
          'description' => 'Provides some entities in code.',
          'version' => '7.x-1.0-beta11',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_feature.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1319558131',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0-beta11',
      ),
      'entity' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/plugins/entity_plugin_row_entity_view.inc',
            1 => 'includes/entity.controller.inc',
            2 => 'includes/entity.inc',
            3 => 'includes/entity.ui.inc',
            4 => 'includes/entity.wrapper.inc',
            5 => 'entity.features.inc',
            6 => 'entity.info.inc',
            7 => 'entity.rules.inc',
            8 => 'entity.test',
            9 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
          ),
          'version' => '7.x-1.0-beta11',
          'project' => 'entity',
          'datestamp' => '1319558131',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'entity',
        'version' => '7.x-1.0-beta11',
      ),
      'entity_token' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.0-beta11',
          'project' => 'entity',
          'datestamp' => '1319558131',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0-beta11',
      ),
      'exclude_node_title' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/exclude_node_title/exclude_node_title.module',
        'basename' => 'exclude_node_title.module',
        'name' => 'exclude_node_title',
        'info' => 
        array (
          'name' => 'Exclude node title',
          'description' => 'Excludes a node title from display. It provides a checkbox on node-edit pages for easier exclusion. You can also exclude title display from teaser pages.',
          'core' => '7.x',
          'package' => 'Other',
          'configure' => 'admin/config/content/exclude_node_title',
          'files' => 
          array (
            0 => 'exclude_node_title.info',
            1 => 'exclude_node_title.module',
            2 => 'exclude_node_title.admin.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'exclude_node_title',
          'datestamp' => '1302553615',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'exclude_node_title',
        'version' => '7.x-1.3',
      ),
      'media_browser_plus' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/media_browser_plus/media_browser_plus.module',
        'basename' => 'media_browser_plus.module',
        'name' => 'media_browser_plus',
        'info' => 
        array (
          'name' => 'Media Browser Plus',
          'description' => 'Provides better UX for the media browser',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_browser_plus.module',
            1 => 'media_browser_plus.install',
          ),
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'taxonomy',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'media_browser_plus',
          'datestamp' => '1309307557',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media_browser_plus',
        'version' => '7.x-1.x-dev',
      ),
      'fe_wysiwyg' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fe_wysiwyg/fe_wysiwyg.module',
        'basename' => 'fe_wysiwyg.module',
        'name' => 'fe_wysiwyg',
        'info' => 
        array (
          'name' => 'FE wysiwyg',
          'description' => 'Wysiwyg profiles as features.',
          'package' => 'Features extra',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'wysiwyg',
            1 => 'features',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'field_group' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'field_group',
        'info' => 
        array (
          'name' => 'Fieldgroup',
          'description' => 'Fieldgroup',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_group.install',
            1 => 'field_group.module',
            2 => 'field_group.field_ui.inc',
            3 => 'field_group.form.inc',
            4 => 'field_group.features.inc',
            5 => 'field_group.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'field_group',
          'datestamp' => '1319051133',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'field_group',
        'version' => '7.x-1.1',
      ),
      'commerce_product_pricing' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing.module',
        'basename' => 'commerce_product_pricing.module',
        'name' => 'commerce_product_pricing',
        'info' => 
        array (
          'name' => 'Product Pricing',
          'description' => 'Enables Rules based product sell price calculation for dynamic product pricing.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_price',
            3 => 'commerce_product_reference',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_product_pricing_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing_ui.module',
        'basename' => 'commerce_product_pricing_ui.module',
        'name' => 'commerce_product_pricing_ui',
        'info' => 
        array (
          'name' => 'Product Pricing UI',
          'description' => 'Exposes a UI for managing product pricing rules and pre-calculation settings.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_price',
            4 => 'commerce_product_pricing',
            5 => 'commerce_product_reference',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_cart' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/cart/commerce_cart.module',
        'basename' => 'commerce_cart.module',
        'name' => 'commerce_cart',
        'info' => 
        array (
          'name' => 'Cart',
          'description' => 'Implements the shopping cart system and add to cart features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_checkout',
            2 => 'commerce_line_item',
            3 => 'commerce_order',
            4 => 'commerce_product',
            5 => 'commerce_product_reference',
            6 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_cart_handler_field_add_to_cart_form.inc',
            1 => 'tests/commerce_cart.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_product_reference' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/product_reference/commerce_product_reference.module',
        'basename' => 'commerce_product_reference.module',
        'name' => 'commerce_product_reference',
        'info' => 
        array (
          'name' => 'Product Reference',
          'description' => 'Defines a product reference field and default display formatters.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_line_item',
            2 => 'commerce_price',
            3 => 'commerce_product',
            4 => 'options',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/commerce_product_reference.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_payment_dummy_offsite' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/payment/tests/commerce_payment_dummy_offsite.module',
        'basename' => 'commerce_payment_dummy_offsite.module',
        'name' => 'commerce_payment_dummy_offsite',
        'info' => 
        array (
          'name' => 'Commerce payment offsite test',
          'description' => 'Support module for customer payment related testing.',
          'package' => 'Testing',
          'version' => '7.x-1.0-beta4',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_payment_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/payment/modules/commerce_payment_example.module',
        'basename' => 'commerce_payment_example.module',
        'name' => 'commerce_payment_example',
        'info' => 
        array (
          'name' => 'Payment Method Example',
          'description' => 'Provides an example payment method for testing and development.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_payment',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_payment_example.module',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_payment' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/payment/commerce_payment.module',
        'basename' => 'commerce_payment.module',
        'name' => 'commerce_payment',
        'info' => 
        array (
          'name' => 'Payment',
          'description' => 'Implement core payment features for Drupal commerce.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'commerce',
            2 => 'commerce_order',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_payment.rules.inc',
            1 => 'includes/commerce_payment_transaction.controller.inc',
            2 => 'includes/views/handlers/commerce_payment_handler_area_totals.inc',
            3 => 'includes/views/handlers/commerce_payment_handler_field_amount.inc',
            4 => 'includes/views/handlers/commerce_payment_handler_field_currency_code.inc',
            5 => 'includes/views/handlers/commerce_payment_handler_field_message.inc',
            6 => 'includes/views/handlers/commerce_payment_handler_field_payment_method.inc',
            7 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link.inc',
            8 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link_delete.inc',
            9 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_operations.inc',
            10 => 'includes/views/handlers/commerce_payment_handler_field_status.inc',
            11 => 'includes/views/handlers/commerce_payment_handler_filter_payment_method.inc',
            12 => 'includes/views/handlers/commerce_payment_handler_filter_payment_transaction_status.inc',
            13 => 'includes/views/handlers/commerce_payment_handler_filter_currency_code.inc',
            14 => 'includes/views/handlers/commerce_payment_handler_field_balance.inc',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_payment_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/payment/commerce_payment_ui.module',
        'basename' => 'commerce_payment_ui.module',
        'name' => 'commerce_payment_ui',
        'info' => 
        array (
          'name' => 'Payment UI',
          'description' => 'Exposes a default UI for payment method configuration and payment transaction administration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_order',
            3 => 'commerce_order_ui',
            4 => 'commerce_payment',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/commerce_payment_ui.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_tax' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/tax/commerce_tax.module',
        'basename' => 'commerce_tax.module',
        'name' => 'commerce_tax',
        'info' => 
        array (
          'name' => 'Tax',
          'description' => 'Define tax rates and configure tax rules for applicability and display.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'commerce',
            2 => 'commerce_line_item',
            3 => 'commerce_price',
            4 => 'commerce_product_pricing',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_tax_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/tax/commerce_tax_ui.module',
        'basename' => 'commerce_tax_ui.module',
        'name' => 'commerce_tax_ui',
        'info' => 
        array (
          'name' => 'Tax UI',
          'description' => 'Provides a UI for creating simple tax types and rates.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_tax',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/commerce_tax_ui.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_order_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/order/commerce_order_ui.module',
        'basename' => 'commerce_order_ui.module',
        'name' => 'commerce_order_ui',
        'info' => 
        array (
          'name' => 'Order UI',
          'description' => 'Exposes a default UI for Orders through order edit forms and default Views.',
          'package' => 'Commerce',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'contextual',
            1 => 'field_ui',
            2 => 'commerce',
            3 => 'commerce_ui',
            4 => 'commerce_line_item',
            5 => 'commerce_order',
            6 => 'views',
          ),
          'files' => 
          array (
            0 => 'tests/commerce_order_ui.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_order' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/order/commerce_order.module',
        'basename' => 'commerce_order.module',
        'name' => 'commerce_order',
        'info' => 
        array (
          'name' => 'Order',
          'description' => 'Defines the Order entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'commerce',
            2 => 'commerce_customer',
            3 => 'commerce_line_item',
            4 => 'commerce_price',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_order.controller.inc',
            1 => 'includes/views/commerce_order.views.inc',
            2 => 'includes/views/handlers/commerce_order_handler_area_order_total.inc',
            3 => 'includes/views/handlers/commerce_order_handler_argument_order_order_id.inc',
            4 => 'includes/views/handlers/commerce_order_handler_field_order.inc',
            5 => 'includes/views/handlers/commerce_order_handler_field_order_status.inc',
            6 => 'includes/views/handlers/commerce_order_handler_field_order_state.inc',
            7 => 'includes/views/handlers/commerce_order_handler_field_order_type.inc',
            8 => 'includes/views/handlers/commerce_order_handler_field_order_link.inc',
            9 => 'includes/views/handlers/commerce_order_handler_field_order_link_delete.inc',
            10 => 'includes/views/handlers/commerce_order_handler_field_order_link_edit.inc',
            11 => 'includes/views/handlers/commerce_order_handler_field_order_operations.inc',
            12 => 'includes/views/handlers/commerce_order_handler_filter_order_status.inc',
            13 => 'includes/views/handlers/commerce_order_handler_filter_order_state.inc',
            14 => 'includes/views/handlers/commerce_order_handler_filter_order_type.inc',
            15 => 'includes/views/handlers/commerce_order_plugin_argument_validate_user.inc',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => '7104',
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_checkout' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/checkout/commerce_checkout.module',
        'basename' => 'commerce_checkout.module',
        'name' => 'commerce_checkout',
        'info' => 
        array (
          'name' => 'Checkout',
          'description' => 'Enable checkout as a multi-step form with customizable checkout pages.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_order',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/commerce_checkout.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_line_item' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/line_item/commerce_line_item.module',
        'basename' => 'commerce_line_item.module',
        'name' => 'commerce_line_item',
        'info' => 
        array (
          'name' => 'Line Item',
          'description' => 'Defines the Line Item entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'commerce',
            2 => 'commerce_price',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_line_item.controller.inc',
            1 => 'includes/views/handlers/commerce_line_item_handler_area_line_item_summary.inc',
            2 => 'includes/views/handlers/commerce_line_item_handler_argument_line_item_line_item_id.inc',
            3 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_title.inc',
            4 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_type.inc',
            5 => 'includes/views/handlers/commerce_line_item_handler_filter_line_item_type.inc',
            6 => 'includes/views/handlers/commerce_line_item_handler_field_edit_quantity.inc',
            7 => 'includes/views/handlers/commerce_line_item_handler_field_edit_delete.inc',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_line_item_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/line_item/commerce_line_item_ui.module',
        'basename' => 'commerce_line_item_ui.module',
        'name' => 'commerce_line_item_ui',
        'info' => 
        array (
          'name' => 'Line Item UI',
          'description' => 'Exposes a default UI for Line Items through line item type forms and default Views.',
          'package' => 'Commerce',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'contextual',
            1 => 'field_ui',
            2 => 'commerce',
            3 => 'commerce_ui',
            4 => 'commerce_line_item',
            5 => 'views',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_customer_profile_dummy_type' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/customer/tests/commerce_customer_profile_dummy_type.module',
        'basename' => 'commerce_customer_profile_dummy_type.module',
        'name' => 'commerce_customer_profile_dummy_type',
        'info' => 
        array (
          'name' => 'Commerce customer module tests',
          'description' => 'Support module for customer profile related testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'version' => '7.x-1.0-beta4',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_customer' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/customer/commerce_customer.module',
        'basename' => 'commerce_customer.module',
        'name' => 'commerce_customer',
        'info' => 
        array (
          'name' => 'Customer',
          'description' => 'Defines the Customer entity with Address Field integration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'addressfield',
            1 => 'commerce',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_customer_profile.controller.inc',
            1 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile.inc',
            2 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link.inc',
            3 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_delete.inc',
            4 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_edit.inc',
            5 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_type.inc',
            6 => 'includes/views/handlers/commerce_customer_handler_filter_customer_profile_type.inc',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_customer_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/customer/commerce_customer_ui.module',
        'basename' => 'commerce_customer_ui.module',
        'name' => 'commerce_customer_ui',
        'info' => 
        array (
          'name' => 'Customer UI',
          'description' => 'Exposes a default UI for Customers through profile edit forms and default Views.',
          'package' => 'Commerce',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'contextual',
            1 => 'field_ui',
            2 => 'commerce',
            3 => 'commerce_ui',
            4 => 'commerce_customer',
            5 => 'views',
          ),
          'files' => 
          array (
            0 => 'commerce_customer_ui.module',
            1 => 'includes/commerce_customer_ui.profiles.inc',
            2 => 'includes/commerce_customer_ui.profile_types.inc',
            3 => 'includes/views/commerce_customer_ui.views_default.inc',
            4 => 'tests/commerce_customer_ui.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_price' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/price/commerce_price.module',
        'basename' => 'commerce_price.module',
        'name' => 'commerce_price',
        'info' => 
        array (
          'name' => 'Price',
          'description' => 'Defines the price field and a price alteration system.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_price.rules.inc',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_product' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/product/commerce_product.module',
        'basename' => 'commerce_product.module',
        'name' => 'commerce_product',
        'info' => 
        array (
          'name' => 'Product',
          'description' => 'Defines the Product entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'commerce',
            2 => 'commerce_price',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_product.controller.inc',
            1 => 'includes/views/handlers/commerce_product_handler_argument_product_id.inc',
            2 => 'includes/views/handlers/commerce_product_handler_field_product.inc',
            3 => 'includes/views/handlers/commerce_product_handler_field_product_type.inc',
            4 => 'includes/views/handlers/commerce_product_handler_field_product_link.inc',
            5 => 'includes/views/handlers/commerce_product_handler_field_product_link_delete.inc',
            6 => 'includes/views/handlers/commerce_product_handler_field_product_link_edit.inc',
            7 => 'includes/views/handlers/commerce_product_handler_field_product_operations.inc',
            8 => 'includes/views/handlers/commerce_product_handler_filter_product_type.inc',
            9 => 'includes/commerce_product.translation_handler.inc',
            10 => 'tests/commerce_product.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_product_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/modules/product/commerce_product_ui.module',
        'basename' => 'commerce_product_ui.module',
        'name' => 'commerce_product_ui',
        'info' => 
        array (
          'name' => 'Product UI',
          'description' => 'Exposes a default UI for Products through product edit forms and default Views.',
          'package' => 'Commerce',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'contextual',
            1 => 'field_ui',
            2 => 'commerce',
            3 => 'commerce_ui',
            4 => 'commerce_product',
            5 => 'views',
          ),
          'files' => 
          array (
            0 => 'tests/commerce_product_ui.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/commerce_ui.module',
        'basename' => 'commerce_ui.module',
        'name' => 'commerce_ui',
        'info' => 
        array (
          'name' => 'Commerce UI',
          'description' => 'Defines menu items common to the various Drupal Commerce UI modules.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'commerce' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce/commerce.module',
        'basename' => 'commerce.module',
        'name' => 'commerce',
        'info' => 
        array (
          'name' => 'Commerce',
          'description' => 'Defines features and functions common to the Commerce modules.',
          'package' => 'Commerce',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/commerce_base.test',
            1 => 'includes/commerce.controller.inc',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'commerce',
          'datestamp' => '1307772351',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'commerce',
        'version' => '7.x-1.0-beta4',
      ),
      'views_rdf' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views_datasource/views_rdf.module',
        'basename' => 'views_rdf.module',
        'name' => 'views_rdf',
        'info' => 
        array (
          'name' => 'Views RDF',
          'description' => 'Views style plugin to render node content as RDF.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/plugins/views_plugin_style_rdf.inc',
          ),
          'version' => '7.x-1.x-dev-pasq',
          'project' => 'views_datasource',
          'project status url' => 'http://windmill.sk/updates',
          'datestamp' => '1311670000',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_datasource',
        'version' => '7.x-1.x-dev-pasq',
      ),
      'views_xml' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views_datasource/views_xml.module',
        'basename' => 'views_xml.module',
        'name' => 'views_xml',
        'info' => 
        array (
          'name' => 'Views XML',
          'description' => 'Views style plugin to render node content as XML.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/plugins/views_plugin_style_xml.inc',
          ),
          'version' => '7.x-1.x-dev-pasq',
          'project' => 'views_datasource',
          'project status url' => 'http://windmill.sk/updates',
          'datestamp' => '1311670000',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_datasource',
        'version' => '7.x-1.x-dev-pasq',
      ),
      'views_json' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views_datasource/views_json.module',
        'basename' => 'views_json.module',
        'name' => 'views_json',
        'info' => 
        array (
          'name' => 'Views JSON',
          'description' => 'Views style plugin to render node content as JSON.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/plugins/views_plugin_style_json.inc',
          ),
          'version' => '7.x-1.x-dev-pasq',
          'project' => 'views_datasource',
          'project status url' => 'http://windmill.sk/updates',
          'datestamp' => '1311670000',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_datasource',
        'version' => '7.x-1.x-dev-pasq',
      ),
      'views_xhtml' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views_datasource/views_xhtml.module',
        'basename' => 'views_xhtml.module',
        'name' => 'views_xhtml',
        'info' => 
        array (
          'name' => 'Views XHTML',
          'description' => 'Views style plugin to render node content as XHTML microformats.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/plugins/views_plugin_style_xhtml.inc',
          ),
          'version' => '7.x-1.x-dev-pasq',
          'project' => 'views_datasource',
          'project status url' => 'http://windmill.sk/updates',
          'datestamp' => '1311670000',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_datasource',
        'version' => '7.x-1.x-dev-pasq',
      ),
      'media_gallery' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/media_gallery/media_gallery.module',
        'basename' => 'media_gallery.module',
        'name' => 'media_gallery',
        'info' => 
        array (
          'name' => 'Media Gallery',
          'description' => 'A flexible gallery of media.',
          'core' => '7.x',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'list',
            1 => 'number',
            2 => 'media (1.0-beta5)',
            3 => 'taxonomy',
            4 => 'multiform (1.0-beta2)',
          ),
          'files' => 
          array (
            0 => 'media_gallery.module',
            1 => 'media_gallery.admin.inc',
            2 => 'media_gallery.fields.inc',
            3 => 'media_gallery.theme.inc',
          ),
          'configure' => 'admin/config/media/galleries',
          'version' => '7.x-1.0-beta6',
          'project' => 'media_gallery',
          'datestamp' => '1310441526',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'media_gallery',
        'version' => '7.x-1.0-beta6',
      ),
      'syntaxhighlighter' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/syntaxhighlighter/syntaxhighlighter.module',
        'basename' => 'syntaxhighlighter.module',
        'name' => 'syntaxhighlighter',
        'info' => 
        array (
          'name' => 'Syntax highlighter',
          'description' => 'Integrates the Syntax Highlighter Javascript Library to your site.',
          'core' => '7.x',
          'configure' => 'admin/config/content/syntaxhighlighter',
          'version' => '7.x-2.x-dev',
          'project' => 'syntaxhighlighter',
          'datestamp' => '1305420195',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'syntaxhighlighter',
        'version' => '7.x-2.x-dev',
      ),
      'menu_block' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/menu_block/menu_block.module',
        'basename' => 'menu_block.module',
        'name' => 'menu_block',
        'info' => 
        array (
          'name' => 'Menu Block',
          'description' => 'Provides configurable blocks of menu items.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'files' => 
          array (
            0 => 'menu_block.module',
            1 => 'menu_block.admin.inc',
            2 => 'menu_block.book.inc',
            3 => 'menu_block.follow.inc',
            4 => 'menu_block.pages.inc',
            5 => 'menu_block.sort.inc',
            6 => 'menu_block.install',
          ),
          '# files' => 
          array (
            0 => 'plugins/content_types/menu_tree/menu_tree.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block',
          'version' => '7.x-2.2',
          'project' => 'menu_block',
          'datestamp' => '1299683174',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'menu_block',
        'version' => '7.x-2.2',
      ),
      'menu_block_export' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/menu_block/menu_block_export.module',
        'basename' => 'menu_block_export.module',
        'name' => 'menu_block_export',
        'info' => 
        array (
          'name' => 'Menu Block Export',
          'description' => 'Provides export interface for Menu block module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu_block',
          ),
          'files' => 
          array (
            0 => 'menu_block_export.module',
            1 => 'menu_block_export.admin.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block/export',
          'version' => '7.x-2.2',
          'project' => 'menu_block',
          'datestamp' => '1299683174',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'menu_block',
        'version' => '7.x-2.2',
      ),
      'contextual_flyout_links' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/contextual_flyout_links/contextual_flyout_links.module',
        'basename' => 'contextual_flyout_links.module',
        'name' => 'contextual_flyout_links',
        'info' => 
        array (
          'name' => 'Contextual Flyout Links',
          'description' => 'Changes the Drupal core contextual links into a stylized flyout menu',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual_flyout_links.module',
            1 => 'contextual_flyout_links.install',
            2 => 'contextual_flyout_links.test',
          ),
          'dependencies' => 
          array (
            0 => 'contextual',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'node_reference' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/references/node_reference/node_reference.module',
        'basename' => 'node_reference.module',
        'name' => 'node_reference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'files' => 
          array (
            0 => 'node_reference.test',
          ),
          'version' => '7.x-2.0-beta3',
          'project' => 'references',
          'datestamp' => '1305236816',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.0-beta3',
      ),
      'user_reference' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/references/user_reference/user_reference.module',
        'basename' => 'user_reference.module',
        'name' => 'user_reference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'version' => '7.x-2.0-beta3',
          'project' => 'references',
          'datestamp' => '1305236816',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.0-beta3',
      ),
      'references' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/references/references.module',
        'basename' => 'references.module',
        'name' => 'references',
        'info' => 
        array (
          'name' => 'References',
          'description' => 'Defines common base features for the various reference field types.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'views/references_handler_relationship.inc',
            1 => 'views/references_handler_argument.inc',
            2 => 'views/references_plugin_display.inc',
            3 => 'views/references_plugin_style.inc',
          ),
          'version' => '7.x-2.0-beta3',
          'project' => 'references',
          'datestamp' => '1305236816',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.0-beta3',
      ),
      'mollom_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/mollom/tests/mollom_test.module',
        'basename' => 'mollom_test.module',
        'name' => 'mollom_test',
        'info' => 
        array (
          'name' => 'Mollom Test',
          'description' => 'Testing module for Mollom functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'version' => '7.x-2.2',
          'project' => 'mollom',
          'datestamp' => '1344429449',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mollom',
        'version' => '7.x-2.2',
      ),
      'mollom_test_server' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/mollom/tests/mollom_test_server.module',
        'basename' => 'mollom_test_server.module',
        'name' => 'mollom_test_server',
        'info' => 
        array (
          'name' => 'Mollom Test Server',
          'description' => 'Testing Server module for Mollom functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'version' => '7.x-2.2',
          'project' => 'mollom',
          'datestamp' => '1344429449',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mollom',
        'version' => '7.x-2.2',
      ),
      'mollom' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/mollom/mollom.module',
        'basename' => 'mollom.module',
        'name' => 'mollom',
        'info' => 
        array (
          'name' => 'Mollom',
          'description' => 'Automatically moderates user-submitted content and protects your site from spam and profanity.',
          'core' => '7.x',
          'configure' => 'admin/config/content/mollom',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'mollom.css',
            ),
          ),
          'files' => 
          array (
            0 => 'includes/mollom.class.inc',
            1 => 'mollom.drupal.inc',
            2 => 'tests/mollom.test',
            3 => 'tests/mollom.class.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'mollom',
          'datestamp' => '1344429449',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'project' => 'mollom',
        'version' => '7.x-2.2',
      ),
      'jquery_colorpicker' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/jquery_colorpicker/jquery_colorpicker.module',
        'basename' => 'jquery_colorpicker.module',
        'name' => 'jquery_colorpicker',
        'info' => 
        array (
          'name' => 'Jquery Colorpicker',
          'description' => 'Creates Form API jquery colorpicker element',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_colorpicker.install',
            1 => 'jquery_colorpicker.module',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'jquery_colorpicker',
          'datestamp' => '1295922101',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'jquery_colorpicker',
        'version' => '7.x-1.0-beta2',
      ),
      'sharethis_block' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/sharethis/sharethis_block/sharethis_block.module',
        'basename' => 'sharethis_block.module',
        'name' => 'sharethis_block',
        'info' => 
        array (
          'name' => 'ShareThis Block',
          'description' => 'This module creates a custom block for the <a href="http://sharethis.com/">ShareThis</a> widget.',
          'core' => '7.x',
          'package' => 'Sharing',
          'dependencies' => 
          array (
            0 => 'sharethis',
          ),
          'version' => '7.x-2.2',
          'project' => 'sharethis',
          'datestamp' => '1317251208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'sharethis',
        'version' => '7.x-2.2',
      ),
      'sharethis' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/sharethis/sharethis.module',
        'basename' => 'sharethis.module',
        'name' => 'sharethis',
        'info' => 
        array (
          'name' => 'ShareThis',
          'description' => 'This module adds the <a href="http://sharethis.com/">ShareThis</a> widget to a node on your site.',
          'core' => '7.x',
          'package' => 'Sharing',
          'configure' => 'admin/config/sharethis',
          'version' => '7.x-2.2',
          'project' => 'sharethis',
          'datestamp' => '1317251208',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'sharethis',
        'version' => '7.x-2.2',
      ),
      'twitter_pull' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/twitter_pull/twitter_pull.module',
        'basename' => 'twitter_pull.module',
        'name' => 'twitter_pull',
        'info' => 
        array (
          'name' => 'Twitter Pull',
          'description' => 'Pull Info from Twitter and Create Contextual Insets',
          'package' => 'Other',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'twitter_pull.module',
            1 => 'twitter_pull.install',
            2 => 'plugins/twitter_pull_box.inc',
            3 => 'twitter_pull.class.inc',
          ),
          'version' => '7.x-1.0-rc5',
          'project' => 'twitter_pull',
          'datestamp' => '1366136528',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'twitter_pull',
        'version' => '7.x-1.0-rc5',
      ),
      'conditional_styles_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/conditional_styles/tests/conditional_styles_test.module',
        'basename' => 'conditional_styles_test.module',
        'name' => 'conditional_styles_test',
        'info' => 
        array (
          'name' => 'Conditional Stylesheets Tests',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'conditional_styles',
          ),
          'files' => 
          array (
            0 => 'conditional_styles_test.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'conditional_styles',
          'datestamp' => '1295358738',
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'conditional_styles',
        'version' => '7.x-2.0',
      ),
      'conditional_styles' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/conditional_styles/conditional_styles.module',
        'basename' => 'conditional_styles.module',
        'name' => 'conditional_styles',
        'info' => 
        array (
          'name' => 'Conditional Stylesheets',
          'description' => 'Allows themes to add conditional stylesheets.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'conditional_styles.install',
            1 => 'conditional_styles.module',
            2 => 'tests/conditional_styles.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'conditional_styles',
          'datestamp' => '1295358738',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'conditional_styles',
        'version' => '7.x-2.0',
      ),
      'options_element' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/options_element/options_element.module',
        'basename' => 'options_element.module',
        'name' => 'options_element',
        'info' => 
        array (
          'name' => 'Options element',
          'description' => 'A custom form element for entering the options in select lists, radios, or checkboxes.',
          'core' => '7.x',
          'version' => '7.x-1.4',
          'project' => 'options_element',
          'datestamp' => '1294818406',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'options_element',
        'version' => '7.x-1.4',
      ),
      'page_title' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/page_title/page_title.module',
        'basename' => 'page_title.module',
        'name' => 'page_title',
        'info' => 
        array (
          'name' => 'Page Title',
          'description' => 'Enhanced control over the page title (in the &lt;head> tag).',
          'core' => '7.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'page_title.module',
            1 => 'page_title.admin.inc',
            2 => 'page_title.token.inc',
            3 => 'page_title.test',
            4 => 'views/plugins/page_title_plugin_display_page_with_page_title.inc',
            5 => 'views_handler_field_node_page_title.inc',
          ),
          'configure' => 'admin/config/search/page-title',
          'version' => '7.x-2.5',
          'project' => 'page_title',
          'datestamp' => '1309438921',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'page_title',
        'version' => '7.x-2.5',
      ),
      'securepages' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/securepages/securepages.module',
        'basename' => 'securepages.module',
        'name' => 'securepages',
        'info' => 
        array (
          'name' => 'Secure Pages',
          'description' => 'Set which pages are always going to be used in secure mode (SSL) Warning: Do not enable this module without configuring your web server to handle SSL with this installation of Drupal',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'securepages.admin.inc',
            1 => 'securepages.install',
            2 => 'securepages.module',
            3 => 'securepages.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'securepages',
          'datestamp' => '1301573593',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'securepages',
        'version' => '7.x-1.x-dev',
      ),
      'webform_alt_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/webform_alt_ui/webform_alt_ui.module',
        'basename' => 'webform_alt_ui.module',
        'name' => 'webform_alt_ui',
        'info' => 
        array (
          'name' => 'Webform Alternate UI',
          'description' => 'Provides an alternate user experience for the Webform module.',
          'package' => 'Webform',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'webform',
            1 => 'form_builder',
            2 => 'form_builder_webform',
            3 => 'ux_elements',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'webform_alt_ui',
          'datestamp' => '1308542400',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'webform_alt_ui',
        'version' => '7.x-1.x-dev',
      ),
      'addressfield_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/addressfield/example/addressfield_example.module',
        'basename' => 'addressfield_example.module',
        'name' => 'addressfield_example',
        'info' => 
        array (
          'name' => 'Address Field Example',
          'description' => 'Example module for how to implement an addressfield format handler.',
          'core' => '7.x',
          'package' => 'Fields',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'addressfield',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'addressfield',
          'datestamp' => '1314906115',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'addressfield',
        'version' => '7.x-1.0-beta2',
      ),
      'addressfield' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/addressfield/addressfield.module',
        'basename' => 'addressfield.module',
        'name' => 'addressfield',
        'info' => 
        array (
          'name' => 'Address Field',
          'description' => 'Manage a flexible address field, implementing the xNAL standard.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/addressfield_views_handler_filter_country.inc',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'addressfield',
          'datestamp' => '1314906115',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'addressfield',
        'version' => '7.x-1.0-beta2',
      ),
      'fb_views' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/fb_views/fb_views.module',
        'basename' => 'fb_views.module',
        'name' => 'fb_views',
        'info' => 
        array (
          'name' => 'FB Views',
          'description' => '(fb_views.module) Provides features specific to Views module for Facebook Apps.',
          'package' => 'Drupal for Facebook',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'fb_user',
            2 => 'views',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_rules' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/contrib/fb_rules.module',
        'basename' => 'fb_rules.module',
        'name' => 'fb_rules',
        'info' => 
        array (
          'name' => 'FB Rules Integration',
          'description' => '(fb_rules.module) Provide Facebook events access and interaction through <a href=http://drupal.org/project/rules target=_blank>Rules</a>.',
          'package' => 'Drupal for Facebook - contrib',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'rules',
          ),
          'core' => '7.x',
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/contrib/fb_example.module',
        'basename' => 'fb_example.module',
        'name' => 'fb_example',
        'info' => 
        array (
          'name' => 'FB Example Customizations',
          'description' => '(fb_example.module) These hooks will make your site behave more like <a href=http://www.drupalforfacebook.org target=_blank>drupalforfacebook.org</a>.  Use this code as an example for your own customizations.',
          'package' => 'Drupal for Facebook - contrib',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'fb_form',
            2 => 'fb_app',
            3 => 'fb_friend',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => '1',
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_user_app' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/contrib/fb_user_app.module',
        'basename' => 'fb_user_app.module',
        'name' => 'fb_user_app',
        'info' => 
        array (
          'name' => 'FB User Tracking',
          'description' => '(fb_user_app.module) Keep records of users most recent visits to your apps.  Note that this adds some overhead to each app visit.',
          'package' => 'Drupal for Facebook - contrib',
          'configure' => 'admin/structure/fb/fb_user_app',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'fb_app',
          ),
          'files' => 
          array (
            0 => 'fb_user_app.module',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_registration' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/contrib/fb_registration.module',
        'basename' => 'fb_registration.module',
        'name' => 'fb_registration',
        'info' => 
        array (
          'name' => 'FB Registration',
          'description' => '(fb_registration.module) Replaces Drupal user registration form with facebook <a href=http://developers.facebook.com/docs/user_registration target=_blank>registration</a>.',
          'package' => 'Drupal for Facebook - contrib',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'fb_app',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_friend' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/contrib/fb_friend.module',
        'basename' => 'fb_friend.module',
        'name' => 'fb_friend',
        'info' => 
        array (
          'name' => 'FB Friend Features',
          'description' => '(fb_friend.module) Blocks for showing the current user\'s friends, sending them requests, etc.',
          'package' => 'Drupal for Facebook - contrib',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'fb_form',
            2 => 'fb_app',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_permission' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/contrib/fb_permission.module',
        'basename' => 'fb_permission.module',
        'name' => 'fb_permission',
        'info' => 
        array (
          'name' => 'FB Extended Permissions',
          'description' => '(fb_permission.module) Host applications that require or support <a href=http://developers.facebook.com/docs/authentication/permissions target=_blank>Extended Permissions</a>.',
          'package' => 'Drupal for Facebook - contrib',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'fb_app',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'fb_permission.module',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/contrib/fb_test.module',
        'basename' => 'fb_test.module',
        'name' => 'fb_test',
        'info' => 
        array (
          'name' => 'FB Testing Helpers',
          'description' => '(fb_test.module) Create <a href=http://developers.facebook.com/docs/test_users target=_blank>test accounts</a>.',
          'package' => 'Drupal for Facebook - contrib',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'fb_app',
          ),
          'files' => 
          array (
            0 => 'fb_test.module',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_app' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/fb_app.module',
        'basename' => 'fb_app.module',
        'name' => 'fb_app',
        'info' => 
        array (
          'name' => 'Facebook Apps',
          'description' => '(fb_app.module) Host and administer <a href=http://developers.facebook.com target=_blank>Facebook apps</a>.',
          'package' => 'Drupal for Facebook',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
          ),
          'files' => 
          array (
            0 => 'fb_app.module',
            1 => 'fb_app.install',
            2 => 'fb_app.admin.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_form' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/fb_form.module',
        'basename' => 'fb_form.module',
        'name' => 'fb_form',
        'info' => 
        array (
          'name' => 'FB Forms',
          'description' => '(fb_form.module) Build FBML form constructs such as <a href=http://developers.facebook.com/docs/guides/canvas/#requests target=_blank>requests</a> using Drupal\'s Form API.',
          'package' => 'Drupal for Facebook',
          'dependencies' => 
          array (
            0 => 'fb',
          ),
          'core' => '7.x',
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_stream' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/fb_stream.module',
        'basename' => 'fb_stream.module',
        'name' => 'fb_stream',
        'info' => 
        array (
          'name' => 'FB Streams',
          'description' => '(fb_stream.module) APIs for posting to <a href=http://developers.facebook.com/docs/guides/canvas/#stream target=_blank>Facebook Streams</a> (a.k.a. News Feed or Wall)',
          'package' => 'Drupal for Facebook',
          'dependencies' => 
          array (
            0 => 'fb',
          ),
          'core' => '7.x',
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_connect' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/fb_connect.module',
        'basename' => 'fb_connect.module',
        'name' => 'fb_connect',
        'info' => 
        array (
          'name' => 'Facebook Connect',
          'description' => '(fb_connect.module) Host <a href=http://developers.facebook.com/docs/guides/web target=_blank>Facebook Connect apps</a>.  Login buttons and FBML helpers that are useful on iframe canvas pages as well.',
          'package' => 'Drupal for Facebook',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'fb_app',
          ),
          'files' => 
          array (
            0 => 'fb_connect.admin.inc',
            1 => 'fb_connect.install',
            2 => 'fb_connect.module',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_canvas' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/fb_canvas.module',
        'basename' => 'fb_canvas.module',
        'name' => 'fb_canvas',
        'info' => 
        array (
          'name' => 'FB Canvas Pages',
          'description' => '(fb_canvas.module) Host <a href=http://developers.facebook.com/docs/guides/canvas/ target=_blank>apps on facebook.com</a> using iframe canvas pages.',
          'package' => 'Drupal for Facebook',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'fb_app',
          ),
          'files' => 
          array (
            0 => 'fb_canvas.module',
            1 => 'fb_canvas.admin.inc',
            2 => 'fb_url_rewrite.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_devel' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/fb_devel.module',
        'basename' => 'fb_devel.module',
        'name' => 'fb_devel',
        'info' => 
        array (
          'name' => 'FB Development tools',
          'description' => '(fb_devel.module) Catch errors and solve problems before they surprise you.  Displays messages and blocks that help when developing and debugging Apps.  Disable on your production server, when your site is live, because this module adds overhead.',
          'package' => 'Drupal for Facebook',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'devel',
          ),
          'files' => 
          array (
            0 => 'fb_devel.install',
            1 => 'fb_devel.module',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_user' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/fb_user.module',
        'basename' => 'fb_user.module',
        'name' => 'fb_user',
        'info' => 
        array (
          'name' => 'FB User Management',
          'description' => '(fb_user.module) Maps local user accounts to facebook user ids.  Creates local accounts for app users when configured to do so.',
          'package' => 'Drupal for Facebook',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'fb_app',
          ),
          'files' => 
          array (
            0 => 'fb_user.install',
            1 => 'fb_user.module',
            2 => 'fb_user.admin.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/fb.module',
        'basename' => 'fb.module',
        'name' => 'fb',
        'info' => 
        array (
          'name' => 'Facebook API',
          'description' => '(fb.module) Initializes facebook\'s PHP and Javascript client libraries.  Enables FBML Like buttons and other <a href=http://developers.facebook.com/plugins target=_blank>social plugins</a>.  (See <em>modules/fb/README.txt</em>.)',
          'package' => 'Drupal for Facebook',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'fb.module',
            1 => 'fb.install',
            2 => 'fb.admin.inc',
            3 => 'fb.theme.inc',
            4 => 'fb_url_rewrite.inc',
          ),
          'scripts' => 
          array (
            0 => 'fb.js',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'fb_tab' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/fb/fb_tab.module',
        'basename' => 'fb_tab.module',
        'name' => 'fb_tab',
        'info' => 
        array (
          'name' => 'FB Tabs',
          'description' => '(fb_tab.module) Enable <a href=http://developers.facebook.com/docs/guides/canvas/#tabs target=_blank>tabs on pages</a> where your applications are installed.',
          'package' => 'Drupal for Facebook',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb',
            1 => 'fb_app',
          ),
          'files' => 
          array (
            0 => 'fb_tab.install',
            1 => 'fb_tab.module',
            2 => 'fb_tab.admin.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'fb',
          'datestamp' => '1320927254',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb',
        'version' => '7.x-3.x-dev',
      ),
      'filter_perms' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/filter_perms/filter_perms.module',
        'basename' => 'filter_perms.module',
        'name' => 'filter_perms',
        'info' => 
        array (
          'name' => 'Filter permissions',
          'description' => 'Provides role and module filters to simplify the user permissions page.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-1.x-dev',
          'project' => 'filter_perms',
          'datestamp' => '1314750472',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'filter_perms',
        'version' => '7.x-1.x-dev',
      ),
      'views_php' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views_php/views_php.module',
        'basename' => 'views_php.module',
        'name' => 'views_php',
        'info' => 
        array (
          'name' => 'Views PHP',
          'description' => 'Allows the usage of PHP to construct a view.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'plugins/views/views_php_handler_area.inc',
            1 => 'plugins/views/views_php_handler_field.inc',
            2 => 'plugins/views/views_php_handler_filter.inc',
            3 => 'plugins/views/views_php_handler_sort.inc',
            4 => 'plugins/views/views_php_plugin_access.inc',
            5 => 'plugins/views/views_php_plugin_cache.inc',
            6 => 'plugins/views/views_php_plugin_pager.inc',
            7 => 'plugins/views/views_php_plugin_query.inc',
            8 => 'plugins/views/views_php_plugin_wrapper.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'views_php',
          'datestamp' => '1302956552',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_php',
        'version' => '7.x-1.x-dev',
      ),
      'simplified_menu_admin' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/simplified_menu_admin/simplified_menu_admin.module',
        'basename' => 'simplified_menu_admin.module',
        'name' => 'simplified_menu_admin',
        'info' => 
        array (
          'name' => 'Simplified menu administration',
          'description' => 'Simplifies the Menu and Shortcut modules by merging "List links" and "Edit menu" into a single administration page.',
          'core' => '7.x',
          'version' => '7.x-1.0-beta2',
          'project' => 'simplified_menu_admin',
          'datestamp' => '1308938520',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'simplified_menu_admin',
        'version' => '7.x-1.0-beta2',
      ),
      'relation_dummy_field' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/relation/relation_dummy_field/relation_dummy_field.module',
        'basename' => 'relation_dummy_field.module',
        'name' => 'relation_dummy_field',
        'info' => 
        array (
          'name' => 'Relation Dummy Field',
          'description' => 'Dummy field to display relation data inline on entities.',
          'core' => '7.x',
          'package' => 'Relation',
          'dependencies' => 
          array (
            0 => 'relation',
          ),
          'files' => 
          array (
            0 => 'tests/relation_dummy_field.test',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'relation',
          'datestamp' => '1310336520',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'relation',
        'version' => '7.x-1.0-beta1',
      ),
      'relation_entity_collector' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/relation/relation_entity_collector/relation_entity_collector.module',
        'basename' => 'relation_entity_collector.module',
        'name' => 'relation_entity_collector',
        'info' => 
        array (
          'name' => 'Relation Entity Collector block',
          'description' => 'A block to collect entities loaded on any page(s), and create relations from them.',
          'core' => '7.x',
          'package' => 'Relation',
          'dependencies' => 
          array (
            0 => 'relation',
            1 => 'block',
          ),
          'files' => 
          array (
            0 => 'tests/relation_entity_collector.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'relation_entity_collector.css',
            ),
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'relation',
          'datestamp' => '1310336520',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'relation',
        'version' => '7.x-1.0-beta1',
      ),
      'relation' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/relation/relation.module',
        'basename' => 'relation.module',
        'name' => 'relation',
        'info' => 
        array (
          'name' => 'Relation',
          'description' => 'Describes relationships between entities.',
          'core' => '7.x',
          'package' => 'Relation',
          'files' => 
          array (
            0 => 'relation.database.inc',
            1 => 'tests/relation.test',
            2 => 'tests/relation.rules.test',
            3 => 'tests/relation.views.test',
            4 => 'views/relation_handler_relationship.inc',
          ),
          'configure' => 'admin/structure/relation',
          'version' => '7.x-1.0-beta1',
          'project' => 'relation',
          'datestamp' => '1310336520',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'relation',
        'version' => '7.x-1.0-beta1',
      ),
      'smartcrop' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/smartcrop/smartcrop.module',
        'basename' => 'smartcrop.module',
        'name' => 'smartcrop',
        'info' => 
        array (
          'name' => 'SmartCrop',
          'description' => 'Crops low-entropy parts of the image.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'package' => 'Image',
          'files' => 
          array (
            0 => 'imageapi_gd.inc',
            1 => 'smartcrop.install',
            2 => 'smartcrop.module',
            3 => 'smartcrop.effects.inc',
            4 => 'tests/smartcrop.test',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'smartcrop',
          'datestamp' => '1291750843',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'smartcrop',
        'version' => '7.x-1.0-beta2',
      ),
      'multiform' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/multiform/multiform.module',
        'basename' => 'multiform.module',
        'name' => 'multiform',
        'info' => 
        array (
          'name' => 'Multiple forms',
          'description' => 'Allows displaying and submitting multiple forms in one form',
          'files' => 
          array (
            0 => 'multiform.module',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta2',
          'project' => 'multiform',
          'datestamp' => '1301077268',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'multiform',
        'version' => '7.x-1.0-beta2',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'backup_migrate.module',
            1 => 'backup_migrate.install',
            2 => 'includes/destinations.inc',
            3 => 'includes/profiles.inc',
            4 => 'includes/schedules.inc',
          ),
          'version' => '7.x-2.2',
          'project' => 'backup_migrate',
          'datestamp' => '1310528214',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'backup_migrate',
        'version' => '7.x-2.2',
      ),
      'plupload' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/plupload/plupload.module',
        'basename' => 'plupload.module',
        'name' => 'plupload',
        'info' => 
        array (
          'name' => 'Plupload integration module',
          'description' => 'Provides a plupload element.',
          'files' => 
          array (
            0 => 'plupload.module',
          ),
          'core' => '7.x',
          'package' => 'Media',
          'version' => '7.x-1.0-beta3',
          'project' => 'plupload',
          'datestamp' => '1306279316',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'plupload',
        'version' => '7.x-1.0-beta3',
      ),
      'nodequeue_service' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/nodequeue/addons/nodequeue_service/nodequeue_service.module',
        'basename' => 'nodequeue_service.module',
        'name' => 'nodequeue_service',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'nodequeue',
          ),
          'description' => 'Provides a nodequeue service.',
          'name' => 'Nodequeue Service',
          'package' => 'Nodequeue',
          'files' => 
          array (
            0 => 'nodequeue_service.inc',
            1 => 'nodequeue_service.module',
          ),
          'version' => '7.x-2.0-alpha2',
          'project' => 'nodequeue',
          'datestamp' => '1305929516',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-alpha2',
      ),
      'smartqueue' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/nodequeue/smartqueue.module',
        'basename' => 'smartqueue.module',
        'name' => 'smartqueue',
        'info' => 
        array (
          'name' => 'Smartqueue taxonomy',
          'description' => 'Creates a node queue for each taxonomy vocabulary',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'nodequeue',
            1 => 'taxonomy',
          ),
          'version' => '7.x-2.0-alpha2',
          'project' => 'nodequeue',
          'datestamp' => '1305929516',
          'php' => '5.2.4',
        ),
        'schema_version' => '6003',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-alpha2',
      ),
      'nodequeue' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/nodequeue/nodequeue.module',
        'basename' => 'nodequeue.module',
        'name' => 'nodequeue',
        'info' => 
        array (
          'name' => 'Nodequeue',
          'description' => 'Create queues which can contain nodes in arbitrary order',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'configure' => 'admin/structure/nodequeue/settings',
          'files' => 
          array (
            0 => 'includes/views/nodequeue.views.inc',
            1 => 'includes/nodequeue.actions.inc',
            2 => 'includes/views/nodequeue_handler_argument_subqueue_qid.inc',
            3 => 'includes/views/nodequeue_handler_field_all_queues.inc',
            4 => 'includes/views/nodequeue_handler_field_all_subqueues.inc',
            5 => 'includes/views/nodequeue_handler_field_links.inc',
            6 => 'includes/views/nodequeue_handler_field_queue_tab.inc',
            7 => 'includes/views/nodequeue_handler_filter_in_queue.inc',
            8 => 'includes/views/nodequeue_handler_relationship_nodequeue.inc',
          ),
          'version' => '7.x-2.0-alpha2',
          'project' => 'nodequeue',
          'datestamp' => '1305929516',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-alpha2',
      ),
      'nodequeue_generate' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/nodequeue/nodequeue_generate.module',
        'basename' => 'nodequeue_generate.module',
        'name' => 'nodequeue_generate',
        'info' => 
        array (
          'name' => 'Nodequeue generate',
          'description' => 'Bulk assign nodes into queues for quickly populating a site.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'nodequeue',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'nodequeue_generate.module',
          ),
          'version' => '7.x-2.0-alpha2',
          'project' => 'nodequeue',
          'datestamp' => '1305929516',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-alpha2',
      ),
      'example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/coder/coder_upgrade/tests/new/samples/example.module',
        'basename' => 'example.module',
        'name' => 'example',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'coder_upgrade' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/coder/coder_upgrade/coder_upgrade.module',
        'basename' => 'coder_upgrade.module',
        'name' => 'coder_upgrade',
        'info' => 
        array (
          'name' => 'Coder Upgrade',
          'description' => 'Module conversion suite -- generates code to assist with the upgrade of
               contributed 6.x modules to version 7.x modules.
               WARNING: Use only on contributed modules.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'grammar_parser',
          ),
          'files' => 
          array (
            0 => 'coder_upgrade.help.inc',
            1 => 'coder_upgrade.inc',
            2 => 'coder_upgrade.install',
            3 => 'coder_upgrade.module',
            4 => 'coder_upgrade.test',
            5 => 'conversions/coder_upgrade.begin.inc',
            6 => 'conversions/coder_upgrade.call.inc',
            7 => 'conversions/coder_upgrade.db.inc',
            8 => 'conversions/coder_upgrade.end.inc',
            9 => 'conversions/coder_upgrade.function.inc',
            10 => 'conversions/coder_upgrade.install.inc',
            11 => 'conversions/coder_upgrade.list.inc',
            12 => 'conversions/coder_upgrade.main.inc',
            13 => 'conversions/coder_upgrade.regex.inc',
          ),
          'configure' => 'admin/config/development/coder/upgrade/settings',
          'core' => '7.x',
          'version' => '7.x-1.0-beta6',
          'project' => 'coder',
          'datestamp' => '1291500159',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-1.0-beta6',
      ),
      'coder_review_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/coder/coder_review/tests/coder_review_test/coder_review_test.module',
        'basename' => 'coder_review_test.module',
        'name' => 'coder_review_test',
        'info' => 
        array (
          'name' => 'Coder Review Test',
          'package' => 'Coder',
          'core' => '7.x',
          'hidden' => true,
          'files' => 
          array (
            0 => 'coder_review_test.module',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'coder',
          'datestamp' => '1291500159',
          'dependencies' => 
          array (
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-1.0-beta6',
      ),
      'coder_review' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/coder/coder_review/coder_review.module',
        'basename' => 'coder_review.module',
        'name' => 'coder_review',
        'info' => 
        array (
          'name' => 'Coder Review',
          'description' => 'Developer module which reviews your code identifying coding style problems and where updates to the API are required.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'coder',
          ),
          'files' => 
          array (
            0 => 'coder_review.install',
            1 => 'coder_review.module',
            2 => 'coder_review.drush.inc',
            3 => 'includes/coder_review_47.inc',
            4 => 'includes/coder_review_5x.inc',
            5 => 'includes/coder_review_6x.inc',
            6 => 'includes/coder_review_7x.inc',
            7 => 'includes/coder_review_comment.inc',
            8 => 'includes/coder_review_i18n.inc',
            9 => 'includes/coder_review_security.inc',
            10 => 'includes/coder_review_sql.inc',
            11 => 'includes/coder_review_style.inc',
            12 => 'tests/coder_review_test_case.tinc',
            13 => 'tests/coder_review_6x.test',
            14 => 'tests/coder_review_7x.test',
            15 => 'tests/coder_review_comment.test',
            16 => 'tests/coder_review_format.test',
            17 => 'tests/coder_review_i18n.test',
            18 => 'tests/coder_review_security.test',
            19 => 'tests/coder_review_sql.test',
            20 => 'tests/coder_review_style.test',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'coder',
          'datestamp' => '1291500159',
          'php' => '5.2.4',
        ),
        'schema_version' => '3',
        'project' => 'coder',
        'version' => '7.x-1.0-beta6',
      ),
      'coder' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/coder/coder.module',
        'basename' => 'coder.module',
        'name' => 'coder',
        'info' => 
        array (
          'name' => 'Coder',
          'description' => 'Developer Module that assists with code review and version upgrade',
          'package' => 'Development',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'coder.module',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'coder',
          'datestamp' => '1291500159',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-1.0-beta6',
      ),
      'pathauto' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'pathauto',
          'datestamp' => '1308241021',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.0-rc2',
      ),
      'block_titlelink' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/block_titlelink/block_titlelink.module',
        'basename' => 'block_titlelink.module',
        'name' => 'block_titlelink',
        'info' => 
        array (
          'name' => 'Block Title Link',
          'description' => 'Allows assigning links to Block Titles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block_titlelink.info',
            1 => 'block_titlelink.install',
            2 => 'block_titlelink.module',
            3 => 'README.txt',
          ),
          'version' => '7.x-1.1',
          'project' => 'block_titlelink',
          'datestamp' => '1310485314',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'block_titlelink',
        'version' => '7.x-1.1',
      ),
      'qtip' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/qtip/qtip.module',
        'basename' => 'qtip.module',
        'name' => 'qtip',
        'info' => 
        array (
          'name' => 'qTip Tooltips',
          'description' => 'Stylish tooltips for your web pages.',
          'files' => 
          array (
            0 => 'qtip.module',
            1 => 'qtip.admin.inc',
            2 => 'qtip.install',
          ),
          'configure' => 'admin/config/content/qtip',
          'core' => '7.x',
          'version' => '7.x-1.2',
          'project' => 'qtip',
          'datestamp' => '1292454179',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'qtip',
        'version' => '7.x-1.2',
      ),
      'module_filter' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-1.6',
          'project' => 'module_filter',
          'datestamp' => '1316105205',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'module_filter',
        'version' => '7.x-1.6',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'files' => 
          array (
            0 => 'admin_menu_toolbar.module',
            1 => 'admin_menu_toolbar.install',
          ),
          'version' => '7.x-3.0-rc1',
          'project' => 'admin_menu',
          'datestamp' => '1294378870',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc1',
      ),
      'admin_views' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/admin_menu/admin_views/admin_views.module',
        'basename' => 'admin_views.module',
        'name' => 'admin_views',
        'info' => 
        array (
          'name' => 'Administration views',
          'description' => 'Replaces all system object management pages in Drupal core with real views.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'views_bulk_operations',
          ),
          'files' => 
          array (
            0 => 'admin_views.module',
            1 => 'plugins/views_plugin_display_system.inc',
          ),
          'version' => '7.x-3.0-rc1',
          'project' => 'admin_menu',
          'datestamp' => '1294378870',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc1',
      ),
      'admin_devel' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'files' => 
          array (
            0 => 'admin_devel.module',
          ),
          'version' => '7.x-3.0-rc1',
          'project' => 'admin_menu',
          'datestamp' => '1294378870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc1',
      ),
      'admin_menu' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'configure' => 'admin/config/administration/admin_menu',
          'version' => '7.x-3.0-rc1',
          'core' => '7.x',
          'project' => 'admin_menu',
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'datestamp' => '1294378870',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc1',
      ),
      'disqus' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/disqus/disqus.module',
        'basename' => 'disqus.module',
        'name' => 'disqus',
        'info' => 
        array (
          'name' => 'Disqus',
          'description' => 'Uses the Disqus web service to enhance comments.',
          'core' => '7.x',
          'php' => '5',
          'files' => 
          array (
            0 => 'disqus.admin.inc',
            1 => 'disqus.install',
            2 => 'disqus.module',
            3 => 'disqus.php',
          ),
          'configure' => 'admin/config/services/disqus',
          'version' => '7.x-1.8',
          'project' => 'disqus',
          'datestamp' => '1302216715',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7001',
        'project' => 'disqus',
        'version' => '7.x-1.8',
      ),
      'date_repeat' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'date_repeat_calc.inc',
            1 => 'date_repeat_form.inc',
            2 => 'date_repeat.install',
            3 => 'date_repeat.module',
            4 => 'tests/date_repeat.test',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'date',
          'datestamp' => '1314097619',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.0-alpha4',
      ),
      'date_tools' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/structure/date',
          'files' => 
          array (
            0 => 'date_tools.module',
            1 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'date',
          'datestamp' => '1314097619',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.0-alpha4',
      ),
      'date_api' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_elements.inc',
            2 => 'date_api_ical.inc',
            3 => 'date_api_sql.inc',
            4 => 'date_api.admin.inc',
            5 => 'date_api.install',
            6 => 'theme/theme.inc',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'date',
          'datestamp' => '1314097619',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7000',
        'project' => 'date',
        'version' => '7.x-2.0-alpha4',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_migrate',
            3 => 'features',
            4 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.0-alpha4',
          'datestamp' => '1314097619',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.0-alpha4',
      ),
      'date_migrate' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/date/date_migrate/date_migrate.module',
        'basename' => 'date_migrate.module',
        'name' => 'date_migrate',
        'info' => 
        array (
          'name' => 'Date Migration',
          'description' => 'Provides support for importing into date fields with the Migrate module.',
          'core' => '7.x',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'migrate',
            1 => 'date',
          ),
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'date_migrate.test',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'date',
          'datestamp' => '1314097619',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.0-alpha4',
      ),
      'date_popup' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/content/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_popup.module',
            1 => 'date_popup.install',
            2 => 'date_popup.js',
            3 => 'themes/calendar.css',
            4 => 'themes/datepicker.css',
            5 => 'themes/timeentry.css',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'date',
          'datestamp' => '1314097619',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.0-alpha4',
      ),
      'date_views' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'date_views.module',
            1 => 'includes/date_handler_field_multiple.inc',
            2 => 'includes/date_views_argument_handler.inc',
            3 => 'includes/date_views_argument_handler_simple.inc',
            4 => 'includes/date_views_fields.inc',
            5 => 'includes/date_views_filter_handler.inc',
            6 => 'includes/date_views_filter_handler_simple.inc',
            7 => 'includes/date_views.views_default.inc',
            8 => 'includes/date_views.views.inc',
            9 => 'includes/date_views_plugin_pager.inc',
            10 => 'includes/date_navigation_plugin_style.inc',
            11 => 'includes/date_plugin_display_attachment.inc',
            12 => 'theme/theme.inc',
            13 => 'theme/date-navigation.tpl.php',
            14 => 'theme/date-views-pager.tpl.php',
            15 => 'theme/date-valarm.tpl.php',
            16 => 'theme/date-vcalendar.tpl.php',
            17 => 'theme/date-vevent.tpl.php',
            18 => 'theme/date-views-filter-form.tpl.php',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'date',
          'datestamp' => '1314097619',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.0-alpha4',
      ),
      'date' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'date_admin.inc',
            1 => 'date_content_generate.inc',
            2 => 'date_elements.inc',
            3 => 'date_repeat.inc',
            4 => 'date.install',
            5 => 'date.module',
            6 => 'date.theme',
            7 => 'date.tokens.inc',
            8 => 'date.views.inc',
            9 => 'tests/date_api.test',
            10 => 'tests/date.test',
            11 => 'tests/date_field.test',
            12 => 'tests/date_validation.test',
            13 => 'tests/date_timezone.test',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'date',
          'datestamp' => '1314097619',
        ),
        'schema_version' => '7000',
        'project' => 'date',
        'version' => '7.x-2.0-alpha4',
      ),
      'service_links_share' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/plugins/service_links_share.module',
        'basename' => 'service_links_share.module',
        'name' => 'service_links_share',
        'info' => 
        array (
          'name' => 'Service Links Share',
          'description' => 'Provide the integration between Service Links and Share module',
          'core' => '7.x',
          'package' => 'Share - tabs',
          'dependencies' => 
          array (
            0 => 'service_links',
            1 => 'share',
            2 => 'share_widget',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'service_links_share.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'service_links_displays' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/plugins/service_links_displays.module',
        'basename' => 'service_links_displays.module',
        'name' => 'service_links_displays',
        'info' => 
        array (
          'name' => 'Service Links Displays',
          'description' => 'Provide the integration between Service Links and Node Displays (Display Suite)',
          'core' => '7.x',
          'package' => 'Display suite',
          'dependencies' => 
          array (
            0 => 'service_links',
            1 => 'ds',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'service_links_displays.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'service_links_sprites' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/plugins/service_links_sprites.module',
        'basename' => 'service_links_sprites.module',
        'name' => 'service_links_sprites',
        'info' => 
        array (
          'name' => 'Service Links Sprites',
          'description' => 'Add the ability to handle sprites with Service Links',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'service_links_sprites.module',
          ),
          'configure' => 'admin/config/services/service-links',
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'favorite_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/favorite_services.module',
        'basename' => 'favorite_services.module',
        'name' => 'favorite_services',
        'info' => 
        array (
          'name' => 'Favorite Services',
          'description' => 'Add the page in your favorite, work with Chrome, Firefox, IE, Opera',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'favorite_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'polish_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/polish_services.module',
        'basename' => 'polish_services.module',
        'name' => 'polish_services',
        'info' => 
        array (
          'name' => 'Polish Services',
          'description' => 'Provide the Polish Services: Blip, Wykop, Sledzik',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'print_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/print_services.module',
        'basename' => 'print_services.module',
        'name' => 'print_services',
        'info' => 
        array (
          'name' => 'Print Services',
          'description' => 'Add the support for Print module which render the page as PDF or printable HTML',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
            1 => 'print',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'print_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'hungarian_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/hungarian_services.module',
        'basename' => 'hungarian_services.module',
        'name' => 'hungarian_services',
        'info' => 
        array (
          'name' => 'Hungarian Services',
          'description' => 'Provide the Hungarian Service: iWiW',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'hungarian_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'german_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/german_services.module',
        'basename' => 'german_services.module',
        'name' => 'german_services',
        'info' => 
        array (
          'name' => 'German Services',
          'description' => 'Provide the German Services: Alltagz, Colivia, Icio, InfoPirat, Linkarena, MeinVZ, Mister Wong, Netselektor, Oneview, Readster, seekXL, SeoIGG, Weblinkr, Webnews, Xing, Yigg',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'german_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'general_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/general_services.module',
        'basename' => 'general_services.module',
        'name' => 'general_services',
        'info' => 
        array (
          'name' => 'General Services',
          'description' => 'Provide the Services: Blinklist, Box, del.icio.us, Digg, Diigo, Facebook, Furl, Google Bookmark, Google Buzz, Icerocket, Identi.ca, Linkedin, Mister Wong, Mixx, MySpace, Newsvine, Newskicks, Phing this, Reddit, StumbleUpon, Technorati, Technorati favorite, Twitter, Yahoo Bookmark',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'general_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'spanish_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/spanish_services.module',
        'basename' => 'spanish_services.module',
        'name' => 'spanish_services',
        'info' => 
        array (
          'name' => 'Spanish Services',
          'description' => 'Provide the Spanish Services: Barrapunto, Fresqui, Latafanera, Meneame, Tuenti',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'spanish_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'russian_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/russian_services.module',
        'basename' => 'russian_services.module',
        'name' => 'russian_services',
        'info' => 
        array (
          'name' => 'Russian Services',
          'description' => 'Provide the Russian Services (12+3): 100zakladok, Ruspace, Mister Wong, Memori, Moemesto, MyScoop, Vaau, Yandex, LinkStore, Bobrdobr, Lopas, Communizm, Newsland, News2, Smi2',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'russian_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'italian_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/italian_services.module',
        'basename' => 'italian_services.module',
        'name' => 'italian_services',
        'info' => 
        array (
          'name' => 'Italian Services',
          'description' => 'Provide the Italian Services: Diggita, Meemi, OkNotizie, Segnalo.com, TechNotizie, Wikio, ZicZac',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'italian_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'swedish_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/swedish_services.module',
        'basename' => 'swedish_services.module',
        'name' => 'swedish_services',
        'info' => 
        array (
          'name' => 'Swedish Services',
          'description' => 'Provide the Swedish Services: Bloggy, Pusha',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'swedish_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'forward_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/forward_services.module',
        'basename' => 'forward_services.module',
        'name' => 'forward_services',
        'info' => 
        array (
          'name' => 'Forward Services',
          'description' => 'Add the support for Forward module which send the link through email.',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
            1 => 'forward',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'forward_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'basque_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/basque_services.module',
        'basename' => 'basque_services.module',
        'name' => 'basque_services',
        'info' => 
        array (
          'name' => 'Basque Services',
          'description' => 'Provide the Basque Services: Zabaldu, Bildu, Aupatu',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'basque_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'dutch_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/dutch_services.module',
        'basename' => 'dutch_services.module',
        'name' => 'dutch_services',
        'info' => 
        array (
          'name' => 'Dutch Services',
          'description' => 'Provide the Dutch Services: eKudos, Hyves, Nujij',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'dutch_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'widget_services' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/services/widget_services.module',
        'basename' => 'widget_services.module',
        'name' => 'widget_services',
        'info' => 
        array (
          'name' => 'Widget Services',
          'description' => 'Provide the Widgets: Digg Smart Button, Facebook Like, Facebook Share, Google Plus One, Twitter',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.x-dev',
          'files' => 
          array (
            0 => 'widget_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'service_links' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/service_links/service_links.module',
        'basename' => 'service_links.module',
        'name' => 'service_links',
        'info' => 
        array (
          'name' => 'Service links',
          'description' => 'Module engine for add various service links about sharing networks to nodes.',
          'core' => '7.x',
          'version' => '7.x-2.x-dev',
          'package' => 'Service Links',
          'files' => 
          array (
            0 => 'service_links.module',
            1 => 'service_links.admin.inc',
            2 => 'service_links.theme.inc',
            3 => 'service_links.install',
            4 => 'service_links.views.inc',
            5 => 'service_links_handler_field_service_links.inc',
          ),
          'configure' => 'admin/config/services/service-links',
          'project' => 'service_links',
          'datestamp' => '1308917890',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.x-dev',
      ),
      'wysiwyg_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/wysiwyg/tests/wysiwyg_test.module',
        'basename' => 'wysiwyg_test.module',
        'name' => 'wysiwyg_test',
        'info' => 
        array (
          'name' => 'Wysiwyg testing',
          'description' => 'Tests Wysiwyg module functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'wysiwyg_test.module',
          ),
          'version' => '7.x-2.1',
          'project' => 'wysiwyg',
          'datestamp' => '1308450722',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wysiwyg',
        'version' => '7.x-2.1',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows to edit content with client-side editors.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/wysiwyg',
          'files' => 
          array (
            0 => 'wysiwyg.module',
            1 => 'tests/wysiwyg.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'wysiwyg',
          'datestamp' => '1308450722',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'wysiwyg',
        'version' => '7.x-2.1',
      ),
      'rules_admin' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.0-beta2',
          'project' => 'rules',
          'datestamp' => '1308241620',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.0-beta2',
      ),
      'rules_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/rules/tests/rules_test.module',
        'basename' => 'rules_test.module',
        'name' => 'rules_test',
        'info' => 
        array (
          'name' => 'Rules Tests',
          'description' => 'Support module for the Rules tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_test.rules.inc',
            1 => 'rules_test.rules_defaults.inc',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-beta2',
          'project' => 'rules',
          'datestamp' => '1308241620',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.0-beta2',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of rule components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.views_default.inc',
            6 => 'includes/rules_scheduler.views.inc',
            7 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.0-beta2',
          'project' => 'rules',
          'datestamp' => '1308241620',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'rules',
        'version' => '7.x-2.0-beta2',
      ),
      'rules' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/rules.core.inc',
            3 => 'includes/rules.processor.inc',
            4 => 'includes/rules.plugins.inc',
            5 => 'includes/rules.state.inc',
            6 => 'modules/php.eval.inc',
            7 => 'modules/rules_core.eval.inc',
            8 => 'modules/system.eval.inc',
            9 => 'ui/ui.controller.inc',
            10 => 'ui/ui.core.inc',
            11 => 'ui/ui.data.inc',
            12 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.0-beta2',
          'project' => 'rules',
          'datestamp' => '1308241620',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'rules',
        'version' => '7.x-2.0-beta2',
      ),
      'styles_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/styles/contrib/styles_ui/styles_ui.module',
        'basename' => 'styles_ui.module',
        'name' => 'styles_ui',
        'info' => 
        array (
          'name' => 'Styles UI',
          'description' => 'Allows administration of the Styles modules.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'styles_ui.admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'styles',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'php' => '5.2.4',
        ),
        'schema_version' => '7206',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'file_styles' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/styles/contrib/file_styles/file_styles.module',
        'basename' => 'file_styles.module',
        'name' => 'file_styles',
        'info' => 
        array (
          'name' => 'File Styles',
          'description' => 'Allows preset transformation of files and media for display.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_styles.module',
            1 => 'file_styles.admin.inc',
            2 => 'includes/styles/FileStyles.inc',
          ),
          'dependencies' => 
          array (
            0 => 'styles',
            1 => 'image',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'php' => '5.2.4',
        ),
        'schema_version' => '7210',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'styles' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/styles/styles.module',
        'basename' => 'styles.module',
        'name' => 'styles',
        'info' => 
        array (
          'name' => 'Styles',
          'description' => 'Bundles similar display formatters together.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'styles.module',
            1 => 'includes/Styles.inc',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7215',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'inline_messages' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/inline_messages/inline_messages.module',
        'basename' => 'inline_messages.module',
        'name' => 'inline_messages',
        'info' => 
        array (
          'name' => 'Inline Messages',
          'description' => 'Displays form messages (error/status/warning) inline',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/inline_messages',
          'files' => 
          array (
            0 => 'inline_messages.module',
            1 => 'inline_messages.install',
            2 => 'inline_messages.admin.inc',
            3 => 'js/jquery.scrollTo-1.4.2-min.js',
            4 => 'js/inline_messages.js',
          ),
          'version' => '7.x-1.0',
          'project' => 'inline_messages',
          'datestamp' => '1289421345',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'inline_messages',
        'version' => '7.x-1.0',
      ),
      'geofield_map' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/geofield/modules/geofield_map/geofield_map.module',
        'basename' => 'geofield_map.module',
        'name' => 'geofield_map',
        'info' => 
        array (
          'name' => 'Geofield Map',
          'description' => 'Provides a basic mapping interface for Geofield.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'geofield',
          ),
          'files' => 
          array (
            0 => 'includes/geofield_map.views.inc',
            1 => 'includes/geofield_map_plugin_style_map.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'geofield',
          'datestamp' => '1330810243',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geofield',
        'version' => '7.x-1.0',
      ),
      'geofield' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/geofield/geofield.module',
        'basename' => 'geofield.module',
        'name' => 'geofield',
        'info' => 
        array (
          'name' => 'Geofield',
          'description' => 'Stores geographic and location data (points, lines, and polygons).',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'geofield.module',
            1 => 'geofield.install',
            2 => 'geofield.widgets.inc',
            3 => 'geofield.formatters.inc',
            4 => 'geofield.openlayers.inc',
            5 => 'geofield.feeds.inc',
            6 => 'geofield.test',
          ),
          'version' => '7.x-1.0',
          'project' => 'geofield',
          'datestamp' => '1330810243',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geofield',
        'version' => '7.x-1.0',
      ),
      'webform' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'files' => 
          array (
            0 => 'includes/webform.export.inc',
            1 => 'views/webform_handler_field_form_body.inc',
            2 => 'views/webform_handler_field_is_draft.inc',
            3 => 'views/webform_handler_field_node_link_edit.inc',
            4 => 'views/webform_handler_field_node_link_results.inc',
            5 => 'views/webform_handler_field_submission_count.inc',
            6 => 'views/webform_handler_field_submission_link.inc',
            7 => 'views/webform_handler_filter_is_draft.inc',
            8 => 'views/webform.views.inc',
            9 => 'tests/components.test',
            10 => 'tests/permissions.test',
            11 => 'tests/submission.test',
            12 => 'tests/webform.test',
          ),
          'version' => '7.x-3.11',
          'project' => 'webform',
          'datestamp' => '1305758218',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7311',
        'project' => 'webform',
        'version' => '7.x-3.11',
      ),
      'geshifield' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/geshifilter/geshifield/geshifield.module',
        'basename' => 'geshifield.module',
        'name' => 'geshifield',
        'info' => 
        array (
          'name' => 'GeSHi field',
          'description' => 'Provides a field for source code with GeSHI syntax highlighting.',
          'package' => 'Filters',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'geshifilter',
          ),
          'version' => '7.x-1.0',
          'project' => 'geshifilter',
          'datestamp' => '1308888715',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geshifilter',
        'version' => '7.x-1.0',
      ),
      'geshifilter' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/geshifilter/geshifilter.module',
        'basename' => 'geshifilter.module',
        'name' => 'geshifilter',
        'info' => 
        array (
          'name' => 'GeSHi Filter',
          'description' => 'Provides a filter to highlight source code using the GeSHi library (Generic Syntax Highlighter)',
          'package' => 'Filters',
          'core' => '7.x',
          'configure' => 'admin/config/content/formats/geshifilter',
          'files' => 
          array (
            0 => 'geshifilter.test',
          ),
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'version' => '7.x-1.0',
          'project' => 'geshifilter',
          'datestamp' => '1308888715',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'geshifilter',
        'version' => '7.x-1.0',
      ),
      'calendar_multiday' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/calendar/calendar_multiday/calendar_multiday.module',
        'basename' => 'calendar_multiday.module',
        'name' => 'calendar_multiday',
        'info' => 
        array (
          'name' => 'Calendar Multiday',
          'description' => 'Use the calendar multiday display as an alternative to the standard display. (BETA version)',
          'dependencies' => 
          array (
            0 => 'calendar',
            1 => 'views',
          ),
          'core' => '7.x',
          'package' => 'Date/Time',
          'files' => 
          array (
            0 => 'calendar_multiday.install',
            1 => 'calendar_multiday.module',
            2 => 'includes/calendar.inc',
            3 => 'theme/calendar-datebox.tpl.php',
            4 => 'theme/calendar-day-node.tpl.php',
            5 => 'theme/calendar-day.tpl.php',
            6 => 'theme/calendar-main.tpl.php',
            7 => 'theme/calendar-month-multiple-node.tpl.php',
            8 => 'theme/calendar-month-node.tpl.php',
            9 => 'theme/calendar-month.tpl.php',
            10 => 'theme/calendar-week-multiple-node.tpl.php',
            11 => 'theme/calendar-week-node.tpl.php',
            12 => 'theme/calendar-week.tpl.php',
            13 => 'theme/calendar-year.tpl.php',
            14 => 'theme/calendar-day-overlap.tpl.php',
            15 => 'theme/calendar-week-overlap.tpl.php',
            16 => 'theme/calendar-month-col.tpl.php',
            17 => 'theme/calendar-month-row.tpl.php',
          ),
          'version' => '7.x-2.0-alpha1',
          'project' => 'calendar',
          'datestamp' => '1303818714',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'calendar',
        'version' => '7.x-2.0-alpha1',
      ),
      'calendar_ical' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/calendar/calendar_ical/calendar_ical.module',
        'basename' => 'calendar_ical.module',
        'name' => 'calendar_ical',
        'info' => 
        array (
          'name' => 'Calendar iCal',
          'description' => 'Adds ical functionality to Calendar views.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'date_api',
            2 => 'date_views',
            3 => 'calendar',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'calendar-view-ical.tpl.php',
            1 => 'calendar_ical.install',
            2 => 'calendar_ical.module',
            3 => 'calendar_ical.views.inc',
            4 => 'calendar_ical_admin.inc',
            5 => 'calendar_plugin_display_ical.inc',
            6 => 'calendar_plugin_style_ical.inc',
            7 => 'theme.inc',
          ),
          'version' => '7.x-2.0-alpha1',
          'project' => 'calendar',
          'datestamp' => '1303818714',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'calendar',
        'version' => '7.x-2.0-alpha1',
      ),
      'calendar' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/calendar/calendar.module',
        'basename' => 'calendar.module',
        'name' => 'calendar',
        'info' => 
        array (
          'name' => 'Calendar',
          'description' => 'Views plugin to display views containing dates as Calendars.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'date_api',
            2 => 'date_views',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'calendar.install',
            1 => 'calendar.module',
            2 => 'includes/calendar.inc',
            3 => 'includes/calendar.views.inc',
            4 => 'includes/calendar.views_default.inc',
            5 => 'includes/calendar_plugin_display_attachment.inc',
            6 => 'includes/calendar_plugin_display_block.inc',
            7 => 'includes/calendar_plugin_display_page.inc',
            8 => 'includes/calendar_plugin_style.inc',
            9 => 'includes/calendar_view_plugin_style.inc',
            10 => 'theme/calendar-datebox.tpl.php',
            11 => 'theme/calendar-day-node.tpl.php',
            12 => 'theme/calendar-day.tpl.php',
            13 => 'theme/calendar-main.tpl.php',
            14 => 'theme/calendar-month-multiple-node.tpl.php',
            15 => 'theme/calendar-month-node.tpl.php',
            16 => 'theme/calendar-month.tpl.php',
            17 => 'theme/calendar-week-multiple-node.tpl.php',
            18 => 'theme/calendar-week-node.tpl.php',
            19 => 'theme/calendar-week.tpl.php',
            20 => 'theme/calendar-year.tpl.php',
          ),
          'version' => '7.x-2.0-alpha1',
          'project' => 'calendar',
          'datestamp' => '1303818714',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'calendar',
        'version' => '7.x-2.0-alpha1',
      ),
      'context_overlay' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/context_overlay/context_overlay.module',
        'basename' => 'context_overlay.module',
        'name' => 'context_overlay',
        'info' => 
        array (
          'name' => 'Context Overlay',
          'description' => 'Adds context reactions to force pages to appear (or not appear) in the overlay.',
          'package' => 'Context',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'overlay',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'admin' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/admin/admin.module',
        'basename' => 'admin.module',
        'name' => 'admin',
        'info' => 
        array (
          'name' => 'Admin',
          'description' => 'UI helpers for Drupal admins and managers.',
          'package' => 'Administration',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'admin.admin.inc',
            1 => 'admin.install',
            2 => 'admin.module',
            3 => 'includes/admin.devel.inc',
            4 => 'includes/admin.theme.inc',
            5 => 'theme/admin-panes.tpl.php',
            6 => 'theme/admin-toolbar.tpl.php',
            7 => 'theme/theme.inc',
          ),
          'version' => '7.x-2.0-beta3',
          'project' => 'admin',
          'datestamp' => '1292541646',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin',
        'version' => '7.x-2.0-beta3',
      ),
      'commerce_paypal_wps' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce_paypal/modules/wps/commerce_paypal_wps.module',
        'basename' => 'commerce_paypal_wps.module',
        'name' => 'commerce_paypal_wps',
        'info' => 
        array (
          'name' => 'PayPal WPS',
          'description' => 'Implements PayPal Website Payments Standard in Drupal Commerce checkout.',
          'package' => 'Commerce (PayPal)',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_payment',
            3 => 'commerce_order',
            4 => 'commerce_paypal',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_paypal_wps.module',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'commerce_paypal',
          'datestamp' => '1307578225',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce_paypal',
        'version' => '7.x-1.x-dev',
      ),
      'commerce_paypal' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce_paypal/commerce_paypal.module',
        'basename' => 'commerce_paypal.module',
        'name' => 'commerce_paypal',
        'info' => 
        array (
          'name' => 'PayPal',
          'description' => 'Implements PayPal payment services for use with Drupal Commerce.',
          'package' => 'Commerce (PayPal)',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_payment',
            3 => 'commerce_order',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_paypal.module',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'commerce_paypal',
          'datestamp' => '1307578225',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce_paypal',
        'version' => '7.x-1.x-dev',
      ),
      'metatags_quick' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/metatags_quick/metatags_quick.module',
        'basename' => 'metatags_quick.module',
        'name' => 'metatags_quick',
        'info' => 
        array (
          'name' => 'Meta tag field',
          'description' => 'Defines a meta tag field type.',
          'core' => '7.x',
          'package' => 'Fields',
          'version' => '7.x-1.9',
          'project' => 'metatags_quick',
          'datestamp' => '1308117419',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatags_quick',
        'version' => '7.x-1.9',
      ),
      'mediaelement' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/mediaelement/mediaelement.module',
        'basename' => 'mediaelement.module',
        'name' => 'mediaelement',
        'info' => 
        array (
          'name' => 'MediaElement.js',
          'description' => 'Provide MediaElement.js to be used on the entire site or just with Filefields.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'mediaelement.admin.inc',
            1 => 'mediaelement.install',
            2 => 'mediaelement.module',
          ),
          'configure' => 'admin/config/media/mediaelement',
          'version' => '7.x-1.1',
          'project' => 'mediaelement',
          'datestamp' => '1308837118',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mediaelement',
        'version' => '7.x-1.1',
      ),
      'wysiwyg_linebreaks' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/wysiwyg_linebreaks/wysiwyg_linebreaks.module',
        'basename' => 'wysiwyg_linebreaks.module',
        'name' => 'wysiwyg_linebreaks',
        'info' => 
        array (
          'name' => 'WYSIWYG Force Linebreaks',
          'description' => 'Plugin to allow legacy content editing and more sane formatting in WYSIWYG Editors.',
          'package' => 'User interface',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'wysiwyg_linebreaks.module',
            1 => 'plugins/linebreaks.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'wysiwyg_linebreaks',
          'datestamp' => '1303405017',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wysiwyg_linebreaks',
        'version' => '7.x-1.3',
      ),
      'commerce_bpc' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/commerce_bpc/commerce_bpc.module',
        'basename' => 'commerce_bpc.module',
        'name' => 'commerce_bpc',
        'info' => 
        array (
          'name' => 'Commerce (bulk product creation)',
          'description' => 'A UI and API which allow for the creation of related products in bulk',
          'package' => 'Commerce (contrib)',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_bpc.module',
            1 => 'commerce_bpc.test',
          ),
          'dependencies' => 
          array (
            0 => 'commerce_product_ui',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'commerce_bpc',
          'datestamp' => '1305979458',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce_bpc',
        'version' => '7.x-1.x-dev',
      ),
      'defaultcontent' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/defaultcontent/defaultcontent.module',
        'basename' => 'defaultcontent.module',
        'name' => 'defaultcontent',
        'info' => 
        array (
          'core' => '7.x',
          'description' => 'Allows Export/Import of Default Content',
          'name' => 'Default Content',
          'dependencies' => 
          array (
            0 => 'features',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'defaultcontent',
          'datestamp' => '1305072451',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'defaultcontent',
        'version' => '7.x-1.x-dev',
      ),
      'text_resize' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/text_resize/text_resize.module',
        'basename' => 'text_resize.module',
        'name' => 'text_resize',
        'info' => 
        array (
          'name' => 'Text Resize',
          'description' => 'Creates a block that allows your users to resize text on the page.',
          'core' => '7.x',
          'version' => '7.x-1.7',
          'files' => 
          array (
            0 => 'text_resize.install',
            1 => 'text_resize.module',
          ),
          'project' => 'text_resize',
          'datestamp' => '1294189400',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'text_resize',
        'version' => '7.x-1.7',
      ),
      'views_bulk_operations' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views_bulk_operations/views_bulk_operations.module',
        'basename' => 'views_bulk_operations.module',
        'name' => 'views_bulk_operations',
        'info' => 
        array (
          'name' => 'Views Bulk Operations',
          'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/operation_types/base.class.php',
            1 => 'views/views_bulk_operations_handler_field_operations.inc',
          ),
          'version' => '7.x-3.0-beta3',
          'project' => 'views_bulk_operations',
          'datestamp' => '1318586502',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_bulk_operations',
        'version' => '7.x-3.0-beta3',
      ),
      'actions_permissions' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views_bulk_operations/actions_permissions.module',
        'basename' => 'actions_permissions.module',
        'name' => 'actions_permissions',
        'info' => 
        array (
          'name' => 'Actions permissions',
          'description' => 'Integrates actions with the permission system.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-3.0-beta3',
          'project' => 'views_bulk_operations',
          'datestamp' => '1318586502',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_bulk_operations',
        'version' => '7.x-3.0-beta3',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/panels',
          'files' => 
          array (
            0 => 'panels_ipe.module',
          ),
          'version' => '7.x-3.0-alpha3',
          'project' => 'panels',
          'datestamp' => '1300396268',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.0-alpha3',
      ),
      'panels_node' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'configure' => 'admin/structure/panels',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_node.module',
          ),
          'version' => '7.x-3.0-alpha3',
          'project' => 'panels',
          'datestamp' => '1300396268',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'panels',
        'version' => '7.x-3.0-alpha3',
      ),
      'panels_mini' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/export_ui/panels_mini_ui.class.php',
          ),
          'version' => '7.x-3.0-alpha3',
          'project' => 'panels',
          'datestamp' => '1300396268',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.0-alpha3',
      ),
      'panels' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '7.x',
          'package' => 'Panels',
          'configure' => 'admin/structure/panels',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'panels.module',
            1 => 'includes/common.inc',
            2 => 'includes/legacy.inc',
            3 => 'includes/plugins.inc',
            4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          ),
          'version' => '7.x-3.0-alpha3',
          'project' => 'panels',
          'datestamp' => '1300396268',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.0-alpha3',
      ),
      'strongarm' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'strongarm',
          'datestamp' => '1319128535',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'strongarm',
        'version' => '7.x-2.0-beta4',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
        'basename' => 'views_slideshow_cycle.module',
        'name' => 'views_slideshow_cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow: Cycle',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
            1 => 'libraries',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow_cycle.module',
            1 => 'views_slideshow_cycle.views_slideshow.inc',
            2 => 'theme/views_slideshow_cycle.theme.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'views_slideshow',
          'datestamp' => '1319545540',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.x-dev',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'views_slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow.module',
            1 => 'theme/views_slideshow.theme.inc',
            2 => 'views_slideshow.views.inc',
            3 => 'views_slideshow_plugin_style_slideshow.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'views_slideshow',
          'datestamp' => '1319545540',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.x-dev',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-rc1',
          'project' => 'ctools',
          'datestamp' => '1311894415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0-rc1',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'ctools',
          'datestamp' => '1311894415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0-rc1',
      ),
      'stylizer' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'ctools',
          'datestamp' => '1311894415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0-rc1',
      ),
      'page_manager' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.0-rc1',
          'project' => 'ctools',
          'datestamp' => '1311894415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0-rc1',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-rc1',
          'project' => 'ctools',
          'datestamp' => '1311894415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0-rc1',
      ),
      'ctools_plugin_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/ctools/tests/ctools_plugin_test.module',
        'basename' => 'ctools_plugin_test.module',
        'name' => 'ctools_plugin_test',
        'info' => 
        array (
          'name' => 'Chaos tools plugins test',
          'description' => 'Provides hooks for testing ctools plugins.',
          'package' => 'Chaos tool suite',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'ctools.plugins.test',
            1 => 'object_cache.test',
          ),
          'hidden' => true,
          'version' => '7.x-1.0-rc1',
          'project' => 'ctools',
          'datestamp' => '1311894415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0-rc1',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'ctools',
          'datestamp' => '1311894415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0-rc1',
      ),
      'views_content' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'ctools',
          'datestamp' => '1311894415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0-rc1',
      ),
      'bulk_export' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.0-rc1',
          'project' => 'ctools',
          'datestamp' => '1311894415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0-rc1',
      ),
      'ctools' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/math-expr.inc',
            2 => 'includes/stylizer.inc',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'ctools',
          'datestamp' => '1311894415',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6007',
        'project' => 'ctools',
        'version' => '7.x-1.0-rc1',
      ),
      'field_permissions' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/field_permissions/field_permissions.module',
        'basename' => 'field_permissions.module',
        'name' => 'field_permissions',
        'info' => 
        array (
          'name' => 'Field Permissions',
          'description' => 'Set field-level permissions to create, update or view fields.',
          'package' => 'Fields',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_permissions.module',
            1 => 'field_permissions.admin.inc',
            2 => 'field_permissions.test',
          ),
          'configure' => 'admin/reports/fields/permissions',
          'version' => '7.x-1.0-beta2',
          'project' => 'field_permissions',
          'datestamp' => '1327510549',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'field_permissions',
        'version' => '7.x-1.0-beta2',
      ),
      'link' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.module',
            1 => 'link.install',
            2 => 'tests/link.test',
            3 => 'tests/link.attribute.test',
            4 => 'tests/link.crud.test',
            5 => 'tests/link.crud_browser.test',
            6 => 'tests/link.token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'link',
          'datestamp' => '1319392535',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'link',
        'version' => '7.x-1.0',
      ),
      'image_captcha' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/captcha/image_captcha/image_captcha.module',
        'basename' => 'image_captcha.module',
        'name' => 'image_captcha',
        'info' => 
        array (
          'name' => 'Image CAPTCHA',
          'description' => 'Provides an image based CAPTCHA.',
          'package' => 'Spam control',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/people/captcha/image_captcha',
          'files' => 
          array (
            0 => 'image_captcha.install',
            1 => 'image_captcha.module',
            2 => 'image_captcha.admin.inc',
            3 => 'image_captcha.user.inc',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'captcha',
          'datestamp' => '1303939314',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'captcha',
        'version' => '7.x-1.0-alpha3',
      ),
      'captcha' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/captcha/captcha.module',
        'basename' => 'captcha.module',
        'name' => 'captcha',
        'info' => 
        array (
          'name' => 'CAPTCHA',
          'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
          'package' => 'Spam control',
          'core' => '7.x',
          'configure' => 'admin/config/people/captcha',
          'files' => 
          array (
            0 => 'captcha.module',
            1 => 'captcha.inc',
            2 => 'captcha.admin.inc',
            3 => 'captcha.install',
            4 => 'captcha.test',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'captcha',
          'datestamp' => '1303939314',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'captcha',
        'version' => '7.x-1.0-alpha3',
      ),
      'libraries' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version dependent and shared usage of external libraries.',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'libraries',
          'datestamp' => '1296096156',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'libraries',
        'version' => '7.x-1.0',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'google_analytics',
          'datestamp' => '1301340367',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'google_analytics',
        'version' => '7.x-1.2',
      ),
      'features_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/features/tests/features_test.module',
        'basename' => 'features_test.module',
        'name' => 'features_test',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'image',
            2 => 'strongarm',
            3 => 'views',
          ),
          'description' => 'Test module for Features testing.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-features_test-field_features_test',
            ),
            'filter' => 
            array (
              0 => 'features_test',
            ),
            'image' => 
            array (
              0 => 'features_test',
            ),
            'node' => 
            array (
              0 => 'features_test',
            ),
            'user_permission' => 
            array (
              0 => 'create features_test content',
            ),
            'views_view' => 
            array (
              0 => 'features_test',
            ),
          ),
          'hidden' => true,
          'name' => 'Features Tests',
          'package' => 'Testing',
          'php' => '5.2.0',
          'version' => '7.x-1.0-beta4',
          'project' => 'features',
          'datestamp' => '1316565919',
        ),
        'schema_version' => 0,
        'project' => 'features',
        'version' => '7.x-1.0-beta4',
      ),
      'features' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'features',
          'datestamp' => '1316565919',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-1.0-beta4',
      ),
      'redirect' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/redirect/redirect.module',
        'basename' => 'redirect.module',
        'name' => 'redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'redirect.module',
            1 => 'redirect.admin.inc',
            2 => 'redirect.install',
            3 => 'redirect.test',
            4 => 'views/redirect.views.inc',
            5 => 'views/redirect_handler_filter_redirect_type.inc',
            6 => 'views/redirect_handler_field_redirect_source.inc',
            7 => 'views/redirect_handler_field_redirect_redirect.inc',
            8 => 'views/redirect_handler_field_redirect_operations.inc',
            9 => 'views/redirect_handler_field_redirect_link_edit.inc',
            10 => 'views/redirect_handler_field_redirect_link_delete.inc',
          ),
          'configure' => 'admin/config/search/redirect/settings',
          'version' => '7.x-1.0-beta3',
          'project' => 'redirect',
          'datestamp' => '1304713016',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '5',
        'project' => 'redirect',
        'version' => '7.x-1.0-beta3',
      ),
      'nice_menus' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/nice_menus/nice_menus.module',
        'basename' => 'nice_menus.module',
        'name' => 'nice_menus',
        'info' => 
        array (
          'name' => 'Nice Menus',
          'description' => 'CSS/jQuery drop-down, drop-right and drop-left menus to be placed in blocks',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/nice_menus',
          'files' => 
          array (
            0 => 'nice_menus.install',
            1 => 'nice_menus.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'nice_menus',
          'datestamp' => '1313468827',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'nice_menus',
        'version' => '7.x-2.0',
      ),
      'smtp' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/smtp/smtp.module',
        'basename' => 'smtp.module',
        'name' => 'smtp',
        'info' => 
        array (
          'name' => 'SMTP Authentication Support',
          'description' => 'Allow for site emails to be sent through an SMTP server of your choice.',
          'core' => '7.x',
          'package' => 'Mail',
          'configure' => 'admin/config/system/smtp',
          'files' => 
          array (
            0 => 'smtp.module',
            1 => 'smtp.admin.inc',
            2 => 'smtp.mail.inc',
            3 => 'smtp.phpmailer.inc',
            4 => 'smtp.transport.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'smtp',
          'datestamp' => '1298620235',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'smtp',
        'version' => '7.x-1.x-dev',
      ),
      'views_export' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views/tests/views_test.module',
        'basename' => 'views_test.module',
        'name' => 'views_test',
        'info' => 
        array (
          'name' => 'Views Test',
          'description' => 'Test module for Views.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'hidden' => true,
          'version' => '7.x-3.0-rc1',
          'project' => 'views',
          'datestamp' => '1308341220',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.0-rc1',
      ),
      'views_ui' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.0-rc1',
          'project' => 'views',
          'datestamp' => '1308341220',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.0-rc1',
      ),
      'views' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_text.inc',
            2 => 'handlers/views_handler_area_view.inc',
            3 => 'handlers/views_handler_argument.inc',
            4 => 'handlers/views_handler_argument_date.inc',
            5 => 'handlers/views_handler_argument_formula.inc',
            6 => 'handlers/views_handler_argument_many_to_one.inc',
            7 => 'handlers/views_handler_argument_null.inc',
            8 => 'handlers/views_handler_argument_numeric.inc',
            9 => 'handlers/views_handler_argument_string.inc',
            10 => 'handlers/views_handler_field.inc',
            11 => 'handlers/views_handler_field_counter.inc',
            12 => 'handlers/views_handler_field_boolean.inc',
            13 => 'handlers/views_handler_field_custom.inc',
            14 => 'handlers/views_handler_field_date.inc',
            15 => 'handlers/views_handler_field_markup.inc',
            16 => 'handlers/views_handler_field_math.inc',
            17 => 'handlers/views_handler_field_numeric.inc',
            18 => 'handlers/views_handler_field_prerender_list.inc',
            19 => 'handlers/views_handler_field_time_interval.inc',
            20 => 'handlers/views_handler_field_serialized.inc',
            21 => 'handlers/views_handler_field_url.inc',
            22 => 'handlers/views_handler_filter.inc',
            23 => 'handlers/views_handler_filter_boolean_operator.inc',
            24 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            25 => 'handlers/views_handler_filter_date.inc',
            26 => 'handlers/views_handler_filter_equality.inc',
            27 => 'handlers/views_handler_filter_in_operator.inc',
            28 => 'handlers/views_handler_filter_many_to_one.inc',
            29 => 'handlers/views_handler_filter_numeric.inc',
            30 => 'handlers/views_handler_filter_string.inc',
            31 => 'handlers/views_handler_relationship.inc',
            32 => 'handlers/views_handler_relationship_groupwise_max.inc',
            33 => 'handlers/views_handler_sort.inc',
            34 => 'handlers/views_handler_sort_date.inc',
            35 => 'handlers/views_handler_sort_formula.inc',
            36 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            37 => 'handlers/views_handler_sort_random.inc',
            38 => 'includes/base.inc',
            39 => 'includes/handlers.inc',
            40 => 'includes/plugins.inc',
            41 => 'includes/view.inc',
            42 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            43 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            44 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            45 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            46 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            47 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            48 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            49 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            50 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            51 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            52 => 'modules/comment/views_handler_field_comment.inc',
            53 => 'modules/comment/views_handler_field_comment_depth.inc',
            54 => 'modules/comment/views_handler_field_comment_link.inc',
            55 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            56 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            57 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            58 => 'modules/comment/views_handler_field_comment_node_link.inc',
            59 => 'modules/comment/views_handler_field_comment_username.inc',
            60 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            61 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            62 => 'modules/comment/views_handler_field_node_comment.inc',
            63 => 'modules/comment/views_handler_field_node_new_comments.inc',
            64 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            65 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            66 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            67 => 'modules/comment/views_handler_filter_node_comment.inc',
            68 => 'modules/comment/views_handler_sort_comment_thread.inc',
            69 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            70 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            71 => 'modules/comment/views_plugin_row_comment_rss.inc',
            72 => 'modules/comment/views_plugin_row_comment_view.inc',
            73 => 'modules/contact/views_handler_field_contact_link.inc',
            74 => 'modules/field/views_handler_field_field.inc',
            75 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            76 => 'modules/field/views_handler_filter_field_list.inc',
            77 => 'modules/filter/views_handler_field_filter_format_name.inc',
            78 => 'modules/locale/views_handler_argument_locale_group.inc',
            79 => 'modules/locale/views_handler_argument_locale_language.inc',
            80 => 'modules/locale/views_handler_field_locale_group.inc',
            81 => 'modules/locale/views_handler_field_locale_language.inc',
            82 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            83 => 'modules/locale/views_handler_filter_locale_group.inc',
            84 => 'modules/locale/views_handler_filter_locale_language.inc',
            85 => 'modules/locale/views_handler_filter_locale_version.inc',
            86 => 'modules/node/views_handler_argument_dates_various.inc',
            87 => 'modules/node/views_handler_argument_node_language.inc',
            88 => 'modules/node/views_handler_argument_node_nid.inc',
            89 => 'modules/node/views_handler_argument_node_type.inc',
            90 => 'modules/node/views_handler_argument_node_vid.inc',
            91 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            92 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            93 => 'modules/node/views_handler_field_node.inc',
            94 => 'modules/node/views_handler_field_node_link.inc',
            95 => 'modules/node/views_handler_field_node_link_delete.inc',
            96 => 'modules/node/views_handler_field_node_link_edit.inc',
            97 => 'modules/node/views_handler_field_node_revision.inc',
            98 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            99 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            100 => 'modules/node/views_handler_field_node_path.inc',
            101 => 'modules/node/views_handler_field_node_type.inc',
            102 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            103 => 'modules/node/views_handler_filter_node_access.inc',
            104 => 'modules/node/views_handler_filter_node_status.inc',
            105 => 'modules/node/views_handler_filter_node_type.inc',
            106 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            107 => 'modules/node/views_plugin_argument_default_node.inc',
            108 => 'modules/node/views_plugin_argument_validate_node.inc',
            109 => 'modules/node/views_plugin_row_node_rss.inc',
            110 => 'modules/node/views_plugin_row_node_view.inc',
            111 => 'modules/profile/views_handler_field_profile_date.inc',
            112 => 'modules/profile/views_handler_field_profile_list.inc',
            113 => 'modules/profile/views_handler_filter_profile_selection.inc',
            114 => 'modules/search/views_handler_argument_search.inc',
            115 => 'modules/search/views_handler_field_search_score.inc',
            116 => 'modules/search/views_handler_filter_search.inc',
            117 => 'modules/search/views_handler_sort_search_score.inc',
            118 => 'modules/search/views_plugin_row_search_view.inc',
            119 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            120 => 'modules/system/views_handler_argument_file_fid.inc',
            121 => 'modules/system/views_handler_field_file.inc',
            122 => 'modules/system/views_handler_field_file_extension.inc',
            123 => 'modules/system/views_handler_field_file_filemime.inc',
            124 => 'modules/system/views_handler_field_file_uri.inc',
            125 => 'modules/system/views_handler_field_file_status.inc',
            126 => 'modules/system/views_handler_filter_file_status.inc',
            127 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            128 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            129 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            130 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            131 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            132 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            133 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            134 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            135 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            136 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            137 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            138 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            139 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            140 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            141 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            142 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            143 => 'modules/system/views_handler_filter_system_type.inc',
            144 => 'modules/translation/views_handler_argument_node_tnid.inc',
            145 => 'modules/translation/views_handler_field_node_language.inc',
            146 => 'modules/translation/views_handler_field_node_link_translate.inc',
            147 => 'modules/translation/views_handler_field_node_translation_link.inc',
            148 => 'modules/translation/views_handler_filter_node_language.inc',
            149 => 'modules/translation/views_handler_filter_node_tnid.inc',
            150 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            151 => 'modules/translation/views_handler_relationship_translation.inc',
            152 => 'modules/upload/views_handler_field_upload_description.inc',
            153 => 'modules/upload/views_handler_field_upload_fid.inc',
            154 => 'modules/upload/views_handler_filter_upload_fid.inc',
            155 => 'modules/user/views_handler_argument_user_uid.inc',
            156 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            157 => 'modules/user/views_handler_field_user.inc',
            158 => 'modules/user/views_handler_field_user_language.inc',
            159 => 'modules/user/views_handler_field_user_link.inc',
            160 => 'modules/user/views_handler_field_user_link_cancel.inc',
            161 => 'modules/user/views_handler_field_user_link_edit.inc',
            162 => 'modules/user/views_handler_field_user_mail.inc',
            163 => 'modules/user/views_handler_field_user_name.inc',
            164 => 'modules/user/views_handler_field_user_picture.inc',
            165 => 'modules/user/views_handler_field_user_roles.inc',
            166 => 'modules/user/views_handler_filter_user_current.inc',
            167 => 'modules/user/views_handler_filter_user_name.inc',
            168 => 'modules/user/views_handler_filter_user_roles.inc',
            169 => 'modules/user/views_plugin_argument_default_current_user.inc',
            170 => 'modules/user/views_plugin_argument_default_user.inc',
            171 => 'modules/user/views_plugin_argument_validate_user.inc',
            172 => 'plugins/views_plugin_access.inc',
            173 => 'plugins/views_plugin_access_none.inc',
            174 => 'plugins/views_plugin_access_perm.inc',
            175 => 'plugins/views_plugin_access_role.inc',
            176 => 'plugins/views_plugin_argument_default.inc',
            177 => 'plugins/views_plugin_argument_default_php.inc',
            178 => 'plugins/views_plugin_argument_default_fixed.inc',
            179 => 'plugins/views_plugin_argument_default_raw.inc',
            180 => 'plugins/views_plugin_argument_validate.inc',
            181 => 'plugins/views_plugin_argument_validate_numeric.inc',
            182 => 'plugins/views_plugin_argument_validate_php.inc',
            183 => 'plugins/views_plugin_cache.inc',
            184 => 'plugins/views_plugin_cache_none.inc',
            185 => 'plugins/views_plugin_cache_time.inc',
            186 => 'plugins/views_plugin_display.inc',
            187 => 'plugins/views_plugin_display_attachment.inc',
            188 => 'plugins/views_plugin_display_block.inc',
            189 => 'plugins/views_plugin_display_default.inc',
            190 => 'plugins/views_plugin_display_extender.inc',
            191 => 'plugins/views_plugin_display_feed.inc',
            192 => 'plugins/views_plugin_exposed_form_basic.inc',
            193 => 'plugins/views_plugin_exposed_form.inc',
            194 => 'plugins/views_plugin_exposed_form_input_required.inc',
            195 => 'plugins/views_plugin_display_page.inc',
            196 => 'plugins/views_plugin_localization_core.inc',
            197 => 'plugins/views_plugin_localization.inc',
            198 => 'plugins/views_plugin_localization_none.inc',
            199 => 'plugins/views_plugin_pager.inc',
            200 => 'plugins/views_plugin_pager_full.inc',
            201 => 'plugins/views_plugin_pager_mini.inc',
            202 => 'plugins/views_plugin_pager_none.inc',
            203 => 'plugins/views_plugin_pager_some.inc',
            204 => 'plugins/views_plugin_query.inc',
            205 => 'plugins/views_plugin_query_default.inc',
            206 => 'plugins/views_plugin_row.inc',
            207 => 'plugins/views_plugin_row_fields.inc',
            208 => 'plugins/views_plugin_style.inc',
            209 => 'plugins/views_plugin_style_default.inc',
            210 => 'plugins/views_plugin_style_grid.inc',
            211 => 'plugins/views_plugin_style_list.inc',
            212 => 'plugins/views_plugin_style_jump_menu.inc',
            213 => 'plugins/views_plugin_style_rss.inc',
            214 => 'plugins/views_plugin_style_summary.inc',
            215 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            216 => 'plugins/views_plugin_style_summary_unformatted.inc',
            217 => 'plugins/views_plugin_style_table.inc',
            218 => 'tests/handlers/views_handler_area_text.test',
            219 => 'tests/handlers/views_handler_argument_null.test',
            220 => 'tests/handlers/views_handler_field_boolean.test',
            221 => 'tests/handlers/views_handler_field_custom.test',
            222 => 'tests/handlers/views_handler_field_counter.test',
            223 => 'tests/handlers/views_handler_field_date.test',
            224 => 'tests/handlers/views_handler_field_file_size.test',
            225 => 'tests/handlers/views_handler_field_math.test',
            226 => 'tests/handlers/views_handler_field_url.test',
            227 => 'tests/handlers/views_handler_field_xss.test',
            228 => 'tests/handlers/views_handler_filter_date.test',
            229 => 'tests/handlers/views_handler_filter_equality.test',
            230 => 'tests/handlers/views_handler_filter_in_operator.test',
            231 => 'tests/handlers/views_handler_filter_numeric.test',
            232 => 'tests/handlers/views_handler_filter_string.test',
            233 => 'tests/handlers/views_handler_sort_random.test',
            234 => 'tests/handlers/views_handler_sort_date.test',
            235 => 'tests/handlers/views_handler_sort.test',
            236 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            237 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            238 => 'tests/views_access.test',
            239 => 'tests/views_analyze.test',
            240 => 'tests/views_basic.test',
            241 => 'tests/views_argument_default.test',
            242 => 'tests/views_argument_validator.test',
            243 => 'tests/views_exposed_form.test',
            244 => 'tests/views_glossary.test',
            245 => 'tests/views_groupby.test',
            246 => 'tests/views_handlers.test',
            247 => 'tests/views_module.test',
            248 => 'tests/views_pager.test',
            249 => 'tests/views_plugin_localization_test.inc',
            250 => 'tests/views_translatable.test',
            251 => 'tests/views_query.test',
            252 => 'tests/views_upgrade.test',
            253 => 'tests/views_test.views_default.inc',
            254 => 'tests/user/views_user_argument_default.test',
            255 => 'tests/user/views_user_argument_validate.test',
            256 => 'tests/user/views_user.test',
            257 => 'tests/views_cache.test',
            258 => 'tests/views_view.test',
            259 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.0-rc1',
          'project' => 'views',
          'datestamp' => '1308341220',
        ),
        'schema_version' => '7001',
        'project' => 'views',
        'version' => '7.x-3.0-rc1',
      ),
      'draggableviews_tests' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/draggableviews/draggableviews_tests/draggableviews_tests.module',
        'basename' => 'draggableviews_tests.module',
        'name' => 'draggableviews_tests',
        'info' => 
        array (
          'name' => 'DraggableViews Tests',
          'description' => 'Autoated testing of draggableviews module',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'selenium',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'draggableviews_tests.module',
            1 => 'draggableviews_tests.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'draggableviews',
          'datestamp' => '1311293284',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'draggableviews',
        'version' => '7.x-1.x-dev',
      ),
      'draggableviews' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/draggableviews/draggableviews.module',
        'basename' => 'draggableviews.module',
        'name' => 'draggableviews',
        'info' => 
        array (
          'name' => 'DraggableViews',
          'description' => 'Makes Views draggable',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'draggableviews-view-draggabletable-form.tpl.php',
            1 => 'draggableviews-view-draggabletable.tpl.php',
            2 => 'draggableviews.inc',
            3 => 'draggableviews.install',
            4 => 'draggableviews.module',
            5 => 'draggableviews_theme.inc',
            6 => 'implementations/draggableviews_handler.inc',
            7 => 'implementations/draggableviews_handler_native.inc',
            8 => 'views/draggableviews.views.inc',
            9 => 'views/draggableviews_plugin_style_draggabletable.inc',
            10 => 'handlers/views_handler_field_draggableviews_structure.inc',
            11 => 'handlers/views_handler_sort_draggableviews_structure.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'draggableviews',
          'datestamp' => '1311293284',
          'php' => '5.2.4',
        ),
        'schema_version' => '6401',
        'project' => 'draggableviews',
        'version' => '7.x-1.x-dev',
      ),
      'addtoany' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/addtoany/addtoany.module',
        'basename' => 'addtoany.module',
        'name' => 'addtoany',
        'info' => 
        array (
          'name' => 'AddToAny',
          'description' => 'Helps readers share, bookmark, and email your articles and pages using any service, such as Facebook, Twitter, Delicious, Digg, and over 100 more using the <a href=\'http://www.addtoany.com/\' target=\'_blank\'>AddToAny</a> widget.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'addtoany.module',
            1 => 'addtoany.css',
            2 => 'addtoany.admin.inc',
            3 => 'views/addtoany_handler_field_addtoany_link.inc',
            4 => 'views/addtoany.views.inc',
          ),
          'configure' => 'admin/config/system/addtoany',
          'version' => '7.x-3.1',
          'project' => 'addtoany',
          'datestamp' => '1299485766',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'addtoany',
        'version' => '7.x-3.1',
      ),
      'profile2_og_access' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/profile2/contrib/profile2_og_access.module',
        'basename' => 'profile2_og_access.module',
        'name' => 'profile2_og_access',
        'info' => 
        array (
          'name' => 'Profile2 group access',
          'description' => 'Adds Organic groups permissions to control profile access on the group level.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'profile2',
            1 => 'og',
          ),
          'package' => 'Organic groups',
          'version' => '7.x-1.1',
          'project' => 'profile2',
          'datestamp' => '1319559035',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'profile2',
        'version' => '7.x-1.1',
      ),
      'profile2_page' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/profile2/contrib/profile2_page.module',
        'basename' => 'profile2_page.module',
        'name' => 'profile2_page',
        'info' => 
        array (
          'name' => 'Profile2 pages',
          'description' => 'Adds separate pages for viewing and editing profiles.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'profile2',
          ),
          'version' => '7.x-1.1',
          'project' => 'profile2',
          'datestamp' => '1319559035',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'profile2',
        'version' => '7.x-1.1',
      ),
      'profile2' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/profile2/profile2.module',
        'basename' => 'profile2.module',
        'name' => 'profile2',
        'info' => 
        array (
          'name' => 'Profile2',
          'description' => 'Supports configurable user profiles.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile2.admin.inc',
            1 => 'profile2.info.inc',
            2 => 'profile2.test',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'configure' => 'admin/structure/profiles',
          'version' => '7.x-1.1',
          'project' => 'profile2',
          'datestamp' => '1319559035',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'profile2',
        'version' => '7.x-1.1',
      ),
      'views_galleriffic' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/views_galleriffic/views_galleriffic.module',
        'basename' => 'views_galleriffic.module',
        'name' => 'views_galleriffic',
        'info' => 
        array (
          'name' => 'Views Galleriffic',
          'description' => 'Use Views to make JQuery Galleriffic image gallery',
          'core' => '7.x',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_plugin_style_views_galleriffic.inc',
            1 => 'views_galleriffic_plugin_row_gallerifficrows.inc',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'views_galleriffic',
          'datestamp' => '1308580019',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_galleriffic',
        'version' => '7.x-1.0-beta3',
      ),
      'stringoverrides_migrate' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/stringoverrides/stringoverrides_migrate.module',
        'basename' => 'stringoverrides_migrate.module',
        'name' => 'stringoverrides_migrate',
        'info' => 
        array (
          'name' => 'String Overrides Migrate',
          'description' => 'Tools for importing and exporting string override settings.',
          'dependencies' => 
          array (
            0 => 'stringoverrides',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'stringoverrides_migrate.module',
            1 => 'stringoverrides_migrate.admin.inc',
          ),
          'version' => '7.x-1.8',
          'project' => 'stringoverrides',
          'datestamp' => '1304446316',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'stringoverrides',
        'version' => '7.x-1.8',
      ),
      'stringoverrides' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/stringoverrides/stringoverrides.module',
        'basename' => 'stringoverrides.module',
        'name' => 'stringoverrides',
        'info' => 
        array (
          'name' => 'String Overrides',
          'description' => 'Provides a quick and easy way of replacing text.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'stringoverrides.module',
            1 => 'stringoverrides.install',
            2 => 'stringoverrides.admin.inc',
          ),
          'configure' => 'admin/config/regional/stringoverrides',
          'version' => '7.x-1.8',
          'project' => 'stringoverrides',
          'datestamp' => '1304446316',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'stringoverrides',
        'version' => '7.x-1.8',
      ),
      'quicktabs_tabstyles' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/quicktabs/quicktabs_tabstyles/quicktabs_tabstyles.module',
        'basename' => 'quicktabs_tabstyles.module',
        'name' => 'quicktabs_tabstyles',
        'info' => 
        array (
          'name' => 'Quick Tabs Styles',
          'description' => 'Adds predefined tab styles to choose from per Quick Tabs block.',
          'core' => '7.x',
          'configure' => 'admin/structure/quicktabs/styles',
          'version' => '7.x-3.0',
          'project' => 'quicktabs',
          'datestamp' => '1312172228',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'quicktabs',
        'version' => '7.x-3.0',
      ),
      'quicktabs' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/quicktabs/quicktabs.module',
        'basename' => 'quicktabs.module',
        'name' => 'quicktabs',
        'info' => 
        array (
          'name' => 'Quicktabs',
          'description' => 'Render content with tabs and other display styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'quicktabs.module',
            1 => 'quicktabs.classes.inc',
            2 => 'includes/quicktabs_style_plugin.inc',
            3 => 'tests/quicktabs.test',
          ),
          'configure' => 'admin/structure/quicktabs',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-3.0',
          'project' => 'quicktabs',
          'datestamp' => '1312172228',
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'project' => 'quicktabs',
        'version' => '7.x-3.0',
      ),
      'form_builder_examples' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/form_builder/examples/form_builder_examples.module',
        'basename' => 'form_builder_examples.module',
        'name' => 'form_builder_examples',
        'info' => 
        array (
          'name' => 'Form builder examples',
          'description' => 'Form builder support for CCK, Webform, and Profile modules.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'form_builder',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'form_builder',
          'datestamp' => '1296536400',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'form_builder',
        'version' => '7.x-1.x-dev',
      ),
      'form_builder_node' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/form_builder/modules/node/form_builder_node.module',
        'basename' => 'form_builder_node.module',
        'name' => 'form_builder_node',
        'info' => 
        array (
          'name' => 'Form builder Node UI',
          'description' => 'Form builder enhancements for node module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'form_builder',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'form_builder',
          'datestamp' => '1296536400',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'form_builder',
        'version' => '7.x-1.x-dev',
      ),
      'form_builder_webform' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/form_builder/modules/webform/form_builder_webform.module',
        'basename' => 'form_builder_webform.module',
        'name' => 'form_builder_webform',
        'info' => 
        array (
          'name' => 'Form builder Webform UI',
          'description' => 'Form builder integration for the Webform module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'form_builder',
            1 => 'webform',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'form_builder',
          'datestamp' => '1296536400',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'form_builder',
        'version' => '7.x-1.x-dev',
      ),
      'form_builder' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/form_builder/form_builder.module',
        'basename' => 'form_builder.module',
        'name' => 'form_builder',
        'info' => 
        array (
          'name' => 'Form builder',
          'description' => 'Form building framework.',
          'dependencies' => 
          array (
            0 => 'options_element',
          ),
          'core' => '7.x',
          'version' => '7.x-1.x-dev',
          'project' => 'form_builder',
          'datestamp' => '1296536400',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'form_builder',
        'version' => '7.x-1.x-dev',
      ),
      'devel_generate' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.2',
          'project' => 'devel',
          'datestamp' => '1311355316',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.2',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.2',
          'project' => 'devel',
          'datestamp' => '1311355316',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.2',
      ),
      'devel' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'devel',
          'datestamp' => '1311355316',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'devel',
        'version' => '7.x-1.2',
      ),
      'token_test' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/token/tests/token_test.module',
        'basename' => 'token_test.module',
        'name' => 'token_test',
        'info' => 
        array (
          'name' => 'Token Test',
          'description' => 'Testing module for token functionality.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.0-beta6',
          'project' => 'token',
          'datestamp' => '1317397307',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '7.x-1.0-beta6',
      ),
      'token' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.module',
            1 => 'token.install',
            2 => 'token.tokens.inc',
            3 => 'token.pages.inc',
            4 => 'token.test',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'token',
          'datestamp' => '1317397307',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.0-beta6',
      ),
      'ux_elements' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/ux_elements/ux_elements.module',
        'basename' => 'ux_elements.module',
        'name' => 'ux_elements',
        'info' => 
        array (
          'name' => 'UX Elements',
          'description' => 'Adds more element types to those provided by Drupal core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'ux_elements.module',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'ux_elements',
          'datestamp' => '1296665600',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ux_elements',
        'version' => '7.x-1.0-beta1',
      ),
      'clone' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/node_clone/clone.module',
        'basename' => 'clone.module',
        'name' => 'clone',
        'info' => 
        array (
          'name' => 'Node clone',
          'description' => 'Allows users to clone (copy then edit) an existing node.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'clone.module',
            1 => 'clone.pages.inc',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'node_clone',
          'datestamp' => '1296525949',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_clone',
        'version' => '7.x-1.0-beta1',
      ),
      'devel_themer' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/contrib/devel_themer/devel_themer.module',
        'basename' => 'devel_themer.module',
        'name' => 'devel_themer',
        'info' => 
        array (
          'name' => 'Theme developer',
          'description' => 'Essential theme API information for theme developers',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'devel_themer.module',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'devel_themer',
          'datestamp' => '1315138343',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'devel_themer',
        'version' => '7.x-1.x-dev',
      ),
      'node_access_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/node_access_example/node_access_example.module',
        'basename' => 'node_access_example.module',
        'name' => 'node_access_example',
        'info' => 
        array (
          'name' => 'Node access example',
          'description' => 'Demonstrates how a module can use Drupal\'s node access system',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node_access_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'field_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/field_example/field_example.module',
        'basename' => 'field_example.module',
        'name' => 'field_example',
        'info' => 
        array (
          'name' => 'Field Example',
          'description' => 'A trivial implementation of a field to show the Field API',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'dbtng_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/dbtng_example/dbtng_example.module',
        'basename' => 'dbtng_example.module',
        'name' => 'dbtng_example',
        'info' => 
        array (
          'name' => 'DBTNG example',
          'description' => 'An example module showing how use the database API: DBTNG.',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dbtng_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'render_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/render_example/render_example.module',
        'basename' => 'render_example.module',
        'name' => 'render_example',
        'info' => 
        array (
          'name' => 'Render example',
          'description' => 'Demonstrates drupal_render\'s capabilities and altering render arrays',
          'package' => 'Example modules',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'render_example.css',
            ),
          ),
          'files' => 
          array (
            0 => 'render_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'trigger_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/trigger_example/trigger_example.module',
        'basename' => 'trigger_example.module',
        'name' => 'trigger_example',
        'info' => 
        array (
          'name' => 'Trigger example',
          'description' => 'An example showing how a module can provide triggers that can have actions associated with them.',
          'package' => 'Example modules',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'trigger',
          ),
          'files' => 
          array (
            0 => 'trigger_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'node_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/node_example/node_example.module',
        'basename' => 'node_example.module',
        'name' => 'node_example',
        'info' => 
        array (
          'name' => 'Node example',
          'description' => 'Demonstrates a custom content type and uses the field api.',
          'package' => 'Example modules',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'files' => 
          array (
            0 => 'node_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'ajax_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/ajax_example/ajax_example.module',
        'basename' => 'ajax_example.module',
        'name' => 'ajax_example',
        'info' => 
        array (
          'name' => 'AJAX Example',
          'description' => 'An example module showing how to use Drupal AJAX forms',
          'package' => 'Example modules',
          'core' => '7.x',
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'token_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/token_example/token_example.module',
        'basename' => 'token_example.module',
        'name' => 'token_example',
        'info' => 
        array (
          'name' => 'Token example',
          'description' => 'An example module showing how to define and use tokens.',
          'package' => 'Example modules',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'token_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'js_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/js_example/js_example.module',
        'basename' => 'js_example.module',
        'name' => 'js_example',
        'info' => 
        array (
          'name' => 'JS Example',
          'description' => 'An example module showing how to use some of the new JavaScript features in Drupal 7',
          'package' => 'Example modules',
          'core' => '7.x',
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'action_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/action_example/action_example.module',
        'basename' => 'action_example.module',
        'name' => 'action_example',
        'info' => 
        array (
          'name' => 'Action example',
          'description' => 'Demonstrates providing actions that can be associated to triggers.',
          'package' => 'Example modules',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'trigger',
          ),
          'files' => 
          array (
            0 => 'action_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'email_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/email_example/email_example.module',
        'basename' => 'email_example.module',
        'name' => 'email_example',
        'info' => 
        array (
          'name' => 'E-mail Example',
          'description' => 'Demonstrate Drupal\'s e-mail APIs.',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'email_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'vertical_tabs_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/vertical_tabs_example/vertical_tabs_example.module',
        'basename' => 'vertical_tabs_example.module',
        'name' => 'vertical_tabs_example',
        'info' => 
        array (
          'name' => 'Vertical tabs example',
          'description' => 'Show how to use vertical tabs for enhancing user experience.',
          'package' => 'Example modules',
          'core' => '7.x',
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'queue_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/queue_example/queue_example.module',
        'basename' => 'queue_example.module',
        'name' => 'queue_example',
        'info' => 
        array (
          'name' => 'Queue example',
          'description' => 'Examples of using the Drupal Queue API.',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'queue_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'filter_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/filter_example/filter_example.module',
        'basename' => 'filter_example.module',
        'name' => 'filter_example',
        'info' => 
        array (
          'name' => 'Filter example',
          'description' => 'An example module showing how to define a custom filter.',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'simpletest_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/simpletest_example/simpletest_example.module',
        'basename' => 'simpletest_example.module',
        'name' => 'simpletest_example',
        'info' => 
        array (
          'name' => 'Simpletest Example',
          'description' => 'Provides simpletest_example page node type.',
          'package' => 'Example modules',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'simpletest',
          ),
          'files' => 
          array (
            0 => 'simpletest_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'nodeapi_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/nodeapi_example/nodeapi_example.module',
        'basename' => 'nodeapi_example.module',
        'name' => 'nodeapi_example',
        'info' => 
        array (
          'name' => 'NodeAPI example',
          'description' => 'Demonstrates using the hook_node_* APIs (formerly hook_nodeapi) to alter a node from a different module.',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'nodeapi_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'menu_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/menu_example/menu_example.module',
        'basename' => 'menu_example.module',
        'name' => 'menu_example',
        'info' => 
        array (
          'name' => 'Menu example',
          'description' => 'An example of advanced uses of the menu APIs.',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'image_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/image_example/image_example.module',
        'basename' => 'image_example.module',
        'name' => 'image_example',
        'info' => 
        array (
          'name' => 'Image Example',
          'description' => 'Example implementation of image.module hooks.',
          'package' => 'Example modules',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'files' => 
          array (
            0 => 'image_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'page_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/page_example/page_example.module',
        'basename' => 'page_example.module',
        'name' => 'page_example',
        'info' => 
        array (
          'name' => 'Page example',
          'description' => 'An example module showing how to define a page to be displayed to the user at a given URL.',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'page_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'xmlrpc_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/xmlrpc_example/xmlrpc_example.module',
        'basename' => 'xmlrpc_example.module',
        'name' => 'xmlrpc_example',
        'info' => 
        array (
          'name' => 'XMLRPC example',
          'description' => 'This is an example of how to implement client and server communications using XML-RPC.',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'xmlrpc_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'file_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/file_example/file_example.module',
        'basename' => 'file_example.module',
        'name' => 'file_example',
        'info' => 
        array (
          'name' => 'File example',
          'description' => 'Examples of using the Drupal File API and Stream Wrappers.',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_example_session_streams.inc',
            1 => 'file_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'form_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/form_example/form_example.module',
        'basename' => 'form_example.module',
        'name' => 'form_example',
        'info' => 
        array (
          'name' => 'Form example',
          'description' => 'Examples of using the Drupal Form API.',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'form_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'batch_example' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/batch_example/batch_example.module',
        'basename' => 'batch_example.module',
        'name' => 'batch_example',
        'info' => 
        array (
          'name' => 'Batch example',
          'description' => 'An example outlining how a module can define batch operations.',
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'batch_example.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'examples',
          'datestamp' => '1306974049',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'examples',
        'version' => '7.x-1.x-dev',
      ),
      'batch_example (copy)' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/modules/devel/examples/batch_example/batch_example (copy).module',
        'basename' => 'batch_example (copy).module',
        'name' => 'batch_example (copy)',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
    ),
    'themes' => 
    array (
      'STARTERKIT' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/themes/albatross/STARTERKIT/STARTERKIT.info',
        'basename' => 'STARTERKIT.info',
        'name' => 'STARTERKIT Custom Theme',
        'info' => 
        array (
          'name' => 'STARTERKIT Custom Theme',
          'description' => 'By Albatross Digital',
          'screenshot' => 'images/screenshot.gif',
          'core' => '7.x',
          'project' => 'basic',
          'base theme' => 'albatross',
          'engine' => 'phptemplate',
          'regions' => 
          array (
            'page_top' => 'Page top',
            'header' => 'Header',
            'highlight' => 'Highlight',
            'help' => 'Help',
            'content' => 'Content',
            'content_top' => 'Content Top',
            'sidebar_first' => 'First sidebar',
            'sidebar_second' => 'Second sidebar',
            'content_bottom' => 'Content Bottom',
            'navigation' => 'Navigation bar',
            'footer' => 'Footer',
            'page_bottom' => 'Page bottom',
            'closure' => 'Closure',
          ),
          'layouts' => 
          array (
            'default' => 
            array (
              'name' => 'Default',
              'description' => 'Simple three column page.',
              'regions' => 
              array (
                0 => 'page_top',
                1 => 'header',
                2 => 'highlight',
                3 => 'help',
                4 => 'content',
                5 => 'content_top',
                6 => 'sidebar_first',
                7 => 'sidebar_second',
                8 => 'navigation',
                9 => 'footer',
                10 => 'page_bottom',
                11 => 'closure',
              ),
            ),
            '2_col_left' => 
            array (
              'template' => '../../../all/themes/albatross/templates/page',
              'name' => '2_col_left',
              'description' => 'Simple two column page, displays left (first) sidebar only.',
              'regions' => 
              array (
                0 => 'page_top',
                1 => 'header',
                2 => 'highlight',
                3 => 'help',
                4 => 'content',
                5 => 'content_top',
                6 => 'sidebar_first',
                7 => 'navigation',
                8 => 'footer',
                9 => 'page_bottom',
                10 => 'closure',
              ),
            ),
            '2_col_right' => 
            array (
              'name' => '2_col_right',
              'description' => 'Simple two column page, displays right (second) sidebar only.',
              'regions' => 
              array (
                0 => 'page_top',
                1 => 'header',
                2 => 'highlight',
                3 => 'help',
                4 => 'content',
                5 => 'content_top',
                6 => 'sidebar_second',
                7 => 'navigation',
                8 => 'footer',
                9 => 'page_bottom',
                10 => 'closure',
              ),
            ),
            '1_column' => 
            array (
              'name' => '1_column',
              'description' => 'Simple 1 column page.',
              'regions' => 
              array (
                0 => 'page_top',
                1 => 'header',
                2 => 'highlight',
                3 => 'help',
                4 => 'content',
                5 => 'content_top',
                6 => 'navigation',
                7 => 'footer',
                8 => 'page_bottom',
                9 => 'closure',
              ),
            ),
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'search',
            6 => 'favicon',
            7 => 'main_menu',
            8 => 'secondary_menu',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/page.css',
              3 => 'css/page-specific.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/script.js',
          ),
          'settings' => 
          array (
            'toggle_main_menu' => '0',
            'toggle_secondary_menu' => '0',
            'STARTERKIT_tabs' => '0',
            'STARTERKIT_breadcrumb_separator' => '»',
            'wireframe_mode' => '0',
            'clear_registry' => '0',
          ),
          'version' => NULL,
        ),
        'project' => 'basic',
        'version' => NULL,
      ),
      'albatross' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/themes/albatross/albatross.info',
        'basename' => 'albatross.info',
        'name' => 'Albatross Base Theme',
        'info' => 
        array (
          'name' => 'Albatross Base Theme',
          'description' => 'Sets up some default theme styles for Albatross Digital',
          'screenshot' => 'images/screenshot.gif',
          'core' => '7.x',
          'project' => 'basic',
          'engine' => 'phptemplate',
          'regions' => 
          array (
            'page_top' => 'Page top',
            'header' => 'Header',
            'highlight' => 'Highlight',
            'help' => 'Help',
            'content' => 'Content',
            'content_top' => 'Content Top',
            'sidebar_first' => 'First sidebar',
            'sidebar_second' => 'Second sidebar',
            'navigation' => 'Navigation bar',
            'footer' => 'Footer',
            'page_bottom' => 'Page bottom',
            'closure' => 'Closure',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'search',
            6 => 'favicon',
            7 => 'main_menu',
            8 => 'secondary_menu',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/default.css',
              1 => 'css/layout.css',
              2 => 'css/style.css',
              3 => 'css/albatross.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
              1 => 'css/tabs.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/albatross.js',
          ),
          'settings' => 
          array (
            'basic_breadcrumb_separator' => '»',
            'wireframe_mode' => '0',
            'clear_registry' => '0',
          ),
          'version' => '7.x-2.0-rc3',
          'datestamp' => '1297878443',
        ),
        'project' => 'basic',
        'version' => '7.x-2.0-rc3',
      ),
      'zen' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/themes/zen/zen.info',
        'basename' => 'zen.info',
        'name' => 'Zen',
        'info' => 
        array (
          'name' => 'Zen',
          'description' => 'Zen sub-themes are the ultimate starting themes for Drupal 7. Read the <a href="http://drupal.org/node/226507">online docs</a> or the included README-FIRST.txt on how to create a sub-theme.',
          'screenshot' => 'zen-internals/screenshot.png',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'regions' => 
          array (
            'help' => 'Help',
            'sidebar_first' => 'First sidebar',
            'sidebar_second' => 'Second sidebar',
            'navigation' => 'Navigation bar',
            'highlight' => 'Highlighted content',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'bottom' => 'Page bottom',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'settings' => 
          array (
            'zen_breadcrumb' => 'yes',
            'zen_breadcrumb_separator' => ' › ',
            'zen_breadcrumb_home' => '1',
            'zen_breadcrumb_trailing' => '1',
            'zen_breadcrumb_title' => '0',
            'zen_layout' => 'zen-columns-liquid',
            'zen_rebuild_registry' => '0',
            'zen_wireframes' => '0',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'zen',
          'datestamp' => '1291379226',
        ),
        'project' => 'zen',
        'version' => '7.x-3.x-dev',
      ),
      'albatross_admin_custom' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/themes/albatross_admin/albatross_admin_custom/albatross_admin_custom.info',
        'basename' => 'albatross_admin_custom.info',
        'name' => 'Albatross Admin Custom',
        'info' => 
        array (
          'name' => 'Albatross Admin Custom',
          'description' => 'Site-specific customizations to the Albatross Digital Back-end Theme.',
          'base theme' => 'albatross_admin',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'css/albatross-admin-custom.css',
            ),
          ),
          'version' => NULL,
        ),
        'project' => '',
        'version' => NULL,
      ),
      'albatross_admin' => 
      array (
        'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/sites/all/themes/albatross_admin/albatross_admin.info',
        'basename' => 'albatross_admin.info',
        'name' => 'Albatross Admin',
        'info' => 
        array (
          'name' => 'Albatross Admin',
          'description' => 'The Albatross Digital Back-end Theme.',
          'base theme' => 'seven',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'albatross-admin.css',
            ),
          ),
          'version' => NULL,
        ),
        'project' => '',
        'version' => NULL,
      ),
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'testing' => 
    array (
      'modules' => 
      array (
        'drupal_system_listing_compatible_test' => 
        array (
          'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/profiles/testing/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
          'basename' => 'drupal_system_listing_compatible_test.module',
          'name' => 'drupal_system_listing_compatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing compatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.21',
            'core' => '7.x',
            'hidden' => true,
            'files' => 
            array (
              0 => 'drupal_system_listing_compatible_test.test',
            ),
            'project' => 'drupal',
            'datestamp' => '1362616996',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.21',
        ),
        'drupal_system_listing_incompatible_test' => 
        array (
          'filename' => '/data/disk/v4709507421/static/platforms/drupal-7.8/profiles/testing/modules/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
          'basename' => 'drupal_system_listing_incompatible_test.module',
          'name' => 'drupal_system_listing_incompatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing incompatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.21',
            'core' => '6.x',
            'hidden' => true,
            'project' => 'drupal',
            'datestamp' => '1362616996',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.21',
        ),
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);