class Entry
  attr_accessor :errors, :details
  attr_reader :entered_at

  def initialize(valid, details={}, errors=[], entered_at=Time.now)
    @entered_at  = entered_at
    @valid       = !!valid
    self.details = details
    self.errors  = errors
  end

  def valid?
    @valid
  end
end
