class exo3:
    @staticmethod
    def find(mot, lettre):
        count = 0
        for i in range(0, len(mot)):
            if (mot[i] == lettre):
                count += 1
        return count
    
    @staticmethod
    def main():
        mot = raw_input("Veuillez entrer un mot : ")
        lettre = raw_input("Veuillez entrer la lettre a compter :  ")

        print "La lettre {0} est presente {1} fois dans le mot {2}".format(lettre,exo3.find(mot, lettre),mot)
    
exo3.main()