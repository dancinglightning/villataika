require 'capybara/rspec'
#Capybara::Screenshot.prune_strategy = :keep_last_run

#require 'capybara/poltergeist'
#Capybara.javascript_driver = :poltergeist

Capybara.default_selector = :css

RSpec.configure do |config|

  config.include Capybara::DSL

end
