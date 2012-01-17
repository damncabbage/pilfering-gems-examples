require 'spec_helper'
require 'timecop'

describe Competition do
  let (:day) { 86400 }
  let!(:competition) do
    # Opens a day from now, closes a day after that.
    Competition.new(:open => Time.now + day, :close => Time.now + day*2)
  end

  it "should reject early entries" do
    entry = competition.enter(:name => "Bert")
    entry.valid?.should == false
    entry.errors.should include("Too early!")
  end

  it "should accept timely entries" do
    # A day and a half from now.
    Timecop.freeze(Time.now + day*1.5) do
      entry = competition.enter(:name => "Sam")
      entry.valid?.should == true
    end
  end

  it "should reject late entries" do
    # Three days from now, after competition closure.
    Timecop.freeze(Time.now + day*3) do
      entry = competition.enter(:name => "Frank")
      entry.valid?.should == false
      entry.errors.should include("Too late!")
    end
  end
end

