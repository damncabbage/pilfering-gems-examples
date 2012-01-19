module SillyPrint
  module Printers
    class Base
      def print_message(message)
        puts format(message)
      end

      def format(message)
        raise "Not Defined"
      end
    end
  end
end
