class Exo3
    def self.find(mot, lettre)
        count = 0
        for i in 0..mot.length
            if (mot[i] == lettre)
                count += 1
            end
        end
        return count
    end
    
    def self.main()
        
        print "Veuillez entrer un mot : "
        mot = gets.chomp
        
        print "Veuillez entrer la lettre a compter : "
        lettre = gets.chomp

        print "La lettre " + lettre + " est presente " + Exo3.find(mot, lettre).to_s + " fois dans le mot " + mot + "\n"
    end
end

Exo3.main()