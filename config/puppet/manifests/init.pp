include utils::install, mysql::install, apache2::install, php5::install

exec { 'apt_update':
  command => 'apt-get update',
  path    => '/usr/bin'
}

file { "/home/ninjascript":
  ensure => "directory"
}

file { "/home/ninjascript/eight-arms.com":
  ensure  => "link",
  target  => "/var/src/app",
  require => File["/home/ninjascript"]
}

Exec['apt_update'] -> File['/home/ninjascript'] -> File['/home/ninjascript/eight-arms.com'] -> Class['utils::install'] -> Class['mysql::install'] -> Class['php5::install'] -> Class['apache2::install']