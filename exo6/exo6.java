import java.util.*;

public class exo6 {
    private static void perroquet() {
        Scanner reader = new Scanner(System.in);
        
        String input = "";
        System.out.println("Veuillez ecrire quelque chose \n");
        if (reader.hasNext()) {
            input = reader.next();
        }
        
        System.out.println("Vous avez ecrit : " + input);

        boolean actionValide = false;
        while(!actionValide) {
            System.out.println("Voulez vous quitter ? o/n");
        
            String action = "n";
            if (reader.hasNext()) {
                action = reader.next();
            }
    
            if (action.startsWith("o") || action.startsWith("O")) {
                return;
            }
            else if (action.startsWith("n") || action.startsWith("N")){
                actionValide = true;
            }
            else {
                System.out.println("Veuillez entrer une réponse valide");
            }
        }
        
        System.out.println();
        perroquet();
    }
    
    public static void main(String[] args) {
        perroquet();
    }
}