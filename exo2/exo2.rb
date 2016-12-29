def sort(tableau, croissant = true)
    proceder = true
    
    while proceder
        proceder = false
        
        i = 0
        while i < tableau.length-1
            if (croissant == true and tableau[i+1] < tableau[i]) or (croissant == false and tableau[i+1] > tableau[i])
                tmp = tableau[i];
                tableau[i] = tableau[i+1];
                tableau[i+1] = tmp;
                proceder = true;
            end
            i += 1
        end
    end  
    return tableau
end         

tableau = [12,654,81,55,34,1516,489,13,99,79,642,125]
print(sort(tableau, false))
puts ''