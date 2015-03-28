# Install Apache

class apache2::install {

  package { [
    'apache2',
    'libapache2-mod-php5'
  ]:
  ensure => installed,
  }

  service { 'apache2':
    ensure  => running,
    require => [Package['apache2'], Package['libapache2-mod-php5']],
  }

  file { '/etc/apache2/sites-available/default':
    ensure  => file,
    owner   => 'root',
    group   => 'root',
    mode    => '0644',
    source  => 'puppet:///modules/apache2/etc/apache2/sites-available/default',
    require => Package['apache2'],
    notify  => Service['apache2']
  }

  file { '/etc/apache2/mods-available/rewrite.load':
    ensure  => file,
    owner   => 'root',
    group   => 'root',
    mode    => '0644',
    source  => 'puppet:///modules/apache2/etc/apache2/mods-available/rewrite.load',
    require => Package['apache2'],
    notify  => Service['apache2']
  }

  file { '/etc/apache2/mods-enabled/rewrite.load':
    ensure  => link,
    target  => '/etc/apache2/mods-available/rewrite.load',
    require => Package['apache2'],
    notify  => Service['apache2'],
  }

}
