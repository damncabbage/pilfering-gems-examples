module SillyPrint
  module Printers
    class Elephant < Base

      def format(message)
        <<ASCII
#{message}
     \\     /\\  ___  /\\
      \\   // \\/   \\/ \\\\
         ((    O O    ))
          \\\\ /     \\ //
           \\/  | |  \\/
            |  | |  |
            |  | |  |
            |   o   |
            | |   | |
            |m|   |m|

ASCII
      end

    end
  end
end
