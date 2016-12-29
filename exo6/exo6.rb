class Exo6
    def self.perroquet()
        puts "Veuillez ecrire quelque chose\n"
        ipt = gets.chomp
        puts "Vous avez ecrit : " + ipt + "\n"
        
        actionValide = false
        while(actionValide == false)
            puts "Voulez vous quitter ? o/n : "
            action = gets.chomp
            if (action == "o" or action == "O")
                return
            elsif (action == "n" or action == "N")
                actionValide = true
            else
                print("Veuillez entrer une reponse valide\n")
            end
        end
        
        print("\n")
        perroquet()
    end

    def self.main()
        perroquet()
    end
end
Exo6.perroquet()