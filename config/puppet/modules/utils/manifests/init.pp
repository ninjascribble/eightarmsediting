class utils::install {
    package { 'curl': ensure => installed }
    package { 'vim': ensure => installed }
    package { 'g++': ensure => installed }
}