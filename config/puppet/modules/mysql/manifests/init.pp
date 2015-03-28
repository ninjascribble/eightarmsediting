#Install MySQL

class mysql::install {

  package { [
      'mysql-client',
      'mysql-server',
      'libmysqlclient-dev'
    ]:
    ensure => installed,
  }

  exec { 'set-mysql-password':
    subscribe   => [
      Package['mysql-server'],
      Package['mysql-client'],
    ],
    refreshonly => true,
    unless      => "mysqladmin -uroot -padmin status",
    path        => '/bin:/usr/bin',
    command     => "mysqladmin -uroot password admin",
  }

  file { '/tmp/db.sql':
    source  => 'puppet:///modules/mysql/db.sql'
  }

  exec { 'populate-mysql-db':
    unless  => "mysql -uroot -padmin -e 'show databases;' | grep eight_arms_com_2",
    command => "mysql -uroot -padmin < /tmp/data.sql",
    path    => ['/bin', '/usr/bin'],
    require => [
      Exec['set-mysql-password'],
      File['/tmp/db.sql']
    ];
  }

}
