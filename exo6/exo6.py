class exo6:
    @staticmethod
    def perroquet():
        ipt = raw_input("Veuillez ecrire quelque chose\n")
        print("Vous avez ecrit : " + ipt + "\n")
        
        actionValide = False
        while(actionValide == False):
            action = raw_input("Voulez vous quitter ? o/n : ")
            if (action == "o" or action == "O"):
                return
            elif (action == "n" or action == "N"):
                actionValide = True
            else:
                print("Veuillez entrer une reponse valide\n")
        
        print("\n");
        exo6.perroquet()
    
    @staticmethod
    def main():
        exo6.perroquet()

exo6.perroquet()