import java.util.*;

class exo3 {
    private static int find(String str, char ltr){
        int count = 0;
        for (int i = 0; i < str.length(); i++) {
            if(str.charAt(i) == ltr) count++;
        }
        
        return count;
    }
    
    public static void main(String[] args) {
        Scanner reader = new Scanner(System.in);
        
        System.out.print("Veuillez entrer un mot : ");
        String mot = "";
        if (reader.hasNext()) {
            mot = reader.next();
        }
        
        
        System.out.print("Veuillez entrer la lettre à compter : ");
        char lettre = ' ';
        if (reader.hasNext()) {
            lettre = reader.next().charAt(0);
        }

        System.out.print("La lettre " + lettre + " est presente " +
                         find(mot, lettre) + " fois dabs le mot " + mot + "\n");
    }
}
