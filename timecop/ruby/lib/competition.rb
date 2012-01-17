class Competition
  attr_reader :open, :close, :entries

  def initialize(options={})
    @entries = []
    @open  = options[:open] || Time.now
    @close = options[:close] || Time.now
    raise "Competition closes before it opens" if close < open
  end

  def enter(details)
    entered_at = Time.now
    valid = timely?(entered_at)

    errors = []
    errors << "Too early!" if too_early?(entered_at)
    errors << "Too late!" if too_late?(entered_at)

    entry = Entry.new(valid, details, errors, entered_at)
    @entries << entry if valid

    entry
  end

  def timely?(time=Time.now)
    !too_early?(time) && !too_late?(time)
  end

  def too_early?(time=Time.now)
    time < open
  end

  def too_late?(time=Time.now)
    time > close
  end

end
