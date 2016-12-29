public class exo2 {
    
    public static int sort(int[] tableau, boolean croissant)
    {
       int loops = 0;
       boolean proceed = true;
       while (proceed)
       {
           proceed = false;
           for (int i = 0; i < tableau.length-1; i++)
           {
               if ((croissant && tableau[i+1] < tableau[i]) ||
                   (!croissant && tableau[i+1] > tableau[i]) )
               {
                   int tmp = tableau[i];
                   tableau[i] = tableau[i+1];
                   tableau[i+1] = tmp;
                   proceed = true;
               }
               loops++;
           }
       } 
       return loops;
   } 
   
   public static void main(String[] args)
   {
      int[] tableau = { 12,654,81,55,34,1516,489,13,99,79,642,125 };
      
      sort(tableau, false);
     
      for(int i = 0; i < tableau.length; i++) {
        System.out.print(tableau[i] + ", ");
      }
      
      System.out.print("\n");
   }
}
