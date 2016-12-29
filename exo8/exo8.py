class exo8:
    @staticmethod
    def triangle(hauteur, char):
        for i in range(0,hauteur):
            for j in range(0, i+1):
                print char[0],
            print
    
    @staticmethod       
    def main():
        h = 5   
        try:
            h = int(input("Veuillez entrer la hauteur du triangle : "))
        except ValueError:
            print("\tTaille invalide, utilisation de la valeur par defaut : 5")

        c = raw_input("Veuillez entrer le caractere a afficher : ")
        
        exo8.triangle(h,c)
        
exo8.main()