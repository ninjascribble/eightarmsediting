# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  
  config.vm.box = "precise64"
  config.vm.box_url = "http://cloud-images.ubuntu.com/vagrant/precise/current/precise-server-cloudimg-amd64-vagrant-disk1.box"

  config.vm.network :forwarded_port, guest: 80, host: 8081
  config.vm.synced_folder "", "/vagrant", disabled: true
  config.vm.synced_folder "", "/var/src"

  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "config/puppet/manifests"
    puppet.module_path = "config/puppet/modules"
    puppet.manifest_file  = "init.pp"
    puppet.options="--verbose --debug"
  end
end