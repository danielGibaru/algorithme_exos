class Exo8
    def self.triangle(hauteur, char)
        for i in 0..hauteur-2
            for j in 0..i+1
                print char[0] + " "
            end
            print "\n"
        end
    end

    def self.main()
        puts "Veuillez entrer la hauteur du triangle : "
        h = Integer(gets.chomp)
        
        puts "Veuillez entrer le caractere a afficher :  "
        c = gets.chomp
    
        triangle(h,c)
    end
end
        
Exo8.main()