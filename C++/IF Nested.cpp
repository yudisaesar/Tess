//for nested (looping bersarang)
#include <stdio.h>
#include <conio.h>
void main()
{	int i,j,hsl;
   for (i=1;i<=10;i++)
   {
   for (j=1;j<=5;j++)
   {hsl=i*j;printf(" %2.0i x %2.0i = %2.0i",i,j,hsl);}
   printf("\n");
   }
   getche ();
}