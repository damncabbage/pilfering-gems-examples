module SillyPrint
  def self.print_message(message, printer=:cow)
    # Grab a reference to SillyPrint::Printers::Cow (or whatever printer points at)
    name = printer_name(printer)
    raise "Invalid printer" unless Printers.const_defined?(name)
    printer_class = Printers.const_get(name)

    # Spit it out
    printer_class.new.print_message(message)
  end

  protected

  def self.printer_name(sym)
    str = sym.to_s.gsub(/(?:^|_)(.)/) { $1.upcase }
  end

end
