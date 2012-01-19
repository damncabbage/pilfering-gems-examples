module SillyPrint
  module Printers
    class Cow < Base

      def format(message)
        <<ASCII
#{message}
      \\   ^__^
       \\  (oo)\\_______
          (__)\\       )\\/\\
              ||----w |
              ||     ||

ASCII
      end

    end
  end
end
