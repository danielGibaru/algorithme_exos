import java.util.*;

public class exo8 {
    private static void triangle(int hauteur, char c) {
        for (int i = 0; i < hauteur; i++) {
            for (int j = 0; j <= i; j++) {
                System.out.print(c + " ");
            }
            System.out.print("\n");
        }
    }
    
    public static void main(String[] args) {
        Scanner reader = new Scanner(System.in);
        
        int h = 5;
        System.out.println("Veuillez entrer la hauteur du triangle : \n");
        if (reader.hasNextInt()) {
            h = reader.nextInt();
        }
        
        char c = ' ';
        System.out.println("Veuillez entrer le caractère à afficher :  \n");
        if (reader.hasNext()) {
            c = reader.next().charAt(0);
        }
        
        reader.close();
        System.out.println("\n");
        
        triangle(h, c);
    }
}