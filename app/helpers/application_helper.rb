module ApplicationHelper  
  
  def photos
    dir "photos"
  end
  
  def activities
    dir "activities"
  end

  def news
    dir "news"
  end
  
  def dir name
    I18n.t("#{name}.all" , :locale => :en ).split(",").collect do |n| n.strip end
  end
end
