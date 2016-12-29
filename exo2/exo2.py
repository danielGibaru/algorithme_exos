def sort(tableau, croissant = True):
    loops = 0
    proceder = True
    
    while proceder:
        proceder = False
        
        i = 0
        while i < len(tableau)-1:
            if (croissant == True and tableau[i+1] < tableau[i]) or (croissant == False and tableau[i+1] > tableau[i]):
                tmp = tableau[i]
                tableau[i] = tableau[i+1]
                tableau[i+1] = tmp
                proceder = True
                
            i += 1
            loops += 1
    return loops;

tableau = [12,654,81,55,34,1516,489,13,99,79,642,125]
sort(tableau, False)
print tableau