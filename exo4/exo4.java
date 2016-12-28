import java.util.*; 

public class exo4 {
    private static void pascal(int hauteur, int max) {
        if (hauteur > 20) hauteur = 20;
        
        int[][] pascal = new int[hauteur+1][hauteur+1];
            
        for (int i = 1; i <= hauteur; i++) {
            pascal[i][0] = 1;
            System.out.print("1 ");
            
            boolean isMax = false;
            for (int j = 1; j < i; j++) {
                
                pascal[i][j] = pascal[i-1][j-1] + pascal[i-1][j];
                
                System.out.print(pascal[i][j] + " ");
                
                if (pascal[i][j] >= max && max > 0)
					isMax = true;
            }
            
            System.out.print("\n");
			
			if (isMax)
				break;
        }
    }
    
    private static void pascal(int hauteur) {
        pascal(hauteur,0);
    }
    
    private static void pascal() {
        pascal(5,0);
    }
    
    public static void main(String[] args) {
        Scanner reader = new Scanner(System.in);
        
        System.out.println("Nombre de lignes max : ");
        int l = 5;
        if (reader.hasNextInt()) {
            l = reader.nextInt();
        }
        
        System.out.println("Valeur max : ");
        int m = 0;
        if (reader.hasNextInt()) {
            m = reader.nextInt();
        }
        
        reader.close();
        System.out.println("\n");
        
        pascal(l, m);
    }
}