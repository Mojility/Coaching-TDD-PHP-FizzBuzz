Vagrant.configure(2) do |config|

  config.vm.box = "ubuntu/trusty64"

  config.vm.synced_folder ".", "/code"

  config.berkshelf.enabled = true

  config.vm.provision "chef_solo" do |chef|
    chef.add_recipe "CookbookPHPKata"
  end

end
